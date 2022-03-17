<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PostEstate;
use App\Models\PostEstateDetail;
use App\Models\PostEstateImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostestatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

             $postestates = PostEstate::all();
            // $postestates = DB::select('select*from post_estates');

        //    return response()->json($postestates,200); 1 parameter
           return response()->json($postestates,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postestate = new PostEstate();
       $postestate->post_id = 'BDB'.rand(1000,999999);
       $postestate->title = $request -> title;
       $postestate->sale_price = $request -> sale_price;
       $postestate->rent_price = $request -> rent_price;
       $postestate->rate_sale_price = $request -> rate_sale_price;
       $postestate->rate_rent_price = $request -> rate_rent_price;
       $postestate->province_id = $request -> province_id;
       $postestate->district_id = $request -> district_id;
       $postestate->post_date = $request -> post_date;
       $postestate->public_date = $request -> public_date;
       $postestate->property_mode = $request -> property_mode;
       $postestate->lat = $request -> lat;
       $postestate->lng = $request -> lng;
       $postestate->type_id = $request -> type_id;
       $postestate->detail = $request -> detail;
       $postestate->public_status = $request -> public_status;
       $postestate->description_map = $request -> description_map;
       $postestate->save();
       $post_id = $postestate->post_id;
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
   $post_image = PostEstateImage::insert([
        'image'=>implode('|',$image),
        'post_id'=>$post_id,
        'video_link'=>$request->video_link,
        'video_description'=>$request->video_description
    ]);
        return response()->json([
            'message'=>'added successfully',
            'post_estates'=>$postestate,
            'post_detail'=>$post_detail,
            'post_image'=>$post_image
        ],201);

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $postestates =  DB::table('post_estates')->where('post_id',$post_id)->first();
        if($postestates == null){
            return response()->json([
                'error'=>[
                    'status_code'=>404,
                    'message'=>'ບໍ່ພົບຂໍ້ມູນນີ້'
                ]
            ],404);
        }
       return response()->json($postestates,200);
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
}
