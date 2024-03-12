@extends('Layout.admindashboard')
@section('css')
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> User Detail
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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User List</h4>
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Userid</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Wallet</th>
                                    <th>Last Recharge</th>
                                    <th>S. Promocode</th>
                                    <th>Promocode</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($userlist) > 0)
                                    @foreach ($userlist as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ appvalidate($item->id) }}</td>
                                            <td>{{ appvalidate($item->name) }}</td>
                                            <td>{{ appvalidate($item->mobile) }}</td>
                                            <td>{{ appvalidate($item->email) }}</td>
                                            <td>₹{{ wallet($item->id) }} <span class="mdi mdi-border-color"
                                                    style="cursor: pointer;" onclick="updatewalletbalance('{{ appvalidate($item->id) }}','{{ wallet($item->id,'num') }}')"></span></td>
                                            <td>₹{{ number_format(lastrecharge($item->id, 'amount'), 2) }}
                                                <sub>{{ lastrecharge($item->id, 'created_at') ? dformat(lastrecharge($item->id, 'created_at'), 'd-m-Y') : 'No data found!' }}</sub>
                                            </td>
                                            <td>{{ appvalidate($item->promocode) }}</td>
                                            <td>{{ appvalidate($item->id) }}</td>
                                            <td>{{ dformat($item->created_at, 'd-m-Y') }}</td>
                                            <td><label
                                                    class="badge badge-{{ status($item->status, 'user')['color'] }}">{{ status($item->status, 'user')['name'] }}</label>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning"
                                                    onclick="redirect('user/edit/{{ $item->id }}')">edit</button>
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="deleteuser('{{ $item->id }}')">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="13" class="text-center"> No User found!!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="walletupdateform" style="display: none;">
        {{-- <div class="col-md-6 grid-margin stretch-card"> --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update wallet</h4>
                <form class="forms-sample" id="updatewallet">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="userid" value="" id="updatewalletuserid">
                        <label for="updatewalletamount">Amount</label>
                        <input type="text" class="form-control" id="updatewalletamount" name="amount" placeholder="Enter Amount">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light" type="button" onclick="closewalletupdatemodel()">Cancel</button>
                </form>
            </div>
        </div>
        {{-- </div> --}}
    </div>
    <!-- content-wrapper ends -->
@endsection

@section('js')
    <script>
        function deleteuser(id) {
            let form = new FormData();
            form.append('id', id);
            form.append('_token', '{{ csrf_token() }}');
            apex("POST", "{{ url('admin/api/user/delete') }}", form, '', "/admin/user-list", "#");
        }
        $("#updatewallet").on('submit', function(e) {
            e.preventDefault();
        });
        $("#updatewallet").validate({
            submitHandler: function(form) {
                apex("POST", "{{ url('admin/api/updatewallet') }}", new FormData(form), form,
                    "/admin/user-list", "#");
            }
        });
        function updatewalletbalance(userid,amount) {
            $(".walletupdateform").show('fast');
            $("#updatewalletuserid").val(userid);
            $("#updatewalletamount").val(amount);
        }
        function closewalletupdatemodel() {
            $(".walletupdateform").hide('fast');
        }
    </script>
@endsection
