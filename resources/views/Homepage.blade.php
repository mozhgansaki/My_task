@extends('Layout.Site')
@section('content')
    <style>
        h5
        {
            text-align: right;
            color: red;
        }
        p
        {
            text-align: right;
        }
    </style>
    @foreach($posts as $post)
    <div class="card mb-5">
            <div class="card-header">
                <h3 style="text-align: right"> :گروه {{$post->category->title}} </h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p>
            </div>

    </div>
    @endforeach
    <div class="row">
        <div class="col-md-3">
            {{$posts->links()}}
        </div>
    </div>
@endsection
