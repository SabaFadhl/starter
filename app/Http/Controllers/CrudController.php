<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getOffers()
    {
        return Offer::select('id','name')->get();
    }
    // public function store()
    // {
    //     Offer::create([
    //         'name'=>'offer1',
    //         'price'=>'2000',
    //         'details'=>'offer1 details'
    //     ]);
    // }
    public function create()
    {
        return view('offers.create');
    }
     public function store(OfferRequest $request)
    {
        //validate data before insert to database

        // $validator = Validator::make($request->all() ,$rules, $messages);
        // if ($validator->fails()) {
        //    return redirect()->back()->withErrors($validator)->withInputs($request->all());
        // }

        //$file_name = $this->saveImage($request->photo, 'images/offers');

        // $rules = $this->getRules();
        // $messages = $this->getMessages();
        // $validator =Validator($request->all(),$rules,$messages);
        // if ($validator->fails()) {
        //      //return $validator->errors();
        //      return redirect()->back()->withErrors($validator)->withInputs($request->all());
        // }
        //insert
        Offer::create([
            'name'=> $request->name,
            'price'=>$request->price,
            'details'=>$request->details,
        ]);
        //  return 'تم اضافه العرض بنجاح ';
        return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }
    // protected function getMessages()
    //     {
    //         return $messages = [
    //             'name.required' =>__('messages.offer name required'),
    //             'name.unique' => 'اسم العرض موجود ',
    //             'price.numeric' => 'سعر العرض يجب ان يكون ارقام',
    //             'price.required' => 'السعر مطلوب',
    //             'details.required' => 'ألتفاصيل مطلوبة ',
    //         ];
    //     }

        protected function getRules()
        {
            // return $rules = [
            //     'name' => 'required|max:100|unique:offers,name',
            //     'price' => 'required|numeric',
            //     'details' => 'required',
            // ];
        }
}
