<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.user_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'user_name'=>'required|unique:users',
            'password'=>'required',
            'confirm'=>'required|same:password',
            'user_type'=>'required',
        ],[
            'name.required'=>'ປ້ອນຊື່ກ່ອນ!  ',
            'user_name.required'=>'ປ້ອນຊື່ຜູ້ໃຊ້ກ່ອນ!',
            'user_name.unique'=>'ຊື່ຜູ້ໃຊ້ນີ້ມີຢູ່ແລ້ວ!',
            'user_type.required'=>'ເລືອກປະເພດຜູ້ນຳໃຊ້ກ່ອນ!',
            'password.required'=>'ປ້ອນລະຫັດຜ່ານກ່ອນ!',
            'confirm.required'=>'ຢືນຢັນລະຫັດຜ່ານ!',
            'confirm.same'=>'ລະຫັດຜ່ານບໍ່ກົງກັນ!',
        ]);
        User::create([
            'name'=>$request->name,
            'user_name'=>$request->user_name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
            'user_type'=>$request->user_type,
            'office'=>$request->office,
            'tel'=>$request->tel,
        ]);
        return redirect()->route('user.index')->with('success','ເພີ່ມຂໍ້ມູນສຳເລັດ');


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
    public function edit($user_id)
    {
        $user = user::find($user_id);
        return view('admin.user.user_edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $request->validate([
            'name'=>'required',
            'user_name'=>'required',
            'password'=>'required',
            'confirm'=>'required|same:password',
            'user_type'=>'required',
        ],[

            'name.required'=>'ປ້ອນຊື່ກ່ອນ!  ',
            'user_name.required'=>'ປ້ອນຊື່ຜູ້ໃຊ້ກ່ອນ!',
            'user_type.required'=>'ເລືອກປະເພດຜູ້ນຳໃຊ້ກ່ອນ!',
            'password.required'=>'ປ້ອນລະຫັດຜ່ານກ່ອນ!',
            'confirm.required'=>'ຢືນຢັນລະຫັດຜ່ານ!',
            'confirm.same'=>'ລະຫັດຜ່ານບໍ່ກົງກັນ!',

        ]);

        User::find($user_id)->update([
            'name'=>$request->name,
            'user_name'=>$request->user_name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
            'user_type'=>$request->user_type,
            'office'=>$request->office,
            'tel'=>$request->tel,
        ]);
      return redirect()->route('user.index')->with('success','ແກ້ໄຂຂໍ້ມູນສຳເລັດແລ້ວ');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        dd($user);
        $user->delete();
        return redirect()->back()->with('success','ລຶບຂໍ້ມູນສຳເລັດ!');
    }
}
