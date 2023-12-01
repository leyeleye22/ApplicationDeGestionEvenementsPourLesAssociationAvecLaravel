<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Association extends Authenticatable
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'login',
        'datecreated',
        'slogan',
        'logo',
        'password',
    ];
    public function getAuthIdentifierName()
    {
        return 'login';
    }
}
