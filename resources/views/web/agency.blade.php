@extends('web.index')
@section('content')


<section>
        <div class="container">
          <div class="mt-n8 bg-white px-6 py-3 shadow-sm-2 rounded-lg form-search-02 position-relative z-index-3">
            <form class="d-none row d-md-flex flex-wrap align-items-center">
              <div class="col-md-5 mb-3 mb-md-0">
                <div class="row">
                  <div class="form-group mb-3 mb-md-0 col-md-6">
                    <label for="language"
                                   class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Language</label>
                    <select class="form-control form-control-sm font-weight-600  shadow-0 bg-white selectpicker"
                                    name="language"
                                    id="language" data-style="bg-white pl-0 text-dark rounded-0">
                      <option>Select</option>
                      <option>English</option>
                      <option>France</option>
                    </select>
                  </div>
                  <div class="form-group mb-3 mb-md-0 col-md-6">
                    <label for="region"
                                   class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Region</label>
                    <select class="form-control font-weight-600 pl-0 bg-white selectpicker form-control-sm"
                                    name="region"
                                    id="region" data-style="bg-white pl-0 text-dark rounded-0">
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
              </div>
              <div class="form-group mb-3 mb-lg-0 col-md-5">
                <label for="search" class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Search</label>
                <div class="input-group input-group-sm">
                  <input type="text" id="search"
                               class="form-control pl-0 rounded-0 bg-white"
                               placeholder="Search by agent???s name???" name="search">
                  <div class="input-group-append ml-0">
                    <span class="fs-18 input-group-text bg-white rounded-0"><i
                                            class="fal fa-search"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-md-2 pl-0">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  Search
                </button>
              </div>
            </form>
            <form class="d-block d-md-none">
              <div class="d-flex align-items-center">
                <a class="text-body hover-primary d-inline-block fs-24 lh-1 mr-5" data-toggle="collapse"
                       href="#collapseMobileSearch"
                       role="button" aria-expanded="false" aria-controls="collapseMobileSearch">
                  <i class="fal fa-cog"></i>
                </a>
                <div class="input-group">
                  <input type="text"
                               class="form-control pl-0 rounded-0 bg-white"
                               placeholder="Search by agent???s name???" name="search">
                  <div class="input-group-append ml-0">
                    <span class="fs-18 input-group-text bg-white rounded-0"><i
                                            class="fal fa-search"></i></span>
                  </div>
                </div>
              </div>
              <div class="collapse" id="collapseMobileSearch">
                <div class="card card-body border-0 px-0">
                  <div class="form-group mb-3">
                    <label for="language-01"
                                   class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Language</label>
                    <select class="form-control form-control-sm font-weight-600  shadow-0 bg-white selectpicker"
                                    name="language"
                                    id="language-01" data-style="bg-white pl-0 text-dark rounded-0">
                      <option>Select</option>
                      <option>English</option>
                      <option>France</option>
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="region-01"
                                   class="mb-0 lh-1 text-uppercase fs-14 letter-spacing-093">Region</label>
                    <select class="form-control font-weight-600 pl-0 bg-white selectpicker form-control-sm"
                                    name="region"
                                    id="region-01" data-style="bg-white pl-0 text-dark rounded-0">
                      <option>Austin</option>
                      <option>Boston</option>
                      <option>Chicago</option>
                      <option>Denver</option>
                      <option>Los Angeles</option>
                      <option>New York</option>
                      <option>San Francisco</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Search
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <section class="pt-10 pb-13">
        <div class="container">
          <div class="row align-items-sm-center mb-6">
            <div class="col-sm-6 mb-6 mb-sm-0">
              <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">45</span> agencies available for
                you
              </h2>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-end align-items-center">
                <div class="input-group border rounded input-group-lg w-auto mr-3">
                  <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                               for="inputGroupSelect01"><i
                                class="fas fa-align-left fs-16 pr-2"></i>Sort
                    by:</label>
                  <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker"
                                data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0"
                                id="inputGroupSelect01" name="sortby">
                    <option selected>Alphabet</option>
                    <option value="1">Random</option>
                    <option value="1">Rating</option>
                    <option value="1">Number of property</option>
                  </select>
                </div>
                <div class="d-none d-md-block list-layout">
                  <a class="fs-sm-18 text-muted" href="#">
                    <i class="fas fa-list"></i>
                  </a>
                  <span class="fs-sm-18 text-muted ml-5 active">
                    <i class="fa fa-th-large"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4 mb-6">
              <div class="card px-6">
                <a class="card-img-top" href="{{route('agency_detail')}}">
                  <img src="{{asset('assets/vendors/images/agency-grid-01.jpg')}}"
                             alt="Eco House Company">
                </a>
                <div class="card-body px-0 pt-2 pb-6 border-top">
                  <a href="{{route('agency_detail')}}">
                    <h6 class="text-dark lh-213 mb-0 hover-primary">Eco House Company</h6>
                  </a>
                  <p class="card-text">398 Pete Pascale Pl, New York.</p>
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 p-0">
                      <span class="col-sm-4 p-0 fs-13">Office</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Mobile</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Fax</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Email</span>
                      <span class="col-sm-8 p-0">ecohouse@homeid.com</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Social</span>
                      <ul class="col-sm-8 list-inline text-gray-lighter mx-n1 mb-0 p-0 z-index-2">
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-6">
              <div class="card px-6">
                <a class="card-img-top" href="{{route('agency_detail')}}">
                  <img src="{{asset('assets/vendors/images/agency-grid-02.jpg')}}"
                             alt="Eco House Company">
                </a>
                <div class="card-body px-0 pt-2 pb-6 border-top">
                  <a href="{{route('agency_detail')}}">
                    <h6 class="text-dark lh-213 mb-0 hover-primary">Eco House Company</h6>
                  </a>
                  <p class="card-text">398 Pete Pascale Pl, New York.</p>
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 p-0">
                      <span class="col-sm-4 p-0 fs-13">Office</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Mobile</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Fax</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Email</span>
                      <span class="col-sm-8 p-0">ecohouse@homeid.com</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Social</span>
                      <ul class="col-sm-8 list-inline text-gray-lighter mx-n1 mb-0 p-0 z-index-2">
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-6">
              <div class="card px-6">
                <a class="card-img-top" href="{{route('agency_detail')}}">
                  <img src="{{asset('assets/vendors/images/agency-grid-03.jpg')}}"
                             alt="Eco House Company">
                </a>
                <div class="card-body px-0 pt-2 pb-6 border-top">
                  <a href="{{route('agency_detail')}}">
                    <h6 class="text-dark lh-213 mb-0 hover-primary">Eco House Company</h6>
                  </a>
                  <p class="card-text">398 Pete Pascale Pl, New York.</p>
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 p-0">
                      <span class="col-sm-4 p-0 fs-13">Office</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Mobile</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Fax</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Email</span>
                      <span class="col-sm-8 p-0">ecohouse@homeid.com</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Social</span>
                      <ul class="col-sm-8 list-inline text-gray-lighter mx-n1 mb-0 p-0 z-index-2">
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-6">
              <div class="card px-6">
                <a class="card-img-top" href="{{route('agency_detail')}}">
                  <img src="{{asset('assets/vendors/images/agency-grid-04.jpg')}}"
                             alt="Eco House Company">
                </a>
                <div class="card-body px-0 pt-2 pb-6 border-top">
                  <a href="{{route('agency_detail')}}">
                    <h6 class="text-dark lh-213 mb-0 hover-primary">Eco House Company</h6>
                  </a>
                  <p class="card-text">398 Pete Pascale Pl, New York.</p>
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 p-0">
                      <span class="col-sm-4 p-0 fs-13">Office</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Mobile</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Fax</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Email</span>
                      <span class="col-sm-8 p-0">ecohouse@homeid.com</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Social</span>
                      <ul class="col-sm-8 list-inline text-gray-lighter mx-n1 mb-0 p-0 z-index-2">
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-6">
              <div class="card px-6">
                <a class="card-img-top" href="{{route('agency_detail')}}">
                  <img src="{{asset('assets/vendors/images/agency-grid-05.jpg')}}"
                             alt="Eco House Company">
                </a>
                <div class="card-body px-0 pt-2 pb-6 border-top">
                  <a href="{{route('agency_detail')}}">
                    <h6 class="text-dark lh-213 mb-0 hover-primary">Eco House Company</h6>
                  </a>
                  <p class="card-text">398 Pete Pascale Pl, New York.</p>
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 p-0">
                      <span class="col-sm-4 p-0 fs-13">Office</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Mobile</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Fax</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Email</span>
                      <span class="col-sm-8 p-0">ecohouse@homeid.com</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Social</span>
                      <ul class="col-sm-8 list-inline text-gray-lighter mx-n1 mb-0 p-0 z-index-2">
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-6">
              <div class="card px-6">
                <a class="card-img-top" href="{{route('agency_detail')}}">
                  <img src="{{asset('assets/vendors/images/agency-grid-06.jpg')}}"
                             alt="Eco House Company">
                </a>
                <div class="card-body px-0 pt-2 pb-6 border-top">
                  <a href="{{route('agency_detail')}}">
                    <h6 class="text-dark lh-213 mb-0 hover-primary">Eco House Company</h6>
                  </a>
                  <p class="card-text">398 Pete Pascale Pl, New York.</p>
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 p-0">
                      <span class="col-sm-4 p-0 fs-13">Office</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Mobile</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">123 900 68668</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Fax</span>
                      <span class="col-sm-8 p-0 text-heading font-weight-500">1-323 900 6800</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Email</span>
                      <span class="col-sm-8 p-0">ecohouse@homeid.com</span>
                    </li>
                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                      <span class="col-sm-4 p-0 fs-13">Social</span>
                      <ul class="col-sm-8 list-inline text-gray-lighter mx-n1 mb-0 p-0 z-index-2">
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item mr-0 p-1">
                          <a href="#"
                                           class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <nav class="mt-2 pt-15">
            <ul class="pagination rounded-active justify-content-center mb-0">
              <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-left"></i></a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
              <li class="page-item">...</li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </section>
      @endsection
