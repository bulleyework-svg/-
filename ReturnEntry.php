
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnEntry extends Model
{
    use HasFactory;
    protected $fillable = ['item_id','sku','cis_code','reason','location'];
}
