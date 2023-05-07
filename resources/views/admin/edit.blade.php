@extends('admin.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Profile</h4>
                            <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-form-label">Name</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="name" value="{{ $editData->name }}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-form-label">Email</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="email" name="email" value="{{ $editData->email }}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-form-label">Username</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="text" name="username" value="{{ $editData->username }}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-form-label">Profile Image</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" name="profile_image" id="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class=" col-form-label"> </label>
                                    <div class="col-sm-12">
                                        <img id="showImage" class="rounded avatar-xl" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/profile.png')}}" alt="Card image cap">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info wave-effect wave-light" value="Update Profile">
                            </form>
                            <!-- end row -->

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }

                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
