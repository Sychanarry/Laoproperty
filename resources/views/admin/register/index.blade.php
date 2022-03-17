@extends('admin.index_master')
@section('content')
<div class="page-content">
    @include('admin.body.pagecontent')
          <main id="content" >
            <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
              <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                <div class="mr-0 mr-md-auto">
                  <h2 class="mb-0 text-heading fs-22 lh-15 fontfamily">ສະມາຊິກໃໝ່
                  </h2>
                </div>

              </div>
              <div class="table-responsive">
                <table class="table table-hover bg-white border rounded-lg table-table-bordered" id="myTable">
                  <thead class="thead-sm thead-black">
                    <tr>
                      <th scope="col" class="border-top-0 pt-5 pb-4">ລຳດັບ</th>
                      <th scope="col" class="border-top-0 pt-5 pb-4">ອີເມວ</th>
                      <th scope="col" class="border-top-0 pt-5 pb-4">ລະຫັດຜ່ານ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                      @foreach($register as $item)

                    <tr class="shadow-hover-xs-2 bg-hover-white">
                      <td class="align-middle">{{$no++}}</td>
                      <td class="align-middle">{{$item->email}}</td>
                      <td class="align-middle">{{$item->password}}</td>
                      {{-- <td class="align-middle">
                          <form class="d-flex" action=" {{ route('comment.destroy', $item->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                        <a href="{{ route('comment.edit', $item->id) }}" class="btn btn-outline-info"><i class="fas fa-edit"></i></a>
                        <button type="submit" class="btn btn-outline-danger ml-1" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>
                    </form>
                            </td> --}}
                    </tr>
                        @endforeach
                  </tbody>
                </table>
                </table>
              </div>
            </div>
          </main>
        @endsection
