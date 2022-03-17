<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function B()
    {
        $province = DB::table('provinces')->pluck("province_name","id");
        return view('admin.dropdown',compact('province'));
    }
public function getDistrict($id)
{
        $A = DB::table("districts")->where("province_id",$id)->pluck("district_name","district_id");
        // return json_encode($A);
        return response($A);
}
public function fetch(Request $request){

    $id = $request->get('select');
    $result=array();
    $query=DB::table('provinces')
    ->join('districts','provinces.id','=','districts.province_id')
    ->select('districts.*')
    ->where('provinces.id',$id)
    ->get();
    // Output Style
    $output='<option value="">ເລືອກເມືອງ</option>';
    foreach($query as $row){
        if($id){
       $output.='<option value="'.$row->district_id.'" selected="selected">' .$row->district_name.'</option>';
        }
        }
        echo $output;
    }

    // public function fetchprovince(Request $request){
    //     $id = $request->get('select');
    //     $result=array();
    //     $query=DB::table('districts')
    //     ->join('provinces','provinces.id','=','districts.province_id')
    //     ->select('provinces.province_name','provinces.id')
    //     ->where('districts.district_id',$id)
    //     // ->limit(1)
    //     ->get();
    //     // Output Style
    //     $output='<option value="">ເລືອກແຂວງ</option>';
    //     foreach($query as $row){
    //        $output.='<option value="'.$row->id.'" selected="selected">' .$row->province_name.'</option>';
    //         }
    //         echo $output;
    //     }
    public function fetchricegroup(Request $request){

        $id = $request->get('select');
        $result=array();
        $query=DB::table('tb_rice_cat_group')
        ->join('tb_rice_cat','tb_rice_cat_group.rice_cat_group_id','=','tb_rice_cat.rice_cat_group_id')
        ->select('tb_rice_cat.*')
        ->where('tb_rice_cat_group.rice_cat_group_id',$id)
        ->get();
        // Output Style
        $output='<option value="">ເລືອກປະເພດເຂົ້າ</option>';
        foreach($query as $row){
            if($id){
           $output.='<option value="'.$row->rice_cat_id.'" selected="selected">' .$row->rice_cat_name.'</option>';
            }
            }
            echo $output;
        }
}
