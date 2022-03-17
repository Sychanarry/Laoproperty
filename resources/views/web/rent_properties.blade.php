@extends('web.index')
@section('content')
<br>
<div class="container container-xxl fontfamily">
    @if ($postestates1->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ຫ້ອງແຖວ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates1 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach

    </div>

    <hr>
    @endif

    @if ($postestates2->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ເຮືອນວິນລາ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates2 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>
  <hr>
    @endif
    @if ($postestates3->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ເຮືອນພ້ອມດິນ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates3 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>
  <hr>
    @endif

    @if ($postestates4->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ຮ້ານຂາຍເຄື່ອງ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates4 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach

    </div>
  <hr>
    @endif

    @if ($postestates5->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ທີ່ດິນ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates5  as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>

  <hr>
    @endif
    @if ($postestates6->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ທີ່ດິນການຄ້າ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates6 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>
  <hr>
    @endif

    @if ($postestates7->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ທີ່ດິນສ່ວນ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates7 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>
  <hr>
    @endif

    @if ($postestates8->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ໂຮງແຮມ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates8 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>
  <hr>
    @endif

    @if ($postestates9->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ຫ້ອງການ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates9 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>
  <hr>
    @endif
    @if ($postestates10->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ສາງ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates10 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບຂາຍ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach
    </div>

  <hr>
    @endif

    @if ($postestates10->isEmpty())

    @else
    <div class="row flex-lg-row flex-cloumn">
        <div class="col-lg-5 col-xxl-6">
          <h2 class="text-heading fontfamily">ໂຮງງານ</h2>
          <span class="heading-divider"></span>
          <p class="mb-7"></p>
        </div>
      </div>

     {{-- Apartment --}}

     <div class="row">
        @foreach($postestates11 as $item)
        <div class="col-xxl-2 col-lg-2 col-md-6 mb-6" data-animate="zoomIn">
            <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                @php
                $image = DB::table('post_estate_images')->where('post_id',$item->post_id)->get();
                $images = explode('|',$image[0]->image);
           @endphp

            <image src="{{URL::to($images[0])}}"class="card-img" style="width:200px;height:200px">

              {{-- <img src="http://localhost:8000/assets/vendors/images/properties-grid-08.jpg" class="card-img"
                           alt="Villa on Hollywood Boulevard"> --}}
              <div class="card-img-overlay d-flex flex-column position-relative-sm">
                <div class="d-flex">
                  <div class="mr-auto h-24 d-flex">
                    <span class="badge badge-primary mr-2">ສຳລັບເຊົ່າ</span>
                  </div>
                  <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                    <li class="list-inline-item">
                      <a href="#"
                                         class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white"
                                         data-toggle="tooltip" title="Wishlist">
                        <i class="far fa-heart"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="text-left mt-2">
               <h5>ຫົວຂໍ້: {{$item->title}}</h5>
            </div>
            <div class="footer text-right">
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{url('rent_properties_detail/'.$item->post_id)}}">ລາຍລະອຽດ</a>
            </div>
        </div>
          @endforeach

    </div>
    @endif

</div>

@endsection
