<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\PostEstate;
use App\Models\PostEstateDetail;
use App\Models\PostEstateImage;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\storage;

class PosteEstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $postestates = PostEstate::all();
        return view('dashboard',compact('postestates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Province::all();
        $district = District::all();
   return view('admin.dashboard_add',compact('province','district'));
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
        'title'=>'required',
        'post_date'=>'required',
        'public_date'=>'required',
        'property_mode'=>'required',
        'type_id'=>'required',
        'image'=>'required',
        'province_id'=>'required',
        'district_id'=>'required',
        ],[
            'title.required'=>'ກະລຸນາປ້ອນຫົວຂໍ້',
            'post_date.required'=>'ກະລຸນາເລືອກມື້ໂພສ',
            'public_date.required'=>'ກະລຸນາເລືອກມື້ເຜີຍແຜ່',
            'property_mode.required'=>'ກະລຸນາເລືອກປະເພດ',
            'type_id.required'=>'ກະລຸນາເລືອກປະເພດຊັບສິນ',
            'image.required'=>'ກະລຸນາເລືອກຮູບພາບ',
            'province_id.required'=>'ກະລຸນາເລືອກແຂວງ',
            'district_id.required'=>'ກະລຸນາເລືອກແຂວງ',
        ]);
        $post_estate = new PostEstate();
        $post_estate->post_id ='BDB'.rand(1000,999999);
        $post_estate->title=$request->input('title');
        $post_estate->sale_price=$request->input('sale_price');
        $post_estate->rate_sale_price=$request->input('rate_sale_price');
        $post_estate->rent_price=$request->input('rent_price');
        $post_estate->rate_rent_price=$request->input('rate_rent_price');
        $post_estate->province_id=$request->input('province_id');
        $post_estate->district_id=$request->input('district_id');
        $post_estate->post_date=$request->input('post_date');
        $post_estate->property_mode=$request->input('property_mode');
        $post_estate->public_date=$request->input('public_date');
        $post_estate->lat=$request->input('lat');
        $post_estate->lng=$request->input('lng');
        $post_estate->type_id=$request->input('type_id');
        $post_estate->detail=$request->input('detail');
        $post_estate->description_map=$request->input('description_map');
        $post_estate->public_status=$request->input('public_status')== TRUE ? '1':'0';
        $post_estate ->save();

        $post_id = $post_estate->post_id;

        $post_detail = new PostEstateDetail();
        $post_detail->post_id=$post_id;
        $post_detail->bedroom=$request->input('bedroom');
        $post_detail->bathroom=$request->input('bathroom');
        $post_detail->floor_area=$request->input('floor_area');
        $post_detail->floor_level=$request->input('floor_level');
        $post_detail->car_space=$request->input('car_space');
        $post_detail->land_area=$request->input('land_area');
        $post_detail->total_floor=$request->input('total_floor');
        $post_detail->completion_year=$request->input('completion_year');
        $post_detail->air_conditioning=$request->input('air_conditioning')== TRUE ? '1':'0';
        $post_detail->hot_water=$request->input('hot_water')== TRUE ? '1':'0';
        $post_detail->furniture=$request->input('furniture')== TRUE ? '1':'0';
        $post_detail->security=$request->input('security')== TRUE ? '1':'0';
        $post_detail->balcony=$request->input('balcony')== TRUE ? '1':'0';
        $post_detail->gym_center=$request->input('gym_center')== TRUE ? '1':'0';
        $post_detail->swimming_pool=$request->input('swimming_pool')== TRUE ? '1':'0';
        $post_detail->lift=$request->input('lift')== TRUE ? '1':'0';
        $post_detail->on_main_road=$request->input('on_main_road')== TRUE ? '1':'0';
        $post_detail->garden=$request->input('garden')== TRUE ? '1':'0';
        $post_detail->ideal_for_investors=$request->input('ideal_for_investors')== TRUE ? '1':'0';
        $post_detail->expat_friendly=$request->input('expat_friendly')== TRUE ? '1':'0';
        $post_detail->close_to_park=$request->input('close_to_park')== TRUE ? '1':'0';
        $post_detail->close_to_school=$request->input('close_to_school')== TRUE ? '1':'0';
        $post_detail->close_to_shop=$request->input('close_to_shop')== TRUE ? '1':'0';
        $post_detail ->save();

        $image = array();
        if($files = $request->file('image')){
            foreach($files as $file){
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'public/post_image/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path,$image_full_name);
                $image[] = $image_url;
            }
        }
        PostEstateImage::insert([
            'image'=>implode('|',$image),
            'post_id'=>$post_id,
            'video_link'=>$request->video_link,
            'video_description'=>$request->video_description
        ]);


        return redirect()->route('myproperties')->with('success','ເພີ່ມຂ້ມູນສຳເລັດແລ້ວ');
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
    public function edit($post_id)
    {
        $image_data = DB::table('post_estate_images')->where('post_id',$post_id)->first();
        $images = explode('|',$image_data->image);
        // $imagearray = $images[0];


        $old_image = DB::table('post_estate_images')->where('post_id',$post_id)->first();
        $images_old = explode('|',$old_image->image);

        $postestatedetail  = PostestateDetail::where('post_id',$post_id)->first();
        $postestate  = Postestate::where('post_id',$post_id)->first();
        $district = District::all();
        $province = Province::all();
   return view('admin.dashboard_edit_properties',compact('province','district','postestatedetail','postestate','images','image_data','images_old'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {

        $request->validate([
            'title'=>'required',
            'post_date'=>'required',
            'public_date'=>'required',
            'property_mode'=>'required',
            'type_id'=>'required',
            'province_id'=>'required',
            'district_id'=>'required',
            ],[
                'title.required'=>'ກະລຸນາປ້ອນຫົວຂໍ້',
                'post_date.required'=>'ກະລຸນາເລືອກມື້ໂພສ',
                'public_date.required'=>'ກະລຸນາເລືອກມື້ເຜີຍແຜ່',
                'property_mode.required'=>'ກະລຸນາເລືອກປະເພດ',
                'type_id.required'=>'ກະລຸນາເລືອກປະເພດຊັບສິນ',
                'province_id.required'=>'ກະລຸນາເລືອກແຂວງ',
                'district_id.required'=>'ກະລຸນາເລືອກແຂວງ',
            ]);


            $post_estate = PostEstate::where('post_id', '=', $post_id)->first();
            $post_estate->title=$request->input('title');
            $post_estate->sale_price=$request->input('sale_price');
            $post_estate->rate_sale_price=$request->input('rate_sale_price');
            $post_estate->rent_price=$request->input('rent_price');
            $post_estate->rate_rent_price=$request->input('rate_rent_price');
            $post_estate->province_id=$request->input('province_id');
            $post_estate->district_id=$request->input('district_id');
            $post_estate->post_date=$request->input('post_date');
            $post_estate->property_mode=$request->input('property_mode');
            $post_estate->public_date=$request->input('public_date');
            $post_estate->lat=$request->input('lat');
            $post_estate->lng=$request->input('lng');
            $post_estate->type_id=$request->input('type_id');
            $post_estate->detail=$request->input('detail');
            $post_estate->description_map=$request->input('description_map');
            $post_estate->public_status=$request->input('public_status')== TRUE ? '1':'0';
            $post_estate ->save();



            $post_detail = PostEstateDetail::where('post_id', '=', $post_id)->first();
            $post_detail->bedroom=$request->input('bedroom');
            $post_detail->bathroom=$request->input('bathroom');
            $post_detail->floor_area=$request->input('floor_area');
            $post_detail->floor_level=$request->input('floor_level');
            $post_detail->car_space=$request->input('car_space');
            $post_detail->land_area=$request->input('land_area');
            $post_detail->total_floor=$request->input('total_floor');
            $post_detail->completion_year=$request->input('completion_year');
            $post_detail->air_conditioning=$request->input('air_conditioning')== TRUE ? '1':'0';
            $post_detail->hot_water=$request->input('hot_water')== TRUE ? '1':'0';
            $post_detail->furniture=$request->input('furniture')== TRUE ? '1':'0';
            $post_detail->security=$request->input('security')== TRUE ? '1':'0';
            $post_detail->balcony=$request->input('balcony')== TRUE ? '1':'0';
            $post_detail->gym_center=$request->input('gym_center')== TRUE ? '1':'0';
            $post_detail->swimming_pool=$request->input('swimming_pool')== TRUE ? '1':'0';
            $post_detail->lift=$request->input('lift')== TRUE ? '1':'0';
            $post_detail->on_main_road=$request->input('on_main_road')== TRUE ? '1':'0';
            $post_detail->garden=$request->input('garden')== TRUE ? '1':'0';
            $post_detail->ideal_for_investors=$request->input('ideal_for_investors')== TRUE ? '1':'0';
            $post_detail->expat_friendly=$request->input('expat_friendly')== TRUE ? '1':'0';
            $post_detail->close_to_park=$request->input('close_to_park')== TRUE ? '1':'0';
            $post_detail->close_to_school=$request->input('close_to_school')== TRUE ? '1':'0';
            $post_detail->close_to_shop=$request->input('close_to_shop')== TRUE ? '1':'0';
            $post_detail ->save();


            $image = array();
            if($files = $request->file('image')){

                $postimage_delete = PostEstateImage::where('post_id', '=', $post_id)->first();

                $images_delete = explode('|',$postimage_delete->image);
                if($images_delete){
                    File::delete($images_delete);
                    // return "YES DELETE";
                }
                foreach($files as $file){
                    $image_name = md5(rand(1000,10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = 'public/post_image/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path,$image_full_name);
                    $image[] = $image_url;
                }

                $post_image =  DB::table('post_estate_images')
                ->where('post_id', $post_id)
                ->update([
                    'image'     =>  implode('|',$image),
                    'video_link' => $request ->video_link,
                    'video_description' => $request ->video_description,
                ]);


            }else{
                $post_image =  DB::table('post_estate_images')
                ->where('post_id', $post_id)
                ->update([
                    'video_link' => $request ->video_link,
                    'video_description' => $request ->video_description,
                ]);

            }

            return redirect()->route('myproperties')->with('success','ແກ້ໄຂຂ້ມູນສຳເລັດແລ້ວ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($post_id){

        $postimage_delete = DB::table('post_estate_images')
        ->where('post_id',$post_id)->first();

    $images = explode('|',$postimage_delete->image);

    if($images){

        // Delete all images in define's post_id

       File::delete($images);
       // Delete data from post_data from post_estate_images
       $postimage = DB::table('post_estate_images')
       ->where('post_id',$post_id)->delete();
        // Delete data from post_data from post_estates
        $postimage = DB::table('post_estates')
        ->where('post_id',$post_id)->delete();
           // Delete data from post_data from post_estates
           $postimage = DB::table('post_estates')
           ->where('post_id',$post_id)->delete();
             // Delete data from post_data from post_estate_details
             $postimage = DB::table('post_estate_details')
             ->where('post_id',$post_id)->delete();

       return redirect()->route('myproperties')->with('success','ລຶບຂໍ້ມູນສຳເລັດແລ້ວ');
    }

    }
    public function myproperties(){
        $myproperties = PostEstateImage::all();
        return view('admin.dashboard_properties',compact('myproperties'));
    }
}
