<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $attributes = [
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    protected function companyName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucfirst($value),
        );
    }

    protected function firstName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucfirst($value),
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucfirst($value),
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attr) => $attr['first_name'] . " " . $attr['last_name'],
        );
    }
}
