@extends('admin.layouts.main')
@section('title','Thêm sản phẩm')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <h2>Thông tin sản phẩm</h2>
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
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input type="number" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Size</label>
                    <select name="" id="" class="form-control">
                        <option value="">M</option>
                        <option value="">L</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nằm trong mục</label>
                    <select name="" id="" class="form-control">
                        <option value="">Coffee</option>
                        <option value="">Drink</option>
                        <option value="">Food</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="content" id="editor"></textarea>
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
