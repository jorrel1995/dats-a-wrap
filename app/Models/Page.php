<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

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
