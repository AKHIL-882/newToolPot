<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','status','addedby'];



    public function tool(){


        return $this->hasManyThrough(

            '\App\Models\Tool',

            '\App\Models\ToolProject',

            'project_id',
            'id',
            'id',
            'tool_id'

        );
    }


    protected $hidden = [

        'laravel_through_key',
        'created_at',
        'updated_at',

    ];
}
