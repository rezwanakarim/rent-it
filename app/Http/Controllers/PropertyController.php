<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Image;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all();
        return view('backend.property.index', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.property.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRequest $request)
    {
        try {

            Property::create([
                'property_id' => $request->property_id,
                'property_category' => $request->property_category,
                'property_title' => $request->property_title,
                'property_description' => $request->property_description,
                'property_image' => $this->uploadImage($request->file('property_image')),
                'location' => $request->location,
                'area' => $request->area,
                'price' => $request->price,
                'contact_info' => $request->contact_info

            ]);
            return redirect()->route('properties.list')->withMessage("Property Created!");
        } catch (QueryException $e) {

            return redirect()->back()->withInput()->withErrors('Something went wrong!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        $categories = Category::all();

        return view('backend.property.edit', ['property' => $property, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyRequest $request, Property $property)
    {
        try {
            $requestData = [
                'property_id' => $request->property_id,
                'property_category' => $request->property_category,
                'property_title' => $request->property_title,
                'property_description' => $request->property_description,
                'location' => $request->location,
                'area' => $request->area,
                'price' => $request->price,
                'contact_info' => $request->contact_info,
                // 'property_image' => $this->uploadImage($request->file('property_image')),
            ];


            if ($request->hasFile('property_image')) {
                $requestData['property_image'] = $this->uploadImage(request()->file('property_image'));
            }
            $property->update($requestData);
            //when storing done! redirect to
            return redirect()->route('properties.list')->with('message', "Property Successfully Updated!");
        } catch (QueryException $e) {
            //dd($th->getMessage());
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        // $property = property::find($id);
        return view('backend.property.show', ['property' => $property]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        try {
            $property->delete();
            return redirect()->route('properties.list')->withMessage("Deleted");
            // dd('here');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    // Image Upload (user define method)
    public function uploadImage($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        // Load the image and resize it to a maximum width of 1200 pixels
        $image = Image::make($file)->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        // Reduce the quality level and encode the image as JPEG
        $image->save(storage_path() . '/app/public/properties/' . $fileName);

        return $fileName;
    }

    // Trash method
    public function trash()
    {

        $trashed = Property::onlyTrashed()->get();
        return view('backend.property.trash', compact('trashed'));
    }

    // Restore method
    public function restore($id)
    {
        $restore = Property::onlyTrashed()->findOrFail($id);
        $restore->restore();
        return redirect()->route('properties.trash')->with('message', "Property Successfully Restored!");
    }

    // Permanent Delete
    public function delete($id)
    {
        try {
            $delete = Property::onlyTrashed()->findOrFail($id);
            $delete->forceDelete();
            return redirect()->route('properties.trash')->withMessage("Permanently Deleted");
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withInput()->withErrors('Something Went Wrong');
        }
    }
}
