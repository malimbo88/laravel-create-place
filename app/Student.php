<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Class Student Model
class Student extends Model
{
    //In case table have different name
    //protected $table = "students";

    protected $fillable = [
      "name",
      "surname",
      "grade",
      "school_class",
      "description",
      "created_at",
      "updated_at"
    ];
}
