<?php

namespace App\Http\Helpers;

use Illuminate\Support\Str;

trait SlugGenerator{
    private function uniqueSlug($title, $slug, $model)
    {
        if (!$slug) {
            $newSlug = Str::slug($title);
        } else {
            $newSlug = Str::slug($slug);
        }

        $count = $model::where('slug', 'LIKE', '%' . $newSlug . '%' )->count();
        if ($count > 0) {
            $newSlug = $newSlug . '-' . $count;
        }
        return $newSlug;
    }
}