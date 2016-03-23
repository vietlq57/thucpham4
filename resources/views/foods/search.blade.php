@extends('layouts.master1')

@section('title', 'Tìm Kiếm')

@section('child')
    <thead>
            <tr>
                <th>STT</th>
                <th>Tên thực phẩm (Tiếng Việt)</th>
                <th>Tên Thực phẩm (Tiếng Anh)</th>
                <th>Tên Nhóm Tương Ứng</th>

            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td><a href="{{ url('/thucpham/shownutrient/' . $food->id) }}">{{ $food->vi_name }}</a></td>
                    <td><a href="{{ url('/thucpham/shownutrient/' . $food->id) }}">{{ $food->en_name }}</a></td>
                    <td><a href="{{ url('/thucpham/'.$food->group->id. '/show') }}">{{ $food->group->vi_name }}</a></td>
                    <td><a href="{{ url('/thucpham/edit/' . $food->id) }}">Edit</a></td>
                    <td><a href="{{ url('/thucpham/delete/' . $food->id) }}">Delete</a></td>
                    <td><a href="{{ url('/thucpham/shownutrient/' . $food->id) }}">View</a></td>
                </tr>
            @endforeach
            <a href="{{ url('/thucpham/create') }}">Tạo Thực Phẩm Mới</a><br/>


        </tbody>
@endsection