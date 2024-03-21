<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ItemModel extends Model
{
    use HasFactory;
    protected $table = 'Items';
    protected $fillable = [
        'item_id',
        'item_name',
        'item_price',
        'photo',
        'added_date'
    ];

    public function customer_id(): BelongsToMany
    {
        return $this->belongsToMany(CustomerModel::class);
    }
}
