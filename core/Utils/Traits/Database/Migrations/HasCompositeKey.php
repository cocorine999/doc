<?php

declare(strict_types=1);

namespace Core\Utils\Traits\Database\Migrations;


/**
 * Trait ***`HasCompositeKey`***
 *
 * This trait provides a convenient method to add a composite index constraint to a table.
 *
 * Example Usage:
 *
 * ```php
 * use Core\Utils\Traits\Database\Migrations\HasCompositeKey;
 * use Illuminate\Database\Migrations\Migration;
 * use Illuminate\Database\Schema\Blueprint;
 * use Illuminate\Support\Facades\Schema;
 *
 * class HasCompositeKey extends Migration
 * {
 *     use HasCompositeKey;
 *
 *     public function up()
 *     {
 *         Schema::table('table_name', function (Blueprint $table) {
 *             $table->index($keys)->after($afterColumnName);
 *         });
 *     }
 *
 *     // ...
 * }
 * ```
 *
 * @package ***`\Core\Utils\Traits\Database\Migrations`***
 */
trait HasCompositeKey
{
    /**
     * Add a composite index column to the table.
     *
     * @param  \Illuminate\Database\Schema\Blueprint $table The table to which the composite index is added
     * @param  array $keys An array of column names to be included in the composite index
     * @param  string $afterColumnName The column after which the composite index is added (default: 'id')
     * 
     * @return void
     */
    protected function compositeKeys(
        \Illuminate\Database\Schema\Blueprint $table,
        array $keys = ['status', 'can_be_delete'],
        string $afterColumnName = 'id'
    ): void {
        // Create a composite index using the specified column names
        $table->index($keys)->after($afterColumnName);
    }
}
