<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\District;
use App\Models\GetIpClient;
use App\Models\Heart;
use App\Models\Keyword;
use App\Models\PostEstate;
use App\Models\PostEstateImage;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class HomeController extends Controller
{
    public function detail()
    {
        return view('web.more_detail');
    }
    public function home(Request $request)
    {
        // $method1 = request()->ip();
        $method2 = request()->getClientIp();
        // dd($method2);
        GetIpClient::create([
            'Clientip' => $method2
        ]);

        $session_id = session()->get('registerId');
        //  dd($session_id);
        $haveheart = Heart::where('user_id', $session_id)->get();
        $postestates = PostEstate::all();
        $postimage = PostEstateImage::limit(6)->get();
        return view('web.home', compact('postimage', 'postestates', 'haveheart'));
    }

    public function realestate_detail($post_id)
    {

        $postimage = PostEstateImage::where('post_id', $post_id)->first();
        // dd($postimage->video_link);

        $image = DB::table('post_estate_images')->where('post_id', $post_id)->first();
        $images = explode('|', $image->image);

        $postestates = DB::table('post_estates')
            ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
            ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
            ->select('post_estates.*', 'provinces.*', 'districts.*')
            ->where('post_id', $post_id)
            ->get();

        $postestatedetail = DB::table('post_estate_details')
            ->select('post_estate_details.*')
            ->where('post_id', $post_id)
            ->get();
        return view('web.realestate_detail', compact('postimage', 'images', 'postestates', 'postestatedetail'));
    }
    public function news()
    {
        $postestates = PostEstate::all();
        return view('web.news', compact('postestates'));
    }
    public function news_detail()
    {
        $postestates = PostEstate::all();
        return view('web.news_detail', compact('postestates'));
    }

    public function sale_properties(Request $request)
    {

        Keyword::create([
            'province_id' => $request->province_id,
            'district_id' => $request->district_id,
            'type_id' => $request->type_id,
            'property_mode' => $request->property_mode,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
        ]);


        if ($request->has('province_id')) {
            $province_id = $request->input('province_id');
            $district_id = $request->input('district_id');
            $type_id = $request->input('type_id');
            $property_mode = $request->input('property_mode');
            $min_price = $request->input('min_price');
            $max_price = $request->input('max_price');
            if ($property_mode == "1") {
                $select = DB::table('post_estates')
                    ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
                    ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
                    ->join('post_estate_details', 'post_estate_details.post_id', '=', 'post_estates.post_id')
                    ->select('post_estates.*', 'post_estate_details.*', 'provinces.province_name', 'districts.district_name')



                    ->when($province_id, function ($query, $province_id) {
                        return $query->Where('post_estates.province_id', '=', "$province_id");
                    })

                    ->when($district_id, function ($query, $district_id) {
                        return $query->Where('post_estates.district_id', '=', "$district_id");
                    })
                    ->when($type_id, function ($query, $type_id) {
                        return $query->Where('post_estates.type_id', '=', "$type_id");
                    })
                    ->when($property_mode, function ($query, $property_mode) {
                        return $query->Where('post_estates.property_mode', '=', "$property_mode");
                    })



                    ->when($min_price, function ($query, $min_price) {
                        return $query->Where('post_estates.sale_price', '>=', "$min_price");
                    })
                    ->when($max_price, function ($query, $max_price) {
                        return $query->Where('post_estates.sale_price', '<=', "$max_price");
                    })
                    ->get();
            } else {




                $select = DB::table('post_estates')
                    ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
                    ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
                    ->join('post_estate_details', 'post_estate_details.post_id', '=', 'post_estates.post_id')
                    ->select('post_estates.*', 'post_estate_details.*', 'provinces.province_name', 'districts.district_name')



                    ->when($province_id, function ($query, $province_id) {
                        return $query->Where('post_estates.province_id', '=', "$province_id");
                    })

                    ->when($district_id, function ($query, $district_id) {
                        return $query->Where('post_estates.district_id', '=', "$district_id");
                    })
                    ->when($type_id, function ($query, $type_id) {
                        return $query->Where('post_estates.type_id', '=', "$type_id");
                    })
                    ->when($property_mode, function ($query, $property_mode) {
                        return $query->Where('post_estates.property_mode', '=', "$property_mode");
                    })
                    ->when($min_price, function ($query, $min_price) {
                        return $query->Where('post_estates.rent_price', '>=', "$min_price");
                    })
                    ->when($max_price, function ($query, $max_price) {
                        return $query->Where('post_estates.rent_price', '<=', "$max_price");
                    })
                    ->get();
            }
        } else {

            $select = DB::table('post_estates')
                ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
                ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
                ->select('post_estates.*', 'provinces.*', 'districts.*')
                ->get();
        }



        $count = PostEstate::all()->count();

        $show = PostEstate::limit(3)->get();
        $post_date = PostEstate::limit(3)->orderBy('post_date', 'DESC')->get();
        $postimage = PostEstateImage::limit(3)->get();
        $district = District::all();
        $province = Province::all();

        return view('web.sale_properties', compact('select', 'post_date', 'province', 'district', 'show','postimage'));
    }
    public function addkeyword(Request $request)
    {


        # code...
    }

    public function sale_properties_detail($post_id)
    {


        $view = PostEstate::where('post_id', $post_id)->first();
        $keepview = $view->view;
        $add = 1;
        $sum = $keepview + $add;
        $updateview = PostEstate::where('post_id', '=', $post_id)->first();
        $updateview->view = $sum;
        $updateview->save();





        $postimage = PostEstateImage::where('post_id', $post_id)->first();

        $image = DB::table('post_estate_images')->where('post_id', $post_id)->first();
        $images = explode('|', $image->image);

        $postestates = DB::table('post_estates')
            ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
            ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
            ->select('post_estates.*', 'provinces.*', 'districts.*')
            ->where('post_id', $post_id)
            ->get();
        $postestatedetail = DB::table('post_estate_details')
            ->select('post_estate_details.*')
            ->where('post_id', $post_id)
            ->get();
        return view('web.sale_properties_detail', compact('postimage', 'images', 'postestates', 'postestatedetail'));
    }
    public function rent_properties()
    {

        $postestates1 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 1)
            ->where('property_mode', 2)
            ->get();

        $postestates2 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 2)
            ->where('property_mode', 2)
            ->get();
        $postestates3 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 3)
            ->where('property_mode', 2)
            ->get();
        $postestates4 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 4)
            ->where('property_mode', 2)
            ->get();
        $postestates5 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 5)
            ->where('property_mode', 2)
            ->get();
        $postestates6 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 6)
            ->where('property_mode', 2)
            ->get();
        $postestates7 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 7)
            ->where('property_mode', 2)
            ->get();
        $postestates8 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 8)
            ->where('property_mode', 2)
            ->get();
        $postestates9 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 9)
            ->where('property_mode', 2)
            ->get();
        $postestates10 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 10)
            ->where('property_mode', 2)
            ->get();
        $postestates11 = DB::table('post_estates')
            ->select('post_estates.*')
            ->where('type_id', 11)
            ->where('property_mode', 2)
            ->get();
        $postestates = PostEstate::all();
        return view('web.rent_properties', compact(
            'postestates1',
            'postestates2',
            'postestates3',
            'postestates4',
            'postestates5',
            'postestates6',
            'postestates7',
            'postestates8',
            'postestates9',
            'postestates10',
            'postestates11',
            'postestates'
        ));
    }
    public function rent_properties_detail($post_id)
    {
        $postimage = PostEstateImage::where('post_id', $post_id)->first();

        $image = DB::table('post_estate_images')->where('post_id', $post_id)->first();
        $images = explode('|', $image->image);

        $postestates = DB::table('post_estates')
            ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
            ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
            ->select('post_estates.*', 'provinces.*', 'districts.*')
            ->where('post_id', $post_id)
            ->get();
        $postestatedetail = DB::table('post_estate_details')
            ->select('post_estate_details.*')
            ->where('post_id', $post_id)
            ->get();
        return view('web.rent_properties_detail', compact('postimage', 'images', 'postestates', 'postestatedetail'));
    }
    public function agent()
    {
        $postestates = PostEstate::all();
        return view('web.agent', compact('postestates'));
    }
    public function agent_detail()
    {
        $postestates = PostEstate::all();
        return view('web.agent_detail', compact('postestates'));
    }
    public function agency()
    {
        $postestates = PostEstate::all();
        return view('web.agency', compact('postestates'));
    }
    public function agency_detail()
    {
        $postestates = PostEstate::all();
        return view('web.agency_detail', compact('postestates'));
    }
    public function contact_us()
    {
        $postestates = PostEstate::all();
        return view('web.contact_us', compact('postestates'));
    }
    public function about_us()
    {
        $postestates = PostEstate::all();
        return view('web.about_us', compact('postestates'));
    }
    public function addappointment(Request $request)
    {
        Appointment::create([
            'appointment_time' => $request->appointment_time,
            'appointment_date' => $request->appointment_date,
            'nameandlastname' => $request->nameandlastname,
            'appointment_email' => $request->appointment_email,
            'appointment_tel' => $request->appointment_tel,
            'appointment_content' => $request->appointment_content
        ]);
        return redirect()->back()->with('success', 'ທ່ານໄດ້ເຮັດການນັດໝາຍແລ້ວ');
    }
    public function appointmentindex()
    {

        $appointment  = Appointment::all();
        return view("admin.appointment.index", compact('appointment'));
    }
    public function allsearch()
    {
        $keyword = DB::table('keyword')
            ->join('provinces', 'provinces.id', '=', 'keyword.province_id')
            ->join('districts', 'districts.district_id', '=', 'keyword.district_id')
            ->select('provinces.*', 'keyword.*', 'districts.*')
            ->get();
        return view("admin.keyword.index", compact('keyword'));
    }

    public function favorite(Request $request)
    {
        $post_id = $request->post_id;
        $session_id = session()->get('registerId');

        if ($session_id) {
            $post_check = PostEstate::where('post_id', $post_id)->first(); //ກວດສອບວ່່າ PostEstate ມີ Post_id ນີ້ ຫຼື ບໍ່
            if ($post_check) {
                if (Heart::where('post_id', $post_id)->where('user_id', $session_id)->exists()) {

                    $delete = Heart::where('post_id', $post_id)->where('user_id', $session_id);
                    $delete->delete();
                    return "You are delete";
                    // return  redirect()->back()->with('success','ທ່ານໄດ້ເພີ່ມໃນສິ່ງທີມັກແລ້ວ');
                } else {
                    Heart::create([
                        'post_id' => $request->post_id,
                        'user_id' => $request->session()->get('registerId')
                    ]);
                    return "You are added";
                    // return  redirect()->back()->with('success','ເພີ່ມໃນສິ່ງທີ່ມັກ');
                } //if ($post_check)
            }
        } //session
        else {
            return "You have to login before";
            // return  redirect()->back()->with('success','ທ່ານຕ້ອງເຂົ້າສູ່ລະບົບກ່ອນ');
        }
    }
    public function favoriteall()
    {
        $session_id = session()->get('registerId');
        // $haveheart = Heart::where('user_id', $session_id)->get();

        $postestates = PostEstate::all();
        $postimage =  DB::table('post_estate_images')
        ->join('hearts', 'hearts.post_id', '=', 'post_estate_images.post_id')
        ->select('post_estate_images.*', 'hearts.*')
        ->where('user_id', $session_id)
        ->get();


        return view('web.favoriteall', compact('postimage', 'postestates'));
    }
    public function weballproperties(){
        $session_id = session()->get('registerId');
        $haveheart = Heart::where('user_id', $session_id)->get();
        $postestates = PostEstate::all();
        $postimage = PostEstateImage::limit(6)->get();
        return view('web.weballproperties', compact('postimage', 'postestates', 'haveheart'));
    }
}
