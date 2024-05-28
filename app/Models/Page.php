<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;


public static function image_mime_types()
{
    return [
        'jpeg',
        'png',
        'gif',
        'bmp',
        'webp',
        'svg+xml',
        'tiff'
    ];
}

public static function video_mime_types()
{
    return [
        'mp4',
        'mpeg',
        'quicktime',
        'x-msvideo',
        'x-ms-wmv',
        'x-flv',
        'webm',
        'ogg'
    ];
}

    /**
     * Returns a paginated list of all blog posts, defaults to 10 if no variable passed
     * @param type|int $paginate
     * @return type
     */
    public static function getAllActive()
    {
        return Page::where('status', 'ACTIVE')->get();
    }

}
