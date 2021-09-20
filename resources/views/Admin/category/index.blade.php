@extends('Layout.Site')
@section('content')
    <table class="table table-hover table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">شماره ردیف</th>
            <th scope="col">نام دسته بندی</th>
        </tr>
        </thead>
        <tbody>
        @php($i=1)
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$category->title}}</td>
            <td>
                <a href="{{route('admin.category.edit',['category'=>$category])}}">
                    <button class="btn btn-primary">ویرایش</button>
                </a>

            </td>
            <td>
                <form action="{{route('admin.category.destroy',['category'=>$category])}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">حذف</button>
                </form>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{route('admin.category.create')}}">
            <button class="btn btn-primary">دسته بندی جدید</button>
        </a>


    <div class="row">
        <div class="col-md-3">
            {{$categories->links()}}
        </div>

@endsection
