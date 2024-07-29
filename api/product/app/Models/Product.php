<?php

namespace app\Models;

use App\Traits\ObjectToArray;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $description
 * @property float $price
 * @property int $stock
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $id
 * @property int $category_id
 */
class Product extends Model
{
    use ObjectToArray;
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'status',
        'sub_category_id',
    ];

    protected $casts = [
        'price' => 'float',
        'stock' => 'int',
        'status' => 'boolean',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
}
