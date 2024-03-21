<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'customer_id',
        'customer_name',
        'customer_email',
        'gender',
        'phone',
        'dob',
        'status',
    ];

}
