<?php

namespace App\Models;

use App\Models\User;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $fillable =
    [
        'price' , 'count','user_id','product_id' ,'client_id','provider',
        'rest','instprice','insttype','instperiod','created_at'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
     public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
