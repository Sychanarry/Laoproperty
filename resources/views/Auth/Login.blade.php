<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap5.1.3/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/Fontawesome6/css/all.min.css')}}">
<style>
    *{font-family: phetsarath OT;}
</style>
</head>
<body>
       <div class="container">

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="{{route('login-user')}}" method="POST">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-md-12">
                                <div class="h1 text-center"><img src="{{asset('image/zxzxc.png')}}" class="img-responsive"/></div>
                        </div>
                  </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                                <div class="h1 text-center"><strong>LAO RealEstate</strong></div>
                        </div>
                  </div>
                      <div class="row" >
                          <div class="col-md-12">
                            <div class="form-group">
                                <label for="">ຊື່ຜູ້ໃຊ້</label>
                                <input type="text" name="user_name" class="form-control" placeholder="ກະລຸນາປ້ອນຊື່ຜູ້ນຳໃຊ້" required="required">
                              </div>
                          </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">ລະຫັດຜ່ານ</label>
                                <input type="password" name="password" class="form-control" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" required="required">
                              </div>
                          </div>
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
                          </div>
                          <div class="row">
                            <div class="col-md-12 mt-3">
                                    <button type="submit" class="form-control bg-info">
                                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                         ເຂົ້າສູ່ລະບົບ</button>
                            </div>
                      </div>

                    </div>
                  </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
       <script src="{{asset('assets/vendors/bootstrap5.1.3/bootstrap.js')}}"></script>
       <script src="{{asset('assets/vendors/bootstrap5.1.3/bootstrap.bundle.js')}}"></script>
       <script src="{{asset('assets/vendors/Fontawesome6/js/all.min.js')}}"></script>
       <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>
</html>
