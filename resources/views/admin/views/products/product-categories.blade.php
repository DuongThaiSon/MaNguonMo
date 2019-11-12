@extends('admin.layouts.main')
@section('title','Danh mục sản phẩm')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <a href="{{route('themdm')}}" title="Thêm mới">
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
                        <th width="5%">ID</th>
                        <th width="70%">Tên</th>
                        <th width="18%">Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dsdm as $dm)
                    <tr>
                        <td>{{$dm->id}}</td>
                        <td>{{$dm->name}}</td>
                        <td>{{$dm->created_at}}</td>
                        <td>
                            <div class="btn-group-md btn-group btn-group-toggle">
                                <a class="btn btn-primary" href="change-category/{{$dm->id}}" title="Sửa">
                                    <i class="fas fa-edit color-white"></i>
                                </a>
                                <a class="btn btn-danger btn-delete" title="Xóa" href="delete/{{$dm->id}}">
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