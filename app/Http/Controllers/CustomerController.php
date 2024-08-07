<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\CutStub;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('backend.customer.index' ,['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        try {
            Customer::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'username' => $request->username,
                'gender' => $request->gender,
                'address' => $request->address,
                'number' => $request->number,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            return redirect()->route('customers.create')->withMessage("Registration Successful");
        } catch (QueryException $e) {

            return redirect()->back()->withInput()->withErrors('Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('backend.customer.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {

        return view('backend.customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        try {
            $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
            'number' => ['required'],
            ]);

            $customer->update([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'gender' => $request->gender,
                'address' => $request->address,
                'number' => $request->number,
            ]);
            return redirect()->route('customers.list')->with('message', "Customer Successfully Updated!");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();
            return redirect()->route('customers.list')->withMessage("Deleted");
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function login()
    {
        return view('frontend.login');
    }

    // authenticate customer
    // public function authenticate(Request $request)
    // {
    //     try {
    //         $customers = Customer::all();
    //         foreach ($customers as $customer) {
    //             if ($customer->email == $request->email && $customer->password == $request->password) {
    //                 $properties = Property::all();
    //                 $sliders = Slider::all();
    //                 $categories = Category::all();
    //                 return view('frontend.index', ['properties' => $properties, 'sliders' => $sliders, 'categories' => $categories]);
    //             } else {
    //                 return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    //             }
    //         }
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withErrors(['email' => 'Something went wrong']);
    //     }
    // }
    public function dashboard(Customer $customer)
    {

        return view('frontend.userdashboard', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProfile(Customer $customer)
    {

        return view('frontend.editprofile', ['customer' => $customer]);
    }

}
