<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Element extends Model
{
    
    protected $table = 'home_section_one_data';
   
    protected $fillable = [
        'id',
        'home_section1_title',
        'home_section1_text',
        'home_section2_videoid',
        'created_at',
        'updated_at',
    ];
}
