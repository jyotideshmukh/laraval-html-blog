<?php


namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    private $title;

    public $date;

    public $slug;

    private $body;

    //private exceprt

    /**
     * Post constructor.
     * @param $title
     * @param $date
     * @param $slug
     */
    public function __construct($title, $date, $slug, $body)
    {
        $this->title = $title;
        $this->date = $date;
        $this->slug = $slug;
        $this->body = $body;

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }
    private static function getPost($document){
        return new Post($document->title,
            $document->date,
            $document->slug,
            $document->body());
    }

    public static function find($slug){

        return static::findAll()->firstWhere('slug',$slug);

    }

    public static function findOrFail($slug){
        $post = static::find($slug);
        if(!$post){
            throw new ModelNotFoundException();
        }
        return $post;
    }

    public static function findAll(){
        return cache()->rememberForever('post.all',function(){
            return collect(File::files(resource_path("posts")))
                ->map(fn($file)=>YamlFrontMatter::parseFile($file))
                ->map(fn($document)=>Post::getPost($document))
                ->sortByDesc('date');
        });

    }
}
