<?php

namespace App\Models;

use App\Models\Bidang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['bidang'];

    public function bidang() {
        return $this->belongsTo(Bidang::class);
    }
}