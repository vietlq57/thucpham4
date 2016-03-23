@extends('layouts.master1')

@section('title', 'Quản Lý Thực Phẩm')

@section('child')
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên nhóm thực phẩm (Tiếng Việt)</th>
            <th>Tên Nhóm Thực phẩm (Tiếng Anh)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
                <td><a href="{{ url('/thucpham/'. $group->id . '/show') }}">{{ $group->vi_name }}</a></td>
                <td><a href="{{ url('/thucpham/'. $group->id. '/show') }}">{{ $group->en_name }}</a></td>
                <td><a href="{{ url('/thucpham/'. $group->id. '/show') }}">View</a></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        <a href="{{ url('/thucpham/create') }}">Tạo Thực Phẩm Mới</a><br/>
        <form method="get" action="{{ url('thucpham/searchredirect') }}">
            <input type="text" name="search" />
            <button type="submit">Search</button>
        </form>
    </tbody>



@endsection