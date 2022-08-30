<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Handstand extends Model
{
    use HasFactory;

    // public $title;

    // public $date;

    // public $body;

    // public $slug;

    // public function __construct($title, $date, $body, $slug)
    // {
    //     $this->title = $title;
    //     $this->date = $date;
    //     $this->body = $body;
    //     $this->slug = $slug;
    // }

    // public static function find($slug)
    // {
    //     return static::all()->firstWhere('slug', $slug);
    // }

//    public static function all()
//    {
//         return cache()->rememberForever('handstands.all', function (){
//             return collect(File::files(resource_path("handstands")))
//                 ->map(fn($file) => YamlFrontMatter::parseFile($file))
//                 ->map(fn($document) => new Handstand(
//                     $document->title,
//                     $document->date,
//                     $document->body(),
//                     $document->slug,
//                 ))
//                 ->sortByDesc('date');
//         });
//     }
}
