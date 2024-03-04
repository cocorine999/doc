<?php

declare(strict_types=1);

use Core\Utils\Traits\Database\Migrations\CanDeleteTrait;
use Core\Utils\Traits\Database\Migrations\HasCompositeKey;
use Core\Utils\Traits\Database\Migrations\HasForeignKey;
use Core\Utils\Traits\Database\Migrations\HasTimestampsAndSoftDeletes;
use Core\Utils\Traits\Database\Migrations\HasUuidPrimaryKey;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Class ***`CreateRoleHasPermissionsTable`***
 *
 * A migration class for creating the "role_has_permissions" table with UUID primary key and timestamps.
 *
 * @package ***`\Database\Migrations\CreateRoleHasPermissionsTable`***
 */
class CreateRoleHasPermissionsTable extends Migration
{
    use CanDeleteTrait, HasCompositeKey, HasForeignKey, HasTimestampsAndSoftDeletes, HasUuidPrimaryKey;
    
    /**
     * Run the migrations.
     * 
     * @return void
     * 
     * @throws \Core\Utils\Exceptions\DatabaseMigrationException If the migration fails.
     */
    public function up(): void
    {
        // Begin the database transaction
        DB::beginTransaction();

        try {

            Schema::create('role_has_permissions', function (Blueprint $table) {
                // Define a UUID primary key for the 'role_has_permissions' table
                $this->uuidPrimaryKey($table);

                // Define a foreign key for 'role_id', referencing the 'roles' table
                $this->foreignKey(
                    table: $table,          // The table where the foreign key is being added
                    column: 'role_id',   // The column to which the foreign key is added ('role_id' in this case)
                    references: 'roles',    // The referenced table (roles) to establish the foreign key relationship
                    onDelete: 'cascade',    // Action to perform when the referenced record is deleted (cascade deletion)
                    nullable: false          // Specify whether the foreign key column can be nullable (false means it not allows to be NULL)
                );

                // Define a foreign key for 'permission_id', referencing the 'permissions' table
                $this->foreignKey(
                    table: $table,          // The table where the foreign key is being added
                    column: 'permission_id',   // The column to which the foreign key is added ('permission_id' in this case)
                    references: 'permissions',    // The referenced table (permissions) to establish the foreign key relationship
                    onDelete: 'cascade',    // Action to perform when the referenced record is deleted (cascade deletion)
                    nullable: false          // Specify whether the foreign key column can be nullable (false means it not allows to be NULL)
                );

                // Add a boolean column 'status' to the table
                $table->boolean('status')
                    ->default(TRUE) // Set the default value to TRUE
                    ->comment('Record status: 
                            - TRUE: Active record or soft delete record
                            - FALSE: permanently Deleted and can be archived in another datastore'
                        ); // Describe the meaning of the 'status' column
                
                // Add a boolean column 'can_be_delete' with default value false
                $this->addCanDeleteColumn(table: $table, column_name: 'can_be_detach', can_be_delete: false);

                // Create a composite index for efficient searching on the combination of role_id, permission_id, status and can_be_detach
                $this->compositeKeys(table: $table, keys: ['role_id', 'permission_id', 'status', 'can_be_detach']);              

                // Add timestamp and soft delete columns to the table
                $this->addTimestampsAndSoftDeletesColumns($table);
            });

            // Commit the transaction
            DB::commit();
        } catch (\Throwable $exception) {
            // Rollback the transaction in case of an exception
            DB::rollBack();

            // Handle the exception (e.g., logging, notification, etc.)
            throw new \Core\Utils\Exceptions\DatabaseMigrationException(
                message: 'Failed to migrate "role_has_permissions" table: ' . $exception->getMessage(),
                previous: $exception
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
     * @throws \Core\Utils\Exceptions\DatabaseMigrationException If the migration fails.
     */
    public function down(): void
    {
        // Begin the database transaction
        DB::beginTransaction();

        try {
            // Drop the "role_has_permissions" table if it exists
            Schema::dropIfExists('role_has_permissions');

            // Commit the transaction
            DB::commit();
        } catch (\Throwable $exception) {
            // Rollback the transaction in case of an exception
            DB::rollBack();

            // Handle the exception (e.g., logging, notification, etc.)
            throw new \Core\Utils\Exceptions\DatabaseMigrationException(
                message: 'Failed to drop "role_has_permissions" table: ' . $exception->getMessage(),
                previous: $exception
            );
        }
    }
}