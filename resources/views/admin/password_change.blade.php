@extends('admin.master')

@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Change Password</h4>
                            <form action="{{ route('change.password') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-form-label">Old Password</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="password" name="old_password" id="old_password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-form-label">New Password</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="password" name="new_password" id="new_password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-form-label">Confirm Password</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="password" name="confirm_password" id="confirm_password">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info wave-effect wave-light" value="Change Password">
                            </form>
                            <!-- end row -->

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

@endsection
