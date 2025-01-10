@extends('layouts.adminapp')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ Session::get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Onboard WLP</h4>
                                    <table class="table table-bordered">
                                        <thead class="text-white" style="background-color: #464DEE">
                                            <tr>
                                                <th scope="col">#</th>
                                                <td scope="col">Logo</td>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($wlp as $item)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                     <td><img src="{{ asset('storage/'.$item->logo)}}"></td>
                                                     <td>{{ $item->usr->name }}</td>
                                                    <td>{{ $item->usr->email }}</td>
                                                    <td>{{ $item->mobile_no }}</td>
                                                    <td><a href=" " class="btn text-danger"><i class="mdi mdi-delete"
                                                                style=" font-size: 20px"></i></a> <a href=""
                                                            class="btn text-info"><i class="mdi mdi-table-edit"
                                                                style=" font-size: 20px"></i></a>
                                                        <a href="" class="btn"><i class="mdi mdi-eye"
                                                                style=" font-size: 20px"></i></a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
