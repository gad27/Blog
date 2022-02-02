<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blogs;

class Files extends Model
{
    protected $fillable=['blog_id','original_filename','new_filename','extension','size'];
    use HasFactory;

    public function blogs()
    {
        return $this->belongsTo(blogs::class);
    }
}
