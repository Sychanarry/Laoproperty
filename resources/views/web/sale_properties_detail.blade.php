@extends('web.index')
@section('content')
<main id="content">
      <section class="bg-white shadow-5 pb-1">
        <div class="container"><br>
          <div class="galleries position-relative" data-animate="zoomIn">
            <div class="position-absolute pos-fixed-top-right z-index-3">
              <ul class="list-inline pt-4 pr-5">
                <li class="list-inline-item mr-2">

              </li>
              <li class="list-inline-item">
              </li>
            </ul>
          </div>
          <div class="slick-slider slider-for"
			     data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-nav"}'>
            <div class="box">
              <div class="item item-size-3-2">
                <div class="card p-0 hover-change-image">
                    @php
                    $image = explode('|',$postimage->image);
                    $imagearray = $image[0];
                    @endphp
                    <image src="{{URL::to($imagearray)}}"  class="card-img" >
                </div>
              </div>
            </div>
          </div>
          <div class="slick-slider slider-nav mt-1 mx-n1 arrow-haft-inner"
			     data-slick-options='{"slidesToShow": 6, "autoplay":false,"dots":false,"arrows":true,"asNavFor": ".slider-for","focusOnSelect": true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow": 4,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 4,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false}}]}'>
                 @foreach ($images as $item)
                 <div class="box pb-6 px-0">
              <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                {{-- <image src="{{URL::to($images)}}" class="h-100 w-100 rounded-lg" > --}}
                    <image src="{{URL::to($item)}}" class="h-100 w-100 rounded-lg" >
                {{-- <img src="{{asset('assets/vendors/images/single-property-sm-7.jpg')}}" alt="Gallery 01"
						     class="h-100 w-100 rounded-lg"> --}}
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </div>
    </section>
    <div class="primary-content bg-gray-01 pt-7 pb-12">
      <div class="container">
        <div class="row">
          <article class="col-lg-8">
            <section class="pb-8 px-6 pt-6 bg-white rounded-lg">
              <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
                @if($postestates[0]->property_mode =="1")
                <li class="list-inline-item badge badge-danger mr-3 fontfamily">ສຳລັບຂາຍ</li>
                @elseif($postestates[0]->property_mode =="2")
                <li class="list-inline-item badge badge-primary mr-3 fontfamily">ສຳລັບເຊົ່າ</li>
                @else
                <li class="list-inline-item badge badge-primary mr-3 fontfamily">ສຳລັບຂາຍ ຫຼື ເຊົ່າ</li>
                @endif

                <li class="list-inline-item mr-2 mt-2 mt-sm-0 fontfamily">
                    <i class="fal fa-clock mr-1"></i>ວັນທີໂພສ: {{date('d/m/Y',strtotime($postestates[0]->post_date))}}
               &ensp; &ensp; &ensp;&ensp;&ensp;<span><i class="fal fa-eye mr-1"></i>ຍອດວິວ: {{$postestates[0]->view}}</span>&ensp;ວິວ
                </li>
              </ul>
              <div class="d-sm-flex justify-content-sm-between">
                <div>
                  <h2 class="fs-35 font-weight-600 lh-15 text-heading fontfamily">{{$postestates[0]->title}}</h2>
                  <p class="mb-0 fontfamily"><i class="fal fa-map-marker-alt mr-2 "></i>ເມືອງ:{{$postestates[0]->district_name}},ແຂວງ: {{$postestates[0]->province_name}}</p>
                </div>
                <div class="mt-2 text-lg-right">
                </div>
                <p class="fs-22 text-heading font-weight-bold mb-0 fontfamily">ລາຄາຂາຍ: {{number_format($postestates[0]->sale_price)}}&ensp;{{$postestates[0]->rate_sale_price}} <br>
                    ລາຄາເຊົ່າ: {{number_format($postestates[0]->rent_price)}}&ensp;{{$postestates[0]->rate_rent_price}}
                </p>

              </div>

              <h4 class="fs-22 text-heading mt-6 mb-2 fontfamily">ລາຍລະອຽດ</h4>
              <p class="mb-0 lh-214 fontfamily">{{$postestates[0]->detail}}.</p>
            </section>
            @if($postestates[0]->type_id =="5" || $postestates[0]->type_id =="6" || $postestates[0]->type_id =="7")
            <section class="mt-2 pb-3 px-6 pt-5 bg-white rounded-lg fontfamily">
                <h4 class="fs-22 text-heading mb-6">ລາຍລະອຽດເພີ່ມເຕີມ</h4>
                <div class="row">
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                          <i class="fas fa-chart-area fa-3x"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ເນື້ອທີ່ດິນ:</h5>
                        @if($postestatedetail[0]->land_area)
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{$postestatedetail[0]->land_area}} &ensp; ແມັດ</p>
                        @else
                        <p class="mb-0 fs-13 font-weight-bold text-heading">0 X 0 &ensp; ແມັດ</p>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            @else
            <section class="mt-2 pb-3 px-6 pt-5 bg-white rounded-lg fontfamily">
                <h4 class="fs-22 text-heading mb-6">ລາຍລະອຽດເພີ່ມເຕີມ</h4>
                <div class="row">
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                          <i class="fas fa-bed fa-3x"></i>
                      </div>
                      <div class="media-body">
                        @if($postestatedetail[0]->bedroom)
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຫ້ອງນອນ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{$postestatedetail[0]->bedroom}}&ensp; ຫ້ອງ</p>
                          @else
                          <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຫ້ອງນອນ</h5>
                          <p class="mb-0 fs-13 font-weight-bold text-heading">0 &ensp; ຫ້ອງ</p>
                          @endif

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                       <i class="fas fa-bath fa-3x"></i>
                      </div>
                      <div class="media-body">
                        @if($postestatedetail[0]->bathroom)
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຫ້ອງນ້ຳ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{$postestatedetail[0]->bathroom}} &ensp; ຫ້ອງ</p>
                        @else
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຫ້ອງນ້ຳ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">0 &ensp; ຫ້ອງ</p>
                        @endif

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                          <i class="fas fa-warehouse fa-3x"></i>
                      </div>
                      <div class="media-body">
                        @if($postestatedetail[0]->car_space)
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຈອດລົດ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{$postestatedetail[0]->car_space}} &ensp; ຄັນ</p>
                        @else
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຈອດລົດ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">0 &ensp; ຄັນ</p>
                        @endif

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                        <i class="fas fa-level-up-alt fa-3x"></i>
                      </div>
                      <div class="media-body">
                        @if($postestatedetail[0]->floor_level)
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຊັ້ນທີ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{$postestatedetail[0]->floor_level}}</p>
                        @else
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຊັ້ນທີ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">0</p>
                        @endif

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                          <i class="fas fa-chart-area fa-3x"></i>
                      </div>
                      <div class="media-body">
                        @if($postestatedetail[0]->floor_area)
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ເນື້ອທີ່ຊັ້ນ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{$postestatedetail[0]->floor_area}} &ensp; ແມັດ</p>
                        @else
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ເນື້ອທີ່ຊັ້ນ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">0 x 0 &ensp; ແມັດ</p>
                        @endif

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                          <i class="fas fa-building fa-3x"></i>
                      </div>
                      <div class="media-body">
                        @if($postestatedetail[0]->total_floor)
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຊັ້ນທັງໝົດ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{$postestatedetail[0]->total_floor}}</p>
                        @else
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ຊັ້ນທັງໝົດ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">0 ຊັ້ນ</p>
                        @endif

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-4 mb-6">
                    <div class="media">
                      <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                          <i class="fab fa-y-combinator fa-3x"></i>
                      </div>
                      <div class="media-body">
                        @if($postestatedetail[0]->completion_year)
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ປີປຸກສ້າງ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">{{date('Y',strtotime($postestatedetail[0]->completion_year))}}</p>
                        @else
                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">ປີປຸກສ້າງ</h5>
                        <p class="mb-0 fs-13 font-weight-bold text-heading">.....</p>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            @endif
            @if($postestates[0]->type_id =="5" || $postestates[0]->type_id =="6" || $postestates[0]->type_id =="7" )

             @else

            <section class="mt-2 pb-7 px-6 pt-5 bg-white rounded-lg fontfamily">
              <h4 class="fs-22 text-heading mb-4 ">ສິ່ງອຳນວຍຄວາມສະດວກ</h4>
              <ul class="list-unstyled mb-0 row no-gutters">
                  @if ($postestatedetail[0]->air_conditioning)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ເຄື່ອງປັບອາກາດ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->hot_water)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ເຄື່ອງປັບນ້ຳອຸ່ນ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->furniture)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ເຟີນີເຈີ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->balcony)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ລະບຽງ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->security)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ລະບົບຄວາມປອດໄພ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->gym_center)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ສະຖານທີ່ອອກກຳລັງກາຍ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->swimming_pool)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ສະລອຍນ້ຳ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->lift)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ມີລິບ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->on_main_road)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ມີເສັ້ນທາງໃຫຍ່</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->garden)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ມີສວນ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->ideal_for_investors)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ມີການລົງທືນ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->expat_friendly)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ເປັນມິດກັບຄົນຕ່າງປະເທດ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->close_to_park)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ໃກ້ກັບສ່ວນສາທາລະນະ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->close_to_school)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ໃກ້ກັບໂຮງຮຽນ</li>
                  @else

                  @endif
                  @if ($postestatedetail[0]->close_to_shop)
                  <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>ໃກ້ກັບຮ້ານຄ້າ</li>
                  @else

                  @endif
              </ul>
            </section>
            @endif
            @if($postimage->video_link =="")
            @else
            <section class="py-6 border-bottom fontfamily">
                <h4 class="fs-22 text-heading mb-6">ວີດີໂອ</h4>
                <iframe height="430"
                        src="https://www.youtube.com/embed/{{$postimage->video_link}}"
                              allowfullscreen="" class="w-100"></iframe>
                 <h4 class="fs-22 text-heading mb-6">ຄຳອະທິບາຍວິດີໂອ</h4>
                 <p>{{$postimage->video_link}}</p>
              </section>
              @endif
              <section class="py-6 border-bottom fontfamily">
                <h4 class="fs-22 text-heading mb-6">ແຜນທີ່</h4>
                <div class="position-relative">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2682.490598892659!2d102.63445708654734!3d18.0430816314005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31245d3b3d08b2f7%3A0x72dbccb62d358314!2sDongdok%20Campus%20Market!5e0!3m2!1sen!2sla!4v1639991999482!5m2!1sen!2sla"
                            style="width:100%;height:230px;border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                  <p class="mb-0 p-3 bg-white shadow rounded-lg position-absolute pos-fixed-bottom mb-4 ml-4 lh-17 z-index-2">
                    62 Gresham St, Victoria Park <br/>
                     WA 6100, Australia</p>
                </div>
              </section>






            <section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg fontfamily">
              <div class="card border-0">
                <div class="card-body p-0">
                    <h2 class="fs-35 font-weight-600">ສົ່ງຂໍ້ຄວາມຫາພວກເຮົາ</h2>
                  <form action="{{route('commentcreate')}}"  method="POST" class="form fontfamily">
                    @csrf
                    <div class="form-group mb-4 d-flex justify-content-start">
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group mb-4">
                          <input placeholder="ຊື່" class="form-control form-control-lg border-0"required  type="search" name="name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-4">
                          <input type="search" placeholder="ເບີໂທລະສັບ"  required name="tel" class="form-control form-control-lg border-0">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-6">
                      <textarea class="form-control form-control-lg border-0" required placeholder="ເນື້ອໃນ" name="message" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary px-10">ສົ່ງ</button>
                  </form>
                </div>
              </div>
            </section>

