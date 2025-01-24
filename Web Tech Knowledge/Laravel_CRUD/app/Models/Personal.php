<?php

// Define the namespace for the model
namespace App\Models;

// Import the base Model class from Eloquent
use Illuminate\Database\Eloquent\Model;

/**
 * Class Personal
 *
 * This model represents the "personal" table in the database.
 * It extends the Eloquent Model class to provide database interaction capabilities.
 */
class Personal extends Model
{
    // The $table property specifies the database table associated with this model.
    // If not specified, Laravel assumes the table name is the plural form of the model name (e.g., "personals").
    // protected $table = 'personal';

    // The $primaryKey property specifies the primary key column of the table.
    // By default, Eloquent assumes the primary key is named "id".
    // protected $primaryKey = 'id';

    // The $fillable property specifies which attributes can be mass-assigned.
    // This is a security feature to prevent mass-assignment vulnerabilities.
    // Example:
    // protected $fillable = ['name', 'email', 'file'];

    // The $guarded property is the inverse of $fillable.
    // It specifies which attributes cannot be mass-assigned.
    // If $guarded is set to an empty array, all attributes are mass-assignable.
    // Example:
    // protected $guarded = [];

    // The $timestamps property specifies whether the model should automatically manage "created_at" and "updated_at" timestamps.
    // By default, this is set to true.
    // public $timestamps = true;

    // The $dates property specifies which attributes should be treated as date fields.
    // Example:
    // protected $dates = ['created_at', 'updated_at', 'custom_date'];

    // The $casts property allows you to cast attributes to specific data types.
    // Example:
    // protected $casts = [
    //     'is_admin' => 'boolean',
    //     'metadata' => 'array',
    // ];

    // The $hidden property specifies which attributes should be hidden when the model is converted to JSON.
    // Example:
    // protected $hidden = ['password', 'remember_token'];

    // The $visible property specifies which attributes should be included when the model is converted to JSON.
    // This is the inverse of $hidden.
    // Example:
    // protected $visible = ['name', 'email'];

    // The $appends property allows you to add custom attributes to the model's JSON representation.
    // These attributes must have corresponding accessor methods.
    // Example:
    // protected $appends = ['full_name'];

    // Define an accessor for a custom attribute (e.g., "full_name").
    // Example:
    // public function getFullNameAttribute()
    // {
    //     return $this->first_name . ' ' . $this->last_name;
    // }

    // Define a mutator to modify an attribute before saving it to the database.
    // Example:
    // public function setEmailAttribute($value)
    // {
    //     $this->attributes['email'] = strtolower($value);
    // }

    // Define relationships with other models (e.g., one-to-many, many-to-many).
    // Example:
    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }
}