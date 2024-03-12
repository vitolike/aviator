<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{env('APP_NAME')}} - Login Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/aviatoradmin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/aviatoradmin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/aviatoradmin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/images/logo.png" />
    <link rel="stylesheet" href="{{ asset('vendor/izitoast/css/iziToast.min.css') }}">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="/images/logo.png">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" id="loginadmin">
                    @csrf
                  <div class="form-group">
                    <input type="username" class="form-control form-control-lg" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                  </div>
                  {{-- <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!--====== Plugin js ======-->
    <script src="{{ asset('vendor/jquery/jquery-3.6.1.min.js') }}"></script>
    <script src="/aviatoradmin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/izitoast/js/iziToast.min.js') }}"></script>

    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/aviatoradmin/assets/js/off-canvas.js"></script>
    <script src="/aviatoradmin/assets/js/hoverable-collapse.js"></script>
    <script src="/aviatoradmin/assets/js/misc.js"></script>
    <script src="/js/appcustomize.js"></script>
    <!-- endinject -->
    <script>
        $("#loginadmin").on('submit', function(e) {
            e.preventDefault();
        });
        $("#loginadmin").validate({
            submitHandler: function(form) {
                apex("POST", "{{url('auth/admin/login')}}", new FormData(form), form, "/admin/dashboard", "#");
            }
        });
    </script>
  </body>
</html>