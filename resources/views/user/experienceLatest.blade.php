@extends('user.sub_layouts.master')



@section('title')
Experience | Latest Posts
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')

<section id="posts">

    @foreach ($latestPosts as $latestPost)
    <div class="card mb-2">

        <div class="card-body p-2 p-sm-3">
            <div class="media forum-item">
                <a href="#" data-toggle="collapse" data-target=".forum-content">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                <div class="media-body">
                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                            class="text-body">All Posts</a></h6>
                    <p class="text-secondary">{{ $latestPost->Post }}</p>
                    <p class="text-muted"><span class="text-secondary font-weight-bold"></span></p>
                    <img src="{{ URL::asset("storage/image/".$latestPost->Img) }}" alt="" style="height:15rem; width:30rem;">
                </div>
            </div>
        </div>

    </div>
    @endforeach

</section>
@endsection
{{-- @show --}}

