@extends('admin.layouts.main')
@section('title','Sản phẩm')
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
                        <th width="10%">Tên</th>
                        <th width="10%">Ảnh</th>
                        <th width="30%">Mô tả</th>
                        <th width="11%">Giá tiền</th>
                        <th>Size</th>
                        <th>Danh mục</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bạc xỉu</td>
                        <td>
                            <img src="{{ asset('assets/client') }}/images/menu-1.jpg" alt="" width="100">
                        </td>
                        <td>
                            <p>Đây là một sản phẩm rất được ưa chuộng bởi giới trẻ bởi hương vị quen thuộc độc đáo mà nó mang lại</p>
                        </td>
                        <td>
                            <span>35.000đ</span>
                            <span>/</span>
                            <span>40.000đ</span>
                        </td>
                        <td>
                            <span>M</span>
                            <span>/</span>
                            <span>L</span>
                        </td>
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
                        <td>Nước chanh leo</td>
                        <td>
                            <img src="{{ asset('assets/client') }}/images/drink-1.jpg" alt="" width="100">
                        </td>
                        <td>
                            <p>Đây là một sản phẩm rất được ưa chuộng vào mùa hè</p>
                        </td>
                        <td>
                            <span>35.000đ</span>
                            <span>/</span>
                            <span>40.000đ</span>
                        </td>
                        <td>
                            <span>M</span>
                            <span>/</span>
                            <span>L</span>
                        </td>
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
                    <tr>
                        <td>3</td>
                        <td>Trà đào</td>
                        <td>
                            <img src="{{ asset('assets/client') }}/images/drink-5.jpg" alt="" width="100">
                        </td>
                        <td>
                            <p>Đây là một sản phẩm rất được ưa chuộng vào mùa đông</p>
                        </td>
                        <td>
                            <span>35.000đ</span>
                            <span>/</span>
                            <span>40.000đ</span>
                        </td>
                        <td>
                            <span>M</span>
                            <span>/</span>
                            <span>L</span>
                        </td>
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
                    <tr>
                        <td>4</td>
                        <td>Pancake</td>
                        <td>
                            <img src="{{ asset('assets/client') }}/images/dessert-6.jpg" alt="" width="100">
                        </td>
                        <td>
                            <p>Đây là một sản phẩm rất được ưa chuộng vào mùa đông</p>
                        </td>
                        <td>
                            <span>35.000đ</span>
                            <span>/</span>
                            <span>40.000đ</span>
                        </td>
                        <td>
                            <span>M</span>
                            <span>/</span>
                            <span>L</span>
                        </td>
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
                </tbody>
            </table>
        </div>
    </div>
@endsection