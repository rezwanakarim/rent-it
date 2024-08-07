<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Reservation;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('backend.dashboard',['reservations' => $reservations]);
    }

    public function home(){
        $properties = Property::all();
        $sliders = Slider::all();
        $categories = Category::all();
        return view('frontend.index', ['properties' => $properties, 'sliders' => $sliders, 'categories' => $categories]);
    }

    public function details(Property $property, Customer $customer){
        
        return view('frontend.details', ['property' => $property, 'customer' => $customer]);
    }

    public function properties()
    {
        if(request('property')){
            $properties = Property::latest()->where('location' ,'LIKE','%'.request('property').'%')-> paginate(2);
        }
        else{
            $properties = Property::latest()->paginate(6);
         }
        
        return view('frontend.property', ['properties' => $properties]);
    }

    public function filter()
    {
        if(request('category')){
            $properties = Property::latest()->where('property_category','LIKE','%'.request('category').'%')-> paginate(3);
        }
        else{
            $properties = Property::latest()->paginate(6);
         }
        
        return view('frontend.property', ['properties' => $properties]);
    }

}
