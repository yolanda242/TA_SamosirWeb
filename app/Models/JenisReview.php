<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisReview extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    
}
