@extends('admin.layouts.main')
@section('title','Sửa danh mục')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <h2>Sửa Danh Mục Sản Phẩm</h2>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-6 m0-auto pb-4">
    <div class="main-card card">
        <div class="card-body">
        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                        <form action="" method="POST">
                        @CSRF
                <div class="form-group">
                    <label>Mã Danh Mục</label>
                    <input  class="form-control" readonly="readonly" value="{{$danhmuc->id}}"  name="MaDanhMuc" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
                    <input class="form-control" value="{{$danhmuc->name}}"  name="TenDanhMuc" placeholder="Vui Lòng Nhập Tên Danh Mục" />
                </div>
                <button type="submit"  class="mt-1 btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
