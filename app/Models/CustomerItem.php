<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerItem extends Model
{
    use HasFactory;
    protected $table = 'customer_item';
    protected $fillable = [
        'id',
      'customer_id',
        'item_id'
    ];


}
