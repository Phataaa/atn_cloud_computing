@extends('auth.layout');
@section('content')
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Edit User</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form action="{{route('update.account', $user->id)}}" method="POST">
                    @if ($errors->any())

                    <div class="alert alert-danger">
                
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                
                    <ul>
                
                    @foreach ($errors->all() as $error)
                
                    <li>{{ $error }}</li>
                
                    @endforeach
                
                    </ul>
                
                    </div>
                
                    @endif
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Full Name</label>
                      <input type="text" class="form-control" name="full_name" value="{{$user->full_name}}">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" name="user_name" value="{{$user->user_name}}">
                    </div>
                    
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" value="{{$user->email}}">
                    </div>
                    
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Birthday</label>
                        <input type="text" class="form-control" name="birthday" value="{{$user->birthday}}">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$user->address}}">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Number</label>
                        <input type="text" class="form-control" name="number" value="{{$user->numbe}}">
                    </div>
                    <div>
                        <label for="seller">Seller</label>
                        <input type="radio" name="role" id="" value="seller" class="seller">
                        <label for="buyer">Buyer</label>
                        <input type="radio" name="role" id="" value="buyer" class="seller">
                        <label for="buyer">Admin</label>
                        <input type="radio" name="role" id="" value="buyer" class="admin">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="Sign Up">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
@endsection