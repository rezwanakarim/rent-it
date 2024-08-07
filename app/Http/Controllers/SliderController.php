<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Slider::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $this->uploadImage($request->file('image'))
            ]);
            return redirect()->route('sliders.list')->withMessage("Slider Created!");
        } catch (QueryException $e) {

            return redirect()->back()->withInput()->withErrors('Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('backend.slider.show', ['slider' => $slider]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit', ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(SliderRequest $request, Slider $slider)
    {
        try {

            $requestData = [
                'title' => $request->title,
                'description' => $request->description,
            ];

            if ($request->hasFile('image')) {
                $requestData['image'] = $this->uploadImage(request()->file('image'));
            }
            $slider->update($requestData);
            //when storing done! redirect to
            return redirect()->route('sliders.list')->with('message', "Slider Successfully Updated!");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {
            $slider->delete();
            return redirect()->route('sliders.list')->withMessage("Deleted");
            // dd('here');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    // Image Upload (user define method)
    public function uploadImage($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        $image = Image::make($file)->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image->save(storage_path() . '/app/public/sliders/' . $fileName);

        return $fileName;
    }
}
