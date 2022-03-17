@extends('admin.index_master')
@section('content')
<div class="page-content">
    @include('admin.body.pagecontent')
    <main id="content">
      <section>
        <div class="container-fluid">
          <div class="position-relative" data-animate="zoomIn">
            <div class="position-absolute pos-fixed-top-right z-index-3">
              <ul class="list-inline pt-4 pr-5">
                <li class="list-inline-item mr-2">
                  <a href="#" data-toggle="tooltip" title="Favourite"
                           class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle">
                    <i class="far fa-heart"></i></a>
                </li>
                <li class="list-inline-item mr-2">
                  <button type="button"
                                class="btn btn-white p-0 d-flex align-items-center justify-content-center w-40px h-40 text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none"
                                data-container="body"
                                data-toggle="popover" data-placement="top" data-html="true" data-content=' <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item ">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-youtube"></i></a>
                    </li>
                  </ul>
                  '>
                  <i class="far fa-share-alt"></i>
                </button>
              </li>
              <li class="list-inline-item">
                <a href="#" data-toggle="tooltip" title="Print"
                           class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle">
                  <i class="far fa-print"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="row galleries m-n1">
            <div class="col-lg-6 p-1">
              <div class="item item-size-4-3">
                <div class="card p-0 hover-zoom-in">
                  <a href="{{asset('assets/vendors/images/single-property-lg-1.jpg')}}" class="card-img"
                               data-gtf-mfp="true"
                               data-gallery-id="01"
                               style="background-image:url({{asset('assets/vendors/images/single-property-2.jpg')}})">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 p-1">
              <div class="row m-n1">
                <div class="col-md-6 p-1">
                  <div class="item item-size-4-3">
                    <div class="card p-0 hover-zoom-in">
                      <a href="images/single-property-lg-2.jpg" class="card-img"
                                       data-gtf-mfp="true"
                                       data-gallery-id="01"
                                       style="background-image:url({{asset('assets/vendors/images/single-property-22.jpg')}})">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 p-1">
                  <div class="item item-size-4-3">
                    <div class="card p-0 hover-zoom-in">
                      <a href="images/single-property-lg-3.jpg" class="card-img"
                                       data-gtf-mfp="true"
                                       data-gallery-id="01"
                                       style="background-image:url({{asset('assets/vendors/images/single-property-3.jpg')}})">
                                       {{-- style="background-image:url('images/single-property-3.jpg')"> --}}

                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 p-1">
                  <div class="item item-size-4-3">
                    <div class="card p-0 hover-zoom-in">
                      <a href="images/single-property-lg-4.jpg" class="card-img"
                                       data-gtf-mfp="true"
                                       data-gallery-id="01"
                                       style="background-image:url({{asset('assets/vendors/images/single-property-4.jpg')}})">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 p-1">
                  <div class="item item-size-4-3">
                    <div class="card p-0 hover-zoom-in">
                      <a href="images/single-property-lg-5.jpg" class="card-img"
                                       data-gtf-mfp="true"
                                       data-gallery-id="01"
                                       style="background-image:url({{asset('assets/vendors/images/single-property-5.jpg')}})">
                      </a>
                      <a href="#"
                                       class="card-img-overlay d-flex flex-column align-items-center justify-content-center hover-image bg-dark-opacity-04">
                        <p class="fs-48 font-weight-600 text-white lh-1 mb-4">+12</p>
                        <p class="fs-16 font-weight-bold text-white lh-1625 text-uppercase">View
                          more</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="primary-content pt-8">
      <div class="container">
        <div class="row">
          <article class="col-lg-8 pr-xl-7">
            <section class="pb-7 border-bottom">
              <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
                <li class="list-inline-item badge badge-orange mr-2">Featured</li>
                <li class="list-inline-item badge badge-primary mr-3">For Sale</li>
                <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fal fa-clock mr-1"></i>2 months ago
                </li>
                <li class="list-inline-item mt-2 mt-sm-0"><i class="fal fa-eye mr-1"></i>1039 views</li>
              </ul>
              <div class="d-sm-flex justify-content-sm-between">
                <div>
                  <h2 class="fs-35 font-weight-600 lh-15 text-heading">Villa on Hollywood Boulevard</h2>
                  <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i>398 Pete Pascale Pl, New York</p>
                </div>
                <div class="mt-2 text-lg-right">
                  <p class="fs-22 text-heading font-weight-bold mb-0">$1.250.000</p>
                  <p class="mb-0">$9350/SqFt</p>
                </div>
              </div>
              <h4 class="fs-22 text-heading mt-6 mb-2">Description</h4>
              <p class="mb-0 lh-214">Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus faucibus
                scelerisque eleifend donec.
                Porta nibh venenatis cras sed felis eget velit aliquet. Neque volutpat ac tincidunt vitae semper
                quis lectus. Turpis in eu mi bibendum neque
                egestas congue quisque. Sed elementum tempus egestas sed sed risus pretium quam. Dignissim
                sodales
                ut eu sem. Nibh mauris cursus mattis molestie a
                iaculis at erat pellentesque. Id interdum velit laoreet id donec ultrices tincidunt.</p>
            </section>
            <section class="pt-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Facts and Features</h4>
              <div class="row">
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-family fs-32 text-primary">
                        <use xlink:href="#icon-family"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Type</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">Single Family</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-year fs-32 text-primary">
                        <use xlink:href="#icon-year"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">year built</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">2020</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-heating fs-32 text-primary">
                        <use xlink:href="#icon-heating"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">heating</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">Radiant</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-price fs-32 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">SQFT</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">979.0</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-bedroom fs-32 text-primary">
                        <use xlink:href="#icon-bedroom"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Bedrooms</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">3</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-sofa fs-32 text-primary">
                        <use xlink:href="#icon-sofa"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">bathrooms</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">2</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-Garage fs-32 text-primary">
                        <use xlink:href="#icon-Garage"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">GARAGE</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">1</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-status fs-32 text-primary">
                        <use xlink:href="#icon-status"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Status</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">Active</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="pt-6 border-bottom pb-4">
              <h4 class="fs-22 text-heading mb-4">Additional Details</h4>
              <div class="row">
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property ID</dt>
                  <dd>AD-2910</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Price</dt>
                  <dd>$890.000</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property type</dt>
                  <dd>Apartment, bar, cafe, villa</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property status</dt>
                  <dd>For Sale</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Rooms</dt>
                  <dd>4</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bedrooms</dt>
                  <dd>3</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Size</dt>
                  <dd>900SqFt</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                  <dd>2</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Garage</dt>
                  <dd>1</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                  <dd>2000 SqFt</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Garage size</dt>
                  <dd>50 SqFt</dd>
                </dl>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Year build</dt>
                  <dd>2020</dd>
                </dl>
                <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Label</dt>
                  <dd>Bestseller</dd>
                </dl>
              </div>
            </section>
            <section class="pt-6 border-bottom pb-4">
              <h4 class="fs-22 text-heading mb-4">Offices Amenities</h4>
              <ul class="list-unstyled mb-0 row no-gutters">
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                </li>
              </ul>
            </section>
            <section class="py-6">
              <h4 class="fs-22 text-heading mb-6">Floor Plans</h4>
              <div class="accordion accordion-03 mb-3" id="accordion-01">
                <div class="card border-0 shadow-xxs-2">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0"
                                 id="floor-plans-01">
                    <div class="heading d-flex justify-content-between align-items-center px-6"
                                     data-toggle="collapse" data-target="#collapse-01" aria-expanded="true"
                                     aria-controls="collapse-01" role="button">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">First Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span
                                                class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span
                                                class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span
                                                class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-01"
                                 class="collapse show"
                                 aria-labelledby="floor-plans-01"
                                 data-parent="#accordion-01">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                      <img src="{{asset('assets/vendors/images/single-detail-property-01.jpg')}}" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion accordion-03 mb-3" id="accordion-02">
                <div class="card border-0 shadow-xxs-2">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0"
                                 id="floor-plans-02">
                    <div class="heading d-flex justify-content-between align-items-center px-6 collapsed "
                                     data-toggle="collapse" data-target="#collapse-02" aria-expanded="true"
                                     aria-controls="collapse-02" role="button">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Second Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span
                                                class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span
                                                class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span
                                                class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-02"
                                 class="collapse "
                                 aria-labelledby="floor-plans-02"
                                 data-parent="#accordion-02">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                      <img src="{{asset('assets/vendors/images/single-detail-property-01.jpg')}}" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion accordion-03 mb-3" id="accordion-03">
                <div class="card border-0 shadow-xxs-2">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0"
                                 id="floor-plans-03">
                    <div class="heading d-flex justify-content-between align-items-center px-6 collapsed "
                                     data-toggle="collapse" data-target="#collapse-03" aria-expanded="true"
                                     aria-controls="collapse-03" role="button">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Third Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span
                                                class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span
                                                class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span
                                                class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-03"
                                 class="collapse "
                                 aria-labelledby="floor-plans-03"
                                 data-parent="#accordion-03">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                      <img src="{{asset('assets/vendors/images/single-detail-property-01.jpg')}}" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <h4 class="fs-22 text-heading lh-15 mb-5 pt-3">Rating & Reviews</h4>
              <div class="card border-0 mb-4">
                <div class="card-body p-0">
                  <div class="row">
                    <div class="col-sm-6 mb-6 mb-sm-0">
                      <div class="bg-gray-01 rounded-lg pt-2 px-6 pb-6">
                        <h5 class="fs-16 lh-2 text-heading mb-6">
                          Avarage User Rating
                        </h5>
                        <p class="fs-40 text-heading font-weight-bold mb-6 lh-1">4.6 <span
                                                class="fs-18 text-gray-light font-weight-normal">/5</span></p>
                        <ul class="list-inline">
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item bg-gray-04 text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                      <h5 class="fs-16 lh-2 text-heading mb-5">
                        Rating Breakdown
                      </h5>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar"
                                                     style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">60%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar"
                                                     style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">40%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar"
                                                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">0%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar"
                                                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">0%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar"
                                                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">0%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="pt-5">
              <div class="card border-0 mb-4">
                <div class="card-body p-0">
                  <h3 class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary">5
                    Reviews</h3>
                  <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                    <img src="{{asset('assets/vendors/images/review-07.jpg')}}" alt="Danny Fox"
                                     class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                        <a href="#"
                                           class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                    <img src="{{asset('assets/vendors/images/review-08.jpg')}}" alt="Viola Austin"
                                     class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <h4 class="mb-0 text-heading fs-14">Viola Austin</h4>
                        </div>
                        <div class="col-sm-6 ">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                        <a href="#"
                                           class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                    <img src="{{asset('assets/vendors/images/review-09.jpg')}}" alt="Nettie Singleton"
                                     class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <h4 class="mb-0 text-heading fs-14">Nettie Singleton</h4>
                        </div>
                        <div class="col-sm-6 ">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                        <a href="#"
                                           class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                    <img src="{{asset('assets/vendors/images/review-07.jpg')}}" alt="Vernon Fisher"
                                     class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <h4 class="mb-0 text-heading fs-14">Vernon Fisher</h4>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-border fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                        <a href="#"
                                           class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                      </div>
                    </div>
                  </div>
                  <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                    <div class="w-82px h-82 mr-2 bg-gray-01 rounded-circle fs-25 font-weight-500 text-muted d-flex align-items-center justify-content-center text-uppercase mr-sm-8 mb-4 mb-sm-0 mx-auto">
                      HI
                    </div>
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <h4 class="mb-0 text-heading fs-14">Harry Iglesias</h4>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-border fs-12 lh-2"><i
                                                            class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                        <a href="#"
                                           class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="card border-0">
                <div class="card-body p-0">
                  <h3 class="fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                  <form>
                    <div class="form-group mb-4 d-flex justify-content-start">
                      <div class="rate-input">
                        <input type="radio" id="star5" name="rate" value="5">
                        <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star4" name="rate" value="4">
                        <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star3" name="rate" value="3">
                        <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star2" name="rate" value="2">
                        <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star1" name="rate" value="1">
                        <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group mb-4">
                          <input placeholder="Your Name" class="form-control form-control-lg border-0"
                                                   type="text" name="name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-4">
                          <input type="email" placeholder="Email" name="email"
                                                   class="form-control form-control-lg border-0">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-6">
                      <textarea class="form-control form-control-lg border-0" placeholder="Your Review"
                                              name="message" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary px-10 mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </section>
            <section class="pt-6">
              <h4 class="fs-22 text-heading mb-5">What is Nearby?</h4>
              <div class="mt-4">
                <h6 class="mb-0 mt-5"><a href="#"
                                                 class="fs-16 lh-2 text-heading border-bottom border-primary pb-1">Restaurants</a></h6>
                <div class="border-top pt-2">
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-02.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Bacchanal Buffet-Temporarily Closed</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV 89109</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                    </div>
                  </div>
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-03.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Bacchanal Buffet-Temporarily Closed</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3084 S Highland DrSte C</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <div class="text-lg-right mt-lg-0 mt-2">
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-1"></i>
                      </div>
                    </div>
                  </div>
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-04.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Bacchanal Buffet-Temporarily Closed</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV 89109</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                    </div>
                  </div>
                </div>
                <h6 class="mb-0 mt-5"><a href="#"
                                                 class="fs-16 lh-2 text-heading border-bottom border-primary pb-1">Education</a></h6>
                <div class="border-top pt-2">
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-07.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Safe Direction Firearms Training</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV 89109</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                    </div>
                  </div>
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-08.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Rabbi Shai Specht-Sandler</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3084 S Highland DrSte C</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <div class="text-lg-right mt-lg-0 mt-2">
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-1"></i>
                      </div>
                    </div>
                  </div>
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-09.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Safe Direction Firearms Training</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV 89109</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                    </div>
                  </div>
                </div>
                <h6 class="mb-0 mt-5"><a href="#"
                                                 class="fs-16 lh-2 text-heading border-bottom border-primary pb-1">Health & Medical</a></h6>
                <div class="border-top pt-2">
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-10.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Coppola David F DC & Assoc</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV 89109</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                      <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                    </div>
                  </div>
                  <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                    <div class="media align-items-sm-center d-sm-flex d-block">
                      <a href="#" class="hover-shine">
                        <img src="{{asset('assets/vendors/images/single-detail-property-11.jpg')}}"
                                             class="mr-sm-4 rounded-lg w-sm-90"
                                             alt="Bacchanal Buffet-Temporarily Closed">
                      </a>
                      <div class="mt-sm-0 mt-2">
                        <h4 class="my-0"><a href="#" class="lh-186 fs-15 text-heading hover-primary">Elite Medical Center</a></h4>
                        <p class="lh-186 fs-15 font-weight-500 mb-0">3084 S Highland DrSte C</p>
                      </div>
                    </div>
                    <div class="text-lg-right mt-lg-0 mt-2">
                      <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                      <div class="text-lg-right mt-lg-0 mt-2">
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                        <i class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-1"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Property Attachments</h4>
              <div class="d-sm-flex">
                <div class="w-sm-170 mb-sm-0 mb-6 mr-sm-6">
                  <div class="card text-center pt-4">
                    <img src="{{asset('assets/vendors/images/single-detail-property-05.png')}}" class="card-img card-img w-78px mx-auto"
                                     alt="Villa Called Archangel Word Document">
                    <div class="card-body p-0 mt-4">
                      <p class="fs-13 lh-2  mb-0 py-0 px-2">Villa Called Archangel Word Document</p>
                      <a href="#"
                                       class="btn btn-block bg-gray-01 border-0 fs-14 text-heading">Download<i
                                            class="far fa-arrow-alt-circle-down ml-1 text-primary"></i></a>
                    </div>
                  </div>
                </div>
                <div class="w-sm-170 mb-sm-0 mb-6 mr-sm-6">
                  <div class="card text-center pt-4">
                    <img src="{{asset('assets/vendors/images/single-detail-property-06.png')}}" class="card-img card-img w-78px mx-auto"
                                     alt="Villa Called Archangel PDF Document">
                    <div class="card-body p-0 mt-4">
                      <p class="fs-13 lh-2  mb-0 py-0 px-2">Villa Called Archangel PDF Document</p>
                      <a href="#"
                                       class="btn btn-block bg-gray-01 border-0 fs-14 text-heading">Download<i
                                            class="far fa-arrow-alt-circle-down ml-1 text-primary"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Virtual Tour</h4>
              <iframe height="430"
                            src="https://my.matterport.com/show/?m=wWcGxjuUuSb&amp;utm_source=hit-content-embed"
                            allowfullscreen="" class="w-100"></iframe>
            </section>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Location</h4>
              <div class="position-relative">
                <div id="map" class="mapbox-gl map-point-animate"
                             data-mapbox-access-token="pk.eyJ1IjoiZHVvbmdsaCIsImEiOiJjanJnNHQ4czExMzhyNDVwdWo5bW13ZmtnIn0.f1bmXQsS6o4bzFFJc8RCcQ"
                             data-mapbox-options='{"center":[-73.9927227, 40.6741035],"setLngLat":[-73.9927227, 40.6741035]}'
                             data-mapbox-marker='[{"position":[-73.9927227, 40.6741035],"className":"marker","backgroundImage":"{{asset('assets/vendors/images/googlle-market-01.png')}}","backgroundRepeat":"no-repeat","width":"30px","height":"40px"}]'>
                </div>
                <p class="mb-0 p-3 bg-white shadow rounded-lg position-absolute pos-fixed-bottom mb-4 ml-4 lh-17 z-index-2">
                  62 Gresham St, Victoria Park <br/>
                   WA 6100, Australia</p>
              </div>
            </section>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-5">Mortgage calculator</h4>
              <form>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label>Total Amount</label>
                    <div class="position-relative">
                      <input type="number" class="form-control border-0 pr-3 h-52 pl-7" value="345"
                                           name="total-amount">
                      <span class="position-absolute pl-3 pos-fixed-left-center fs-13 font-weight-600">$</span>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label>Down Payment</label>
                    <div class="position-relative">
                      <input type="number" class="form-control border-0 pr-3 h-52 pl-7" value="0"
                                           name="down-payment">
                      <span class="position-absolute pl-3 pos-fixed-left-center fs-13 font-weight-600">$</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label>Interest Rate</label>
                    <div class="position-relative">
                      <input type="number" class="form-control border-0 pr-3 h-52 pl-7" value="2.500"
                                           step="0.25" name="interest-rate">
                      <span class="position-absolute pl-3 pos-fixed-left-center fs-13 font-weight-600">%</span>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <label>Number of years</label>
                    <input type="number" class="form-control border-0 px-3 h-52" value="25" name="years">
                  </div>
                </div>
                <div class="form-group mb-6">
                  <label>Payment Period</label>
                  <select class="form-control selectpicker" data-style="btn-lg h-52 px-3"
                                    name="payment-period">
                    <option selected>Monthly</option>
                    <option>Yearly</option>
                  </select>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <button class="btn btn-primary fs-14 h-52 px-8" type="submit">Caculate</button>
                  </div>
                  <div class="col-lg-6">
                    <div class="shadow-xxs-2 pt-1 pb-2 px-6 border-bottom border-primary border-5x rounded-lg">
                      <dl class="d-flex mb-0 justify-content-between py-2">
                        <dt class="font-weight-normal">Monthly Payment</dt>
                        <dd class="font-weight-500 text-heading mb-0">$33</dd>
                      </dl>
                      <dl class="d-flex mb-0 justify-content-between border-top py-2">
                        <dt class="font-weight-normal">Total Cost of Loan</dt>
                        <dd class="font-weight-500 text-heading mb-0">$464</dd>
                      </dl>
                      <dl class="d-flex mb-0 justify-content-between border-top py-2">
                        <dt class="font-weight-normal">Total interest Paid</dt>
                        <dd class="font-weight-500 text-heading mb-0">$119</dd>
                      </dl>
                      <dl class="d-flex mb-0 justify-content-between border-top py-2">
                        <dt class="font-weight-normal">Mortgage Payment</dt>
                        <dd class="font-weight-500 text-heading mb-0">$1.55</dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </form>
            </section>
            <section class="pt-6 border-bottom chart">
              <div class="card border-0 mb-6">
                <div class="card-body p-0 collapse-tabs">
                  <div class="d-flex align-items-center mb-5">
                    <h2 class="mb-0 text-heading fs-22 lh-15 mr-auto">Page statistics</h2>
                    <ul class="nav nav-pills nav-pills-01 justify-content-end d-none d-sm-flex"
                                    role="tablist">
                      <li class="nav-item px-5 py-1">
                        <a class="nav-link active bg-transparent shadow-none p-0 letter-spacing-1"
                                           id="hours-tab" data-toggle="tab"
                                           href="#hours"
                                           role="tab"
                                           aria-controls="hours" aria-selected="true">Hours</a>
                      </li>
                      <li class="nav-item px-5 py-1">
                        <a class="nav-link bg-transparent shadow-none p-0 letter-spacing-1"
                                           id="weekly-tab"
                                           data-toggle="tab"
                                           href="#weekly"
                                           role="tab"
                                           aria-controls="weekly" aria-selected="false">Weekly</a>
                      </li>
                      <li class="nav-item px-5 py-1">
                        <a class="nav-link bg-transparent shadow-none p-0 letter-spacing-1"
                                           id="monthly-tab"
                                           data-toggle="tab"
                                           href="#monthly"
                                           role="tab"
                                           aria-controls="monthly" aria-selected="false">Monthly</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content shadow-none p-0">
                    <div id="collapse-tabs-accordion">
                      <div class="tab-pane tab-pane-parent fade show active px-0" id="hours"
                                         role="tabpanel"
                                         aria-labelledby="hours-tab">
                        <div class="card bg-transparent mb-sm-0 border-0">
                          <div class="card-header d-block d-sm-none bg-transparent px-0 py-1 border-bottom-0"
                                                 id="headingHours">
                            <h5 class="mb-0">
                              <button class="btn collapse-parent font-size-h5 btn-block border shadow-none"
                                                            data-toggle="collapse"
                                                            data-target="#hours-collapse"
                                                            aria-expanded="true"
                                                            aria-controls="hours-collapse">
                                Hours
                              </button>
                            </h5>
                          </div>
                          <div id="hours-collapse" class="collapse show collapsible"

                                                 data-parent="#collapse-tabs-accordion">
                            <div class="card-body p-0 py-4">
                              <canvas class="chartjs" data-chart-options="[]"
                                                            data-chart-labels='["05h","08h","11h","14h","17h","20h","23h"]'
                                                            data-chart-datasets='[{"label":"Clicked","data":[0,7,10,3,15,30,10],"backgroundColor":"rgba(105, 105, 235, 0.1)","borderColor":"#6969eb","borderWidth":3,"fill":true},{"label":"View","data":[10,9,18,20,28,40,27],"backgroundColor":"rgba(254, 91, 52, 0.1)","borderColor":"#ff6935","borderWidth":3,"fill":true}]'>
                              </canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane tab-pane-parent fade px-0" id="weekly"
                                         role="tabpanel"
                                         aria-labelledby="weekly-tab">
                        <div class="card bg-transparent mb-sm-0 border-0">
                          <div class="card-header d-block d-sm-none bg-transparent px-0 py-1 border-bottom-0"
                                                 id="headingWeekly">
                            <h5 class="mb-0">
                              <button class="btn collapse-parent font-size-h5 btn-block collapsed border shadow-none"
                                                            data-toggle="collapse"
                                                            data-target="#weekly-collapse"
                                                            aria-expanded="true"
                                                            aria-controls="weekly-collapse">
                                Weekly
                              </button>
                            </h5>
                          </div>
                          <div id="weekly-collapse" class="collapse collapsible"
                                                 aria-labelledby="headingWeekly"
                                                 data-parent="#collapse-tabs-accordion">
                            <div class="card-body p-0 py-4">
                              <canvas class="chartjs" data-chart-options="[]"
                                                            data-chart-labels='["05h","08h","11h","14h","17h","20h","23h"]'
                                                            data-chart-datasets='[{"label":"Clicked","data":[0,7,10,3,15,30,10],"backgroundColor":"rgba(105, 105, 235, 0.1)","borderColor":"#6969eb","borderWidth":3,"fill":true},{"label":"View","data":[10,9,18,20,28,40,27],"backgroundColor":"rgba(254, 91, 52, 0.1)","borderColor":"#ff6935","borderWidth":3,"fill":true}]'>
                              </canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane tab-pane-parent fade px-0" id="monthly" role="tabpanel"
                                         aria-labelledby="monthly-tab">
                        <div class="card bg-transparent mb-sm-0 border-0">
                          <div class="card-header d-block d-sm-none bg-transparent px-0 py-1 border-bottom-0"
                                                 id="headingMonthly">
                            <h5 class="mb-0">
                              <button class="btn btn-block collapse-parent collapsed border shadow-none"
                                                            data-toggle="collapse"
                                                            data-target="#monthly-collapse"
                                                            aria-expanded="true"
                                                            aria-controls="monthly-collapse">
                                Monthly
                              </button>
                            </h5>
                          </div>
                          <div id="monthly-collapse" class="collapse collapsible"
                                                 aria-labelledby="headingMonthly"
                                                 data-parent="#collapse-tabs-accordion">
                            <div class="card-body p-0 py-4">
                              <canvas class="chartjs" data-chart-options="[]"
                                                            data-chart-labels='["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]'
                                                            data-chart-datasets='[{"label":"Clicked","data":[2,15,20,10,15,20,10,0,20,30,10,0],"backgroundColor":"rgba(105, 105, 235, 0.1)","borderColor":"#6969eb","borderWidth":3,"fill":true},{"label":"View","data":[10,20,18,15,28,33,27,10,20,30,10,0],"backgroundColor":"rgba(254, 91, 52, 0.1)","borderColor":"#ff6935","borderWidth":3,"fill":true}]'>
                              </canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </article>
          <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner">
              <div class="card border-0 widget-request-tour">
                <ul class="nav nav-tabs d-flex" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active px-3" data-toggle="tab" href="#schedule" role="tab"
                                   aria-selected="true">Schedule
                      A Tour</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link px-3" data-toggle="tab" href="#request-info" role="tab"
                                   aria-selected="false">Request
                      Info</a>
                  </li>
                </ul>
                <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0">
                  <form>
                    <div class="tab-content pt-1 pb-0 px-0 shadow-none">
                      <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                        <div class="slick-slider calendar arrow-hide-disable mx-n1"
                                             data-slick-options='{"slidesToShow": 5, "autoplay":false,"dots":false}'>
                          <div class="box px-1 py-4">
                            <div class="card pointer active border-0 shadow-xxs-1"
                                                     data-date="March 17, 2020">
                              <div class="card-body p-1 text-center">
                                <p class="day fs-12 text-muted lh-2 mb-0">Tue</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  17</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div>
                          <div class="box px-1 py-4">
                            <div class="card pointer border-0 shadow-xxs-1"
                                                     data-date="March 18, 2020">
                              <div class="card-body p-1 text-center">
                                <p class="day fs-12 text-muted lh-2 mb-0">Wed</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  18</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div>
                          <div class="box px-1 py-4">
                            <div class="card pointer border-0 shadow-xxs-1"
                                                     data-date="March 19, 2020">
                              <div class="card-body p-1 text-center">
                                <p class="day fs-12 text-muted lh-2 mb-0">Thur</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  19</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div>
                          <div class="box px-1 py-4">
                            <div class="card pointer border-0 shadow-xxs-1"
                                                     data-date="March 20, 2020">
                              <div class="card-body p-1 text-center">
                                <p class="day fs-12 text-muted lh-2 mb-0">Fri</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  20</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div>
                          <div class="box px-1 py-4">
                            <div class="card pointer border-0 shadow-xxs-1"
                                                     data-date="March 21, 2020">
                              <div class="card-body p-1 text-center">
                                <p class="day fs-12 text-muted lh-2 mb-0">Sat</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  21</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div>
                          <div class="box px-1 py-4">
                            <div class="card pointer border-0 shadow-xxs-1"
                                                     data-date="March 22, 2020">
                              <div class="card-body p-1 text-center">
                                <p class="day fs-12 text-muted lh-2 mb-0">Sun</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  22</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div>
                          <div class="box px-1 py-4">
                            <div class="card pointer border-0 shadow-xxs-1"
                                                     data-date="March 23, 2020">
                              <div class="card-body p-1 text-center">
                                <p class="day fs-12 text-muted lh-2 mb-0">Mon</p>
                                <p class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                  23</p>
                                <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="hidden" class="date" name="date" value="March 17, 2020">
                        <div class="form-group mb-2">
                          <div class="input-group input-group-lg bootstrap-timepicker timepicker">
                            <input type="text" class="form-control border-0 text-body shadow-none"
                                                       placeholder="Choose a time">
                            <div class="input-group-append input-group-addon">
                              <button class="btn bg-input shadow-none fs-18 lh-1" type="button"><i
                                                            class="fal fa-angle-down"></i></button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-2">
                          <input type="text" class="form-control form-control-lg border-0"
                                                   placeholder="First Name, Last Name">
                        </div>
                        <div class="form-group mb-2">
                          <input type="email" class="form-control form-control-lg border-0"
                                                   placeholder="Your Email">
                        </div>
                        <div class="form-group mb-4">
                          <input type="tel" class="form-control form-control-lg border-0"
                                                   placeholder="Your phone">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Schedule
                          A Tour
                        </button>
                        <div class="form-group form-check mt-2 mb-0">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label fs-13" for="exampleCheck1">Egestas fringilla
                            phasellus
                            faucibus
                            scelerisque
                            eleifend donec.</label>
                        </div>
                      </div>
                      <div class="tab-pane fade pt-5" id="request-info" role="tabpanel">
                        <div class="form-check d-flex align-items-center border-bottom pb-3 mb-3">
                          <input class="form-check-input" type="radio" name="agent" value="option1">
                          <div class="form-check-label ml-2">
                            <div class="d-flex align-items-center">
                              <a href="#"
                                                       class="d-block w-60px h-60 mr-3">
                                <img src="{{asset('assets/vendors/images/agent-2.jpg')}}"
                                                             class="rounded-circle" alt="agent-2">
                              </a>
                              <div>
                                <a href="#"
                                                           class="d-block text-dark font-weight-500 lh-15 hover-primary">Oliver
                                  Beddows</a>
                                <p class="mb-0 fs-13 mb-0 lh-17">Sales Excutive</p>
                                <p class="mb-0 fs-13 mb-0 lh-17"><span>(+123)</span><span
                                                                class="text-heading d-inline-block ml-2">1900 68668</span>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-check d-flex align-items-center mb-6">
                          <input class="form-check-input" type="radio" name="agent" id="inlineRadio2"
                                                   value="option2">
                          <div class="form-check-label ml-2">
                            <div class="d-flex align-items-center">
                              <a href="#"
                                                       class="d-block w-60px h-60 mr-3">
                                <img src="{{asset('assets/vendors/images/agent-1.jpg')}}"
                                                             class="rounded-circle" alt="agent-1">
                              </a>
                              <div>
                                <a href="#"
                                                           class="d-block text-dark font-weight-500 lh-15 hover-primary">Max
                                  Kordex</a>
                                <p class="mb-0 fs-13 mb-0 lh-17">Real estate broker</p>
                                <p class="mb-0 fs-13 mb-0 lh-17"><span>(+123)</span><span
                                                                class="text-heading d-inline-block ml-2">1900 68668</span>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-2">
                          <input type="text" class="form-control form-control-lg border-0"
                                                   placeholder="First Name, Last Name">
                        </div>
                        <div class="form-group mb-2">
                          <input type="email" class="form-control form-control-lg border-0"
                                                   placeholder="Your Email">
                        </div>
                        <div class="form-group mb-2">
                          <input type="tel" class="form-control form-control-lg border-0"
                                                   placeholder="Your phone">
                        </div>
                        <div class="form-group mb-4">
                          <textarea class="form-control border-0" rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request
                          Info
                        </button>
                        <div class="form-group form-check mt-2 mb-0">
                          <input type="checkbox" class="form-check-input" id="exampleCheck2">
                          <label class="form-check-label fs-13" for="exampleCheck2">Egestas fringilla
                            phasellus
                            faucibus
                            scelerisque
                            eleifend donec.</label>
                        </div>
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

    <!-- similar Homes You may like -->
    <section class="pt-6 pb-8">
      <div class="container">
        <h4 class="fs-22 text-heading mb-6">Similar Homes You May Like</h4>
        <div class="slick-slider"
             data-slick-options='{"slidesToShow": 3, "dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="{{asset('assets/vendors/images/properties-grid-38.jpg')}}"
                             alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-images"></i><span class="pl-1">9</span>
                      </a>
                    </li>
                    <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                                  class="text-dark hover-primary">Home in Metric Way</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                                   data-toggle="tooltip" title="Wishlist"><i
                                        class="fas fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="{{asset('assets/vendors/images/properties-grid-01.jpg')}}"
                             alt="Garden Gingerbread House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-orange">featured</span>
                    <span class="badge mr-2 badge-indigo">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-images"></i><span class="pl-1">9</span>
                      </a>
                    </li>
                    <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                                  class="text-dark hover-primary">Garden Gingerbread House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$550<span
                                class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="{{asset('assets/vendors/images/properties-grid-02.jpg')}}"
                             alt="Affordable Urban House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-images"></i><span class="pl-1">9</span>
                      </a>
                    </li>
                    <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                                  class="text-dark hover-primary">Affordable Urban House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Listings near 1135 Clayton St -->
    <section class="pb-12">
      <div class="container">
        <h4 class="fs-22 text-heading mb-6">Listings near 1135 Clayton St</h4>
        <div class="slick-slider"
             data-slick-options='{"slidesToShow": 3, "dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="{{asset('assets/vendors/images/properties-grid-07.jpg')}}"
                             alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-images"></i><span class="pl-1">9</span>
                      </a>
                    </li>
                    <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                                  class="text-dark hover-primary">Home in Metric Way</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                                   data-toggle="tooltip" title="Wishlist"><i
                                        class="fas fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="{{asset('assets/vendors/images/properties-grid-05.jpg')}}"
                             alt="Garden Gingerbread House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-indigo">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-images"></i><span class="pl-1">9</span>
                      </a>
                    </li>
                    <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                                  class="text-dark hover-primary">Garden Gingerbread House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$550<span
                                class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="{{asset('assets/vendors/images/properties-grid-06.jpg')}}"
                             alt="Affordable Urban House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-images"></i><span class="pl-1">9</span>
                      </a>
                    </li>
                    <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                      <a href="#" class="text-white hover-primary">
                        <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                                  class="text-dark hover-primary">Affordable Urban House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                                   class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                   data-toggle="tooltip" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="d-flex bottom-bar-action bottom-bar-action-01 py-2 px-4 bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none">
        <div class="media align-items-center">
          <img src="{{asset('assets/vendors/images/irene-wallace.png')}}" alt="Irene Wallace" class="mr-4 rounded-circle">
          <div class="media-body">
            <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
            <span class="fs-13 lh-2">Sales Excutive</span>
          </div>
        </div>
        <div class="ml-auto">
          <button type="button" class="btn btn-primary fs-18 p-2 lh-1 mr-1 mb-1 shadow-none" data-toggle="modal"
                    data-target="#modal-messenger"><i class="fal fa-comment"></i></button>
          <a href="tel:(+84)2388-969-888" class="btn btn-primary fs-18 p-2 lh-1 mb-1 shadow-none" target="_blank"><i
                    class="fal fa-phone"></i></a>
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
                <input type="text" class="form-control form-control-lg border-0"
                               placeholder="First Name, Last Name">
              </div>
              <div class="form-group mb-2">
                <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email">
              </div>
              <div class="form-group mb-2">
                <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone">
              </div>
              <div class="form-group mb-2">
                <textarea class="form-control border-0"
                                  rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
              </div>
              <div class="form-group form-check mb-4">
                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                <label class="form-check-label fs-13" for="exampleCheck3">Egestas fringilla phasellus faucibus
                  scelerisque eleifend donec.</label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request Info</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @endsection
