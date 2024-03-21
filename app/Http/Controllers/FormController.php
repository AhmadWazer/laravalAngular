<?php

namespace App\Http\Controllers;


use App\Models\CustomerItem;
use App\Models\CustomerModel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use App\Models\Newuser;
use App\Models\ItemModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Rules\ValidEmailValidation as emailValid;

class FormController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $value = Newuser::paginate(3);
        return view('form.form')->with('value', $value);
    }
    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('form.create_form');
    }

    public function save(Request $request): RedirectResponse|\Illuminate\Contracts\Foundation\Application|Redirector|Application
    {

        $request->validate(
            [
               'name' => 'required',
               'fname' => 'required',
               'email' => 'required|email|unique:newuser',
               'phone' => 'required',
               'radio' => 'required',
                'city' => 'required',
                'dob' => 'required'
            ],
            [
                'name.required' => 'Please Enter The Name First And Submit.....!',
                'fname.required' => 'Please Enter fname Then Submit...!',
                'phone.required' => 'Please Enter phone Number Then Submit....!',
                'radio.required' => 'Please Check a Radio Button and Then Submit....!',
                'city.required' => 'Please Enter City Then submit.....!',
                'dob.required' => 'Please enter DOB Then Submit.......!'
            ]
        );
        $data = new Newuser;
        $data->name = request('name');
        $data->father_name = request('fname');
        $data->email = request('email');
        $data->phone = request('phone');
        $data->gender = request('radio');
        $data->city = request('city');
        $data->dob = request('dob');

        $data->save();
        return redirect('/form/create')->with('success','The New User Stored Successfully....!');

    }
    public function edit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
    $userdata = Newuser::find($id);
    return view('form.formedit')->with('userdata',$userdata);
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
    $editdata =  Newuser::find($id);
    $editdata->name = request('name');
    $editdata->father_name = request('fname');
    $editdata->email = request('email');
    $editdata->phone = request('phone');
    $editdata->gender = request('radio');
    $editdata->city = request('city');
    $editdata->dob = request('dob');
    $editdata->save();
    return redirect( '/form/view')->with('success','Data Updated Successfully...!');
    }
    public function delete($id)
    {
        $remove = Newuser::find($id);
        $remove->delete();
        return redirect()->back()->with('delete','Data Deleted Successfully....!');
    }
    public function test()
    {
        return view('form.test');
    }
    public function pageview($id)
    {
         $pageview = Newuser::find($id);
        return view('form.pageview')->with('pageview',$pageview);
    }
public function sale($id)
{
    $data = ItemModel::get();

    return view('form.sale')->with('data',$data)->with('id',$id);
}
public function saleStore(Request $request)
{
    $salevalue = new CustomerItem();
    $salevalue->customer_id = request('customer_id');
    $salevalue->item_id = request('item_id');
    $salevalue->save();
    return redirect()->back()->with('success','You bay --kg of fruits');
}
public function additem()
{
    return view('form.additem');
}


public  function store(Request $request)
{
    $request->validate(
        [
            'item_name' => 'required',
            'item_price' =>'required',
            'item_image' =>'required',
            'item_date' =>'required'
            ]);
$value = new ItemModel();
$value->item_name = request('item_name');
$value->item_price = request('item_price');
$value->photo = request('item_image');
$value->added_date = request('item_date');
$value->save();
  return redirect()->back()->with('success', 'Submitted data saved successfully....!');
}
public function showSales($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
{
    $CIdata = CustomerItem::select('*')->where('customer_item.customer_id',$id)
        ->join('items','items.item_id', '=', 'customer_item.item_id')->get();
    $custom = CustomerModel::select('*')->where('customer.customer_id',$id)->get();
    $total = CustomerItem::select('*')->where('customer_item.customer_id',$id)
        ->join('items','items.item_id', '=', 'customer_item.item_id')->sum('item_price');

//dd($getitem);
    return view('form.showSales')->with('CIdata',$CIdata)->with('custom',$custom)->with('total',$total);
}
public function testing(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
{
    return view('form.testing');
}
}
