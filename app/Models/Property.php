<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;


    protected $guarded =['id'];
    // protected $fillable = [
    //     'property_id',
    //     'property_category',
    //     'property_title',
    //     'property_description',
    //     'location',
    //     'area',
    //     'price',
    //     'contact_info'
    // ];
}
