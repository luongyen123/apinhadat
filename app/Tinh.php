<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Tinh extends Model
{
    protected $table = 'tinhtp';
    protected $fillable = [
        'id','tentinhtp','type'
    ];
}