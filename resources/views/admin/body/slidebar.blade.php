<div class="bg-gray-01 collapse navbar-collapse bg-white bg-gray-01" id="primaryMenuSidebar">
    <ul class="bg-gray-01 list-group list-group-flush w-100">
      <li class="bg-gray-01 list-group-item pt-6 pb-4">
        <h5 class="bg-gray-01 fs-13 letter-spacing-087 text-muted mb-3 text-uppercase px-3"></h5>
        <ul class="bg-gray-01 list-group list-group-no-border rounded-lg">
          <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
            <a href="{{route('dashboard.index')}}" class="bg-gray-01 text-heading lh-1 sidebar-link">
              <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 fs-20"><i
                            class="bg-gray-01 fal fa-cog"></i></span>
              <span class="bg-gray-01 sidebar-item-text fontfamily">ໜ້າຫຼັກ</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="bg-gray-01 list-group-item pt-6 pb-4">
        <h5 class="bg-gray-01 fs-13 letter-spacing-087 text-muted mb-3 text-uppercase  fontfamily px-3">ບໍລິຫານຊັບສິນ</h5>
        <ul class="bg-gray-01 list-group list-group-no-border rounded-lg">
          <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
            <a href="{{route('postestates.create')}}"
                   class="bg-gray-01 text-heading lh-1 sidebar-link">
              <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20 fs-20">
                <svg class="bg-gray-01 icon icon-add-new"><use
                                xlink:href="#icon-add-new"></use></svg></span>
              <span class="bg-gray-01 sidebar-item-text">ເພິ່ມຊັບສິນ</span>
            </a>
          </li>
          <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
            <a href="{{route('myproperties')}}"
                   class="bg-gray-01 text-heading lh-1 sidebar-link d-flex align-items-center">
              <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                <svg class="bg-gray-01 icon icon-my-properties"><use
                                xlink:href="#icon-my-properties"></use></svg>
              </span>
              <span class="bg-gray-01 sidebar-item-text">ຊັບສິນທັງໝົດ</span>
              <span class="bg-gray-01 sidebar-item-number ml-auto text-primary fs-15 font-weight-bold">29</span>
            </a>
          </li>
        </ul>

      </li>

      <li class="bg-gray-01 list-group-item pt-6 pb-4">
        <h5 class="bg-gray-01 fs-13 letter-spacing-087 text-muted mb-3  fontfamily text-uppercase px-3">ການສະແດງຄວາມຄິດເຫັນ</h5>
        <ul class="bg-gray-01 list-group list-group-no-border rounded-lg">
            <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
                <a href="{{route('register.index')}}"
                       class="bg-gray-01 text-heading lh-1 sidebar-link">
                  <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                    <i class="fas fa-user"></i>
                  </span>
                  <span class="bg-gray-01 sidebar-item-text">ສະມາຊິກ</span>
                </a>
              </li>
            <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
                <a href="{{route('comment.index')}}"
                       class="bg-gray-01 text-heading lh-1 sidebar-link">
                  <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                    <i class="fas fa-comments"></i>
                  </span>
                  <span class="bg-gray-01 sidebar-item-text">ຄວາມຄິດເຫັນ</span>
                </a>
              </li>
              <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
                <a href="{{route('appointment.index')}}"
                       class="bg-gray-01 text-heading lh-1 sidebar-link">
                  <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                    <i class="fas fa-calendar-alt"></i>
                  </span>
                  <span class="bg-gray-01 sidebar-item-text">ການນັດໝາຍ</span>
                </a>
              </li>
              <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
                <a href="{{route('allsearch')}}"
                       class="bg-gray-01 text-heading lh-1 sidebar-link">
                  <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                    <i class="fas fa-search"></i>
                  </span>
                  <span class="bg-gray-01 sidebar-item-text">ສິ່ງທີ່ຄົ້ນຫາຫຼາຍທີ່ສຸດ</span>
                </a>
              </li>
        </ul>
      </li>



      <li class="bg-gray-01 list-group-item pt-6 pb-4">
        <h5 class="bg-gray-01 fs-13 letter-spacing-087 text-muted mb-3  fontfamily text-uppercase px-3">ຈັດການບັນຊີຜູ້ໃຊ້</h5>
        <ul class="bg-gray-01 list-group list-group-no-border rounded-lg">
            <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
                <a href="{{route('user.index')}}"
                       class="bg-gray-01 text-heading lh-1 sidebar-link">
                  <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                    <svg class="bg-gray-01 icon icon-my-profile"><use xlink:href="#icon-my-profile"></use></svg>
                  </span>
                  <span class="bg-gray-01 sidebar-item-text">ຜູ້ນຳໃຊ້</span>
                </a>
              </li>
          <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
            <a href="{{route('myprofile')}}"
                   class="bg-gray-01 text-heading lh-1 sidebar-link">
              <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                <svg class="bg-gray-01 icon icon-my-profile"><use xlink:href="#icon-my-profile"></use></svg>
              </span>
              <span class="bg-gray-01 sidebar-item-text">ໂປຣຟາຍຂອງຂ້ອຍ</span>
            </a>
          </li>

          <li class="bg-gray-01 list-group-item px-3 px-xl-4 py-2 sidebar-item">
            <a href="{{route('logout')}}" class="bg-gray-01 text-heading lh-1 sidebar-link">
              <span class="bg-gray-01 sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                <svg class="bg-gray-01 icon icon-log-out"><use xlink:href="#icon-log-out"></use></svg>
              </span>
              <span class="bg-gray-01 sidebar-item-text">ອອກຈາກລະບົບ</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
