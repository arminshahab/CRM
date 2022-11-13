<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_phone_number',
        'company_name',
        'company_address',
        'company_city',
        'company_zip'
    ];

    protected function companyName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucfirst($value),
        );
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
