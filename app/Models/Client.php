<?php

namespace App\Models;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable =
    [
        'name' , 'nationalid' , 'address' ,'phone' 
    ];
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
