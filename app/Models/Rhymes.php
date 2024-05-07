<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rhymes extends Model
{
    use HasFactory;

    protected $table = 'rhymes';
    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function rhyme_level()
    {
        return $this->belongsTo(RhymesLevel::class, 'rhyme_level_id', 'id');
    }
}
