<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class SlugStoreHelper   
{
    public static function FormateSlug(array $data): array
    {
        if (isset($data['name'])) {
            $data['slug'] =  Str::slug($data['name']);
        }

        return $data;
    }
}
