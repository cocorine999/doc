<?php

declare(strict_types=1);

namespace Core\Utils\Traits\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;


/**
 * Trait HasTimestampsAndSoftDeletes
 *
 * This trait combines the functionality of adding timestamps and soft deletes columns to a table.
 * It uses the HasTimestamps and HasSoftDeletes traits.
 *
 * @package Core\Utils\Traits\Database\Migrations
 */
trait HasTimestampsAndSoftDeletes
{
    use HasTimestamps;

    /**
     * Add the timestamps and soft deletes columns to the table.
     *
     * @param \Illuminate\Database\Schema\Blueprint $table
     * @return void
     */
    public function addTimestampsAndSoftDeletesColumns(Blueprint $table)
    {
        // Add timestamp columns for record creation and last update, using current timestamp values
        $this->addTimestampsColumns($table);

        // Add a soft delete column to the table to handle soft deletes
        $table->softDeletes()
            ->comment('Soft delete column for marking records as deleted without permanent removal');

    }
}
