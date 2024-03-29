<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $guarded = false;


    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function banner()
    {
        return $this->belongsTo(Banner::class);
    }

}
