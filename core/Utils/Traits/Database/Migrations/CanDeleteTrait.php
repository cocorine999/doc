<?php

declare(strict_types=1);

namespace Core\Utils\Traits\Database\Migrations;


/**
 * Trait ***`CanDeleteTrait`***
 *
 * This trait provides a method to add the `can_be_delete` column to a database table.
 *
 * @package ***`Core\Utils\Traits\Database\Migrations`***
 */
trait CanDeleteTrait
{
    /**
     * Add a boolean column to the table indicating whether the record can be deleted.
     *
     * @param \Illuminate\Database\Schema\Blueprint $table The table to which the column is added
     * @param string $column_name The name of the boolean column (default: 'can_be_delete')
     * @param bool $can_be_delete The default value for the boolean column (default: true)
     * 
     * @return void
     */
    protected function addCanDeleteColumn(
        \Illuminate\Database\Schema\Blueprint $table,
        string $column_name = 'can_be_delete',
        bool $can_be_delete = true
    ): void  {
        // Define a boolean column in the table
        $table->boolean($column_name)
            ->default($can_be_delete)
            ->comment('Flag indicating whether the record can be deleted');
    }
}