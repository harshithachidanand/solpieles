<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * mass assignable
     */
    protected $fillable = ['name', 'tags'];

    /**
     * ==========================================
     * Relationships
     */
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * ======================================
     * Accessors
     */
    
    public function getTagsArrayAttribute()
    {

    	return explode(",", $this->tags);
    }

    public function getImagesListAttribute()
    {
    	return $this->lists('path', 'id');
    }
}
