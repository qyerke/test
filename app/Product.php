<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;
    protected $fillable = [
        'name', 'body', 'price',
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function getImage()
    {
        $path = '/frontend/images';
        return $path . '//'. $this->image;
    }
    public function getCategory()
    {
        if ($this->category != null) {
            return $this->category->title;
        } return "No Category";
    }
    public function getProductMark()
    {
        if($this->new == 1){
           echo '<li class="product_mark product_new">new</li>';
        } elseif ($this->on_sale == 1) {
           echo '<li class="product_mark product_discount">-25%</li>';
        } else{
            return;
        }
    }
    public function getTitle()
    {
        return substr($this->name, 0,50);

    }
}