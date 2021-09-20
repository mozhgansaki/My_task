@extends('Layout.Site')
@section('content')
    <form action="{{route('admin.category.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">دسته بندی پست ها</label>
            <input name="title" type="text" class="form-control" id="category">
        </div>
        <div>
            <button class="btn btn-success">ذخیره دسته بندی</button>
        </div>
    </form>
@endsection
