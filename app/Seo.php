<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Seo extends Model
{
    protected $fillable = [
        'title',
        'keyword',
        'author',
        'description',
        'googletag',
        'bingtag'
    ];
}