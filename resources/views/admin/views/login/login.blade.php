@extends('admin.layouts.main')
@section('content')

<section id="login">
    <div class="card">
        <form class="form-signin">
            <h3 class="text-center mt-3 mb-5">Đăng nhập</h3>
            <div class="input-group">
                <input type="email" name="" id="" class="form-control">
                <span class="input-group-ava">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <div class="input-group">
                <input type="password" name="" id="" class="form-control">
                <span class="input-group-ava">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <button type="submit" class="btn btn-success btn-block text-uppercase">Log in</button>
            <div class="alert alert-info mt-3 mb-0">
                * Hệ thống sử dụng tốt nhất với 
                <a href="https://www.google.com/chrome">Google Chrome</a>
            </div>
        </form>
    </div>
</section>
@endsection
