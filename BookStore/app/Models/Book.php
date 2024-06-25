<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'author',
        'isbn',
        'publisher',
        'image_url',
        'file_url',
        'number_pages',
        'language',
        'publisher_date',
        'description',
        'rate',
        'price'
    ];

    public function scopeFilter($query, array $filters) {


        if($filters['search'] ?? false) { 
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('author', 'like', '%' . request('search') . '%');
        }
    }


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }


}
