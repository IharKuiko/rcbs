<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Link extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['name', 'description', 'category_id', 'thumbnail', 'alt', 'link', 'is_published'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(LinkCategory::class);
    }

    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = "{$request->input('category_id')}/" . date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");
        }
        return null;
    }

    public function getImage() {
        if (!$this->thumbnail) {
            return asset("no-image.jpeg");
        }
//        return asset("no-image.jpeg");
//        return 'OkeY';
//        return Storage::url("app/{$this->thumbnail}");
        return asset("{$this->thumbnail}");
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }
}
