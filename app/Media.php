<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $fillable = [
        'id','path','user_id'
    ];
}