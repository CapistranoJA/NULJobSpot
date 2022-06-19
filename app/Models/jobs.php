<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $table ='jobs';
    protected $primaryKey = 'id';
    protected $fillable =['jobs_logo','title','dept_id','department','salary','qualifications','description'];
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
        $query->where('title','like','%'.request('search').'%')
              ->orWhere('description','like','%'.request('search').'%')
              ->orWhere('qualifications','like','%'.request('search').'%')
              ->orWhere('id','like','%'.request('search').'%');
       }
    }
    public function departments(){
        return $this->belongsTo(departments::class,'dept_id');
    }
    public function applications(){
        return $this->hasMany(applications::class,'jobs_id');
    }
    public function employees(){
        return $this->hasMany(employee::class,'job_id');
    }
    
}
