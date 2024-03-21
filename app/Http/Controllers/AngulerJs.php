<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AngulerJs extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function shows()
    {
        $customers = DB::table('customer')->get();
        return response()->json(['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view(string $customer_id)
    {
        $viewCustomers = CustomerModel::where('customer_id',$customer_id)->first();

        return response()->json(['viewCustomers'=>$viewCustomers]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $customer = new CustomerModel;
        $customer->customer_name = $request['name'];
        $customer->customer_email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->phone = $request['phone'];
        $customer->status = $request['status'];
        $customer->save();

        return response()->json(['message' => 'Customer created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $customer_id)
    {
        $editCustomers = CustomerModel::where('customer_id',$customer_id)->first();

        return response()->json(['editCustomers'=>$editCustomers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Update the specified resource in storage.
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $customer = CustomerModel::where('customer_id', $id);
            if ($customer) {
               $customer->update([
                   'customer_name'=> $request->name,
                   'customer_email'=> $request->email,
                   'gender'=> $request->gender,
                   'dob'=> $request->dob,
                   'phone'=> $request->phone,
                   'status'=> $request->status,
               ]);
            } else {
                return response()->json(['message'=>'customer not found']);
            }
        } catch (Exception $e) {
            return response()->json(['message' => $e]);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($customer_id)
    {
        $customer= CustomerModel::where('customer_id', $customer_id)->delete();

        return response()->json(['Message' =>'Customer deleted successfully']);
    }
}
