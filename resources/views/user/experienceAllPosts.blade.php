@extends('user.sub_layouts.master')



@section('title')
Experience | All Posts
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')

<section id="posts">
    @foreach ($experiences as $experience)

    <div class="card mb-2">

        <div class="card-body p-2 p-sm-3">
            <div class="media forum-item">
                <a href="#" data-toggle="collapse" data-target=".forum-content">
                    <img src="{{Auth::user()->img}}"
                        class="mr-3 rounded-circle" width="50" alt="User" /></a>
                <div class="media-body">
                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                            class="text-body">{{Auth::user()->name}}</a></h6>
                    <p class="text-secondary">{{ $experience->Post }}</p>
                    <img src="{{ URL::asset("storage/image/".$experience->Img) }}" alt="" style="height:15rem; width:30rem;">
                    <p class="text-muted mt-2">Posted at <span class="text-secondary font-weight-bold">{{ $experience->created_at->format('M d, Y') }}</span></p>

                </div>
            </div>
        </div>

    </div>
    @endforeach

</section>
@endsection
{{-- @show --}}

