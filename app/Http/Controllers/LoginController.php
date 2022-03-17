<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'user_name'=>'required',
            'password'=>'required'
        ],[
            'user_name.required'=>'ກະລຸນາໃສ່ເບີໂທລະສັບກ່ອນ!',
            'password.required'=>'ກະລຸນາໃສ່ລະຫັດຜ່ານກ່ອນ!',
        ]);
        if(Auth::attempt([
            'user_name'=>$request->user_name,
            'password'=>$request->password
        ]))
        {
             return redirect()->route('dashboard.index')->with('success','ເຂົ້າສູ່ລະບົບສຳເລັດແລ້ວ!');
        }else{
             return redirect()->back()->with('message','ເບີໂທລະສັບ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function loginUser(Request $request){

        $request->validate([
            'user_name' => 'required',
            'password' => 'required|min:6'
        ],[
            'user_name.required'=>'ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້ກ່ອນ!',
            'password.required'=>'ກະລຸນາໃສ່ລະຫັດຜ່ານກ່ອນ!',
            'password.min'=>'ກະລຸນາໃສ່ລະຫັດຜ່ານໃຫ້ຖືກຕ້ອງ!',
        ]);

        $user = User::where('user_name','=',$request->user_name)->first();


        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->user_id);
                $request->session()->put('username',$user->name);
                return redirect()->route('dashboard.index')->with('alert','ເຂົ້າສູ່ລະບົບສຳເລັດແລ້ວ!');
            }else{
                return redirect()->back()->with('alert', 'ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ!');
            }
        }else{
            return redirect()->back()->with('alert', 'ບໍ່ມີຊື່ຜູ້ໃຊ້ນີ້!');

        }
    }
    public function logout()
    {
        // Auth::logout();
        Session::flush();
        Auth::logout();
        return redirect()->route('home')->with('alert','ທ່ານອອກຈາກລະບົບສຳເລັດແລ້ວ');
    }
    public function logoutAdmin()
    {
        // Auth::logout();
        Session::flush();
        Auth::logout();
        return redirect()->route('home')->with('alert','ທ່ານອອກຈາກລະບົບສຳເລັດແລ້ວ');
    }
}


