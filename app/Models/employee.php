<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable =['user_id','uname','job_id','title'];
    use HasFactory;
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
        $query->where('uname','like','%'.request('search').'%')
              ->orWhere('title','like','%'.request('search').'%')
              ->orWhere('user_id','like','%'.request('search').'%')
              ->orWhere('job_id','like','%'.request('search').'%');
       }
    }
    public function jobs(){
        return $this->belongsTo(jobs::class,'job_id');
    }
    public function user(){
        return $this->hasOne(User::class,'user_id');
    }
}
