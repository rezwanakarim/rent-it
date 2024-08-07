<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::all();
        return view('backend.phone.index', ['phones' => $phones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.phone.create', ['customers'=> $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'number' => ['required'],
            ]);

            Phone::create([
                'number' => $request->number,
                'customer_id' => $request->customer_id,

            ]);
            return redirect()->route('phones.list')->withMessage("Phone Created!");
        } catch (QueryException $e) {

            return redirect()->back()->withInput()->withErrors('Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {

        return view('backend.phone.show', ['phone' => $phone]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {

        return view('backend.phone.edit', ['phone' => $phone]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        try {
            $request->validate([
                'number' => ['required'],
            ]);

            $phone->update([
                'number' => $request->number,
            ]);
            return redirect()->route('phones.list')->with('message', "Phone Successfully Updated!");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        try {
            $phone->delete();
            return redirect()->route('phones.list')->withMessage("Deleted");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
}
