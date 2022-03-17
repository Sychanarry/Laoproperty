@extends('web.index')
@section('content')
      <section class="pb-6 page-title shadow">
        <div class="container">
          <h1 class="fs-30 lh-16 mb-1 text-dark font-weight-600">Contact Us </h1>
        </div>
      </section>
      <section class="pt-8 pb-9">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="border-bottom pb-7">
                <h2 class="text-heading mb-2 fs-22 lh-15 pr-6">For more information about our services, get in
                  touch
                  with our expert consultants. We're always eager to hear from you!</h2>
                <p class="mb-6">
                  Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem ipsum dolor sit
                  ametcipsu
                </p>
                <form action="{{route('commentcreate')}}" method="POST" class="form fontfamily">
                    @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-4">
                        <input type="search" placeholder="ຊື່"
                                           class="form-control form-control-lg border-0" name="name" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-4">
                        <input type="search" placeholder="ເບີໂທລະສັບ" name="tel"
                                           class="form-control form-control-lg border-0" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-6">
                    <textarea class="form-control border-0" placeholder="ເນື້ອໃນ" required="required" name="message"
                                      rows="5"></textarea>
                  </div>
                  <button type="submit" class="btn btn-lg btn-primary px-9">ສົ່ງ</button>
                </form>
              </div>
              <div class="pt-7">
                <h2 class="text-heading mb-2 fs-22 lh-15 pr-6">Visit our office</h2>
                <div class="mb-6">
                  <span><i class="fal fa-map-marker-alt"></i></span>
                  <span class="d-inline-block ml-2"> 2005 Stokes Isle Apt. 896, Venaville, New York</span>
                </div>
                <div id="map" class="mapbox-gl map-point-animate"
                         style="height: 430px">
                         <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2682.490598892659!2d102.63445708654734!3d18.0430816314005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31245d3b3d08b2f7%3A0x72dbccb62d358314!2sDongdok%20Campus%20Market!5e0!3m2!1sen!2sla!4v1639991999482!5m2!1sen!2sla"
     height="430" style="border:0;width:100%;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                        </div>
                <div class="row mt-8">
                  <div class="col-md-6 mb-6">
                    <div class="media">
                      <span class="fs-32 text-primary mr-4"><i class="fal fa-phone"></i></span>
                      <div class="media-body mt-3">
                        <h4 class="fs-16 lh-2 mb-1 text-dark">Contact</h4>
                        <div class="row mb-1">
                          <div class="col-3">
                            <span>Office</span>
                          </div>
                          <div class="col-9">
                            <a href="tel:123-900-68668" class="text-heading font-weight-500">123 900
                              68668</a>
                          </div>
                        </div>
                        <div class="row mb-1">
                          <div class="col-3">
                            <span>Mobile</span>
                          </div>
                          <div class="col-9">
                            <a href="tel:12390068098" class="text-heading font-weight-500">123 900
                              68098</a>
                          </div>
                        </div>
                        <div class="row mb-1">
                          <div class="col-3">
                            <span>Fax</span>
                          </div>
                          <div class="col-9">
                            <a href="tel:1-3239006800" class="text-heading font-weight-500">1-323 900
                              6800</a>
                          </div>
                        </div>
                        <div class="row mb-1">
                          <div class="col-3">
                            <span>Office</span>
                          </div>
                          <div class="col-9">
                            <a href="mailto:hello@homeid.com" class="text-body">hello@homeid.com</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-6">
                    <div class="media">
                      <span class="fs-32 text-primary mr-4"><i class="fal fa-clock"></i></span>
                      <div class="media-body mt-3">
                        <h4 class="fs-16 lh-2 mb-1 text-dark">Hour of operation</h4>
                        <div class="row mb-1">
                          <div class="col-6">
                            <span>Monday - Friday:</span>
                          </div>
                          <div class="col-6">
                            <span>
                              09:00 - 20:00
                            </span>
                          </div>
                        </div>
                        <div class="row mb-1">
                          <div class="col-6">
                            <span>Sunday & Saturday:</span>
                          </div>
                          <div class="col-6">
                            <span>
                              10:30 - 22:00
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 primary-sidebar sidebar-sticky" id="sidebar">
              <div class="primary-sidebar-inner">
                <div class="card mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h3 class="card-title fs-16 lh-214 mb-2 text-dark">Search All Area Listings</h3>
                    <form class="property-search">
                      <div class="form-group mb-4">
                        <input class="form-control form-control-lg border-0" type="text"
                                           placeholder="Location, Zip, Address or MLS#" name="search">
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <button class="btn btn-lg btn-primary px-2 btn-block">Search Homes</button>
                        </div>
                        <div class="col-6">
                          <a href="#advanced-search-filters"
                                           class="d-block text-heading font-weight-600 d-flex align-items-center collapsed pr-2"
                                           data-toggle="collapse" data-target="#advanced-search-filters"
                                           aria-expanded="true"
                                           aria-controls="advanced-search-filters">
                            Advanced Search
                            <span class="text-primary d-inline-block fs-24 ml-2">
                              <i class="fal fa-plus-circle"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                      <div id="advanced-search-filters" class="collapse pt-4">
                        <div class="form-group">
                          <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Status</label>
                          <select class="form-control form-control-lg selectpicker" name="status"
                                                title="All status">
                            <option>All status</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bedrooms</label>
                          <select class="form-control form-control-lg selectpicker" name="bedroom"
                                                title="All Bedrooms">
                            <option>All Bedrooms</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bathrooms</label>
                          <select class="form-control form-control-lg selectpicker" name="bathroom"
                                                title="All Bathrooms">
                            <option>All Bathrooms</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Cities</label>
                          <select class="form-control form-control-lg selectpicker" name="city"
                                                title="Select">
                            <option>All Cities</option>
                            <option>New York</option>
                            <option>Los Angeles</option>
                            <option>Chicago</option>
                            <option>Houston</option>
                            <option>San Diego</option>
                            <option>Las Vegas</option>
                            <option>Las Vegas</option>
                            <option>Atlanta</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Areas</label>
                          <select class="form-control form-control-lg selectpicker" name="bathroom"
                                                title="All Bathrooms">
                            <option>All Areas</option>
                            <option>Albany Park</option>
                            <option>Altgeld Gardens</option>
                            <option>Andersonville</option>
                            <option>Beverly</option>
                            <option>Brickel</option>
                            <option>Central City</option>
                            <option>Coconut Grove</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1"
                                               for="property-id">Property
                            ID</label>
                          <input type="text" id="property-id" name="property-id"
                                               class="form-control form-control-lg border-0"
                                               placeholder="Enter ID...">
                        </div>
                        <div class="py-2">
                          <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"
                                           href="#other-feature-1"
                                           role="button"
                                           aria-expanded="false" aria-controls="other-feature-1">
                            <span class="fs-15 text-heading font-weight-500 hover-primary">Other Features</span>
                          </a>
                        </div>
                        <div class="collapse" id="other-feature-1">
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check1-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check1-1">Air
                                Conditioning</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check2-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check2-1">Laundry</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check4-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check4-1">Washer</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check5-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check5-1">Barbeque</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check6-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check6-1">Lawn</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check7-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check7-1">Sauna</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check8-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check8-1">WiFi</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check9-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check9-1">Dryer</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check10-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check10-1">Microwave</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check11-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check11-1">Swimming
                                Pool</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check12-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check12-1">Window
                                Coverings</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check13-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check13-1">Gym</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check14-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check14-1">Outdoor
                                Shower</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check15-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check15-1">TV Cable</label>
                            </div>
                          </div>
                          <div class="py-2">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="check16-1"
                                                       name="features[]">
                              <label class="custom-control-label" for="check16-1">Refrigerator</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card city-widget mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h3 class="card-title fs-16 lh-214 text-dark mb-2">Search by Neighborhood</h3>
                    <div class="row no-gutters m-n1">
                      <div class="col-6 p-1">
                        <a href="#"
                                       class="card hover-zoom-in">
                          <div class="card-img bg-img"
                                             style="background-image: url('{{asset('assets/vendors/images/small-los-angeles.jpg')}}');background-size: cover;background-position: center"></div>
                          <div class="card-img-overlay bg-gradient-3 rounded-lg d-flex align-items-end">
                            <p class="card-text font-weight-500 lh-1 text-white">Los Angeles</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6 p-1">
                        <a href="#"
                                       class="card hover-zoom-in">
                          <div class="card-img bg-img"
                                             style="background-image: url('{{asset('assets/vendors/images/small-south-florida.jpg')}}');background-size: cover;background-position: center"></div>
                          <div class="card-img-overlay bg-gradient-3 rounded-lg d-flex align-items-end">
                            <p class="card-text font-weight-500 lh-1 text-white">South Florida</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6 p-1">
                        <a href="#"
                                       class="card hover-zoom-in">
                          <div class="card-img bg-img"
                                             style="background-image: url('{{asset('assets/vendors/images/small-the-hamptons.jpg')}}');background-size: cover;background-position: center"></div>
                          <div class="card-img-overlay bg-gradient-3 rounded-lg d-flex align-items-end">
                            <p class="card-text font-weight-500 lh-1 text-white">The Hamptons</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6 p-1">
                        <a href="#"
                                       class="card hover-zoom-in">
                          <div class="card-img bg-img"
                                             style="background-image: url('{{asset('assets/vendors/images/small-greater-boston.jpg')}}');background-size: cover;background-position: center"></div>
                          <div class="card-img-overlay bg-gradient-3 rounded-lg d-flex align-items-end">
                            <p class="card-text font-weight-500 lh-1 text-white">Greater Boston</p>
                          </div>
                        </a>
                      </div>
                    </div>
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
          </div>
        </div>

      </section>
      <section class="py-8 pt-11 pb-lg-13 position-relative bg-img-cover-center"
         style="background-image: url('{{asset('assets/vendors/images/bg-contact-form-01.jpg')}}')">
        <div class="container">
          <h2 class="text-white mxw-751 text-center fs-22 fs-md-34 lh-15 font-weight-normal mb-8">Subscribe to newsletter
            to receive exclusive offers
            and the latest
            news</h2>
          <form>
            <div class="input-group input-group-lg mb-6 mxw-571">
              <input type="text" class="form-control bg-white shadow-none border-0 z-index-1" placeholder="Your email"
                       name="email">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
      </section>
@endsection
