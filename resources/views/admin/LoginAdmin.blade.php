<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('img/logo/logo.png') }}" rel="icon">
  <title>Gedung Serbaguna-Login Admin</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.cs') }}s" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="{{ asset('img/logo/logo.png') }}" width="200"><hr>
                    <h1 class="h4 text-gray-900 mb-4">Login Admin</h1><hr>
                  </div>
                  @if(\Session::has('alert'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h6><i class="fas fa-ban"></i><b> Peringatan !</b></h6>
                      {{Session::get('alert')}}
                    </div>
                  @endif
                  @if(\Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-sign-out-alt"></i><b> Success!!</b></h6>
                        {{Session::get('alert-success')}}
                    </div>
                  @endif
                  <form class="user" method="post" action="{{url('loginPost')}}" >
                    {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" id="username" name="username" class="form-control"          placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    
                    <div class="form-group">
                      <input type="submit" class="btn bg-gradient-default btn-block text-white" value="Login">
                    </div>

                  </form>
                  
                </div>
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Login Content -->
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>