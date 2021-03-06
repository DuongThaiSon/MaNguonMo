@extends('admin.layouts.main')
@section('title','Nhân viên')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
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
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Vai trò</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dsnv as $nv)
                    <tr>
                        <td>{{$nv->id}}</td>  
                        <td>{{$nv->name}}</td>
                        <td>{{$nv->email}}</td>
                        <td>{{$nv->address}}</td>
                        <td>{{$nv->phone}}</td>
                        @if($nv->role==1)
                        <td style="color:blue">Nhân viên</td>
                        @endif
                        @if($nv->role==0)
                        <td style="color:red">Admin</td>
                        @endif
                        
                        @if($nv->status==0)
                        <td style="color:red">Không hoạt động</td>
                        @endif
                        @if($nv->status==1)
                        <td style="color:green">Đang hoạt động</td>
                        @endif
                        <td>
                            <div class="btn-group-md btn-group btn-group-toggle">
                                <a class="btn btn-primary" href="" title="Sửa">
                                    <i class="fas fa-edit color-white"></i>
                                </a>
                                <button class="btn btn-danger btn-delete" title="Xóa">
                                    <i class="pe-7s-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection