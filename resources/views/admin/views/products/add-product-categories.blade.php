@extends('admin.layouts.main')
@section('title','Thêm danh mục')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <h2>Thông tin danh mục sản phẩm</h2>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-6 m0-auto pb-4">
    <div class="main-card card">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="">ID</label>
                    <input type="number" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tên mục</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="file" class="form-control pt-0.5 pb-0">
                </div>
                <button class="mt-1 btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
