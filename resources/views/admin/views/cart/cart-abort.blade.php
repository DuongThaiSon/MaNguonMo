@extends('admin.layouts.main')
@section('title','Đơn Hàng Bị Hủy')
@section('content')
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
                    <th>T/g hủy</th>
                </tr>
            </thead>
            <tbody>
                <?php
                                $i=1;
                              ?>
                @foreach($dsbh as $dh)
                <?php
                                $i+=1;
                              ?>
                <tr>
                    <td>{{$i}}</td>
                    @if($dh->status==0)
                    <td style="color:red">
                        Bị Hủy
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
                    <td>{{$dh->updated_at}}
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
