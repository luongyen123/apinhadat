<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Xaphuong extends Model
{
    protected $table = 'xaphuong';
    protected $fillable = [
        'id','tenxa','maqh','type'
    ];
}