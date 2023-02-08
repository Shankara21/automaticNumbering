<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function documents()
    {
        return $this->hasMany(mst_document::class);
    }
}
