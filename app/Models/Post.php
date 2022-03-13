<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

            public function Categories()
        {
            return $this->belongsTo(Category::class);
        }

        public function Projects()
        {
            return $this->belongsTo(Project::class);
        }
}
