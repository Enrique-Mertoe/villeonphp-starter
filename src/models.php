<?php

namespace App\Models;

use Villeon\Database\VilleonSQL\DataTypes\DataTypes;
use Villeon\Database\VilleonSQL\Model;

/**
 * This file defines the data model for the "users" table in the database.
 *
 * The model is used to abstract the database table structure and provide a
 * programmatic interface for interacting with the table.
 */

/**
 * Define the "users" table using the Model class.
 * The `Model::define` method specifies the table name and its schema, including
 * the column names, data types, and constraints.
 */
$User = Model::define("users", [
    /**
     * The "uid" column:
     * - `type`: STRING() - Represents a variable-length string.
     * - `allowNull`: false - This column is mandatory and cannot be null.
     * - `unique`: true - Ensures that all values in this column are unique.
     */
    "uid" => [
        "type" => DataTypes::STRING(),
        "allowNull" => false,
        "unique" => true
    ],

    /**
     * The "email" column:
     * - `type`: STRING() - Represents a variable-length string.
     * - `unique`: true - Ensures that all email addresses are unique in the table.
     */
    "email" => [
        "unique" => true,
        "type" => DataTypes::STRING()
    ],
    "is_active" => [
        "type" => DataTypes::BOOL,
        "default" => false
    ]
]);

/**
 * This `$User` model is now ready for use in your application.
 * Example usage:
 * - Create a new user: `$User->create(['uid' => '12345', 'email' => 'example@example.com']);`
 * - Query users: `$User->findAll();`
 * - Update a user: `$User->update(['email' => 'new@example.com'], ['uid' => '12345']);`
 */
