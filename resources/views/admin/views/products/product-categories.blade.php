@extends('admin.layouts.main')
@section('title','Danh mục sản phẩm')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <a href="add-product-categories" title="Thêm mới">
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
                    <tr>
                        <td>1</td>
                        <td>Coffee</td>
                        <td>21/10/2019</td>
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
                    <tr>
                        <td>2</td>
                        <td>Food</td>
                        <td>21/10/2019</td>
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
                    <tr>
                        <td>3</td>
                        <td>Drink</td>
                        <td>21/10/2019</td>
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
                </tbody>
            </table>
        </div>
    </div>
@endsection