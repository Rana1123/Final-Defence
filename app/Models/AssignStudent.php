<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignStudent extends Model
{
    public function student(){
    	return $this->belongsTo(User::class,'student_id','id');
    }

     public function discount(){
    	return $this->belongsTo(DiscuntStudent::class,'id','assign_student_id');
    }


    public function student_class(){
    	return $this->belongsTo(StudentClass::class,'class_id','id');
    }


    public function student_year(){
    	return $this->belongsTo(StudentYear::class,'year_id','id');
    }


 public function group(){
    	return $this->belongsTo(Department::class,'department_id','id');
    }

    protected $fillable = [
        'roll',
        'student_id',
        'class_id',
        'department_id',
        
    ];
   

}
