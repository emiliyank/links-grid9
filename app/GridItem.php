<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GridItem extends Model
{
    protected $fillable = ['sequence', 'title', 'link', 'color_id'];

    public function color()
    {
    	return $this->belongsTo(Color::class);
    }

    public function getTitleAttribute($value) : string
    {
        if(strlen($value) > 40){
            return substr($value, 0, 40) . '...';
        }else{
            return $value;
        }
    }

    public static function gridItemsArray() : array
    {
    	$gridItems = static::with(['color'])->orderBy('sequence')->get();

    	$gridItemsArray = range(1, 9);
    	foreach ($gridItems as $gridItem) {
    		$gridItemsArray[$gridItem->sequence] = $gridItem->toArray();
    	}

    	return $gridItemsArray;
    }
}
