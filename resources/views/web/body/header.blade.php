<header class="main-header navbar-light header-sticky header-sticky-smart header-mobile-lg fontfamily">
    <div class="sticky-area">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg px-0">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('image/laoproperty.PNG')}}" alt="LAO_property"
                       class="d-none d-lg-inline-block">
            <img src="{{asset('image/Lao_property.png')}}" alt="HomeID"
                       class="d-inline-block d-lg-none">
          </a>
          <div class="d-flex d-lg-none ml-auto">

            @if(!Session()->has('registerId'))
            @else
              <a class=" text-white dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2"
       href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               ສິ່ງທີ່ມັກ
              </a>
              <div class="dropdown-menu dropdown-sm dropdown-menu-right">
                <a class="dropdown-item" href="{{route('favoriteall')}}">
                    <i class="fas fa-heart"></i> &ensp;
                  ບັນທຶກສິ່ງທີ່ມັກ</a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-bookmark"></i> &ensp;
                  ບັນທືກສິ່ງທີ່ຄົ້ນຫາ</a>
              </div>

              <a class=" text-white mr-md-2 pr-2 pl-0 pl-lg-2"
              href="{{route('logout')}}" onclick="return confirm('ທ່ານຕ້ອງການອອກຈາກລະບົບແທ້ບໍ່?')">
           <span><i class="fa fa-power-off text-danger" aria-hidden="true"></i></span>
              </a>
              @endif
            <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse"
                          data-target="#primaryMenu01"
                          aria-controls="primaryMenu01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
            </button>
          </div>
          <div class="collapse navbar-collapse mt-3 mt-lg-0 mx-auto flex-grow-0  " id="primaryMenu01">
            <ul class="navbar-nav hover-menu main-menu px-0 mx-lg-n4 ">
              <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-5">
      <a class="nav-link dropdown-toggle p-0 font-weight-bold"
      href="{{route('sale_properties')}}?province_id=&district_id=&type_id=&property_mode=1"  >
               ຊື້
             </a>

                <ul class="dropdown-menu pt-3 pb-0 pb-lg-3" aria-labelledby="navbar-item-home">
                    <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=1&property_mode=1" >
                         ເຮືອນຫ້ອງແຖວ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=2&property_mode=1">
                         ເຮືອນວິນລາ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=3&property_mode=1" >
                         ເຮືອນແລະດິນ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=4&property_mode=1">
                        ຮ້ານຂາຍເຄື່ອງ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=5&property_mode=1">
                        ທີ່ດິນ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=6&property_mode=1">
                        ທີ່ດິນການຄ້າ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=7&property_mode=1" >
                         ທີ່ດິນສ່ວນ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=8&property_mode=1">
                       ໂຮງແຮມ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=9&property_mode=1">
                        ຫ້ອງການ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=10&property_mode=1">
                        ສາງ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=11&property_mode=1">
                         ໂຮງງານ
                        </a>
                      </li>
                </ul>
              </li>
              <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-5">
      <a class="nav-link dropdown-toggle p-0 font-weight-bold"
      href="{{route('sale_properties')}}?province_id=&district_id=&type_id=&property_mode=2"  >
               ເຊົ່າ
             </a>

                <ul class="dropdown-menu pt-3 pb-0 pb-lg-3" aria-labelledby="navbar-item-home">
                    <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=1&property_mode=2">
                         ເຮືອນຫ້ອງແຖວ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=2&property_mode=2" >
                         ເຮືອນວິນລາ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=3&property_mode=2">
                         ເຮືອນແລະດິນ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=4&property_mode=2">
                        ຮ້ານຂາຍເຄື່ອງ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=5&property_mode=2" >
                        ທີ່ດິນ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=6&property_mode=2">
                        ທີ່ດິນການຄ້າ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=7&property_mode=2">
                         ທີ່ດິນສ່ວນ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=8&property_mode=2">
                       ໂຮງແຮມ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=9&property_mode=2" >
                        ຫ້ອງການ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=10&property_mode=2" >
                        ສາງ
                        </a>
                      </li>
                      <li class="dropdown-item">
                        <a id="navbar-link-dashboard"
                     class="dropdown-link"
                     href="{{route('sale_properties')}}?province_id=&district_id=&type_id=11&property_mode=2" >
                         ໂຮງງານ
                        </a>
                      </li>
                </ul>
              </li>
              <li id="navbar-item-dashboard" aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                <a class="nav-link  p-0 font-weight-bold"
         href="{{route('news')}}"  >
                  ຂ່າວ
                  <span class="caret"></span>
                </a>

              </li>
              <li id="navbar-item-dashboard" aria-haspopup="true" aria-expanded="false"
              class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                        <a class="nav-link  p-0 font-weight-bold"
                 href="{{route('agent')}}"  >
                          ຕົວແທນ
                          <span class="caret"></span>
                        </a>

                      </li>
                      <li id="navbar-item-dashboard" aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                <a class="nav-link  p-0 font-weight-bold"
         href="{{route('agency')}}" >
                 ໜ່ວຍງານ
                  <span class="caret"></span>
                </a>

              </li>
              <li id="navbar-item-dashboard" aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                <a class="nav-link  p-0 font-weight-bold"
         href="{{route('contact_us')}}"  >
                 ຕິດຕໍ່ພວກເຮົາ
                  <span class="caret"></span>
                </a>

              </li>
              <li id="navbar-item-dashboard" aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                <a class="nav-link  p-0 font-weight-bold"
         href="{{route('about_us')}}"  >
                  ກ່ຽວກັບພວກເຮົາ
                  <span class="caret"></span>
                </a>

              </li>
              <li id="navbar-item-dashboard" aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown py-2 py-lg-5 px-0 px-lg-4">
                <a class="nav-link  p-0 font-weight-bold"
         href="#" data-toggle="dropdown" >
                 ເພີ່ມເຕີມ
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu pt-3 pb-0 pb-lg-3" aria-labelledby="navbar-item-dashboard">
                  <li class="dropdown-item">
                    <a id="navbar-link-dashboard "
                 class="dropdown-link font-weight-bold"
                 href="#" >
                 ແຫຼ່ງລວມຄວາມຮູ້ຊື້ຂາຍເຊົ່າ
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a id="navbar-link-dashboard "
                 class="dropdown-link font-weight-bold"
                 href="#" >
                 ຄູ່ມືຊື້ຂາຍ
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a id="navbar-link-dashboard "
                 class="dropdown-link font-weight-bold"
                 href="#" >
                ອະຫັງສາໃນຕ່າງປະເທດ
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a id="navbar-link-dashboard "
                 class="dropdown-link font-weight-bold"
                 href="#" >
                 ຖາມຜູ້ຮູ້
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a id="navbar-link-dashboard "
                 class="dropdown-link font-weight-bold"
                 href="#" >
                 ລົງປະກາດ
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a id="navbar-link-dashboard "
                 class="dropdown-link font-weight-bold"
                 href="#" >
                ແພັກເກັດສຳລັບຕົວແທນ
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="d-block d-lg-none">
              <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap py-2"
              ria-labelledby="navbar-item-dashboard" >
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2 font-weight-bold"
         href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ພາສາ
                  </a>
                  <div class="dropdown-menu dropdown-sm dropdown-menu-left">
                    <a class="dropdown-item font-weight-bold" href="#">
                         <img src="{{asset('image/la_lang.gif')}}" alt="LAO_FLAG" class="normal-logo">
                         &ensp;
                         ລາວ
                        </a>
                    <a class="font-weight-bold dropdown-item" href="#">
                         <img src="{{asset('image/en_lang.gif')}}" alt="en_FLAG" class="normal-logo">
                        &ensp;
                         EN
                        </a>
                </div>


                </li>
                @if(!Session()->has('registerId'))

                <li class="nav-item">
                  <a class="nav-link font-weight-bold px-2" data-toggle="modal" href="#login-sigin-modal">ເຂົ້າສູ່ລະບົບ</a>
                </li>
                @else
                @endif
              </ul>
            </div>
          </div>
          <div class="d-none d-lg-block">
            <ul class="navbar-nav flex-row justify-content-lg-end d-flex flex-wrap text-body py-2">
                <li class="nav-item dropdown">
                    <a class="font-weight-bold nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2"
             href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     ພາສາ
                    </a>
                    <div class="dropdown-menu dropdown-sm dropdown-menu-right">
                        <a class="font-weight-bold dropdown-item" href="#">
                             <img src="{{asset('image/la_lang.gif')}}" alt="LAO_FLAG">
                             &ensp;
                             ລາວ
                            </a>
                        <a class="font-weight-bold dropdown-item" href="#">
                             <img src="{{asset('image/en_lang.gif')}}" alt="en_FLAG">
                            &ensp;
                             EN
                            </a>
                    </div>
                  </li>
                  @if(!Session()->has('registerId'))
                    <li class="nav-item">
                        <a class=" font-weight-bold nav-link  px-2" data-toggle="modal" href="#login-sigin-modal" >ເຂົ້າສູ່ລະບົບ</a>
                      </li>
                      @else
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold mr-md-2 pr-2 pl-0 pl-lg-2"
             href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     ສິ່ງທີ່ມັກ
                    </a>
                    <div class="dropdown-menu dropdown-sm dropdown-menu-right">
                      <a class="dropdown-item font-weight-bold" href="{{route('favoriteall')}}">
                          <i class="fas fa-heart"></i> &ensp;
                        ບັນທຶກສິ່ງທີ່ມັກ</a>
                      <a class="dropdown-item font-weight-bold" href="#">
                        <i class="fas fa-bookmark "></i> &ensp;
                        ບັນທືກສິ່ງທີ່ຄົ້ນຫາ</a>

                    </div>

                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold mr-md-2 pr-2 pl-0 pl-lg-2"
             href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(session()->get('name'))
                    {{session()->get('name')}}
                    @else
                    {{session()->get('email')}}
                    @endif
                    </a>
                    <div class="dropdown-menu dropdown-sm dropdown-menu-right">
                      <a class="dropdown-item font-weight-bold" href="{{route('logout')}}"  onclick="return confirm('ທ່ານຕ້ອງການອອກຈາກລະບົບແທ້ບໍ່?')">
                        <i class="fa fa-power-off text-danger" aria-hidden="true"></i>&ensp;
                       ອອກຈາກລະບົບ</a>
                    </div>

                  </li>
                  {{-- <li class="nav-item">
                    <a class=" font-weight-bold nav-link  px-2"  href="{{route('logout')}}"
                    onclick="return confirm('ທ່ານຕ້ອງການອອກຈາກລະບົບແທ້ບໍ່?')">
                        <span><i class="fa fa-power-off text-danger" aria-hidden="true"></i></span> ອອກຈາກລະບົບ</a>
                  </li> --}}
                @endif
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
