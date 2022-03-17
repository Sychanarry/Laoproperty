@extends('web.index')
@section('content')
      <section class="bg-patten-03 bg-gray-01 pb-13">
        <div class="container">
          <div class="card border-0 mt-n13 z-index-3 mb-12">
            <div class="card-body p-6 px-lg-14 py-lg-13">
              <p class="letter-spacing-263 text-uppercase text-primary mb-6 font-weight-500 text-center">welcome to
                grandhome</p>
              <h2 class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-6">We see change as opportunity, not a
                threat and
                start
                with the
                belief that
                there is
                a better way. </h2>
              <p class="text-center px-lg-11 fs-15 lh-17 mb-11">
                Over the past 25 years we’ve created more than 5,000 new homes and 1.5 million sq ft of workspace in
                over 60 regeneration projects. Have a look at the short film below to learn more about how we’ve
                achieved this and what drives us.
              </p>
              <p class="letter-spacing-263 text-uppercase mb-4 font-weight-500 text-center">Jump to</p>
              <div class="d-flex flex-wrap justify-content-center">
                <a href="#" class="btn btn-lg bg-gray-01 text-body mr-4 mb-4 hover-primary">Services</a>
                <a href="#" class="btn btn-lg bg-gray-01 text-body mr-4 mb-4 hover-primary">Leadership</a>
                <a href="#" class="btn btn-lg bg-gray-01 text-body mr-4 mb-4 hover-primary">Offices Location</a>
                <a href="#" class="btn btn-lg bg-gray-01 text-body mr-4 mb-4 hover-primary">Work with us</a>
              </div>
            </div>
          </div>
          <h2 class="text-dark lh-1625 text-center mb-2 fs-22 fs-md-32">Our services</h2>
          <p class="mxw-751 text-center mb-1 px-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim</p>
          <div class="row mt-8">
            <div class="col-md-4 mb-6 mb-lg-0">
              <div class="card shadow-2 px-7 pb-6 pt-4 h-100 border-0">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <span class="text-primary fs-90 lh-1"><svg class="icon icon-e1"><use
                                        xlink:href="#icon-e1"></use></svg></span>
                </div>
                <div class="card-body px-0 pt-6 pb-0 text-center">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2">Property Management</h4>
                  <p class="card-text px-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-6 mb-lg-0">
              <div class="card shadow-2 px-7 pb-6 pt-4 h-100 border-0">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <span class="text-primary fs-90 lh-1">
                    <svg class="icon icon-e2"><use xlink:href="#icon-e2"></use></svg>
                  </span>
                </div>
                <div class="card-body px-0 pt-6 pb-0 text-center">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2">Mortgage Service</h4>
                  <p class="card-text px-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-6 mb-lg-0">
              <div class="card shadow-2 px-7 pb-6 pt-4 h-100 border-0">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <span class="text-primary fs-90 lh-1">
                    <svg class="icon icon-e3"><use xlink:href="#icon-e3"></use></svg>
                  </span>
                </div>
                <div class="card-body px-0 pt-6 text-center pb-0">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2">Consulting Service</h4>
                  <p class="card-text px-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-12">
        <div class="container">
          <h2 class="text-dark lh-1625 text-center mb-2 fs-22 fs-md-32">Leadership</h2>
          <p class="mxw-751 text-center mb-1 px-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim</p>
          <div class="row mx-lg-n6 mt-8">
            <div class="col-md-4 col-sm-12 mb-md-7 mb-4 px-lg-6">
              <div class="card border-0 our-team text-center">
                <div class="rounded overflow-hidden bg-hover-overlay d-inline-block">
                  <img class="card-img" src="{{asset('assets/vendors/images/our-team-01.jpg')}}"
                             alt="Dollie Horton">
                  <ul class="list-inline text-gray-lighter position-absolute w-100 m-0 p-0 z-index-2">
                    <li class="list-inline-item m-0">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="card-body pt-5">
                  <h3 class="fs-22 text-heading lh-164 mb-0">
                    <a href="#" class="text-heading hover-primary">Dollie Horton</a>
                  </h3>
                  <p class="m-0">President & CEO</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-md-7 mb-4 px-lg-6">
              <div class="card border-0 our-team text-center">
                <div class="rounded overflow-hidden bg-hover-overlay d-inline-block">
                  <img class="card-img" src="{{asset('assets/vendors/images/our-team-02.jpg')}}"
                             alt="Dollie Horton">
                  <ul class="list-inline text-gray-lighter position-absolute w-100 m-0 p-0 z-index-2">
                    <li class="list-inline-item m-0">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="card-body pt-5">
                  <h3 class="fs-22 text-heading lh-164 mb-0">
                    <a href="#" class="text-heading hover-primary">Dollie Horton</a>
                  </h3>
                  <p class="m-0">Co-Founder</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-md-7 mb-4 px-lg-6">
              <div class="card border-0 our-team text-center">
                <div class="rounded overflow-hidden bg-hover-overlay d-inline-block">
                  <img class="card-img" src="{{asset('assets/vendors/images/our-team-03.jpg')}}"
                             alt="Dollie Horton">
                  <ul class="list-inline text-gray-lighter position-absolute w-100 m-0 p-0 z-index-2">
                    <li class="list-inline-item m-0">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="card-body pt-5">
                  <h3 class="fs-22 text-heading lh-164 mb-0">
                    <a href="#" class="text-heading hover-primary">Dollie Horton</a>
                  </h3>
                  <p class="m-0">Co-Founder</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-sm-0 mb-7">
              <div class="card border-0 our-team text-center">
                <div class="rounded overflow-hidden bg-hover-overlay d-inline-block">
                  <img class="card-img" src="{{asset('assets/vendors/images/our-team-04.jpg')}}"
                             alt="Dollie Horton">
                  <ul class="list-inline text-gray-lighter position-absolute w-100 m-0 p-0 z-index-2">
                    <li class="list-inline-item m-0">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="card-body pt-5">
                  <h3 class="fs-16 text-heading mb-1 lh-2">
                    <a href="#" class="text-heading hover-primary">Dollie Horton</a>
                  </h3>
                  <p>Marketing Director</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-0 mb-7">
              <div class="card border-0 our-team text-center">
                <div class="rounded overflow-hidden bg-hover-overlay d-inline-block">
                  <img class="card-img" src="{{asset('assets/vendors/images/our-team-05.jpg')}}"
                             alt="Dollie Horton">
                  <ul class="list-inline text-gray-lighter position-absolute w-100 m-0 p-0 z-index-2">
                    <li class="list-inline-item m-0">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="card-body pt-5">
                  <h3 class="fs-16 text-heading mb-1 lh-2">
                    <a href="#" class="text-heading hover-primary">Dollie Horton</a>
                  </h3>
                  <p>Project manager</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-0 mb-7">
              <div class="card border-0 our-team text-center">
                <div class="rounded overflow-hidden bg-hover-overlay d-inline-block">
                  <img class="card-img" src="{{asset('assets/vendors/images/our-team-06.jpg')}}"
                             alt="Dollie Horton">
                  <ul class="list-inline text-gray-lighter position-absolute w-100 m-0 p-0 z-index-2">
                    <li class="list-inline-item m-0">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="card-body pt-5">
                  <h3 class="fs-16 text-heading mb-1 lh-2">
                    <a href="#" class="text-heading hover-primary">Tom Sanders</a>
                  </h3>
                  <p>Commercial Operations Director</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-0 mb-7">
              <div class="card border-0 our-team text-center">
                <div class="rounded overflow-hidden bg-hover-overlay d-inline-block">
                  <img class="card-img" src="{{asset('assets/vendors/images/our-team-07.jpg')}}"
                             alt="Dollie Horton">
                  <ul class="list-inline text-gray-lighter position-absolute w-100 m-0 p-0 z-index-2">
                    <li class="list-inline-item m-0">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-0 ml-2">
                      <a href="#"
                                   class="w-32px h-32 rounded shadow-xxs-3 bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center"><i
                                        class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="card-body pt-5">
                  <h3 class="fs-16 text-heading mb-1 lh-2">
                    <a href="#" class="text-heading hover-primary">Dollie Horton</a>
                  </h3>
                  <p>Head of Sales</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div>
          <div class="position-relative">
            <div id="map" class="mapbox-gl map-point-animate" style="height: 550px">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2682.490598892659!2d102.63445708654734!3d18.0430816314005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31245d3b3d08b2f7%3A0x72dbccb62d358314!2sDongdok%20Campus%20Market!5e0!3m2!1sen!2sla!4v1639991999482!5m2!1sen!2sla"
     height="550px" style="border:0;width:100%;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="container">
              <div class="map-info position-absolute">
                <div class="card border-0 shadow-xs-4">
                  <div class="card-body pl-7 pr-6 pt-7 pb-10">
                    <h4 class="fs-22 lh-238 mb-0">Offices Location</h4>
                    <p class="mb-8">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem
                      ipsum dolor sit
                      ametcipsum ipsumg elit. consec tetur cing elitipsum dozlpsmg elit.</p>
                    <h5 class="fs-16 lh-2 mb-0">Visit our office at</h5>
                    <p class="mb-0">2005 Stokes Isle Apt. 896, Venaville, New York</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-12">
        <div class="container">
          <h2 class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-md-13">
            GrandHome is an estate agency that helps people live in more thoughtful and beautiful ways.
          </h2>
          <p class="text-center px-md-17 fs-15 lh-17 mb-8">
            Our home is at the heart of the design, allowing us to engage with our community through talks and events,
            and uphold our company culture with film screenings, yoga classes and team lunches.
          </p>
          <div class="text-center mb-11">
            <a href="#" class="btn btn-lg btn-primary">Join our team</a>
          </div>
          <div class="row galleries mb-lg-n16">
            <div class="col-sm-8 mb-6">
              <div class="item item-size-2-1">
                <a href="{{asset('assets/vendors/images/gallery-lg-08.jpg')}}" class="card p-0 hover-zoom-in"
                       data-gtf-mfp="true" data-gallery-id="02">
                  <div class="card-img img"
                             style="background-image:url('{{asset('assets/vendors/images/gallery-08.jpg')}}')">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-4 mb-6">
              <div class="item item-size-2-1">
                <a href="{{asset('assets/vendors/images/gallery-lg-09.jpg')}}" class="card p-0 hover-zoom-in"
                       data-gtf-mfp="true" data-gallery-id="02">
                  <div class="card-img img"
                             style="background-image:url('{{asset('assets/vendors/images/gallery-09.jpg')}}')">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 mb-6">
              <div class="item item-size-2-1">
                <a href="{{asset('assets/vendors/images/gallery-lg-10.jpg')}}" class="card p-0 hover-zoom-in"
                       data-gtf-mfp="true" data-gallery-id="02">
                  <div class="card-img img"
                             style="background-image:url('{{asset('assets/vendors/images/gallery-10.jpg')}}')">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 mb-6">
              <div class="item item-size-2-1">
                <a href="{{asset('assets/vendors/images/gallery-lg-11.jpg')}}" class="card p-0 hover-zoom-in"
                       data-gtf-mfp="true" data-gallery-id="02">
                  <div class="card-img img"
                             style="background-image:url('{{asset('assets/vendors/images/gallery-11.jpg')}}')">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-gray-01 pt-10 pt-lg-17 pb-10">
        <div class="container">
          <h2 class="text-dark lh-1625 text-center mb-8 fs-22 fs-md-32 pt-lg-10">Keep exploring</h2>
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-6 mb-lg-0">
              <a href="#"
                   class="card border-0 shadow-2 px-7 py-5 h-100 shadow-hover-lg-1">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <img src="{{asset('assets/vendors/images/icon-box-4.png')}}"
                             alt="Meet our agents">
                </div>
                <div class="card-body px-0 pt-2 pb-0 text-center">
                  <h4 class="card-title fs-16 lh-186 text-dark hover-primary">Meet our agents</h4>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-6 mb-lg-0">
              <a href="#"
                   class="card border-0 shadow-2 px-7 py-5 h-100 shadow-hover-lg-1">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <img src="{{asset('assets/vendors/images/icon-box-5.png')}}"
                             alt="Sell your home">
                </div>
                <div class="card-body px-0 pt-2 pb-0 text-center">
                  <h4 class="card-title fs-16 lh-186 text-dark hover-primary">Sell your home</h4>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-6 mb-lg-0">
              <a href="#"
                   class="card border-0 shadow-2 px-7 py-5 h-100 shadow-hover-lg-1">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <img src="{{asset('assets/vendors/images/icon-box-6.png')}}"
                             alt="Latest news">
                </div>
                <div class="card-body px-0 pt-2 text-center pb-0">
                  <h4 class="card-title fs-16 lh-186 text-dark hover-primary">Latest news</h4>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-6 mb-lg-0">
              <a href="{{route('contact_us')}}"
                   class="card border-0 shadow-2 px-7 py-5 h-100 shadow-hover-lg-1">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <img src="{{asset('assets/vendors/images/icon-box-7.png')}}"
                             alt="Contact us">
                </div>
                <div class="card-body px-0 pt-2 text-center pb-0">
                  <h4 class="card-title fs-16 lh-186 text-dark hover-primary fontfamily">ຕິດຕໍ່ພວກເຮົາ</h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      @endsection
