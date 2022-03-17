@extends('web.index')
@section('content')
<main id="content">
      <section class="bg-gray-01 pt-9 pb-13">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 primary-sidebar sidebar-sticky" id="sidebar">
              <div class="primary-sidebar-inner">
                <div class="card p-6 mb-4">
                  <div class="card-body text-center p-0">
                    <img src="{{asset('assets/vendors/images/agent-33.jpg')}}" alt="Irene Wallace" class="mb-2">
                    <p class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500">Irene
                      Wallace</p>
                    <p class="mb-0">Sales Excutive</p>
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5</li>
                      <li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item mr-0">
                            <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                          </li>
                          <li class="list-inline-item mr-0">
                            <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                          </li>
                          <li class="list-inline-item mr-0">
                            <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                          </li>
                          <li class="list-inline-item mr-0">
                            <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                          </li>
                          <li class="list-inline-item mr-0">
                            <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                          </li>
                        </ul>
                      </li>
                      <li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
                    </ul>
                  </div>
                  <div class="card-footer bg-white px-0 pt-1">
                    <ul class="list-group list-group-no-border mb-7">
                      <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                        <span class="col-3 p-0 fs-13">Office</span>
                        <span class="col-9 p-0 text-heading font-weight-500">123 900 68668</span>
                      </li>
                      <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                        <span class="col-3 p-0 fs-13">Mobile</span>
                        <span class="col-9 p-0 text-heading font-weight-500">123 900 68668</span>
                      </li>
                      <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                        <span class="col-3 p-0 fs-13">Fax</span>
                        <span class="col-9 p-0 text-heading font-weight-500">1-323 900 6800</span>
                      </li>
                      <li class="list-group-item d-flex align-items-sm-center row m-0 px-0 pt-2 pb-0">
                        <span class="col-3 p-0 fs-13">Email</span>
                        <span class="col-9 p-0">oliverbeddows@homeid.com</span>
                      </li>
                      <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                        <span class="col-3 p-0 fs-13">Social</span>
                        <ul class="col-9 list-inline text-gray-lighter m-0 p-0 z-index-2">
                          <li class="list-inline-item m-0">
                            <a href="#"
                                               class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                    class="fab fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item mr-0 ml-2">
                            <a href="#"
                                               class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                    class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="list-inline-item mr-0 ml-2">
                            <a href="#"
                                               class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                    class="fab fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item mr-0 ml-2">
                            <a href="#"
                                               class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                    class="fab fa-linkedin-in"></i></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none">Send Message
                    </button>
                  </div>
                </div>
                <div class="card mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Search</h4>
                    <form>
                      <div class="form-group mb-2">
                        <select class="form-control border-0 shadow-none selectpicker" name="company"
                                            title="Company" data-style="btn-lg px-3">
                          <option>Google</option>
                          <option>Facebook</option>
                        </select>
                      </div>
                      <div class="form-row mb-2">
                        <div class="col-6 form-group">
                          <select class="form-control selectpicker border-0" name="language"
                                                title="Language" data-style="btn-lg rounded-lg px-3">
                            <option>English</option>
                            <option>France</option>
                          </select>
                        </div>
                        <div class="col-6 form-group">
                          <select class="form-control selectpicker border-0" name="region"
                                                title="Region" data-style="btn-lg rounded-lg px-3">
                            <option>Austin</option>
                            <option>Boston</option>
                            <option>Chicago</option>
                            <option>Denver</option>
                            <option>Los Angeles</option>
                            <option>New York</option>
                            <option>San Francisco</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group mb-4">
                        <input type="text" class="form-control form-control-lg border-0" name="search"
                                           placeholder="Search by agent’s name...">
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Search
                      </button>
                    </form>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body text-center pt-7 pb-6 px-0">
                    <img src="{{asset('assets/vendors/images/contact-widget.jpg')}}"
                                 alt="Want to become an Estate Agent ?">
                    <div class="text-dark mb-6 mt-n2 font-weight-500">Want to become an
                      <p class="mb-0 fs-18">Estate Agent?</p>
                    </div>
                    <a href="#" class="btn btn-primary">Register</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 mb-6 mb-lg-0">
              <h2 class="fs-22 text-heading lh-15 mb-6">About me</h2>
              <div class="card border-0 mb-10">
                <div class="card-body py-5 px-6">
                  <h3 class="card-title text-heading fs-16 lh-213">
                    About Oliver Beddows
                  </h3>
                  <p class="lh-214 mb-6">Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit
                    tempus porttitor. Duis
                    mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet
                    rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
              </div>
              <h2 class="fs-22 text-heading lh-15 mb-6">My listing</h2>
              <div class="collapse-tabs mb-10">
                <ul class="nav nav-tabs text-uppercase d-none d-md-inline-flex agent-details-tabs" role="tablist">
                  <li class="nav-item">
                    <a href="#all" class="nav-link active shadow-none fs-13"
                               data-toggle="tab" role="tab">
                      All (8)
                    </a>
                  </li>
                  <li class="nav-item ml-0">
                    <a href="#sale" class="nav-link shadow-none fs-13"
                               data-toggle="tab" role="tab">
                      For Sale (5)
                    </a>
                  </li>
                  <li class="nav-item ml-0">
                    <a href="#rent" class="nav-link shadow-none fs-13"
                               data-toggle="tab" role="tab">
                      For Rent (3)
                    </a>
                  </li>
                </ul>
                <div class="tab-content shadow-none pt-7 pb-0 px-6 bg-white">
                  <div id="collapse-tabs-accordion-01">
                    <div class="tab-pane tab-pane-parent fade show active" id="all"
                                 role="tabpanel">
                      <div class="card border-0 bg-transparent">
                        <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1"
                                         id="headingAll-01">
                          <h5 class="mb-0">
                            <button class="btn lh-2 fs-18 bg-white py-1 px-6 mb-4 shadow-none w-100 collapse-parent border"
                                                    data-toggle="collapse"
                                                    data-target="#all-collapse-01"
                                                    aria-expanded="true"
                                                    aria-controls="all-collapse-01">
                              All (8)
                            </button>
                          </h5>
                        </div>
                        <div id="all-collapse-01" class="collapse show collapsible"
                                         aria-labelledby="headingAll-01"
                                         data-parent="#collapse-tabs-accordion-01">
                          <div class="card-body p-0">
                            <div class="row">
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-35.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-36.jpg')}}"

                                                                 alt="Villa on Hollywood Boulevard">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-indigo">for Rent</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Villa on Hollywood Boulevard</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                      <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-37.jpg')}}"

                                                                 alt="Affordable Urban House">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Affordable Urban House</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-73.jpg')}}"

                                                                 alt="Explore Old Barcelona">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Explore Old Barcelona</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-67.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-68.jpg')}}"

                                                                 alt="Garden Gingerbread House">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-indigo">for Rent</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Garden Gingerbread House</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                      <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-49.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-19.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane tab-pane-parent fade" id="sale" role="tabpanel">
                      <div class="card border-0 bg-transparent">
                        <div class="card-header border-0 d-block d-md-none bg-transparent p-0"
                                         id="headingSale-01">
                          <h5 class="mb-0">
                            <button class="btn lh-2 fs-18 bg-white py-1 px-6 shadow-none w-100 collapse-parent border collapsed mb-4"
                                                    data-toggle="collapse"
                                                    data-target="#sale-collapse-01"
                                                    aria-expanded="true"
                                                    aria-controls="sale-collapse-01">
                              For Sale (5)
                            </button>
                          </h5>
                        </div>
                        <div id="sale-collapse-01" class="collapse collapsible"
                                         aria-labelledby="headingSale-01"
                                         data-parent="#collapse-tabs-accordion-01">
                          <div class="card-body p-0">
                            <div class="row">
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-35.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-37.jpg')}}"

                                                                 alt="Affordable Urban House">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Affordable Urban House</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-73.jpg')}}"

                                                                 alt="Explore Old Barcelona">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Explore Old Barcelona</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-67.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-49.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-19.jpg')}}"

                                                                 alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane tab-pane-parent fade" id="rent" role="tabpanel">
                      <div class="card border-0 bg-transparent">
                        <div class="card-header border-0 d-block d-md-none bg-transparent p-0"
                                         id="headingRent-01">
                          <h5 class="mb-0">
                            <button class="btn lh-2 fs-18 bg-white py-1 px-6 shadow-none w-100 collapse-parent border collapsed mb-4"
                                                    data-toggle="collapse"
                                                    data-target="#rent-collapse-01"
                                                    aria-expanded="true"
                                                    aria-controls="rent-collapse-01">
                              For Rent (3)
                            </button>
                          </h5>
                        </div>
                        <div id="rent-collapse-01" class="collapse collapsible"
                                         aria-labelledby="headingRent-01"
                                         data-parent="#collapse-tabs-accordion-01">
                          <div class="card-body p-0">
                            <div class="row">
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-36.jpg')}}"

                                                                 alt="Villa on Hollywood Boulevard">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-indigo">for Rent</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Villa on Hollywood Boulevard</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                      <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="{{asset('assets/vendors/images/properties-grid-68.jpg')}}"

                                                                 alt="Garden Gingerbread House">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-indigo">for Rent</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2"
                                                                            data-toggle="tooltip" title="9 Images">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-images"></i><span
                                                                                    class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item"
                                                                            data-toggle="tooltip" title="2 Video">
                                            <a href="#"
                                                                               class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span
                                                                                    class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Wishlist">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32"
                                                                            data-toggle="tooltip" title="Compare">
                                            <a href="#"
                                                                               class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a
                                                                    href="#"
                                                                    class="text-dark hover-primary">Garden Gingerbread House</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                      <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                        3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                                                    data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg>
                                        3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13"
                                                                    data-toggle="tooltip" title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg>
                                        2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="fs-22 text-heading lh-15 mb-6">Agency Rating & Reviews </h2>
              <div class="card border-0 mb-4">
                <div class="card-body p-6">
                  <div class="row">
                    <div class="col-sm-6 mb-6 mb-sm-0">
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
                    <div class="col-sm-6">
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
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
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
              <div class="card border-0 mb-4">
                <div class="card-body p-6">
                  <h3 class="fs-16 lh-2 text-heading mb-6">67 Reviews</h3>
                  <div class="media border-bottom mb-6 pb-6">
                    <img src="{{asset('assets/vendors/images/review-06.jpg')}}"
                                 alt="Dollie Horton" class="mr-2">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0 text-heading fs-16 font-weight-500">Dollie Horton</p>
                          <p class="mb-0 lh-1">San Diego</p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                          <ul class="list-inline d-flex justify-content-sm-end mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                          <p class="mb-0 text-muted">02 Dec 2016 at 2:40pm</p>
                        </div>
                      </div>
                      <p class="mb-0">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none. Solved all my problems in a pressing time! Excited to see the other themes they make!</p>
                    </div>
                  </div>
                  <div class="media border-bottom mb-6 pb-6">
                    <img src="{{asset('assets/vendors/images/review-01.jpg')}}"
                                 alt="Dollie Horton" class="mr-2">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0 text-heading fs-16 font-weight-500">Dollie Horton</p>
                          <p class="mb-0 lh-1">San Diego</p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                          <ul class="list-inline d-flex justify-content-sm-end mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                          <p class="mb-0 text-muted">02 Dec 2016 at 2:40pm</p>
                        </div>
                      </div>
                      <p class="mb-0">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none. Solved all my problems in a pressing time! Excited to see the other themes they make!</p>
                    </div>
                  </div>
                  <div class="media border-bottom mb-6 pb-6">
                    <div class="w-70px h-70 mr-2 bg-gray-01 rounded-circle fs-18 text-muted d-flex align-items-center justify-content-center">
                      DH
                    </div>
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0 text-heading fs-16 font-weight-500">Dollie Horton</p>
                          <p class="mb-0 lh-1">San Diego</p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                          <ul class="list-inline d-flex justify-content-sm-end mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                          <p class="mb-0 text-muted">02 Dec 2016 at 2:40pm</p>
                        </div>
                      </div>
                      <p class="mb-0">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none. Solved all my problems in a pressing time! Excited to see the other themes they make!</p>
                    </div>
                  </div>
                  <div class="media  pb-6">
                    <img src="{{asset('assets/vendors/images/review-02.jpg')}}"
                                 alt="Dollie Horton" class="mr-2">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0 text-heading fs-16 font-weight-500">Dollie Horton</p>
                          <p class="mb-0 lh-1">San Diego</p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                          <ul class="list-inline d-flex justify-content-sm-end mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                          <p class="mb-0 text-muted">02 Dec 2016 at 2:40pm</p>
                        </div>
                      </div>
                      <p class="mb-0">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none. Solved all my problems in a pressing time! Excited to see the other themes they make!</p>
                    </div>
                  </div>
                  <a href="#" class="btn btn-lg text-heading bg-hover-light border fs-14 px-5">View more <span
                                class="text-primary fs-15 text-primary d-inline-block ml-2">
                      <i class="fal fa-long-arrow-down"></i>
                    </span> </a>
                </div>
              </div>
              <div class="card border-0">
                <div class="card-body p-6">
                  <h3 class="fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                  <form>
                    <div class="form-group mb-4 d-flex justify-content-start">
                      <div class="rate-input">
                        <input type="radio" id="star5" name="rate" value="5"/>
                        <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star4" name="rate" value="4"/>
                        <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star3" name="rate" value="3"/>
                        <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star2" name="rate" value="2"/>
                        <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star1" name="rate" value="1"/>
                        <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group mb-4">
                          <input placeholder="Your Name"
                                               class="form-control form-control-lg border-0"
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
                      <textarea class="form-control border-0" placeholder="Your Review" name="message"
                                          rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary px-9">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="bottom-bar-action py-2 px-4 bg-gray-01 position-fixed fixed-bottom d-block d-sm-none">
        <div class="container">
          <div class="row no-gutters mx-n2 mxw-571 mx-auto">
            <div class="col-6 px-2">
              <a href="#modal-messenger" data-toggle="modal" class="btn btn-primary btn-lg btn-block fs-14 px-1 py-3 h-auto lh-13">Send Message</a>
            </div>
            <div class="col-6 px-2">
              <a href="tel:(+84)2388-969-888" class="btn btn-primary btn-lg btn-block fs-14 px-1 py-3 h-auto lh-13">Call</a>
            </div>
          </div>
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
    </main>
@endsection
