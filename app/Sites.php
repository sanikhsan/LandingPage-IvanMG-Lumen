<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Sites extends Model
{
    protected $fillable = [
        'alamat',
        'email',
        'no_telp',
        'no_wa',
        'facebook',
        'twitter',
        'LinkedIn'
    ];
}