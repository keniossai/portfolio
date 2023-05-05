@extends('admin.master')

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                            <div class="text-center p-4">
                                <img class="rounded-circle avatar-xl" src="assets/images/small/img-5.jpg" alt="Card image cap">
                            </div>
                        <div class="card-body">
                            <h4 class="card-title">Name: {{ $adminData->name }}</h4>
                            <hr>
                            <h4 class="card-title">Email: {{ $adminData->email }}</h4>
                            <hr>
                            <h4 class="card-title">Username: {{ $adminData->username }}</h4>
                            <hr>
                            <a href="" class="btn btn-info rounded">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
