<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;
    protected $table ='departments';
    protected $primaryKey = 'id';
    protected $fillable =['department_logo','department','descriptions','created_at','updated_at'];
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
        $query->where('department','like','%'.request('search').'%')
              ->orWhere('descriptions','like','%'.request('search').'%');
       }
    }
    public function jobs(){
        return $this->hasMany(jobs::class,'dept_id');
    }
   
}
