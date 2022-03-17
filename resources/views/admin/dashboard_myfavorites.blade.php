@extends('admin.index_master')
@section('content')
<div class="page-content">
   @include('admin.body.pagecontent')
          <main id="content" class="bg-gray-01">
            <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
              <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                <div class="mr-0 mr-md-auto">
                  <h2 class="mb-0 text-heading fs-22 lh-15">My Favorites<span
                    class="badge badge-white badge-pill text-primary fs-18 font-weight-bold ml-2">5</span>
                  </h2>
                  <p>Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                </div>
                <div class="form-inline justify-content-md-end mx-n2">
                  <div class="p-2">
                    <div class="input-group input-group-lg bg-white border">
                      <div class="input-group-prepend">
                        <button class="btn pr-0 shadow-none" type="button"><i class="far fa-search"></i></button>
                      </div>
                      <input type="text" class="form-control bg-transparent border-0 shadow-none text-body"
                           placeholder="Search listing" name="search">
                    </div>
                  </div>
                  <div class="p-2">
                    <div class="input-group input-group-lg bg-white border">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent letter-spacing-093 border-0 pr-0"><i
                            class="far fa-align-left mr-2"></i>Sort by:</span>
                      </div>
                      <select class="form-control bg-transparent pl-0 selectpicker d-flex align-items-center sortby"
                            name="sort-by"
                            data-style="bg-transparent px-1 py-0 lh-1 font-weight-600 text-body"
                            id="status">
                        <option>Alphabet</option>
                        <option>Price - Low to High</option>
                        <option>Price - High to Low</option>
                        <option>Date - Old to New</option>
                        <option>Date - New to Old</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-38.jpg')}}"
                         alt="Home in Metric Way">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-primary">for sale</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Home in Metric Way</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$.1250.000</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-01.jpg')}}"
                         alt="Affordable Urban House">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-indigo">for rent</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Affordable Urban House</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$550</span>
                        <span class="text-gray-light">/month</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-03.jpg')}}"
                         alt="Villa on Hollywood Boulevard">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-indigo">for rent</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Villa on Hollywood Boulevard</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$550</span>
                        <span class="text-gray-light">/month</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-02.jpg')}}"
                         alt="Villa on Hollywood Boulevard">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-primary">for sale</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Villa on Hollywood Boulevard</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$.1250.000</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-04.jpg')}}"
                         alt="Home in Metric Way">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-primary">for sale</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Home in Metric Way</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$.1250.000</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-06.jpg')}}"
                         alt="Home in Metric Way">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-primary">for sale</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Home in Metric Way</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$.1250.000</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-05.jpg')}}"
                         alt="Home in Metric Way">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-primary">for sale</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Home in Metric Way</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$.1250.000</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3 mb-6">
                  <div class="card shadow-hover-1">
                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                      <img src="{{asset('assets/vendors/images/properties-grid-39.jpg')}}"
                         alt="Affordable Urban House">
                      <div class="card-img-overlay p-2 d-flex flex-column">
                        <div>
                          <span class="badge badge-indigo">for rent</span>
                        </div>
                        <div class="mt-auto hover-image">
                          <ul class="list-inline mb-0 d-flex align-items-end">
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
                    </div>
                    <div class="card-body pt-3">
                      <h2 class="card-title fs-16 lh-2 mb-0"><a href="#"
                                                              class="text-dark hover-primary">Affordable Urban House</a>
                      </h2>
                      <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                      <ul class="list-inline d-flex mb-0 flex-wrap">
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2 "
                            data-toggle="tooltip" title="3 Br">
                          <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                            <use xlink:href="#icon-bedroom"></use>
                          </svg>
                          3 Br
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="3 Ba">
                          <svg class="icon icon-shower fs-18 text-primary mr-1">
                            <use xlink:href="#icon-shower"></use>
                          </svg>
                          3 Ba
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center px-1 mr-2"
                            data-toggle="tooltip" title="2300 Sq.Ft">
                          <svg class="icon icon-square fs-18 text-primary mr-1">
                            <use xlink:href="#icon-square"></use>
                          </svg>
                          2300 Sq.Ft
                        </li>
                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-2"
                            data-toggle="tooltip" title="1 Gr">
                          <svg class="icon icon-Garage fs-18 text-primary mr-1">
                            <use xlink:href="#icon-Garage"></use>
                          </svg>
                          1 Gr
                        </li>
                      </ul>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                      <div class="mr-auto">
                        <span class="text-heading lh-15 font-weight-bold fs-17">$550</span>
                        <span class="text-gray-light">/month</span>
                      </div>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Wish list"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"><i
                                    class="fas fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" data-toggle="tooltip" title="Compare"
                               class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"><i
                                    class="fas fa-exchange-alt"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </main>
    </div>
    @endsection
