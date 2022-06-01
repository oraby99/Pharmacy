<?php

namespace App\Models;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =
    [
        'name' , 'img' , 'cat' ,'price' , 'count'
    ];
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
