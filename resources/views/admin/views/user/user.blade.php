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
                        <th>Username</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Vai trò</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>duongthaison98</td>
                        <td>Dương Thái Sơn</td>
                        <td>Số 61 Văn Cao</td>
                        <td>duongthaison98@gmail.com</td>
                        <td>01632214203</td>
                        <td>Tổng giám đốc</td>
                        <td>1</td>
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
                        <td>1</td>
                        <td>duongthaison98</td>
                        <td>Dương Thái Sơn</td>
                        <td>Số 61 Văn Cao</td>
                        <td>duongthaison98@gmail.com</td>
                        <td>01632214203</td>
                        <td>Tổng giám đốc</td>
                        <td>1</td>
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
                        <td>1</td>
                        <td>duongthaison98</td>
                        <td>Dương Thái Sơn</td>
                        <td>Số 61 Văn Cao</td>
                        <td>duongthaison98@gmail.com</td>
                        <td>01632214203</td>
                        <td>Tổng giám đốc</td>
                        <td>1</td>
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