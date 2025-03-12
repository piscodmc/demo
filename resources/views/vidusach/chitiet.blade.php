@extends("layouts.sach_layout")
@section("title","Chi tiết sách")
@section("content")
<div class="book-detail">
    @foreach($sach as $row)
        <div class="row">
        <div class="col-md-4">
            <img src="{{asset('book_image/'.$row->file_anh_bia)}}" class="img-fluid" alt="{{$row->tieu_de}}">
        </div>
        <div class="col-md-8">
            <h3>{{$row->tieu_de}}</h3>
            <p><strong>Nhà cung cấp:</strong> {{$row->nha_cung_cap}}</p>
            <p><strong>Nhà xuất bản:</strong> {{$row->nha_xuat_ban}}</p>
            <p><strong>Tác giả:</strong> {{$row->tac_gia}}</p>
            <p><strong>Hình thức bìa:</strong> {{$row->hinh_thuc_bia}}</p>
        </div>
        <div class="col-md-12" style="text-align: justify;">
            <h5>Mô tả nội dung</h5>
            <p>{{$row->mo_ta}}</p>
        </div>
        
    </div>
    @endforeach
</div>
@endsection

<style>
    .navbar {
            background-color: #ff5850;
            font-weight:bold;
        }
    .nav-item a {
            color: #fff!important;
        }
    .navbar-nav {
            margin:0 auto;
        }
    .book-detail {
        margin: 20px 0;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
    }
    .book-detail h3 {
        color: #ff5850;
        margin-bottom: 15px;
    }
    .book-detail img {
        max-width: 100%;
        border: 1px solid #eee;
        padding: 5px;
    }
</style>