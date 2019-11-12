@extends('admin.layouts.main')
@section('title','Giỏ hàng')
@section('content')
@if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
        @endif
<div class="main-card mb-3 card">
    <div class="card-body">
        <table class="mb-0 table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Trạng thái</th>
                    <th>Sản Phẩm</th>
                    <th>Người bán</th>
                    <th>Người nhận</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Discount</th>
                    <th>Tổng tiền</th>
                    <th>Thời gian đặt</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                                $i=1;
                              ?>
                @foreach($dsdxl as $dh)
                <?php
                                $i+=1;
                              ?>
                <tr>
                    <td>{{$i}}</td>
                    @if($dh->status==1)
                    <td style="color:green">
                        Chờ xử lý
                    </td>
                    @endif
                    <td>
                        @foreach($dssp as $ds)
                        @if($ds->id_order== $dh->id)
                        <div>
                            <span>{{$ds->product->name}}</span>
                            @if($ds->size==0)
                            <span>M</span>
                            @else 
                            <span>L</span>
                            @endif
                            <span>{{$ds->quantity}}</span>
                        </div>
                        @endif
                        @endforeach
                    
                    </td>
                    <td>{{$dh->account->name}}</td>
                    <td>{{$dh->user_name}}</td>
                    <td>{{$dh->phone}}</td>
                    <td>{{$dh->address}}</td>
                    <td>{{$dh->email}}</td>
                    <td>{{$dh->discount}}%</td>
                    <td>{{number_format($dh->price)}}đ</td>
                    <td>{{$dh->created_at}}
                    </td>
                    <td>
                        <div class="btn-group-md btn-group btn-group-toggle">
                            <a class="btn btn-success" href="accept_dxl/{{$dh->id}}" title="Xác Nhận">
                                <i class="fas fa-check-circle"></i>
                            </a>
                            <a class="btn btn-danger btn-delete" href="cancel_dxl/{{$dh->id}}"  title="Hủy">
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
