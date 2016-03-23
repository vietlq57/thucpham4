@extends('layouts.app')

@section('content')
    <!-- MODAL WINDOW -->
        <div id="modal" class="modal-window">
            <!-- <div class="modal-head clear"><a onclick="$.fancybox.close();" href="javascript:;" class="close-modal">Close</a></div> -->

        </div>
        <form role="search" action="{{ url('/thucpham/searchredirect') }}">
            <input type="text" name="search" />
            <button type="submit">Search</button>
        </form>
        <div class="content-box">
            <h2>Quản Lý Thục Phẩm</h2>
        </div>

        <div class="box-body clear">
            <div id="data-table">
                <table class="datatable">
                    @yield('child')
                </table>
            </div>
        </div>

@endsection