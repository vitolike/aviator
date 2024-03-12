@extends('Layout.usergame2')
@section('content')
    <div class="active" id="via-email">
        <form class="register-form row w-75" style="margin: 100px auto 0 auto; color: white !important;">
            <h2>Level Managements</h2>
            @csrf
            <div class="col-md-12 col-12">
                <p>Total Player: {{ $users }}</p>
            </div>
            <div class="col-md-4">
                Level 1 List
                <table class="table table-striped" style="color: white;">
                    <tr>
                        <th style="color: white;" style="color: white;" style="color: white;">userid</th>
                        <th style="color: white;" style="color: white;" style="color: white;">Name</th>
                    </tr>
                    @if (count($level1) > 0)
                        @foreach ($level1 as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No user found!</td>
                        </tr>
                    @endif
                </table>
            </div>
            <div class="col-md-4">
                Level 2 List
                <table class="table table-striped" style="color: white;">
                    <tr>
                        <th style="color: white;" style="color: white;" style="color: white;">userid</th>
                        <th style="color: white;" style="color: white;" style="color: white;">Name</th>
                    </tr>
                @if (count($level2) > 0)
                        @foreach ($level2 as $subitem)
                            @foreach ($subitem as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No user found!</td>
                        </tr>
                    @endif
                </table>
            </div>
            <div class="col-md-4">
                Level 3 List
                <table class="table table-striped" style="color: white;">
                    <tr>
                        <th style="color: white;" style="color: white;" style="color: white;">userid</th>
                        <th style="color: white;" style="color: white;" style="color: white;">Name</th>
                    </tr>
                    @if (count($level3) > 0)
                        @foreach ($level3 as $subitem)
                            @foreach ($subitem as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No user found!</td>
                        </tr>
                    @endif
                </table>
            </div>
        </form>
    </div>
@endsection
