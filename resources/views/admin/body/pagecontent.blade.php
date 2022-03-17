<header class="bg-gray-01 main-header shadow-none shadow-lg-xs-1 bg-white position-relative d-none d-xl-block fontfamlily">
    <div class="bg-gray-01 container-fluid">
      <nav class="bg-gray-01 navbar navbar-light py-0 row no-gutters px-3 px-lg-0">
        <div class="bg-gray-01 col-md-4 px-0 px-md-6 order-1 order-md-0">
                <h3>Real Estate Management</h3>
        </div>
        <div class="bg-gray-01 col-md-6 d-flex flex-wrap justify-content-md-end order-0 order-md-1">
          <div class="bg-gray-01 dropdown border-md-right border-0 py-3 text-right">
            <a href="#"
               class="bg-gray-01 dropdown-toggle text-heading pr-3 pr-sm-6 d-flex align-items-center justify-content-end"
               data-toggle="dropdown">
              <div class="bg-gray-01 mr-4 w-48px">

              </div>
              <div class="bg-gray-01 fs-13 font-weight-500 lh-1">
                @if(!Session()->has('LoginId'))
                {{session()->get('username')}}
                @else
                NO i am not admin
                @endif
              </div>
            </a>
            <div class="bg-gray-01 dropdown-menu dropdown-menu-right w-100">
              <a class="bg-gray-01 dropdown-item" href="{{route('logoutAmin')}}">ອອກຈາກລະບົບ</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
