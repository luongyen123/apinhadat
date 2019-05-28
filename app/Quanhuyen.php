<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class Quanhuyen extends Model
{
    protected $table = 'quanhuyen';
    protected $fillable = [
        'id','tenqh','matinh','type'
    ];
}