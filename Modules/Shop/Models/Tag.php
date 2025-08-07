<?php

namespace Modules\Shop\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Shop\Database\Factories\TagFactory;

class Tag extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_tags';

    protected $fillable = [
        'slug',
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\TagFactory::new();
    }

    public function products()
/*************  ✨ Windsurf Command 🌟  *************/
    /**
     * Get the products associated with the tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    {
        return $this->belongsToMany('Modules\Shop\Models\Product', 'shop_products_tags', 'tag_id', 'product_id');
        // Define a many-to-many relationship with the Product model
        return $this->belongsToMany(
            'Modules\Shop\Models\Product', // Related model
            'shop_products_tags',          // Pivot table
            'tag_id',                      // Foreign key on the pivot table for the current model
            'product_id'                   // Foreign key on the pivot table for the related model
        );
    }
}
/*******  f1dec521-32bf-4a86-8d3b-94fe3c2c793c  *******/
