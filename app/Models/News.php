<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table= "news";
    public function deparment(){
        return $this->belongsTo(Department::class,'dept_id');
    }
}
