@extends('web.index')
@section('content')
<main id="content" class="fontfamily">
    <section class="pb-8 page-title shadow">
      <div class="container">
        <nav aria-label="breadcrumb">
          <h1 class="fs-30 lh-1 mb-0 text-heading font-weight-600"></h1>
        </nav>
      </div>
    </section>
    <section class="pt-8 pb-11">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-2 order-lg-1 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner">
              <div class="card mb-4">
                <div class="card-body px-6 py-4">
                  <h4 class="card-title fs-16 lh-2 text-dark mb-3">ຄົ້ນຫາອະສັງຫາລິມະຊັບ</h4>
                  <form action="" method="GET">
                    <div class="form-group">
                      <label for="ແຂວງ" class="sr-only">ແຂວງ</label>
                      <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                         name="province_id" title="ແຂວງທັງໝົດ" data-style="btn-lg py-2 h-52"  onclick="getprovince()">
                        <option value="">ແຂວງທັງໝົດ</option>
                        @foreach ($province as $item)
                        <option value="{{$item->id}}">{{$item->province_name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <div class="form-group">
                        <label for="ເມືອງ" class="sr-only">ເມືອງທັງໝົດ</label>
                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                           name="district_id" title="ເມືອງທັງໝົດ" data-style="btn-lg py-2 h-52" id="">
                                           <option value="">ເລືອກເມືອງ</option>
                                        @foreach ($district as $item)
                                        <option value="{{$item->district_id}}">{{$item->district_name}}</option>
                                        @endforeach


                        </select>
                      </div>
                    <div class="form-group">
                      <label for="type" class="sr-only">ປະເພດອະສັງຫາລິມະຊັບ</label>
                      <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                  name="type_id"        title="ອະສັງຫາລິມະຊັບ" data-style="btn-lg py-2 h-52" id="type">
  @if($select->isEmpty())
                        <option value="">ປະເພດອະສັງຫາລິມະຊັບທັງໝົດ</option>
                        <option value="1">ເຮືອນຫ້ອງແຖວ</option>
                        <option value="2">ເຮືອນວິນລາ</option>
                        <option value="3">ເຮືອນພ້ອມດິນ</option>
                        <option value="4">ຮ້ານຂາຍເຄື່ອງ</option>
                        <option value="5">ທີ່ດິນ</option>
                        <option value="6">ທີ່ດິນການຄ້າ</option>
                        <option value="7">ທີ່ດິນສວນ</option>
                        <option value="8">ໂຮງແຮມ</option>
                        <option value="9">ຫ້ອງການ</option>
                        <option value="10">ສາງ</option>
                        <option value="11">ໂຮງງານ</option>

                      @else
                      <option  {{$select[0]->type_id==''?'selected':''}} value="">ປະເພດອະສັງຫາລິມະຊັບທັງໝົດ</option>
                      <option {{$select[0]->type_id=='1'?'selected':''}} value="1">ເຮືອນຫ້ອງແຖວ</option>
                      <option  {{$select[0]->type_id=='2'?'selected':''}} value="2">ເຮືອນວິນລາ</option>
                      <option  {{$select[0]->type_id=='3'?'selected':''}} value="3">ເຮືອນພ້ອມດິນ</option>
                      <option  {{$select[0]->type_id=='4'?'selected':''}} value="4">ຮ້ານຂາຍເຄື່ອງ</option>
                      <option  {{$select[0]->type_id=='5'?'selected':''}} value="5">ທີ່ດິນ</option>
                      <option  {{$select[0]->type_id=='6'?'selected':''}} value="6">ທີ່ດິນການຄ້າ</option>
                      <option  {{$select[0]->type_id=='7'?'selected':''}} value="7">ທີ່ດິນສວນ</option>
                      <option  {{$select[0]->type_id=='8'?'selected':''}} value="8">ໂຮງແຮມ</option>
                      <option  {{$select[0]->type_id=='9'?'selected':''}} value="9">ຫ້ອງການ</option>
                      <option  {{$select[0]->type_id=='10'?'selected':''}} value="10">ສາງ</option>
                      <option  {{$select[0]->type_id=='11'?'selected':''}} value="11">ໂຮງງານ</option>
                      @endif
                    </select>

                    </div>
                    <div class="form-group">
                      <label for="status" class="sr-only">ປະເພດ</label>
                      <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                         name="property_mode" title="" data-style="btn-lg py-2 h-52" id="status">
                        @if($select->isEmpty())
                        <option value="">ເລືອກປະເພດ</option>
                        <option value="1">ຂາຍ</option>
                        <option  value="2">ເຊົ່າ</option>
                        <option  value="3">ຂາຍ ແລະ ເຊົ່າ</option>
                        @elseif($select[0]->property_mode=="1" && $select[0]->property_mode=="2")
                        @php
                        dd($select);
                        @endphp

                            <option value="">ເລືອກປະເພດ</option>
                            <option value="1">ຂາຍ</option>
                            <option  value="2">ເຊົ່າ</option>
                            <option  value="3">ຂາຍ ແລະ ເຊົ່າ</option>
                        @else
                        <option  {{$select[0]->property_mode==''?'selected':''}} value="">ເລືອກປະເພດ</option>
                        <option {{$select[0]->property_mode=='1'?'selected':''}} value="1">ຂາຍ</option>
                        <option  {{$select[0]->property_mode=='2'?'selected':''}} value="2">ເຊົ່າ</option>
                        <option  {{$select[0]->property_mode=='3'?'selected':''}} value="3">ຂາຍ ແລະ ເຊົ່າ</option>
                        @endif
                      </select>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="price">ລາຄາ</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <input type="number" class="form-control" name="min_price">
                        </div>
                        <div class="col-2">
                            <h6>ຫາ</h6>
                        </div>
                        <div class="col-5">
                            <input type="number" class="form-control" name="max_price">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none mt-4">ຄົ້ນຫາ
                    </button>
                  </form>
                </div>
              </div>
              <div class="card property-widget mb-4">
                <div class="card-body px-6 pt-5 pb-6">
                  <h4 class="card-title fs-16 lh-2 text-dark mb-3"></h4>
                  <div class="slick-slider mx-0"
                               data-slick-options='{"slidesToShow": 1, "autoplay":true}'>
                               @foreach($postimage as $item)
                       <div class="box px-0">
                      <div class="card border-0">
                        {{-- <img src="{{asset('assets/vendors/images/feature-property-01.jpg')}}" class="card-img" alt="Villa on Hollywood
                                                  Boulevard"> --}}
                                                  @php
                                                  $images = explode('|', $item->image);
                                                  $imagearray = $images[0];
                                              @endphp
                                              <image src="{{ URL::to($imagearray) }}" style="height: 200px;width:100%">
                        <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                          <div class="d-flex mb-auto">
                            @php
                            $postestates = DB::table('post_estates')
                                ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
                                ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
                                ->select('post_estates.*', 'provinces.*', 'districts.*')
                                ->where('post_id', $item->post_id)
                                ->get();
                        @endphp
                            @if ($postestates[0]->property_mode == '1')
                            <a href="#" class="badge badge-danger">ຂາຍ &ensp; {{$postestates[0]->title}}</a>

                            @elseif($postestates[0]->property_mode == '2')
                            <a href="#" class="badge badge-indigo">ໃຫ້ເຊົ່າ &ensp; {{$postestates[0]->title}}</a>

                            @else
                            <a href="#" class="badge badge-indigo">ຂາຍ ແລະ ເຊົ່າ &ensp; {{$postestates[0]->title}}</a>

                            @endif

                          </div>
                          <div class="px-2 pb-2">
                            <a href="#" class="text-white"><h5
                                                      class="card-title fs-16 lh-2 mb-0">{{$item->title}}</h5>
                            </a>
                            <p class="card-text text-white mb-0 font-weight-500">
                              ເມືອງ:  {{$postestates[0]->district_name}} &ensp;ແຂວງ: {{$postestates[0]->province_name}}
                            </p>

                            @if($postestates[0]->property_mode == 1)
                            <p class="text-white mb-0">
                                <span class="fs-17 font-weight-bold">
                                  {{number_format($postestates[0]->sale_price)}}
                                </span>
                            </p>
                                @elseif($postestates[0]->property_mode == 2)
                            <p class="text-white mb-0">
                                <span class="fs-17 font-weight-bold">
                                  {{number_format($postestates[0]->rent_price)}}
                                </span>
                            </p>
                             @else
                             <p class="text-white mb-0">
                                <span class="fs-17 font-weight-bold">
                                  {{number_format($postestates[0]->rent_price)}}
                                  <br>
                                  {{number_format($postestates[0]->sale_price)}}
                                </span>
                            </p>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body px-6 py-4">
                  <h4 class="card-title fs-16 lh-2 text-dark mb-3">ໂພສຫຼ້າສຸດ</h4>
                  <ul class="list-group list-group-flush">
                 @foreach ($post_date as $item)
                    <li class="list-group-item px-0 pt-0 pb-3">
                      <div class="media">
                        <div class="position-relative mr-3">
                          <a href="{{route('sale_properties_detail',$item->post_id)}}"
                                             class="d-block w-100px rounded pt-11 bg-img-cover-center"
                                             @php
                                             $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                                             $images = explode('|',$image[0]->image);
                                        @endphp

                                             style="background-image: url('{{URL::to($images[0])}}')">
                          </a>
                          <a href="{{route('sale_properties_detail',$item->post_id)}}"
                                             class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
                                @if ($item->property_mode==1)
ຂາຍ
                                @else
ເຊົ່າ
                                @endif
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="fs-14 lh-186 mb-1">
                            <a href="{{route('sale_properties_detail',$item->post_id)}}"
                                                 class="text-dark hover-primary">
                         {{Str::limit($item->detail,10)}}
                            </a>
                          </h4>
                          <div class="text-gray-light">
                           {{$item->post_date}}
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mb-8 mb-lg-0 order-1 order-lg-2">
            <div class="row align-items-sm-center mb-6">
              <div class="col-md-6">

              </div>
              <div class="col-md-6 mt-6 mt-md-0">
                <div class="d-flex justify-content-md-end align-items-center">
                  <div class="input-group border rounded input-group-lg w-auto bg-white mr-3">
                    <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                     for="inputGroupSelect01"><i
                                      class="fas fa-align-left fs-16 pr-2"></i>ຈັດລຽງຕາມ:</label>
                    <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                      data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                      id="inputGroupSelect01" name="sortby">
                      <option selected>ຂາຍດີທີ່ສຸດ</option>
                      <option value="1">ເຂົ້າເບິ່ງຫຼາຍທີ່ສຸດ</option>
                      <option value="2">ລາຄາ(ຕໍ່າຫາສູງ)</option>
                      <option value="3">ລາຄາ(ສູງຫາຕ່ຳ)</option>
                    </select>
                  </div>
                  <div class="d-none d-md-block">
                    <a class="fs-sm-18 text-dark opacity-2" href="#">
                      <i class="fas fa-list"></i>
                    </a>
                    <a class="fs-sm-18 text-dark ml-5" href="#">
                      <i class="fa fa-th-large"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                @if(!$select->isEmpty())
                @foreach($select as $item)

              <div class="col-md-6 mb-6">
                <div class="card border-0" data-animate="fadeInUp">
                  <div class="position-relative hover-change-image bg-hover-overlay rounded-lg card-img">
                    @php
                    $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                    $images = explode('|',$image[0]->image);
               @endphp
    <a href="Yes.html">
                <image src="{{URL::to($images[0])}}"class="card-img" style="height:200px">
  </a>
                    <div class="card-img-overlay d-flex flex-column">
                        @if ($item->property_mode==1)
                        <div><span class="badge badge-danger">ຂາຍ &ensp; {{$item->title}}</span></div>
                        @elseif($item->property_mode==2)
                        <div><span class="badge badge-primary">ໃຫ້ເຊົ່າ &ensp; {{$item->title}}</span></div>
                        @else
                        <div><span class="badge badge-primary">ຂາຍ-ເຊົ່າ &ensp; {{$item->title}}</span></div>
                        @endif

                      <div class="mt-auto d-flex hover-image">
                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">

                        </ul>
                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip"
                                              title="ເພິ່ມໃນສິ່ງທີ່ມັກ">
                            <a href="#" class="text-white fs-20 hover-primary">
                              <i class="far fa-heart"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-3 px-0 pb-1">
                    <h2 class="fs-16 mb-1"><a href="{{route('sale_properties_detail',$item->post_id)}}"
                                                        class="text-dark hover-primary">{{$item->title}}</a>
                    </h2>

                    <p class="font-weight-500 text-gray-light mb-0">ເມືອງ:&ensp;{{$item->district_name}},ແຂວງ: &ensp;{{$item->province_name}}</p>

                       @if($item->sale_price =="")

                       @else
                       <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                    ລາຄາຂາຍ:   {{number_format($item->sale_price)}} {{$item->rate_rent_price}}
                       </p>
                       @endif
                       @if($item->rent_price =="")

                       @else
                       <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                      ລາຄາເຊົ່າ: {{number_format($item->rent_price)}} {{$item->rate_rent_price}}
                       </p>
                       @endif
                  </div>
                </div>
              </div>
              @endforeach
              @else
              <h1 class="text-center">ບໍ່ພົບຂໍ້ມູນ<h1>
          @endif
              <div class="col-md-6 mb-6"></div>
        </div>
      </div>
    </section>

  </main>
@endsection
