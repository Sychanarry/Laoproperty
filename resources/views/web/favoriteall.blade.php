@extends('web.index')

@section('content')

    <section class="py-11">
        @if(!$postimage->isEmpty())
        <div class="container">
            <p
                class="text-primary font-weight-500 letter-spacing-263 text-center text-uppercase mb-5 fontfamily fontweight">
               ສິ່ງທີ່ບັນທຶກ</p>
            <h2 class="text-dark text-center mb-8"></h2>
            <div class="row">
                @foreach ($postimage as $item)
                    <a href="{{ route('sale_properties_detail', $item->post_id) }}">
                        <div class="col-lg-4 col-sm-6 mb-6 fontfamily" data-animate="zoomIn">

                            <div class="card shadow-hover-1">

                                <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    @php
                                        $images = explode('|', $item->image);
                                        $imagearray = $images[0];
                                    @endphp
                                    <image src="{{ URL::to($imagearray) }}" style="height: 200px;width:100%">

                                        <div class="card-img-overlay p-2 d-flex flex-column">
                                            @php
                                                $postestates = DB::table('post_estates')
                                                    ->join('provinces', 'provinces.id', '=', 'post_estates.province_id')
                                                    ->join('districts', 'districts.district_id', '=', 'post_estates.district_id')
                                                    ->select('post_estates.*', 'provinces.*', 'districts.*')
                                                    ->where('post_id', $item->post_id)
                                                    ->get();
                                            @endphp
                                            <div>
                                                @if ($postestates[0]->property_mode == '1')
                                                    <span class="badge badge-danger mr-2">ສຳລັບຂາຍ</span>
                                                @elseif($postestates[0]->property_mode == '2')
                                                    <span class="badge badge-indigo mr-2">ສຳລັບເຊົ່າ</span>
                                                @else
                                                    <span class="badge badge-indigo mr-2">ສຳລັບຂາຍ ຫຼື ເຊົ່າ</span>
                                                @endif
                                            </div>
                                            <ul class="list-inline mb-0 mt-auto hover-image">
                                                <li class="list-inline-item mr-2 fontfamily" data-toggle="tooltip"
                                                    title="ເບິ່ງ">
                                                    <a href="{{ route('sale_properties_detail', $item->post_id) }}"
                                                        class="text-white hover-primary">
                                                        <i class="far fa-images fontfamily"></i><span
                                                            class="pl-1">ເບິ່ງ</span>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-footer bg-transparent ">
                                    <h2 class="fs-25 font-weight-bold text-heading mb-0"> <a
                                            href="{{ route('sale_properties_detail', $item->post_id) }}"
                                            class="text-dark hover-primary">{{ $postestates[0]->title }}</a></h2>
                                    <p class="fs-10 font-weight-bold text-heading mb-0">
                                        ເມືອງ:{{ $postestates[0]->district_name }},
                                        ແຂວງ:{{ $postestates[0]->province_name }}</p>
                                    @php
                                        $postestatedetail = DB::table('post_estate_details')
                                            ->select('post_estate_details.*')
                                            ->where('post_id', $item->post_id)
                                            ->get();
                                    @endphp
                                    <p class="fs-10 font-weight-bold text-heading mb-0">ມື້ໂພສ
                                        {{ date('d/m/Y', strtotime($postestates[0]->post_date)) }}</p>
                                    @if ($postestates[0]->sale_price && $postestates[0]->rent_price)
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາຂາຍ:
                                            {{ number_format($postestates[0]->sale_price) }}
                                            {{ $postestates[0]->rate_sale_price }}
                                        </p>
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາເຊົ່າ:
                                            {{ number_format($postestates[0]->rent_price) }}
                                            {{ $postestates[0]->rate_rent_price }}
                                        </p>
                                    @elseif($postestates[0]->sale_price)
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາຂາຍ:
                                            {{ number_format($postestates[0]->sale_price) }}
                                            {{ $postestates[0]->rate_sale_price }}
                                        </p>
                                    @elseif($postestates[0]->rent_price)
                                        <p class="fs-10 font-weight-bold text-heading mb-0">ລາຄາເຊົ່າ:
                                            {{ number_format($postestates[0]->rent_price) }}
                                            {{ $postestates[0]->rate_rent_price }}
                                        </p>
                                    @else
                                        <p class="fs-17 font-weight-bold text-heading mb-0">ລາຄາ:
                                            {{ number_format($postestates[0]->sale_price) }}
                                            {{ $postestates[0]->rate_sale_price }}
                                        </p>
                                    @endif
                                    <div class="row favorite_data">
                                        <div class="col-12 text-end">

                                            @php
                                                $session_id = Session()->get('registerId');
                                                $post_id = DB::table('hearts')
                                                    ->select('post_id')
                                                    ->where('user_id', $session_id)
                                                    ->get();

                                                foreach ($post_id as $post_id_foreach) {
                                                    $post_id_foreach->post_id . '<br>';
                                                }
                                            @endphp

                                            @if (!Session()->has('registerId'))
                                            @else



                                                    <img src="{{ asset('image/heart.png') }}" id="#1"
                                                    class="nav-toggle" style="width: 30px;height:30px"
                                                    onclick="getaxios('{{ $item->post_id }}')">
                                                <input type="hidden" id="1">
                                            @endif
                                            <a href="{{ route('sale_properties_detail', $item->post_id) }}">
                                                ເບິ່ງລາຍລະອຽດ
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                    </a>
            </div>
            </a>
            @endforeach
         @else
            <h1 style="text-align: center;font-family:phetsarath OT">ບໍ່ມີສິ່ງທີ່ບັນທຶກ</h1>
         @endif

@endsection
