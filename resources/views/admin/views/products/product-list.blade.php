@extends('admin.layouts.main')
@section('title','Sản phẩm')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
            @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
        @endif
                <a href="add-product" title="Thêm mới">
                    <div class="page-title-icon">
                        <i class="pe-7s-plus icon-gradient bg-happy-itmeo"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table class="mb-0 table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="10%">Tên</th>
                        <th width="10%">Ảnh</th>
                        <th width="30%">Mô tả</th>
                        <th width="11%">Giá tiền</th>
                        <th>Size</th>
                        <th>Danh Mục</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                             <?php
                                $i=0;
                              ?>                          
                              @foreach($dssp as $sp)
                              <?php
                                $i+=1;
                              ?>
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$sp->name}}</td>
                        <td>
                            <img src="/assets/client/images/{{$sp->image}}" alt="" width="100">
                        </td>
                        <td>
                            <p>{!! $sp->description !!}</p>
                        </td>
                        <td>
                            <span>{{number_format($sp->price)}}đ</span>
                            <span>/</span>
                            <span>{{number_format($sp->price1)}}đ</span>
                        </td>
                        <td>
                            <span>M</span>
                            <span>/</span>
                            <span>L</span>
                        </td>
                        <td>{{$sp->categories->name}}</td>
                        <td>{{$sp->created_at}}</td>
                        <td>
                            <div class="btn-group-md btn-group btn-group-toggle">
                                <a class="btn btn-primary" href="change-product/{{$sp->id}}" title="Sửa">
                                    <i class="fas fa-edit color-white"></i>
                                </a>
                                <a class="btn btn-danger btn-delete"  href="delete/{{$sp->id}} title="Xóa">
                                    <i class="pe-7s-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection