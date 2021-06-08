<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable = [ 'titulo' , 'autor' , 'descripcion' , 'thumbnail'];

    public function getRouteKeyName(){
        return 'url';
    }

    protected static function booted()
    {
        static::creating(function($entrada)
        {
            $url = Str::slug($entrada->titulo,'-');
            $entrada->url = Entrada::where('url',$url)->exists() ? ($url.uniqid()):$url;
        });
    }

}
