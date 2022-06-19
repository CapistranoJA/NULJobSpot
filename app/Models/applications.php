<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;
    protected $fillable =['user_id','resume','jobs_id'];
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function applications(){
        return $this->belongsTo(applications::class,'jobs_id');
    }
}
