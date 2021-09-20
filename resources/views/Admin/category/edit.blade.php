@extends('Layout.Site')
@section('content')
    <form action="{{route('admin.category.update',['category'=>$category])}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="category" class="form-label">دسته بندی پست ها</label>
            <input value="{{$category->title}}" name="title" type="text" class="form-control" id="category">
        </div>
        <div>
            <button class="btn btn-success">ذخیره تغییرات</button>
        </div>
    </form>

@endsection
