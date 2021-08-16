<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function author(){

        return $this->belongsTo(User::class, 'user_id');

    }

    public function scopeFilter($query, $filters){          //Place where query scope for some like 'search' write here
        if(isset($filters['search'])){
            $search = $filters['search'];
            $query->where('title','like', '%'. $search.'%')->orWhere('body','like', '%'. $search.'%');
        }
    }

}
