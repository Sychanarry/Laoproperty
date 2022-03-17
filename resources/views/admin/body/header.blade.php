<div class="bg-gray-01 d-flex px-3 px-xl-6 w-100 ">
    <a class="bg-gray-01 navbar-brand" href="{{route('dashboard.index')}}">
      <img src="{{asset('image/laoproperty.PNG')}}" alt="LAO property">
    </a>
    <div class="bg-gray-01 ml-auto d-flex align-items-center ">
      <div class="bg-gray-01 d-flex align-items-center d-xl-none">
        <div class="bg-gray-01 dropdown px-3">
          <a href="#" class="bg-gray-01 dropdown-toggle d-flex align-items-center text-heading"
               data-toggle="dropdown">
            <span class="bg-gray-01 fs-13 font-weight-500 d-none d-sm-inline ml-2">

            </span>
          </a>
          <div class="bg-gray-01 dropdown-menu dropdown-menu-right">
            <a class="bg-gray-01 dropdown-item" href="{{route('logoutAmin')}}">ອອກຈາກລະບົບ</a>
          </div>
        </div>
      </div>
      <button class="bg-gray-01 navbar-toggler border-0 px-0" type="button" data-toggle="collapse"
            data-target="#primaryMenuSidebar"
            aria-controls="primaryMenuSidebar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bg-gray-01 navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
