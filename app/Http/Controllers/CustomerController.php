<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function store(Request $request)
    {
        /* Insert Query */
        // echo "<pre>";
        // print_r($request->all());die;
        $customer= new Customer();
        $customer->name= $request['name'];
        $customer->email= $request['email'];
        $customer->gender= $request['gender'];
        $customer->address= $request['address'];
        $customer->state= $request['state'];
        $customer->country= $request['country'];
        $customer->dob= $request['dob'];
        $customer->password= md5($request['password']);
        $customer->save(); 
        return redirect('customer/view');
    }
    public function view()
    {
        $customer= Customer::all();
        $data=compact('customer');
        return view('customer-view')->with($data);
    }
}
