<?php

declare(strict_types=1);

namespace Core\Utils\Traits\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;

/**
 * Trait HasMatricule
 *
 * @package Core\Utils\Traits\Database\Migrations
 */
trait HasMatricule
{
    /**
     * Add a matricule column to the table.
     *
     * @param  \Illuminate\Database\Schema\Blueprint $table
     * @param  string|null $columnName
     * @return void
     */
    protected function addMatriculeColumn(Blueprint $table, ?string $columnName = 'matricule', string $afterColumnName = 'id'): void
    {
        $table->string($columnName)->unique()->after($afterColumnName);
    }
}
