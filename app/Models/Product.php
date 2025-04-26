<?php
   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;
   
   class Product extends Model
   {
       use HasFactory;
   
       protected $fillable = [
           'name', 'type', 'price', 'location',
       ];
   
       public function images()
       {
           return $this->hasMany(ProductImage::class);
       }
   
       public function specifications()
       {
           return $this->hasMany(ProductSpecification::class);
       }
   }