<?php

namespace App\Models;

use App\Models\Bidang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body']; // 
    protected $guarded = ['id']; 
    protected $with = ['bidang'];
    
    public function bidang() {
        return $this->belongsTo(Bidang::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}