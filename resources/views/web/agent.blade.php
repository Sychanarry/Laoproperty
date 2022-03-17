@extends('web.index')
@section('content')
      <section class="pt-8 pb-13 bg-gray-01">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 primary-sidebar sidebar-sticky order-1 order-lg-0" id="sidebar">
              <div class="primary-sidebar-inner">
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
                <div class="card mb-4">
                  <div class="card-body text-center pt-7 pb-6 px-0">
                    <img src="{{asset('assets/vendors/images/contact-widget.jpg')}}"
                                 alt="Want to become an Estate Agent ?">
                    <div class="text-dark mb-6 mt-n2 font-weight-500">Want to become an
                      <p class="mb-0 fs-18">Estate Agent?</p>
                    </div>
                    <a href="#" class="btn btn-primary">Register</a>
                  </div>
                </div>
                <div class="card property-widget mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Featured Properties</h4>
                    <div class="slick-slider mx-0"
                                 data-slick-options='{"slidesToShow": 1, "autoplay":true}'>
                      <div class="box px-0">
                        <div class="card border-0">
                          <img src="{{asset('assets/vendors/images/feature-property-01.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
                          <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                            <div class="d-flex mb-auto">
                              <a href="#" class="mr-1 badge badge-orange">featured</a>
                              <a href="#" class="badge badge-indigo">for Rent</a>
                            </div>
                            <div class="px-2 pb-2">
                              <a href="#" class="text-white"><h5
                                                        class="card-title fs-16 lh-2 mb-0">Villa on Hollywood
                                  Boulevard</h5>
                              </a>
                              <p class="card-text text-gray-light mb-0 font-weight-500">1421 San
                                Predro
                                St, Los Angeles</p>
                              <p class="text-white mb-0"><span
                                                        class="fs-17 font-weight-bold">$2500 </span>/month
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="box px-0">
                        <div class="card border-0">
                          <img src="{{asset('assets/vendors/images/feature-property-01.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
                          <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                            <div class="d-flex mb-auto">
                              <a href="#" class="mr-1 badge badge-orange">featured</a>
                              <a href="#" class="badge badge-indigo">for Rent</a>
                            </div>
                            <div class="px-2 pb-2">
                              <a href="#" class="text-white"><h5
                                                        class="card-title fs-16 lh-2 mb-0">Villa on Hollywood
                                  Boulevard</h5>
                              </a>
                              <p class="card-text text-gray-light mb-0 font-weight-500">1421 San
                                Predro
                                St, Los Angeles</p>
                              <p class="text-white mb-0"><span
                                                        class="fs-17 font-weight-bold">$2500 </span>/month
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="box px-0">
                        <div class="card border-0">
                          <img src="{{asset('assets/vendors/images/feature-property-01.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
                          <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                            <div class="d-flex mb-auto">
                              <a href="#" class="mr-1 badge badge-orange">featured</a>
                              <a href="#" class="badge badge-indigo">for Rent</a>
                            </div>
                            <div class="px-2 pb-2">
                              <a href="#" class="text-white"><h5
                                                        class="card-title fs-16 lh-2 mb-0">Villa on Hollywood
                                  Boulevard</h5>
                              </a>
                              <p class="card-text text-gray-light mb-0 font-weight-500">1421 San
                                Predro
                                St, Los Angeles</p>
                              <p class="text-white mb-0"><span
                                                        class="fs-17 font-weight-bold">$2500 </span>/month
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body px-6 py-4">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Latest Posts</h4>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-0 pt-0 pb-3">
                        <div class="media">
                          <div class="position-relative mr-3">
                            <a href="#"
                                               class="d-block w-100px rounded pt-11 bg-img-cover-center"
                                               style="background-image: url('{{asset('assets/vendors/images/post-02.jpg')}}')">
                            </a>
                            <a href="#"
                                               class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
                              creative
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="fs-14 lh-186 mb-1">
                              <a href="#"
                                                   class="text-dark hover-primary">
                                Retail banks wake up to digital lending this year
                              </a>
                            </h4>
                            <div class="text-gray-light">
                              Dec 16, 2018
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 pt-2 pb-3">
                        <div class="media">
                          <div class="position-relative mr-3">
                            <a href="#"
                                               class="d-block w-100px rounded pt-11 bg-img-cover-center"
                                               style="background-image: url('{{asset('assets/vendors/images/post-04.jpg')}}')">
                            </a>
                            <a href="#"
                                               class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
                              rental
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="fs-14 lh-186 mb-1">
                              <a href="#"
                                                   class="text-dark hover-primary">
                                Within the construction industry as their overdraft
                              </a>
                            </h4>
                            <div class="text-gray-light">
                              Dec 16, 2018
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item px-0 pt-2">
                        <div class="media">
                          <div class="position-relative mr-3">
                            <a href="#"
                                               class="d-block w-100px rounded pt-11 bg-img-cover-center"
                                               style="background-image: url('{{asset('assets/vendors/images/post-07.jpg')}}')">
                            </a>
                            <a href="#"
                                               class="badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top">
                              rental
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="fs-14 lh-186 mb-1">
                              <a href="#"
                                                   class="text-dark hover-primary">
                                Future Office Buildings: Intelligent by Design
                              </a>
                            </h4>
                            <div class="text-gray-light">
                              Dec 16, 2018
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 mb-6 mb-lg-0  order-0 order-lg-1">
              <div class="row align-items-sm-center mb-7">
                <div class="col-sm-6 mb-6 mb-sm-0">
                  <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">45</span> agents available
                    for
                    you
                  </h2>
                </div>
                <div class="col-sm-6 ml-auto">
                  <div class="d-flex align-items-center justify-content-sm-end">
                    <div class="input-group border rounded input-group-lg w-auto mr-6">
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
                      <span class="fs-sm-18 text-muted active">
                        <i class="fas fa-list"></i>
                      </span>
                      <a href="#" class="fs-sm-18 text-muted ml-5">
                        <i class="fa fa-th-large"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="#" class="d-block hover-shine">
                      <img src="{{asset('assets/vendors/images/agent-12.jpg')}}" class="card-img"
                                     alt="Diego Garcia">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body pl-0 pl-sm-7">
                      <a href="{{route('agent_detail')}}"
                                   class="card-title d-block fs-16 lh-2 text-dark font-weight-500 hover-primary mb-0">
                        Diego Garcia
                      </a>
                      <p class="mb-3 card-text">Copany Agent <a href="#" class="text-body"><u>Modern House Real Estate</u></a>
                      </p>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-phone"></i></span>
                        <span class="d-inline-block ml-2 text-body">123 900 68668</span>
                      </a>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-envelope"></i></span>
                        <span class="d-inline-block ml-2 text-body">oliverbeddows@homeid.com</span>
                      </a>
                      <div class="">
                        <span class="text-primary"><i class="fal fa-map-marker-alt"></i></span>
                        <span class="d-inline-block ml-2">398 Pete Pascale Pl, New York</span>
                      </div>
                      <ul class="list-inline text-gray-lighter mt-4 mb-0">
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="#" class="d-block hover-shine">
                      <img src="{{asset('assets/vendors/images/agent-35.jpg')}}" class="card-img"
                                     alt="Elmer Vega">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body pl-0 pl-sm-7">
                      <a href=""{{route('agent_detail')}}"
                                   class="card-title d-block fs-16 lh-2 text-dark font-weight-500 hover-primary mb-0">
                        Elmer Vega
                      </a>
                      <p class="mb-3 card-text">Copany Agent <a href="#" class="text-body"><u>Modern House Real Estate</u></a>
                      </p>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-phone"></i></span>
                        <span class="d-inline-block ml-2 text-body">123 900 68668</span>
                      </a>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-envelope"></i></span>
                        <span class="d-inline-block ml-2 text-body">oliverbeddows@homeid.com</span>
                      </a>
                      <div class="">
                        <span class="text-primary"><i class="fal fa-map-marker-alt"></i></span>
                        <span class="d-inline-block ml-2">398 Pete Pascale Pl, New York</span>
                      </div>
                      <ul class="list-inline text-gray-lighter mt-4 mb-0">
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="#" class="d-block hover-shine">
                      <img src="{{asset('assets/vendors/images/agent-40.jpg')}}" class="card-img"
                                     alt="Blanche Gordon">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body pl-0 pl-sm-7">
                      <a href="{{route('agent_detail')}}"
                                   class="card-title d-block fs-16 lh-2 text-dark font-weight-500 hover-primary mb-0">
                        Blanche Gordon
                      </a>
                      <p class="mb-3 card-text">Copany Agent <a href="#" class="text-body"><u>Modern House Real Estate</u></a>
                      </p>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-phone"></i></span>
                        <span class="d-inline-block ml-2 text-body">123 900 68668</span>
                      </a>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-envelope"></i></span>
                        <span class="d-inline-block ml-2 text-body">oliverbeddows@homeid.com</span>
                      </a>
                      <div class="">
                        <span class="text-primary"><i class="fal fa-map-marker-alt"></i></span>
                        <span class="d-inline-block ml-2">398 Pete Pascale Pl, New York</span>
                      </div>
                      <ul class="list-inline text-gray-lighter mt-4 mb-0">
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="#" class="d-block hover-shine">
                      <img src="{{asset('assets/vendors/images/agent-36.jpg')}}" class="card-img"
                                     alt="Lenora Andrews">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body pl-0 pl-sm-7">
                      <a href="{{route('agent_detail')}}"
                                   class="card-title d-block fs-16 lh-2 text-dark font-weight-500 hover-primary mb-0">
                        Lenora Andrews
                      </a>
                      <p class="mb-3 card-text">Copany Agent <a href="#" class="text-body"><u>Modern House Real Estate</u></a>
                      </p>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-phone"></i></span>
                        <span class="d-inline-block ml-2 text-body">123 900 68668</span>
                      </a>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-envelope"></i></span>
                        <span class="d-inline-block ml-2 text-body">oliverbeddows@homeid.com</span>
                      </a>
                      <div class="">
                        <span class="text-primary"><i class="fal fa-map-marker-alt"></i></span>
                        <span class="d-inline-block ml-2">398 Pete Pascale Pl, New York</span>
                      </div>
                      <ul class="list-inline text-gray-lighter mt-4 mb-0">
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="#" class="d-block hover-shine">
                      <img src="{{asset('assets/vendors/images/agent-37.jpg')}}" class="card-img"
                                     alt="Carl Jefferson">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body pl-0 pl-sm-7">
                      <a href="{{route('agent_detail')}}"
                                   class="card-title d-block fs-16 lh-2 text-dark font-weight-500 hover-primary mb-0">
                        Carl Jefferson
                      </a>
                      <p class="mb-3 card-text">Copany Agent <a href="#" class="text-body"><u>Modern House Real Estate</u></a>
                      </p>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-phone"></i></span>
                        <span class="d-inline-block ml-2 text-body">123 900 68668</span>
                      </a>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-envelope"></i></span>
                        <span class="d-inline-block ml-2 text-body">oliverbeddows@homeid.com</span>
                      </a>
                      <div class="">
                        <span class="text-primary"><i class="fal fa-map-marker-alt"></i></span>
                        <span class="d-inline-block ml-2">398 Pete Pascale Pl, New York</span>
                      </div>
                      <ul class="list-inline text-gray-lighter mt-4 mb-0">
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="#" class="d-block hover-shine">
                      <img src="{{asset('assets/vendors/images/agent-38.jpg')}}" class="card-img"
                                     alt="Allen Wheeler">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body pl-0 pl-sm-7">
                      <a href="{{route('agent_detail')}}"
                                   class="card-title d-block fs-16 lh-2 text-dark font-weight-500 hover-primary mb-0">
                        Allen Wheeler
                      </a>
                      <p class="mb-3 card-text">Copany Agent <a href="#" class="text-body"><u>Modern House Real Estate</u></a>
                      </p>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-phone"></i></span>
                        <span class="d-inline-block ml-2 text-body">123 900 68668</span>
                      </a>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-envelope"></i></span>
                        <span class="d-inline-block ml-2 text-body">oliverbeddows@homeid.com</span>
                      </a>
                      <div class="">
                        <span class="text-primary"><i class="fal fa-map-marker-alt"></i></span>
                        <span class="d-inline-block ml-2">398 Pete Pascale Pl, New York</span>
                      </div>
                      <ul class="list-inline text-gray-lighter mt-4 mb-0">
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-2 border-0 mb-4 d-block">
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-0 pr-sm-1">
                    <a href="#" class="d-block hover-shine">
                      <img src="{{asset('assets/vendors/images/agent-39.jpg')}}" class="card-img"
                                     alt="Eula Ryan">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body pl-0 pl-sm-7">
                      <a href="{{route('agent_detail')}}"
                                   class="card-title d-block fs-16 lh-2 text-dark font-weight-500 hover-primary mb-0">
                        Eula Ryan
                      </a>
                      <p class="mb-3 card-text">Copany Agent <a href="#" class="text-body"><u>Modern House Real Estate</u></a>
                      </p>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-phone"></i></span>
                        <span class="d-inline-block ml-2 text-body">123 900 68668</span>
                      </a>
                      <a href="#" class="d-block">
                        <span class="text-primary"><i class="fal fa-envelope"></i></span>
                        <span class="d-inline-block ml-2 text-body">oliverbeddows@homeid.com</span>
                      </a>
                      <div class="">
                        <span class="text-primary"><i class="fal fa-map-marker-alt"></i></span>
                        <span class="d-inline-block ml-2">398 Pete Pascale Pl, New York</span>
                      </div>
                      <ul class="list-inline text-gray-lighter mt-4 mb-0">
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#"
                                           class="w-32px h-32 rounded-lg bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                                class="fab fa-linkedin-in"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <nav class="pt-6">
                <ul class="pagination rounded-active justify-content-center">
                  <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-left"></i></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">...</li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i
                                class="far fa-angle-double-right"></i></a></li>
                </ul>
              </nav>
              <div class="text-center mt-2">8-14 of 45 Results</div>
            </div>
          </div>
        </div>
      </section>


@endsection
