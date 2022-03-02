<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;


    protected $fillable = ['name','description','url','status'];


    public function project(){


        return $this->hasManyThrough(

            '\App\Models\Project',

            '\App\Models\ToolProject',

            'tool_id',
            'id',
            'id',
            'project_id'

        );
    }


    protected $hidden = [
        
        'created_at',
        'updated_at',

    ];
}
