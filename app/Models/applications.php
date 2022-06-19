<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;
    protected $fillable =['user_id','uname','resume','jobs_id'];
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
        $query->where('user_id','like','%'.request('search').'%')
              ->orWhere('uname','like','%'.request('search').'%')
              ->orWhere('jobs_id','like','%'.request('search').'%')
              ->orWhere('id','like','%'.request('search').'%');
       }
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function applications(){
        return $this->belongsTo(applications::class,'jobs_id');
    }
}   
