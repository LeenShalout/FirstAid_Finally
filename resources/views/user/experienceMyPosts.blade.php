@extends('user.sub_layouts.master')

@section('title')
    Experience | My Posts
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')
    <section id="posts">

        @if ($myPosts ?? false)
            @foreach ($myPosts as $myPost)
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    @if($myPost->user)
                                        <img src="{{ $myPost->user->img ? asset('storage/image/'.$myPost->user->img) : asset('image/profile.jpg') }}"
                                             class="mr-3 rounded-circle" width="50" alt="User" />
                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                               class="text-body ms-3">{{$myPost->user->name}}</a></h6>
                                    @endif
                                </div>

                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('experience.edit',$myPost->id)}}">Edit</a></li>
                                        <li><a class="dropdown-item" href="{{route('experience.delete',$myPost->id)}}">Delete</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="media-body">
                                <p class="text-secondary">{{ $myPost->Post }}</p>
                                @if ($myPost->Img)
                                    <img src="{{ asset('storage/image/'.$myPost->Img) }}" alt="" style="height:15rem; width:30rem;">
                                @endif
                                <p class="text-muted mt-2">Posted at <span class="text-secondary font-weight-bold">{{ $myPost->created_at->format('M d, Y') }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-info" role="alert">
                You haven't made any posts yet.
            </div>
        @endif

    </section>
@endsection
