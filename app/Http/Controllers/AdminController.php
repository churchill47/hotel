<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;

use App\Models\Foodchef;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }


     public function deleteuser($id)
    {

        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }


     public function foodmenu()
    {
       $data = food::all();
      return view("admin.foodmenu",compact("data"));
    }





     public function upload(Request $request)
    {
       $data= new Food;
       $data ->title = $request->input('title');
       $data ->price = $request->input('price');
       if($request->hasFile('image'))
       {
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('uploads/food/',$filename);
           $data->image = $filename;

       }
        $data ->description = $request->input('description');
        $data->save();
          return redirect()->back()->with('status','food details are added successfully');
    }

    public function deletefood($id)
    {

        $data=Food::find($id);
        $data->delete();
        return redirect()->back()->with('msg','food detail is deleted successfully');
    }


    public function editfood($id)
    {

        $data=Food::find($id);
        return view('admin.editfood')->with('food',$data) ;
        
    }
    public function update(Request $request, $id)
    {

        $data=Food::find($id);

        $data ->title = $request->input('title');
       $data ->price = $request->input('price');
       if($request->hasFile('image'))
       {
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('uploads/food/',$filename);
           $data->image = $filename;

       }
        $data ->description = $request->input('description');
        $data->save();

          return redirect('/foodmenu')->with('food',$data);
 
        
        
    }


    public function reservation(Request $request)
    {
       $data= new reservation;
       $data ->name = $request->input('name');
       $data ->email = $request->input('email');
       
        $data ->phone = $request->input('phone');
        
        $data ->guest = $request->input('guest');
        
        $data ->date = $request->input('date');
        
        $data ->time = $request->input('time');
        
        $data ->message = $request->input('message');
        $data->save();
          return redirect()->back()->with('status','message is sent  successfully');
    }
    public function reservationlist()
    {
       $data = reservation::all();
      return view("admin.reservationlist",compact("data"));
    }

    public function deletereservation($id)
    {

        $data=reservation::find($id);
        $data->delete();
        return redirect()->back()->with('msg','reservation is deleted successfully');
    }

   public function viewchef()
   {
       $data=Foodchef::all();
    return view("admin.adminchef",compact("data"));

     }

   public function uploadchef(Request  $request)
   {
       $data = new Foodchef;

       $data ->name = $request->input('name');
       $data ->speciality=$request->input('speciality');

       if($request->hasFile('image'))
       {
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('chefimage',$filename);
           $data ->image = $filename;

       }
       $data->save();
       return redirect()->back();
   }

   public function deletechef($id)
    {

        $data=Foodchef::find($id);
        $data->delete();
        return redirect()->back()->with('msg','chef is deleted successfully');
    }

    public function editchef($id)
    {

        $data=Foodchef::find($id);
        return view('admin.updatechef')->with('foodchef',$data) ;
        
    }
 

    public function updatechef(Request $request,$id)
    {
        $data=Foodchef::find($id);
        
    
        $data ->name = $request->input('name');
       $data ->speciality = $request->input('speciality');
       if($request->hasFile('image'))
       {
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('chefimage',$filename);
           $data->image = $filename;

       }
        
        $data->save();

          return redirect('/viewchef')->with('foodchef',$data);
    }


   







}

