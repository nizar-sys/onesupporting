<?php

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

if (!function_exists('upload')) {
    function upload($directory, $file, $filename = "")
    {
        $extensi  = $file->getClientOriginalExtension();
        $filename = "{$filename}_" . date('Ymdhis') . ".{$extensi}";

        // Storage::disk('public')->putFileAs("/$directory", $file, $filename);
        Storage::putFileAs("/$directory", new File($file,), $filename);


        return "/$directory/$filename";
    }
}