</article>
<aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
    <div class="primary-sidebar-inner">
      <div class="card border-0 widget-request-tour bg-transparent">
        <ul class="nav nav-tabs d-flex" role="tablist">
          <li class="nav-item">
            <a class="nav-link active px-3 fontfamily" data-toggle="tab" href="#schedule" role="tab"
                       aria-selected="true">ການນັດໝາຍ</a>
          </li>

        </ul>
        <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0 bg-white">
          <form action="{{route('addappointment')}}" method="POST" class="form fontfamily">
            @csrf
            <div class="tab-content pt-1 pb-0 px-0 shadow-none">
              <div class="tab-pane fade show active" id="schedule" role="tabpanel">


                <div class="form-group mb-2">
                  <div class="input-group input-group-lg bootstrap-timepicker timepicker">
                    <input type="text" name="appointment_time"class="form-control border-0 text-body shadow-none"
                                           placeholder="Choose a time">
                    <div class="input-group-append input-group-addon">
                      <button class="btn bg-input shadow-none fs-18 lh-1" type="button"><i
                                                class="fal fa-angle-down"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-2">
                    <input type="date" class="form-control form-control-lg border-0"
                            name="appointment_date"    required="required"        >
                  </div>
                <div class="form-group mb-2">
                  <input type="text" class="form-control form-control-lg border-0"
                  required="required"          name="nameandlastname" placeholder="ຊື່ ແລະ ນາມສະກຸນ">
                </div>
                <div class="form-group mb-2">
                  <input type="email" class="form-control form-control-lg border-0"
                  required="required"
                   name="appointment_email" placeholder="example@gmail.com">
                </div>
                <div class="form-group mb-4">
                  <input type="tel"
                  name="appointment_tel" class="form-control form-control-lg border-0"
                  required="required"
                  placeholder="ເບີໂທລະສັບ">
                </div>
                <div class="form-group mb-4">
                   <textarea name="appointment_content" id="" cols="30" rows="5"
                   class="form-control form-control-lg border-0" placeholder="ລາຍລະອຽດການນັດໝາຍ"
                   required="required" ></textarea>
                  </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block rounded">ເຮັດການນັດໝາຍ</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </aside>
        </div>
      </div>
    </div>
    {{-- <section>
      <div class="d-flex bottom-bar-action bottom-bar-action-01 py-2 px-4 bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none">
        <div class="media align-items-center">
          <img src="{{asset('assets/vendors/images/irene-wallace.png')}}" alt="Irene Wallace" class="mr-4 rounded-circle">
          <div class="media-body">
            <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
            <span class="fs-13 lh-2">Sales Excutive</span>
          </div>
        </div>
        <div class="ml-auto">
          <button type="button" class="btn btn-primary fs-18 p-2 lh-1 mr-1 mb-1 shadow-none" data-toggle="modal" data-target="#modal-messenger"><i class="fal fa-comment"></i></button>
          <a href="tel:(+84)2388-969-888" class="btn btn-primary fs-18 p-2 lh-1 mb-1 shadow-none" target ="_blank"><i class="fal fa-phone"></i></a>
        </div>
      </div>
      <div class="modal fade" id="modal-messenger" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header border-0 pb-0">
              <h4 class="modal-title text-heading" id="exampleModalLabel">Contact Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pb-6">
              <div class="form-group mb-2">
                <input type="text" class="form-control form-control-lg border-0" placeholder="First Name, Last Name">
              </div>
              <div class="form-group mb-2">
                <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email">
              </div>
              <div class="form-group mb-2">
                <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone">
              </div>
              <div class="form-group mb-2">
                <textarea class="form-control border-0" rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
              </div>
              <div class="form-group form-check mb-4">
                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                <label class="form-check-label fs-13" for="exampleCheck3">Egestas fringilla phasellus faucibus scelerisque eleifend donec.</label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request Info</button>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
  </main>
  @endsection
