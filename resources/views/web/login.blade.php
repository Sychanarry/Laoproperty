@extends('web.index')
@section('content')
<main id="content">
    <section class="py-13">
      <div class="container fontfamily">
        <div class="row login-register">
          <div class="col-lg-5">
            <div class="card border-0 shadow-xxs-2 mb-6">
              <div class="card-body px-8 py-6">
                <h2 class="card-title fs-30 font-weight-600 text-dark lh-16 mb-2">Log In</h2>
                <p class="mb-4">Already have an account? <a href="#" class="text-heading hover-primary"><u>Log
                      in</u></a></p>
                      <form class="form" action="{{route('login-user')}}" method="POST">
                        @csrf
                  <div class="form-group mb-4">
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                  <div>
                      <ul>
                  <li class="text-danger">{{ session()->get('message') }}</li>
                  </ul>
                  </div>

              @endif
                    <label for="username-1">Email</label>
                    <input type="text" class="form-control form-control-lg border-0"
                                     id="username-1" name="user_name"
                                     placeholder="Your email">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password-2">Password</label>
                    <div class="input-group input-group-lg">
                      <input type="text" class="form-control border-0 shadow-none fs-13"
                                         id="password-2" name="password"
                                         placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                          <i class="far fa-eye-slash"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="remember-me-1" name="remember">
                      <label class="form-check-label" for="remember-me-1">
                        Stay signed in
                      </label>
                    </div>
                    <a href="password-recovery.html" class="d-inline-block ml-auto fs-13 lh-2 text-body">
                      <u>Forgot your password?</u>
                    </a>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Log in</button>
                </form>
                <div class="divider text-center my-2">
                  <span class="px-4 bg-white lh-17 text text-heading">
                    or Log-in with
                  </span>
                </div>
                <div class="row no-gutters mx-n2">
                  <div class="col-sm-6 px-2 mb-4">
                    <a href="#" class="btn btn-lg btn-block text-heading border px-0 bg-hover-accent">
                      <img src="{{asset('assets/vendors/images/facebook.png')}}" alt="Google" class="mr-2">
                      Facebook
                    </a>
                  </div>
                  <div class="col-sm-6 px-2 mb-4">
                    <a href="#" class="btn btn-lg btn-block text-heading border px-0 bg-hover-accent">
                      <img src="{{asset('assets/vendors/images/google.png')}}" alt="Google" class="mr-2">
                      Google
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="media rounded-lg bg-gray-01 p-6 mb-6 mb-lg-0">
              <div class="mr-6 fs-60 lh-1 text-primary">
                <svg class="icon icon-r">
                  <use xlink:href="#icon-r"></use>
                </svg>
              </div>
              <div class="media-body">
                <p class="fs-13 text-heading lh-2 mb-0">You can use these credentials for demo testing:</p>
                <p class="fs-13 lh-2 mb-0">Login:<span class="text-heading">demo</span></p>
                <p class="fs-13 lh-2 mb-0"> Password: <span class="text-heading">demo123</span></p>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card border-0">
              <div class="card-body px-6 pr-lg-0 pl-xl-13 py-6">
                <h2 class="card-title fs-30 font-weight-600 text-dark lh-16 mb-2">Sign Up</h2>
                <p class="mb-4">Don???t have an account yet? <a href="#" class="text-heading hover-primary"><u>Sign
                      up for free</u></a></p>
                <form class="form">
                  <div class="form-row mx-n2">
                    <div class="col-sm-6 px-2">
                      <div class="form-group">
                        <label for="firstName" class="text-heading">First Name</label>
                        <input type="text" name="firs-name"
                                             class="form-control form-control-lg border-0"
                                             id="firstName" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-sm-6 px-2">
                      <div class="form-group">
                        <label for="lastName"
                                             class="text-heading">Last Name</label>
                        <input type="text" name="last-name"
                                             class="form-control form-control-lg border-0"
                                             id="lastName" placeholder="Last Name">
                      </div>
                    </div>
                  </div>
                  <div class="form-row mx-n2">
                    <div class="col-sm-6 px-2">
                      <div class="form-group">
                        <label for="email" class="text-heading">Email</label>
                        <input type="text"
                                             class="form-control form-control-lg border-0"
                                             id="email" placeholder="Your Email" name="email">
                      </div>
                    </div>
                    <div class="col-sm-6 px-2">
                      <div class="form-group">
                        <label for="user-role"
                                             class="text-heading">User Role
                        </label>
                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                              title="Select" data-style="btn-lg h-52"
                                              id="user-role" name="user-role">
                          <option>Admin</option>
                          <option>Customer</option>
                          <option>Agent</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-row mx-n2">
                    <div class="col-sm-6 px-2">
                      <div class="form-group">
                        <label for="password-1" class="text-heading">Password</label>
                        <div class="input-group input-group-lg">
                          <input type="text" class="form-control border-0 shadow-none"
                                                 id="password-1" name="password"
                                                 placeholder="Password">
                          <div class="input-group-append">
                            <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                              <i class="far fa-eye-slash"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 px-2">
                      <div class="form-group">
                        <label for="re-password">Re-Enter Password</label>
                        <div class="input-group input-group-lg">
                          <input type="text" class="form-control border-0 shadow-none"
                                                 id="re-password" name="re-password"
                                                 placeholder="Password">
                          <div class="input-group-append">
                            <span class="input-group-text bg-gray-01 border-0 text-body fs-18">
                              <i class="far fa-eye-slash"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Register</button>
                </form>
                <div class="divider text-center my-2">
                  <span class="px-4 bg-white lh-17 text text-heading">
                    or Sign Up with
                  </span>
                </div>
                <div class="row no-gutters mx-n2">
                  <div class="col-sm-6 px-2 mb-4">
                    <a href="#"
                                 class="btn btn-lg btn-block text-heading border px-0 rounded bg-hover-accent">
                      <img src="{{asset('assets/vendors/images/facebook.png')}}" alt="Google" class="mr-2">
                      Facebook
                    </a>
                  </div>
                  <div class="col-sm-6 px-2 mb-4">
                    <a href="#"
                                 class="btn btn-lg btn-block text-heading border px-0 rounded bg-hover-accent">
                      <img src="{{asset('assets/vendors/images/google.png')}}" alt="Google" class="mr-2">
                      Google
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
