<?php
namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::all();
        return view("admin.register.index",compact('register'));
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
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>"ກະລຸນາປ້ອນອີເມວ",
            'password.required'=>"ກະລຸນາປ້ອນລະຫັດຜ່ານ"
        ]);
        $password = $request->password;
        Register::create([
            'email'=>$request->email,
            'password'=>Hash::make($password)
        ]);
        return redirect()->back()->with('alert', 'ລົງທະບຽນສຳເລັດແລ້ວ!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
    public function register_login(Request $request)
    {

        $register = Register::where('email','=',$request->email)->first();
        
      if($register){
          if(Hash::check($request->password,$register->password)){
          $request->session()->put('registerId',$register->id);
          $request->session()->put('email',$register->email);
        return redirect()->back()->with('alert', 'ເຂົ້າສູ່ລະບົບສຳເລັດແລ້ວ');
          }else{
            return redirect()->back()
            ->with('alert', 'ອີເມວ ຫຼື ລະຫັດຜ່ານຂອງທ່ານບໍ່ຖືກຕ້ອງ');

          }
      }else{
        return redirect()->back()->with('alert', 'ອີເມວ ຫຼື ລະຫັດຜ່ານຂອງທ່ານບໍ່ຖືກຕ້ອງ');
      }

        //  return '<script type="text/javascript">alert("I am Register_login!");</script>'; ແບບນີ້ກໍ່ໃຊ້ໄດ
    }
    public function facebookRedirect(){

       return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook(){
        $user = Socialite::driver('facebook')->stateless()->user();

        $getUser_Id = $user->id;
        $getUser_Name = $user->name;
        $getUser_Email = $user->email;
        $getUser_Avatar = $user->avatar;

      session()->put('registerId',$getUser_Id);
      session()->put('email',$getUser_Email);
      session()->put('name',$getUser_Name);

        $findUser = Register::where('facebook_id',$getUser_Id)->first();
        if($findUser){
              return redirect()->back()->with('alert', 'ເຂົ້າສູ່ລະບົບສຳເລັດແລ້ວ');
        }else{
            $new_user = new Register();
            $new_user->name =  $getUser_Name;
            $new_user->email = $getUser_Email;
            $new_user->avatar =  $getUser_Avatar;
            $new_user->facebook_id = $getUser_Id;
            $new_user->password = bcrypt('123456');
            $new_user->save();
            return redirect()->back()->with('alert', 'ເຂົ້າສູ່ລະບົບສຳເລັດແລ້ວ');
        }
    }



    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle(){

        $user = Socialite::driver('google')->stateless()->user();

        $getUser_Id = $user->id;
        $getUser_Name = $user->name;
        $getUser_Email = $user->email;
        $getUser_Avatar = $user->avatar;

      session()->put('registerId',$getUser_Id);
      session()->put('email',$getUser_Email);
      session()->put('name',$getUser_Name);

    //   dd(session()->put('registerId',$getUser_Id));

        $findUser = Register::where('google_id',$getUser_Id)->first();

        if($findUser){
              return redirect()->back()->with('alert', 'ເຂົ້າສູ່ລະບົບສຳເລັດແລ້ວ');
        }else{
            $new_user = new Register();
            $new_user->name =  $getUser_Name;
            $new_user->email = $getUser_Email;
            $new_user->avatar =  $getUser_Avatar;
            $new_user->google_id = $getUser_Id;
            $new_user->password = bcrypt('123456');
            $new_user->save();
            return redirect()->back()->with('alert', 'ເຂົ້າສູ່ລະບົບສຳເລັດແລ້ວ');
        }
    }
    }
