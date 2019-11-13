@extends('admin.layouts.main')
@section('title','Sửa sản phẩm')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <h2>Sửa thông tin sản phẩm</h2>
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
         <form action="" method="POST" enctype="multipart/form-data">
            @CSRF
                    
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="TenSanPham" id="" value="{{$SanPham->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Đơn giá Size M</label>
                    <input type="number" name="GiaSizeM" id="" value="{{$SanPham->price}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Đơn giá Size L</label>
                    <input type="number" name="GiaSizeL" id="" value="{{$SanPham->price1}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nằm trong mục</label>
                    <select name="TheLoai"  class="form-control">
                    @foreach($dsdm as $dm)
                        <option value="{{$dm->id}}">{{$dm->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="MoTa" style="" value="{{$SanPham->description}}" id="editor"></textarea>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" name="Anh" class="form-control pt-0.5 pb-0">
                </div>
                <button type="submit" class="mt-1 btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
