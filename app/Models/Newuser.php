<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\Validator;

/**
 * @method static paginate(int $int)
 */
class Newuser extends Model
{
    use HasFactory;

    protected $table = 'Newuser';
    protected $fillable = [
        'id',
        'name',
        'father_name',
        'email',
        'phone',
        'city',
        'gender',
        'DoB'
    ];
}
