<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('provinces')->insert([
            [
                'province_name'=>'ເຊກອງ',
                'province_name_e'=>'Sekong',
            ],[
                'province_name'=>'ອັດຕະປື',
                'province_name_e'=>'Attapeu',
            ],[
                'province_name'=>'ສາລະວັນ',
                'province_name_e'=>'Salavan',
            ],[
                'province_name'=>'ຈຳປາສັກ',
                'province_name_e'=>'Champasak',
            ],
            [
                'province_name'=>'ສະຫວັນນະເຂດ',
                'province_name_e'=>'Savannakhet',
            ], [
                'province_name'=>'ຄຳມ່ວນ',
                'province_name_e'=>'Khammaouane',
            ],
            [
                'province_name'=>'ບໍລິຄຳໄຊ',
                'province_name_e'=>'Bolikhamxai',
            ],
            [
                'province_name'=>'ວຽງຈັນ',
                'province_name_e'=>'Vientiane',
            ],
            [
                'province_name'=>'ນະຄອນຫຼວງວຽງຈັນ',
                'province_name_e'=>'Vientiane Capital',
            ],
            [
                'province_name'=>'ຫຼວງພະບາງ',
                'province_name_e'=>'Luangprabang',
            ],
            [
                'province_name'=>'ຫຼວງນ້ຳທາ',
                'province_name_e'=>'Luangnamtha',
            ],
            [
                'province_name'=>'ໄຊຍະບູລີ',
                'province_name_e'=>'Sainyabuli',
            ],
            [
                'province_name'=>'ຜົ້ງສາລີ',
                'province_name_e'=>'Phongsaly',
            ], [
                'province_name'=>'ຊຽງຂວາງ',
                'province_name_e'=>'Xiengkhouang',
            ], [
                'province_name'=>'ຫົວພັນ',
                'province_name_e'=>'Houaphanh',
            ], [
                'province_name'=>'ອຸດົມໄຊ',
                'province_name_e'=>'Oudomxay',
            ], [
                'province_name'=>'ບໍ່ແກ້ວ',
                'province_name_e'=>'Bokeo',
            ],
            [
                'province_name'=>'ໄຊສົມບູນ',
                'province_name_e'=>'Xaisomboun',
            ],
        ]);
    }
}
