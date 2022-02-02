<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Files;

class blogs extends Model
{
protected $fillable = ['user_id',
'tittle', 'contents', 'image', 'views', 'description', 'category_id'

];
use HasFactory;


public function file(){

    return $this->hasMany(Files::class);
}

}
