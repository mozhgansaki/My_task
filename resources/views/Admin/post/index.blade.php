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
         <h3 style="text-align: right"> {{$post->title}}</h3>
        </div>
        <div class="card-body">
            @if($post->category->title !=null)
            <h5 class="card-title">{{$post->category->title}}</h5>
            @endif
            <p class="card-text">{{$post->description}}</p>

            <form action="{{route('admin.post.destroy',['post'=>$post])}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">حذف پست</button>
            </form>
            <div class="mt-2">
                <a href="{{route('admin.post.edit',['post'=>$post])}}">
                    <button class="btn btn-success">ویرایش پست</button>
                </a>

            </div>
        </div>

    </div>
    @endforeach
    <div style="margin-left: 900px; ">
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('admin.post.create')}}">
                    <button style="width: 200px;height: 50px;" class="btn btn-primary">پست جدید </button>
                </a>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            {{$posts->links()}}
        </div>
    </div>
@endsection
