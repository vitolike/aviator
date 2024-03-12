@extends('Layout.admindashboard')
@section('css')
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> User Edit
            </h3>
            {{-- <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav> --}}
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User edit</h4>
                        <form class="forms-sample" id="changepassword">
                            @csrf
                            <input type="hidden" name="userid" value="{{ admin('id') }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                    value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Mobile</label>
                                <input type="text" class="form-control" id="email" name="emai`l" placeholder="Mobile no."
                                    value="{{ $user->mobile }}">
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

@section('js')
    <script>
        $("#changepassword").on('submit', function(e) {
            e.preventDefault();
        });
        $("#changepassword").validate({
            submitHandler: function(form) {
                apex("POST", "{{ url('admin/api/changepassword') }}", new FormData(form), form,
                    "/admin/dashboard", "#");
            }
        });
    </script>
@endsection
