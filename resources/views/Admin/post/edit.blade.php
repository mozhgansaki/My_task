@extends('Layout.Site')
@section('content')
    <div class="row">
        {{session('status')}}
    </div>
    <form action="{{route('admin.post.update',['post'=>$post])}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title_post" class="form-label">عنوان پست </label>
            <input value="{{$post->title}}" name="title" type="text" class="form-control" id="title_post" >
        </div>
        <div class="mb-3">
            <label for="category_group" class="form-label"> دسته بندی پست </label>
            <select   class="form-select" aria-label="Default select example">
                <option selected>لیست دسته بندی هارا باز کنید</option>
                @foreach($categories as $category)

                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label" >توضیحات </label>
            <textarea name="description" class="form-control" id="description" rows="3">{{$post->description}}</textarea>
        </div>
        <div>
            <button class="btn btn-primary">ذخیره پست</button>
        </div>
    </form>

@endsection
