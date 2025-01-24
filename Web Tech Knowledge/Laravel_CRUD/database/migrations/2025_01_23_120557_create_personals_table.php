<?php

// Import necessary classes for migrations and schema management
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Define a new migration class
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method is called when the migration is applied (e.g., using `php artisan migrate`).
     * It defines the structure of the database table being created.
     */
    public function up(): void
    {
        // Create a new table named 'personals'
        Schema::create('personals', function (Blueprint $table) {
            // Add an auto-incrementing primary key column named 'id'
            $table->id();

            // Add a 'name' column to store names (nullable, meaning it can be empty)
            $table->string('name')->nullable();

            // Add an 'email' column to store email addresses (nullable)
            $table->string('email')->nullable();

            // Add a 'file' column to store file paths or filenames (nullable)
            $table->string('file')->nullable();

            // Add 'created_at' and 'updated_at' timestamp columns to track record creation and updates
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method is called when the migration is rolled back (e.g., using `php artisan migrate:rollback`).
     * It undoes the changes made by the `up` method.
     */
    public function down(): void
    {
        // Drop the 'personals' table if it exists
        Schema::dropIfExists('personals');
    }
};