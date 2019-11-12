<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="/admin" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Sản phẩm
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('dssp')}}">
                                <i class="metismenu-icon"></i>
                                Quản lý sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dsdm')}}">
                                <i class="metismenu-icon"></i>
                                Quản lý danh mục sản phẩm
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="cart">
                        <i class="metismenu-icon pe-7s-cart"></i>
                        Quản lý đơn hàng
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('dsdhdxl')}}">
                                <i class="metismenu-icon"></i>
                                Chờ xử lý
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dsdhdaxl')}}">
                                <i class="metismenu-icon"></i>
                                Đã tiếp nhận
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dsdhbh')}}">
                                <i class="metismenu-icon"></i>
                                Bị Hủy
                            </a>
                        </li>
                        <li>
                            <a href="{{route('dsdg')}}">
                                <i class="metismenu-icon"></i>
                                Đã Thanh Toán
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-graph3"></i>
                        Thống kê
                    </a>
                </li> -->
                <li>
                    <a href="{{route('dsnv')}}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Nhân viên
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
