
@extends('admin.index_master')
@section('content')
<div class="page-content">
    @include('admin.body.pagecontent')
    <main id="content" class=" fontfamily">
        <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
            <div class="mb-6">
                <h2 class="mb-0 text-heading fs-22 lh-15 fontfamily">ເພີ່ມຊັບສິນໃໝ່
                </h2>
            </div>
            <div class="collapse-tabs new-property-step">
                <ul class="nav nav-pills border py-2 px-3 mb-6 d-none d-md-flex mb-6" role="tablist">
                    <li class="nav-item col">
                        <a class="nav-link active bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="description-tab" data-toggle="pill" data-number="1." href="#description" role="tab" aria-controls="description" aria-selected="true"><span class="number">1.</span>
                            <strong class="fontweight"> ຄຳອະທິບາຍ</strong></a>
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="media-tab" data-toggle="pill" data-number="2." href="#media" role="tab" aria-controls="media" aria-selected="false"><span class="number">2.</span><strong class="fontweight"> ຮູບພາບ</strong></a>
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="location-tab" data-toggle="pill" data-number="3." href="#location" role="tab" aria-controls="location" aria-selected="false"><span class="number">3.</span><strong class="fontweight"> ຕຳແໜ່ງ</strong></a>
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="detail-tab" data-toggle="pill" data-number="4." href="#detail" role="tab" aria-controls="detail" aria-selected="false"><span class="number">4.</span> <strong class="fontweight">ລາຍລະອຽດ</strong></a>
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="amenities-tab" data-toggle="pill" data-number="5." href="#amenities" role="tab" aria-controls="amenities" aria-selected="false"><span class="number">5.</span><strong class="fontweight">
                                ສິ່ງອຳນວຍຄວາມສະດວກ</strong></a>
                    </li>
                </ul>
                <form action="{{ route('postestates.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="tab-content shadow-none p-0">
                        @csrf
                        <div id="collapse-tabs-accordion">
                            <div class="tab-pane tab-pane-parent fade show active px-0" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="card bg-transparent border-0">
                                    <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-description">
                                        <h5 class="mb-0">
                                            <button class="btn btn-lg collapse-parent btn-block border shadow-none fontfamily" data-toggle="collapse" data-number="1." data-target="#description-collapse" aria-expanded="true" aria-controls="description-collapse">
                                                <span class="number">1.</span> ລາຍລະອຽດຊັບສິນ
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="description-collapse" class="collapse show collapsible" aria-labelledby="heading-description" data-parent="#collapse-tabs-accordion">
                                        <div class="card-body py-4 py-md-0 px-0">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card mb-6">
                                                        <div class="card-body p-6">
                                                            <h3 class="card-title mb-0 text-heading fontfamily fs-22 lh-15">
                                                                ລາຍລະອຽດຊັບສິນ</h3>
                                                            <p class="card-text mb-5">
                                                                @if ($errors->any())
                                                            <div>
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                    <li class="text-danger fontfamily">
                                                                        {{ $error }}
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="form-group ">
                                                                        <label for="title" class="text-heading">ຫົວຂໍ້
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control form-control-lg border-0" id="title" name="title" value="{{old('title')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-1 col-xl-2 col-lg-2 col-md-2 col-sm-3 col-4">
                                                                    <div class="form-group  mb-md-0">
                                                                        <label for="exchange" class="text-heading">ສະກຸນເງິນ</label>
                                                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker" data-style="btn-lg py-2 h-52" name="rate_sale_price" id="mySelect2" onchange="myFunction2()">
                                                                            <option value="LAK">LAK</option>
                                                                            <option value="THB">THB</option>
                                                                            <option value="USD">USD</option>
                                                                            <option value="CNY">CNY</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-10 col-sm-9 col-8">
                                                                    <div class="form-group">
                                                                        <label for="sa" class="text-heading">ລາຄາຊື້(<span id="sale_exchange">LAK</span>)</label>
                                                                        <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "12"  class="form-control form-control-lg border-0" id="comment" name="sale_price" value="{{old('sale_price')}}">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-xxl-1 col-xl-2 col-lg-2 col-md-2 col-sm-3 col-4">
                                                                    <div class="form-group mb-md-0">
                                                                        <label for="exchange" class="text-heading">ສະກຸນເງິນ</label>
                                                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker" data-style="btn-lg py-2 h-52" name="rate_rent_price" id="mySelect" onchange="myFunction()">
                                                                            <option value="LAK">LAK</option>
                                                                            <option value="THB">THB</option>
                                                                            <option value="USD">USD</option>
                                                                            <option value="CNY">CNY</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-5 col-xl-4 col-lg-4 col-md-10 col-sm-9 col-8">
                                                                    <div class="form-group">
                                                                        <label for="title" class="text-heading">ລາຄາເຊົ່າ(<span id="rent_exchange">LAK</span>)</label>
                                                                        <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "12" class="form-control form-control-lg border-0" id="text1" name="rent_price" value="{{old('rent_price')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="title" class="text-heading">ມື້ໂພສ</label>
                                                                        <input type="date" id="today" class="form-control form-control-lg border-0" name="post_date" value="{{old('post_date')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="form-group ">
                                                                        <label for="title" class="text-heading">ມື້ເຜີຍແຜ່</label>
                                                                        <input type="date" class="form-control form-control-lg border-0" id="e" name="public_date" value="{{old('public_date')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="form-group mb-md-0">
                                                                        <label for="country" class="text-heading">ປະເພດ <span class="text-danger">*</span></label>
                                                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="ເລືອກປະເພດ" data-style="btn-lg py-2 h-52" id="property_mode" name="property_mode">
                                                                            <option value="">ເລືອກປະເພດ</option>
                                                                            <option value="1" {{((old('property_mode')==1))? "selected":""}}>ຂາຍ</option>
                                                                            <option value="2" {{((old('property_mode')==2))? "selected":""}}>ເຊົ່າ</option>
                                                                            <option value="3" {{((old('property_mode')==3))? "selected":""}}>ຂາຍ ແລະ ເຊົ່າ</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                                    <div class="form-group mb-md-0">
                                                                        <label for="country" class="text-heading">ປະເພດຊັບສິນ <span class="text-danger">*</span></label>
                                                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker" data-style="btn-lg py-2 h-52" id="type_id" name="type_id">
                                                                            <option value="">ເລືອກປະເພດຊັບສິນ</option>
                                                                            <option value="1" {{((old('type_id')==1))? "selected":""}}>ເຮືອນຫ້ອງແຖວ</option>
                                                                            <option value="2" {{((old('type_id')==2))? "selected":""}}>ເຮືອນວິນລາ</option>
                                                                            <option value="3" {{((old('type_id')==3))? "selected":""}}>ເຮືອນພ້ອມດິນ</option>
                                                                            <option value="4" {{((old('type_id')==4))? "selected":""}}>ຮ້ານຂາຍເຄື່ອງ</option>
                                                                            <option value="5" {{((old('type_id')==5))? "selected":""}}>ທີ່ດິນ</option>
                                                                            <option value="6" {{((old('type_id')==6))? "selected":""}}>ທີ່ດິນການຄ້າ</option>
                                                                            <option value="7" {{((old('type_id')==7))? "selected":""}}>ທີ່ດິນສວນ</option>
                                                                            <option value="8" {{((old('type_id')==8))? "selected":""}}>ໂຮງແຮມ</option>
                                                                            <option value="9" {{((old('type_id')==9))? "selected":""}}>ຫ້ອງການ</option>
                                                                            <option value="10" {{((old('type_id')==10))? "selected":""}}>ສາງ</option>
                                                                            <option value="11" {{((old('type_id')==11))? "selected":""}}>ໂຮງງານ</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-0">
                                                                <label for="description-01" class="text-heading fontfamily">ລາຍລະອຽດຊັບສິນ</label>
                                                                <textarea class="form-control border-0" rows="5" name="detail" id="description-01"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-lg btn-primary next-button">ຕໍ່ໄປ
                                                    <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tab-pane-parent fade px-0" id="media" role="tabpanel" aria-labelledby="media-tab">
                                <div class="card bg-transparent border-0">
                                    <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-media">
                                        <h5 class="mb-0">
                                            <button class="btn btn-lg collapse-parent btn-block border shadow-none" data-toggle="collapse" data-number="2." data-target="#media-collapse" aria-expanded="true" aria-controls="media-collapse">
                                                <span class="number">2.</span> ຮູບພາບ
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="media-collapse" class="collapse collapsible" aria-labelledby="heading-media" data-parent="#collapse-tabs-accordion">
                                        <div class="card-body py-4 py-md-0 px-0">
                                            <div class="row">
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="card mb-6 ">
                                                        <div class="card-body p-6">
                                                            <center>
                                                                <input type="file" id="file-input" name="image[]" accept="image/png, image/jpeg" onchange="preview()" multiple>
                                                                <label for="file-input" class="label">
                                                                    <i class="fas fa-upload"></i> &nbsp; ເລືອກຮູບພາບ
                                                                </label>
                                                                <p class="p" id="num-of-files">
                                                                    ທ່ານຍັງບໍ່ທັນເລືອກຮູບ</p>
                                                            </center>
                                                            <div class="row">
                                                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xxl-12 col-xl-12" id="images">

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="card mb-6">
                                                        <div class="card-body p-6">
                                                            <h3 class="card-title mb-0 text-heading fontfamily fs-22 lh-15">
                                                                ວີດີໂອຂອງທ່ານ
                                                            </h3>
                                                            <p class="card-text mb-5">

                                                            </p>
                                                            <div class="col-12">
                                                                <div class="form-group mb-md-0">
                                                                    <label for="video" class="text-heading">ລິ້ງວິດີໂອ(url)</label>
                                                                    <input type="text" name="video_link" class="form-control form-control-lg border-0" id="video" value="{{ old('video_link') }}">
                                                                </div>
                                                                <div class="form-group mb-md-0">
                                                                    <label for="video" class="text-heading">ຄຳອະທິບາຍ</label>
                                                                    <textarea name="video_description" id="" class="form-control" cols="30" rows="8">{{ old('video_description') }}</textarea>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                                    <span class="d-inline-block text-primary mr-2 fs-16"><i class="fal fa-long-arrow-left"></i></span>ກັບຄືນ
                                                </a>
                                                <button class="btn btn-lg btn-primary next-button mb-3">ຕໍ່ໄປ
                                                    <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tab-pane-parent fade px-0" id="location" role="tabpanel" aria-labelledby="location-tab">
                                <div class="card bg-transparent border-0">
                                    <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-location">
                                        <h5 class="mb-0">
                                            <button class="btn btn-block collapse-parent collapsed border shadow-none" data-toggle="collapse" data-number="3." data-target="#location-collapse" aria-expanded="true" aria-controls="location-collapse">
                                                <span class="number">3.</span> ຕຳແໜ່ງ
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="location-collapse" class="collapse collapsible" aria-labelledby="heading-location" data-parent="#collapse-tabs-accordion">
                                        <div class="card-body py-4 py-md-0 px-0">
                                            <div class="row">
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="card mb-6">
                                                        <div class="card-body p-6">
                                                            <h3 class="card-title mb-0 text-heading  fontfamily fs-22 lh-15">
                                                                ລາຍລະອຽດ
                                                            </h3>
                                                            <div class="form-group mb-md-0">
                                                                <label for="province_id" class="text-heading">ແຂວງ
                                                                </label>
                                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker " title="ເລືອກແຂວງ" data-style="btn-lg py-2 h-52" id="province_id" name="province_id">
                                                                    @foreach ($province as $province)

                                                                    <option value="{{$province->id}}" {{ (old('province_id', $province->id ?? null) == $province->id) ? "selected" : "" }}>{{$province->province_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-md-0">
                                                                <label for="district_id" class="text-heading">ເມືອງ
                                                                </label>
                                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker district" title="ເລືອກເມືອງ" data-style="btn-lg py-2 h-52" id="district_id" name="district_id">
                                                                    @foreach ($district as $district)
                                                                    <option value="{{$district->district_id}}" {{ (old('district_id', $district->district_id ?? null) == $district->district_id) ? "selected" : "" }}>{{$district->district_name}}</option>
                                                                    {{ $district->district_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group mb-md-0">
                                                                <label for="description_map" class="text-heading">ຄຳອະທິບາຍ</label>
                                                                <textarea name="description_map" id="" class="form-control" cols="30" rows="8">{{old('description_map')}}</textarea>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="card mb-6">
                                                        <div class="card-body p-6">
                                                            <h3 class="card-title mb-6 text-heading fs-22 lh-15 fontfamily">
                                                                ແຜນທີ່</h3>

                                                            <div class="map-responsive" id="map" style="width:100%;height:250px;border:0;">

                                                            </div>

                                                            <div class="form-row mx-n2">

                                                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2">

                                                                    <div class="form-group mb-md-0">
                                                                        <br>
                                                                        <label for="latitude" class="text-heading">Latitude</label>
                                                                        <input type="text" class="form-control form-control-lg border-0" id="lat" name="lat" value="{{ old('lat') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                                                    <div class="form-group mb-md-0">
                                                                        <br>
                                                                        <label for="longitude" class="text-heading">Longitude</label>
                                                                        <input type="text" class="form-control form-control-lg border-0" id="lng" name="lng" value="{{ old('lng') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                                    <span class="d-inline-block text-primary mr-2 fs-16"><i class="fal fa-long-arrow-left"></i></span>ກັບຄືນ
                                                </a>
                                                <button class="btn btn-lg btn-primary next-button mb-3">ຕໍ່ໄປ
                                                    <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tab-pane-parent fade px-0" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                                <div class="card bg-transparent border-0">
                                    <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-detail">
                                        <h5 class="mb-0">
                                            <button class="btn btn-block collapse-parent collapsed border shadow-none" data-toggle="collapse" data-number="4." data-target="#detail-collapse" aria-expanded="true" aria-controls="detail-collapse">
                                                <span class="number ">4.</span> ລາຍລະອຽດ
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="detail-collapse" class="collapse collapsible" aria-labelledby="heading-detail" data-parent="#collapse-tabs-accordion">
                                        <div class="card-body py-4 py-md-0 px-0">
                                            <div class="card mb-6">
                                                <div class="card-body p-6">
                                                    <h3 class="card-title mb-0 text-heading fs-22 lh-15 fontfamily">
                                                        ລາຍລະອຽດ</h3>
                                                    <div class="row">

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="bathroom" class="text-heading">ຈຳນວນຫ້ອງນອນ</label>
                                                                <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "2" class="form-control form-control-lg border-0" id="bedroom" name="bedroom" value="{{ old('bedroom')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="bathroom" class="text-heading">ຈຳນວນຫ້ອງນ້ຳ</label>
                                                                <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "2"  class="form-control form-control-lg border-0" id="bathroom" name="bathroom" value="{{ old('bathroom')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="floor_area" class="text-heading">ເນື້ອທີ່ຊັ້ນ(m<sup>2</sup>)</label>
                                                                <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "2" class="form-control form-control-lg border-0" id="floor_area" name="floor_area" value="{{ old('floor_area')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="car_space" class="text-heading">ຈຳນວນທີ່ຈອດລົດໄດ້</label>
                                                                <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "2"  class="form-control form-control-lg border-0" id="car_space" name="car_space" value="{{ old('car_space')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="land_area" class="text-heading">ເນື້ອທີ່ດິນ <span class="text-muted">(0x0)</span></label>
                                                                <input type="text" class="form-control form-control-lg border-0" id="land_area" name="land_area" value="{{ old('land_area')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="total_floor" class="text-heading">ຈຳນວນຊັ້ນທັງໝົດ </label>
                                                                <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "2" class="form-control form-control-lg border-0" id="total_floor" name="total_floor" value="{{ old('total_floor')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="floor_level" class="text-heading">ຊັ້ນທີ</label>
                                                                <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "2" class="form-control form-control-lg border-0" id="floor_level" name="floor_level" value="{{ old('floor_level')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">

                                                                <label for="completion_year" class="text-heading">ປີປຸກສ້າງ</label>
                                                                <input type="text" class="form-control form-control-lg border-0" name="completion_year" value="{{old('completion_year',date('Y',strtotime( now()->year )))}}">
                                                                <!-- <select name="completion_year" id="" class="form-control border-0 shadow-none form-control-lg selectpicker">
                                                <option value="{{ now()->year }}">
                                                    {{ now()->year }}
                                                </option>
                                                @foreach (range(date('1950'), date('2050')) as $y)
                                                <option value="{{$y}}">
                                                {{$y}}
                                                </option>

                                                @endforeach
                                            </select> -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-wrap">
                                                <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                                    <span class="d-inline-block text-primary mr-2 fs-16"><i class="fal fa-long-arrow-left"></i></span>ກັບຄືນ
                                                </a>
                                                <button class="btn btn-lg btn-primary next-button mb-3">ຕໍ່ໄປ
                                                    <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tab-pane-parent fade px-0" id="amenities" role="tabpanel" aria-labelledby="amenities-tab">
                                <div class="card bg-transparent border-0">
                                    <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-amenities">
                                        <h5 class="mb-0">
                                            <button class="btn btn-block collapse-parent collapsed border shadow-none" data-toggle="collapse" data-number="5." data-target="#amenities-collapse" aria-expanded="true" aria-controls="amenities-collapse">
                                                <span class="number">5.</span> ສິ່ງອຳນວຍຄວາມສະດວກ
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="amenities-collapse" class="collapse collapsible" aria-labelledby="heading-amenities" data-parent="#collapse-tabs-accordion">
                                        <div class="card-body py-4 py-md-0 px-0">
                                            <div class="card mb-6">
                                                <div class="card-body p-6">
                                                    <h3 class="card-title mb-0 text-heading fontfamily fs-22 lh-15">
                                                        ລາຍລະອຽດ</h3>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-lg-3">
                                                            <ul class="list-group list-group-no-border">
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="air_conditioning" {{ old('air_conditioning') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ເຄື່ອງປັບອາກາດ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="balcony" {{ old('balcony') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ລະບຽງ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="on_main_road" {{ old('on_main_road') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ມີເສັ້ນທາງໃຫຍ່</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="close_to_park" {{ old('close_to_park') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ໃກ້ກັບສວນສາທາລະນະ</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-3">
                                                            <ul class="list-group list-group-no-border">
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="hot_water" {{ old('hot_water') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ເຄື່ອງປັບນ້ຳອຸ່ນ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="gym_center" {{ old('gym_center') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ສະຖານທີອອກກຳລັງກາຍ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="garden" {{ old('garden') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ມີສວນ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="close_to_school" {{ old('close_to_school') == 'on' ? 'checked' : '' }}>

                                                                        <label class="">ໃກ້ກັບໂຮງຮຽນ</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-3">
                                                            <ul class="list-group list-group-no-border">
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="furniture" {{ old('furniture') == 'on' ? 'checked' : '' }}>
                                                                        <label class="" for="attic-02">ເຟີນີເຈີ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="swimming_pool" {{ old('swimming_pool') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ສະລອຍນ້ຳ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="ideal_for_investors" {{ old('ideal_for_investors') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ມີການລົງທືນ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="close_to_shop" {{ old('close_to_shop') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ໃກ້ກັບຮ້ານຄ້າ</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-3">
                                                            <ul class="list-group list-group-no-border">
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="security" {{ old('security') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ລະບົບຄວາມປອດໄພ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="lift" {{ old('lift') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ມີລິບ</label>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="" name="expat_friendly" {{ old('expat_friendly') == 'on' ? 'checked' : '' }}>
                                                                        <label class="">ເປັນມິດກັບຄົນຕ່າງປະເທດ</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                                    <span class="d-inline-block text-primary mr-2 fs-16"><i class="fal fa-long-arrow-left"></i></span>ກັບຄືນ
                                                </a>
                                                <button class="btn btn-lg btn-primary mb-3" type="submit">ບັນທຶກ
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
