<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pizza extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'popularity',
        'isVegetarian'
    ];



    public static function generate_Slug($title) {
        $slug = Str::slug($title, '-');
        $new_slug = $slug;
        $pizza_presente = Pizza::where('slug', $slug)->first();
        $counter = 1;
        while ($pizza_presente) {
            $slug = $new_slug . '-' . $counter;
            $counter++;
            $pizza_presente = Pizza::where('slug', $slug)->first();
        }

        return $slug;
    }

}
