<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Handstand
{
    public $title;

    public $date;

    public $body;

    public function __construct($title, $date, $body)
    {
        $this->title = $title;
        $this->date = $date;
        $this->body = $body;
    }
    
    public static function find($slug)
    {
        if (! file_exists($path = resource_path("handstands/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}" . now()->addMinute(), fn() => file_get_contents($path));
   }
   
   public static function all()
   {
        $files = File::files(resource_path("handstands/"));
        
        return array_map(fn($file) => $file->getContents(), $files);
   }
}