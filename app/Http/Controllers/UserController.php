<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->get();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'email',
            'address' => 'required',
            'nationality' => 'required',
            'dob' => 'required | date',
            'image' => 'required',

        ],[
            'name.required' => 'Name can not be blank',
            'gender.required'   => 'Please Select the gender',
            'email.email'   => 'Email must be valid'
        ]);

        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $file->move('upload/',$fileName);

        $user = new User;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->nationality = $request->nationality;
        $user->dob = $request->dob;
        $user->education = $request->education;
        $user->image = $fileName;
        $user->contact_mode = $request->contact_mode;
        
        $saved = $user->save();
        
        if ($saved) {
            session()->flash('successMsg','User registered successfully');
            return redirect('user');
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'email',
            'address' => 'required',
            'nationality' => 'required',
            'dob' => 'required | date',
            'image' => 'required',

        ],[
            'name.required' => 'Name can not be blank',
            'gender.required'   => 'Please Select the gender',
            'email.email'   => 'Email must be valid'
        ]);


        $user = User::find($id);

        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $file->move('upload/',$fileName);

        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->nationality = $request->nationality;
        $user->dob = $request->dob;
        $user->education = $request->education;
        $user->image = $fileName;
        $user->contact_mode = $request->contact_mode;
        
        $saved = $user->save();
        
        if ($saved) {
            session()->flash('successMsg','User updated successfully');
            return redirect('user');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        $deleted = $user->delete();

        if ($deleted) {
            session()->flash('successMsg','User deleted successfully');
            return redirect('user');
        }
    }
}
