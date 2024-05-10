@extends('user.layouts.master')

@section('title')
    Profile
@endsection

@section('css')
    <link rel="stylesheet" href="css/profile.css">
@endsection

@section('js')
@endsection

@section('content')
    <section id="profile">
        <div class="profile-container container-xxl">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Profile</button>
                    <button class="nav-link" id="nav-password-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Change
                        Password</button>
                </div>
            </nav>

            <div class="tab-content mt-4" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <form action="{{ route('profile.update',['id' => auth()->id()]) }}" enctype="multipart/form-data" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle mb-2"
                                             src="{{URL::asset("storage/image/".Auth::user()->img)}}" alt="{{Auth::user()->name}}">
                                        <!-- Profile picture help block-->
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                        <!-- Profile picture upload button-->
                                        <button class="btn btn-primary" type="submit" onclick="document.getElementById('imgInput').click()">
                                            Upload new image
                                        </button>
                                        <input type="file" id="imgInput" name="img" style="display: none;">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-xl-9">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <div class="profile-form">
                                        <form action="{{ route('profile.update',['id' => auth()->id()]) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <!-- Form Group (username)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputUsername">Full Name</label>
                                                <input class="form-control" id="inputUsername" type="text"
                                                       placeholder="Enter your username" name="name" value="{{ Auth::user()->name}}" required>
                                            </div>

                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (email address)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                                    <input class="form-control" id="inputEmailAddress" type="email" name="email"
                                                           placeholder="Enter your email address" value="{{ Auth::user()->email}}" required>
                                                </div>

                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                                    <input class="form-control" id="inputPhone" type="tel" name="phone"
                                                           placeholder="Enter your phone number" value="{{ Auth::user()->Phone}}" required>
                                                </div>
                                            </div>

                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (location)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLocation">Location</label>
                                                    <input class="form-control" id="inputLocation" type="text" name="location"
                                                           placeholder="Enter your location" value="{{ Auth::user()->location}}">
                                                </div>
                                                <!-- Form Group (birthday)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputBirthday">Date of Birth
                                                    </label>
                                                    <input class="form-control" id="inputBirthday" type="Date"
                                                           name="birthday" placeholder="Enter your birthday"
                                                           value="{{ Auth::user()->birthday }}">
                                                </div>
                                            </div>
                                            <!-- Save changes button-->
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-password-tab">

                    <div class="security-container container-xxl px-4 mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Change password card-->
                                <div class="card mb-4">
                                    <div class="card-header">Change Password</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Group (current password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="currentPassword">Current Password</label>
                                                <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                                            </div>
                                            <!-- Form Group (new password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="newPassword">New Password</label>
                                                <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                                            </div>
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                                                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                                            </div>
                                            <button class="btn btn-primary" type="button">Save</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">

                                <!-- Delete account card-->
                                <div class="card mb-4">
                                    <div class="card-header">Delete Account</div>
                                    <div class="card-body">
                                        <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                                        <button class="btn btn-danger-soft primary-color text-danger" type="button">I understand, delete my account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
