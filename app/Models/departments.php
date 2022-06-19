<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;
    protected $table ='departments';
    protected $primaryKey = 'id';
    public function jobs(){
        return $this->hasMany(jobs::class,'dept_id');
    }
   
}
