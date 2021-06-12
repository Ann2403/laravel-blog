<?php

namespace App\Models;

use App\Http\Requests\StorePost;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{

    protected $fillable = [
                            'title',
                            'description',
                            'content',
                            'category_id',
                            'thumbnail'
                            ];

    public function tags()
    {
        //задаем автоматическое заполнение столбцов времени в промежуточном слое
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    public static function uploadImage(StorePost $request, $image = null) {
        if ($request->hasFile('thumbnail')) {
            if($image) {
                Storage::delete($image);
            }

            $folder = date('Y-m-d');
            return $request->file('thumbnail')
                ->store("image/{$folder}");
        }

        if ($image) {
            return $image;
        }

        return null;
    }

    public function getImage() {
        if(!$this->thumbnail) {
            return asset("no_image.jpg");
        }
        return asset("uploads/$this->thumbnail");
    }

    public function getPostDate() {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
                ->format('d F, Y');
    }
}
