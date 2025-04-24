<?php
   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class Product extends Model
   {
       use HasFactory;

       protected $fillable = ['name', 'type', 'price'];

       public function specifications()
       {
           return $this->hasMany(ProductSpecification::class);
       }

       public function images()
       {
           return $this->hasMany(ProductImage::class);
       }
   }