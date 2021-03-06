<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model
{

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // base model
        'id', 'uuid', 'ext_created_by_id', 'ordering',  'hidden',
        // base model end
        'email', 'api_key'
    ];

    protected $casts = [
        // base model
        'id' => 'integer',
        'uuid' => 'string',
        'ext_created_by_id' => 'integer',
        'ordering' => 'integer',
        'hidden' => 'boolean',
        // base model
        'email' => 'string',
        'api_key' => 'string',
    ];


    public function storages()
    {
        return $this->hasMany(Storage::class, 'user_id');
    }
}
