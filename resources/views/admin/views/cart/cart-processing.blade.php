@extends('admin.layouts.main')
@section('title','Giỏ hàng')
@section('content')
<div class="main-card mb-3 card">
        <div class="card-body">
            <table class="mb-0 table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Trạng thái</th>
                        <th>Người bán</th>
                        <th>Người nhận</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Discount</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian giao</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Đang giao</td>
                        <td>Hà Văn Tú</td>
                        <td>Dương Thái Sơn</td>
                        <td>0332214203</td>
                        <td>Số 61 Văn Cao</td>
                        <td>duongthaison98@gmail.com</td>
                        <td>0</td>
                        <td>20000</td>
                        <td>
                            <span>20:00</span>
                            <span>20/10/2019</span>
                        </td>
                        <td>
                            <div class="btn-group-md btn-group btn-group-toggle">
                                <a class="btn btn-success" href="" title="Đã giao">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <button class="btn btn-danger btn-delete" title="Hủy">
                                    <i class="pe-7s-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Đang giao</td>
                        <td>Hà Văn Tú</td>
                        <td>Dương Thái Sơn</td>
                        <td>0332214203</td>
                        <td>Số 61 Văn Cao</td>
                        <td>duongthaison98@gmail.com</td>
                        <td>0</td>
                        <td>20000</td>
                        <td>
                            <span>20:00</span>
                            <span>20/10/2019</span>
                        </td>
                        <td>
                            <div class="btn-group-md btn-group btn-group-toggle">
                                <a class="btn btn-success" href="" title="Đã giao">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <button class="btn btn-danger btn-delete" title="Hủy">
                                    <i class="pe-7s-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Đang giao</td>
                        <td>Hà Văn Tú</td>
                        <td>Dương Thái Sơn</td>
                        <td>0332214203</td>
                        <td>Số 61 Văn Cao</td>
                        <td>duongthaison98@gmail.com</td>
                        <td>0</td>
                        <td>20000</td>
                        <td>
                            <span>20:00</span>
                            <span>20/10/2019</span>
                        </td>
                        <td>
                            <div class="btn-group-md btn-group btn-group-toggle">
                                <a class="btn btn-success" href="" title="Đã giao">
                                    <i class="fas fa-check-circle"></i>
                                </a>
                                <button class="btn btn-danger btn-delete" title="Hủy">
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