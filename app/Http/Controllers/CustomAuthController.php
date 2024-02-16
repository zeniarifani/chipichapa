<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class CustomAuthController extends Controller{

    public function delete($id){
        User::destroy($id);
        return redirect(route('dashboard.showAll'));
    }

    public function edit($id){
        $users = User::findorFail($id);
        return view('editUser',compact('users'));
    }

    public function update(Request $request,$id){
        $users = User::findorFail($id);

        $fileName = $request->name.'-'.$request->origin.'-'.$request->file('profile_picture')->getClientOriginalName();
        $request->file('profile_picture')->storeAs('/public/profile_image',$fileName);

        $users->update([
            'name' => $request->name,
           'phone' => $request->phone,
            'age' =>$request->age,
             'address' => $request ->address,
            'profile_picture'=>$fileName
        ]);
        return redirect(route('dashboard.showAll'));
    }

    public function addpage(){
        return view ("addpage");
    }

    public function adminpassword(Request $request){
        $password = $request->input('adminpassword');

        if ($password === "chipichapakingdom") {
            $request->merge(['isAdmin' => true]);
            return redirect('/dashboard')->with('success', 'Login successful!');
        } else {
            return redirect('/')->with('error', 'Invalid password. Please try again.');
        }
    }

    public function landingpage(){
        return view ("landingpage");
    }

    public function dashboard(){
        return view ("dashboard.showAll");
    }

    public function showAll(){
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    public function addemployee(Request $request){
       $request->validate([
        'name'=>'required|min:5|max:20',
        'phone' => [
            'required',
            'numeric',
            'min:9',
            'regex:/^08/', 
        ],
        'age'=>'required|integer|min:20',
        'address'=>'required|min:10|max:40',
        'profile_picture'=>'required|file|mimes:jpeg,png,jpg'
    ]);
      
$fileName = $request->name.'-'.$request->origin.'-'.$request->file('profile_picture')->getClientOriginalName();
$request->file('profile_picture')->storeAs('/public/profile_image',$fileName);

    User::create([

        'name' => $request->name,
        'phone' => $request->phone,
        'age' =>$request->age,
        'address' => $request ->address,
        'profile_picture'=>$fileName
    ]);
        

        return redirect (route('dashboard.showAll'));
    }

}