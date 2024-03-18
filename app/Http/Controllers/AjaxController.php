<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;
//use Illuminate\Contracts\View\Factory;
//use Illuminate\Contracts\View\View;
//use Illuminate\Foundation\Application;
use App\Models\Newuser;
//use Illuminate\Http\RedirectResponse;
//use Illuminate\Routing\Redirector;

class AjaxController extends Controller
{
    public function ajaxform()
    {
        return view('ajax.ajaxform');
    }
    public function user_list(){
        $customer = CustomerModel::all();
        return response()->json(['customer' => $customer,]);
    }
    public  function  ajaxedit($id)
    {
         return view('ajax.ajaxeditform', compact('id'));
    }
    public function user_data($id)
    {
        $customerview= CustomerModel::find($id);
        return response()->json(['customerview' => $customerview]);
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'fname' => 'required',
                'email' => 'required|email|unique:newuser,email,'.$id,
                'phone' => 'required',
                'radio' => 'required',
                'city' => 'required',
                'dob' => 'required'
            ]
        );
        $name = $request->input('name');
        $fname = $request->input('fname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $gender = $request->input('radio');
        $city = $request->input('city');
        $dob = $request->input('dob');

        $editdata =  Newuser::find($id);
        $editdata->name = $name;
        $editdata->father_name = $fname;
        $editdata->email = $email;
        $editdata->phone = $phone;
        $editdata->gender = $gender;
        $editdata->city = $city;
        $editdata->dob = $dob;

        $editdata->save();
        return redirect('/ajax/ajaxform')->with('message', 'Data Updated Successfully');
    }
    public function index($id)
    {
        return view('ajax.ajaxview',compact('id'));
    }
    public function data_view($id)
    {
        $newdata = Newuser::find($id);

        return response()->json(['newdata'=> $newdata]);
    }
}
