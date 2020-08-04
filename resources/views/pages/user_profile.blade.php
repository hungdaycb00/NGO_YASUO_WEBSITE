@extends('layout.user_layout')
@section('user_content')
    <link rel="stylesheet" href="{{URL::asset('frontend/css/profile.css')}}">
    <div class="container emp-profile">
        <div class="text-center">
            <span class="display-3 font-weight-bold">Personal info</span>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-5">
                    <div class="border rounded p-5 mb-15">
                        <div class="profile-head">
                            <h2>
                                Basic info
                            </h2>
                            <br>
                        </div>
                        <div class="row text-secondary">
                            <div class="col-md-6">
                                <label >Username</label>
                            </div>
                            <div class="col-md-6">
                                <label>Kshiti123</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row text-secondary">
                            <div class="col-md-6">
                                <label>First Name</label>
                            </div>
                            <div class="col-md-6">
                                <label>Kshiti123</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row text-secondary">
                            <div class="col-md-6">
                                <label>Last Name</label>
                            </div>
                            <div class="col-md-6">
                                <label>Kshiti123</label>
                            </div>
                        </div>

                    </div>
                    <div class="border rounded p-5">
                        <div class="profile-head">
                            <h2>
                                Contact info
                            </h2>
                            <br>
                        </div>
                        <hr class="my-4">
                        <div class="row text-secondary">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <label>Kshiti123</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row text-secondary">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <label>Kshiti123</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row text-secondary">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <label>Kshiti123</label>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row text-secondary">
                            <div class="col-md-6">
                                <label>Created At</label>
                            </div>
                            <div class="col-md-6">
                                <label>Kshiti123</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
        </form>
    </div>
@endsection
