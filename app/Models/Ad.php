<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;
use App\Models\User;

class Ad extends Model
{
    use HasFactory;

 public function category()
 {
     return $this->belongsTo(Category::class);
 }


public function user()
{
   return $this->belongsTo(User::class);
}

}

