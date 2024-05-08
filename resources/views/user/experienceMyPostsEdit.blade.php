@extends('user.layouts.master')

@section('title')
    Edit Experience
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
@endsection

@section('js')
@endsection



@section('content')
    <div class="modal-edit">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content mt-2">

                <form action="{{ route('experience.update',$experience->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header border-bottom p-3">
                        <h6 class="modal-title mb-0">Edit Your Experience</h6>
                    </div>
                    <div class="modal-body p-3">
                        <div class="form-group">
                            <label for="threadTitle">Your Experience</label>
                            <textarea class="form-control m-0 p-0 ps-2 mt-2" id="threadTitle" rows="4" placeholder="Experience"
                                      name="experience">{{$experience->Post}}</textarea>
                        </div>

                        <div class="img-upload mt-3 d-flex flex-column">
                            <label for="formFile" class="form-label">Uploaded Image</label>
                            <img src="{{URL::asset("storage/image/".$experience->Img)}}" class="mt-1" alt="{{$experience->Photo}}" style="height:15rem; width:30rem;">
                            <input class="form-control mt-3" type="file" id="formFile" name="experienceImage">
                        </div>

                    </div>
                    <div class="modal-footer mt-3 p-3">
                        <a href="/experienceMyPosts" class="btn btn-light me-2">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
