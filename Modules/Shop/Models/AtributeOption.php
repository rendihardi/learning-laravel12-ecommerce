<?php

namespace Modules\Shop\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\Factories\AtributOptionFactory;

class AtributOption extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_attribute_options';

    protected $fillable = [
        'attribute_id',
        'slug',
        'name',
    ];
    
    protected static function newFactory()
    {
        return AtributOptionFactory::new();
    }
}
