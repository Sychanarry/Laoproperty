@extends('admin.index_master')
@section('content')
<div class="page-content">
    @include('admin.body.pagecontent')

          <main id="content">
            <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
              <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                <div class="mr-0 mr-md-auto">
                  <h2 class="mb-0 text-heading fs-22 lh-15 fontfamily">ຊັບສິນທັງໝົດ
                  </h2>
                </div>
                <div class="form-inline justify-content-md-end mx-n2">
                  <div class="p-2">
                    <div class="input-group input-group-lg bg-white border">
                      <div class="input-group-prepend">
                        <button class="btn pr-0 shadow-none" type="button"><i class="far fa-search"></i></button>
                      </div>
                      <input type="text" class="form-control bg-transparent border-0 shadow-none text-body"
                           placeholder="ຄົ້ນຫາຊັບສິນ" name="search">
                    </div>
                  </div>
                  <div class="p-2">
                    <div class="input-group input-group-lg bg-white border">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent letter-spacing-093 border-0 pr-0"><i
                            class="far fa-align-left mr-2"></i>ຈັດລຽງຕາມ:</span>
                      </div>
                      <select class="form-control bg-transparent pl-0 selectpicker d-flex align-items-center sortby" name="sort-by"
                            data-style="bg-transparent px-1 py-0 lh-1 font-weight-600 text-body"
                            id="status">
                        <option>ແຂວງ</option>
                        <option>ນະຄອນຫຼວງວຽງຈັນ</option>
                        <option>ສະຫວັນນະເຂດ</option>
                        <option>ຫຼວງພະບາງ</option>
                        <option>ບໍ່ແກ້ວ</option>
                      </select>
                    </div>
                  </div>
                  <div class="p-2">
                    <div class="input-group input-group-lg bg-white border">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent letter-spacing-093 border-0 pr-0"><i
                            class="far fa-align-left mr-2"></i>ຈັດລຽງຕາມ:</span>
                      </div>
                      <select class="form-control bg-transparent pl-0 selectpicker d-flex align-items-center sortby" name="sort-by"
                            data-style="bg-transparent px-1 py-0 lh-1 font-weight-600 text-body"
                            id="status">
                        <option>ເມືອງ</option>
                        <option>ສີສັດຕະນາກ</option>
                        <option>ໄຊເສດຖາ</option>
                        <option>ສີໂຄດຕະບອງ</option>
                        <option>ຈັນທະບູລີ</option>
                      </select>
                    </div>
                  </div>
                  <div class="p-2">
                    <div class="input-group input-group-lg bg-white border">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent letter-spacing-093 border-0 pr-0"><i
                            class="far fa-align-left mr-2"></i>ຈັດລຽງຕາມ:</span>
                      </div>
                      <select class="form-control bg-transparent pl-0 selectpicker d-flex align-items-center sortby" name="sort-by"
                            data-style="bg-transparent px-1 py-0 lh-1 font-weight-600 text-body"
                            id="status">
                        <option>ລາຄາ</option>
                        <option>ລາຄາຕ່ຳ</option>
                        <option>ລາຄາສູງ</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-hover bg-white border rounded-lg table-table-bordered" id="myTable">
                  <thead class="thead-sm thead-black">
                    <tr>
                        <th scope="col" class="border-top-0">Post_id</th>
                      <th scope="col"   class="">ຮູບພາບ</th>
                      <th scope="col"   class="">ລາຄາຂາຍ</th>
                      <th scope="col"   class="">ລາຄາເຊົ່າ</th>
                      <th scope="col"   class="">ປະເພດ</th>
                      <th scope="col"   class="">ເມືອງ</th>
                      <th scope="col"   class="">ແຂວງ</th>
                      <th scope="col" class="">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                      @foreach($myproperties as $item)

                    <tr class="shadow-hover-xs-2 bg-hover-white">
                        <td class="align-middle">{{$item->post_id}}</td>
                      <td class="align-middle">
                        <div class="media">
                          <div class=" position-relative">
                            <a href="#">
                                @php
                                $images = explode('|',$item->image);
                                $imagearray = $images[0];
                                @endphp
                                <image src="{{URL::to($imagearray)}}" style="height: 60px;width:60px"  >
                            </a>
                          </div>
                        </div>
                      </td>
                      @php

                          $postestates = DB::table('post_estates')
                          ->join('provinces','provinces.id','=','post_estates.province_id')
                          ->join('districts','districts.district_id','=','post_estates.district_id')
                           ->select('post_estates.*','provinces.*','districts.*')
                           ->where('post_id',$item->post_id)
                           ->get();

                      @endphp
                      <td class="align-middle">{{number_format($postestates[0]->sale_price)}} {{$postestates[0]->rate_sale_price}}</td>
                      <td class="align-middle">{{number_format($postestates[0]->rent_price)}} {{$postestates[0]->rate_rent_price}}</td>
                      <td class="align-middle">@if($postestates[0]->property_mode ==1)
                            <div class="text-danger">ຂາຍ</div>
                            @elseif($postestates[0]->property_mode ==2)
                            <div class="text-primary">ເຊົ່າ</div>
                      @else
                      <div class="text-primary">ຂາຍ-ເຊົ່າ</div>
                        @endif
                    </td>
                      <td class="align-middle">{{($postestates[0]->district_name)}}</td>
                      <td class="align-middle">{{($postestates[0]->province_name)}}</td>
                      {{-- <td class="align-middle">{{number_format($postestates[0]->province->province_name)}}</td> --}}
                      <td class="align-middle">
                        <form class="d-flex" action=" {{ route('postestates.destroy', $item->post_id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                        <a href="{{ route('postestates.edit', $item->post_id) }}" class="btn btn-outline-info"><i class="fas fa-edit"></i></a>
                        <button type="submit" class="btn btn-outline-danger ml-1" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>
                    </form>
                      </td>
                    </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
              </div>
          </main>
          </div>
        @endsection
