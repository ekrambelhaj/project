<?php

namespace App\Http\Controllers;

use App\Models\mangmentuser;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MangmentuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $users = mangmentuser::where('id', 'like', "%$search%")
             ->orWhere('username', 'like', "%$search%")->get();

        } else {

            $users=mangmentuser::all();
        }
        return view('admin.user mangment.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user mangment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = mangmentuser::create([
            'username' => $request->name,
            'function'=>$request->job,
            'specialization'=>$request->specialization,
            'phone'=>$request->phone,
            'type'=>$request->type,
            'status'=>$request->status,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
{

    $user=mangmentuser::where('id',$id)->get()->first();
        return view(' admin.user mangment.indexUser',compact('user'));

}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=mangmentuser::where('id',$id)->get()->first();
        return view('admin.user mangment.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        mangmentuser::where('id', $request->id)->update([
            'username' => $request->name,
            'function' => $request->job,
            'specialization' => $request->specialization,
            'phone' => $request->phone,
            'status' => $request->status,
            'type' => $request->type,

        ]);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        mangmentuser::find($id)->delete();
       //return $users;
       return redirect()->route('user.index');


    }
}
