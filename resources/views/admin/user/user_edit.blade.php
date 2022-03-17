@extends('admin.index_master')
@section('content')
<div class="page-content">
    @include('admin.body.pagecontent')
    <main id="content" class=" fontfamily">
        <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
            <div class="mb-6">
                <h2 class="mb-0 text-heading fs-22 lh-15 fontfamily">ແກ້ໄຂຜູ້ໃຊ້
                </h2>
            </div>
            <form action="{{route('user.update',$user->user_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div id="description-collapse" class="collapse show collapsible" aria-labelledby="heading-description" data-parent="#collapse-tabs-accordion">
                    <div class="card-body py-4 py-md-0 px-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-6">
                                    <div class="card-body p-6">
                                        <p class="card-text mb-5">
                                            @if($errors->any())
                                        <div>
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li class="text-danger fontfamily">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        </p>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group ">
                                                    <label for="title" class="text-heading">ຊື່ <span class="text-muted">(ຈຳເປັນຕ້ອງປ້ອນ)</span></label>
                                                    <input type="text" class="form-control form-control-lg border-0" name="name" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="sa" class="text-heading">ຊື່ຜູ້ນຳໃຊ້<span class="text-muted">(ຈຳເປັນຕ້ອງປ້ອນ)</span></label>
                                                    <input type="text" class="form-control form-control-lg border-0" name="user_name" value="{{$user->user_name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group ">
                                                    <label for="title" class="text-heading">ລະຫັດຜ່ານ<span class="text-muted">(ຈຳເປັນຕ້ອງປ້ອນ)</span></label>
                                                    <input type="password" class="form-control form-control-lg border-0" name="password" value="{{$user->password}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="title" class="text-heading">ຢືນຢັນລະຫັດຜ່ານ<span class="text-muted">(ຈຳເປັນຕ້ອງປ້ອນ)</span></label>
                                                    <input type="password" class="form-control form-control-lg border-0" name="confirm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group ">
                                                    <label for="title" class="text-heading">ອີເມວ</label>
                                                    <input type="email" class="form-control form-control-lg border-0" name="email" value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mb-md-0">
                                                    <label for="country" class="text-heading">ເບີໂທລະສັບ</label>
                                                    <input type="text" class="form-control form-control-lg border-0" name="tel" value="{{$user->tel}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group ">
                                                    <label for="title" class="text-heading">ຫ້ອງການ</label>
                                                    <input type="text" class="form-control form-control-lg border-0" name="office" value="{{$user->office}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group ">
                                                    <label for="title" class="text-heading">ສະຖານະ<span class="text-muted">(ຈຳເປັນຕ້ອງເລືອກ)</span></label>
                                                    <select name="user_type" id="" class="form-control form-control-lg border-0 selectpicker">
                                                        <option value="">ເລືອກສະຖານະ</option>
                                                        <option value="1" {{(($user->user_type ?? null)==1)? "selected":""}}>ຜູ້ນຳໃຊ້</option>
                                                        <option value="2" {{(($user->user_type ?? null)==2)? "selected":""}}>ຜູ້ບໍລິຫານ</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-lg btn-primary next-button">ບັນທຶກ
                            </button>
                        </div>
                    </div>
                </div>
        </div>
</div>
</form>
</main>
@endsection