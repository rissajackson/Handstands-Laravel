<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Handstand
{
    public $title;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $date, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }
    
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
   
   public static function all()
   {
        return cache()->rememberForever('handstands.all', function (){
            return collect(File::files(resource_path("handstands")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Handstand(
                    $document->title,
                    $document->date,
                    $document->body(),
                    $document->slug,
                ))
                ->sortByDesc('date');
        });
    }
}
