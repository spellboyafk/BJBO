<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('stock')->default(0);
        $table->integer('price');
        $table->timestamps();
    });
}

  protected $fillable = ['name', 'stock', 'price'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

}


