@extends('layouts.layout')
@section('title')
{{$title}}
@endsection
@section('css')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="../dist/css/tinmuaban.css">
@endsection
@section('content')
<section class="section">
    <h1 class="section-header">
        <div>{{$title}}
            <button class="btn btn-info" title="Viết bài mới" id="vietbai"><span class="ion-plus"></span></button>
        </div>
    </h1>
    <div class="row" id="post">
        <div class="col-lg-8 col-md-8 col-8 col-sm-8">
            <form method="post" class="needs-validation" acrion="">
                <div class="card">
                    <div class="card-header">
                        <h4>Viết bài mới</h4>                                                
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Lựa chọn dạng bài viết <span class="require">*</span></label><br>
                            <label class="radio-inline"><input type="radio" class="check" name="loaibai" value =1 required>Tin mua bán nhà đất</label>
                            <label class="radio-inline"><input type="radio"  class="check" name="loaibai" value =2 required>Tin tức nhà đất</label>
                        </div>
                        <div class="form-group" id="diachi">
                            <label>Chọn địa chỉ</label>
                            <div class="row">
                                <div class="col-3 col-md-3 col-lg-3">
                                    <select class="form-control" name="tinhthanh" id="tinhthanh">
                                        <option value="0">---Chọn Tỉnh Thành Phố---</option>
                                    </select> 
                                </div>
                                <div class="col-3 col-md-3 col-lg-3">
                                    <select class="form-control" name="quanhuyen" id="quanhuyenTP">
                                        <option value="0">---Chọn Quận huyện---</option>
                                    </select>
                                </div>
                                <div class="col-3 col-md-3 col-lg-3">
                                    <select class="form-control" name="xaphuong" id="xaphuong">
                                        <option value="0">---Chọn xã phường---</option>
                                    </select>
                                </div>
                                <div class="col-3 col-md-3 col-lg-3">
                                    <input type="text" name="vitri" class="form-control" placeholder="Nhập vào địa chỉ nhà">
                                </div>
                            </div>
                                                                                  
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề <span class="require">*</span></label>
                            <input type="text" name="tieude" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Chi tiết <span class="require">*</span></label>
                            <textarea class="summernote-simple" name="description"></textarea>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 col-sm-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Ảnh đại diện bài viết <span class="require">*</span></label>
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="anhdaidien"/>
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" >
                    <div class="card-body">
                        <div class="form-group" id="loaitin">
                            <label>Loại tin</label>
                            <select class="form-control" name="loaitin">
                                <option value="0">---Lựa chọn loại tin tức---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>                           
                        </div>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary">Đăng bài</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
            <div class="card-header">
                <h4>Danh sách bài viết</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Tin mua bán nhà đất</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Tin tức nhà đất</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Dành cho nhà đầu tư</a>
                      </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                        <div class="table-responsive">
                                <table class="table table-striped" id="">
                                    <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Giá</th>
                                        <th>Diện tích</th>
                                        <th>Vị trí</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>                         
                                        <tr>
                                            <td>
                                                Introduction Laravel 5
                                            </td>
                                            <td>
                                                $
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile3" role="tabpanel" aria-labelledby="home-tab3">
                        <div class="table-responsive">
                                <table class="table table-striped" id="">
                                    <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Người đăng</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>                         
                                    <tr>
                                        <td>
                                        </td>
                                        <td>                                            
                                        </td>
                                        <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="contact3" role="tabpanel" aria-labelledby="home-tab3">
                        <div class="table-responsive">
                                <table class="table table-striped" id="">
                                    <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Người đăng</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>                         
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                        
                                        </td>
                                        <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
    </div>
 </section>
@endsection
@section('js')
<script src="../ckeditor/ckeditor.js"></script>
<script src="../dist/js/backend/tinmuaban.js"></script>
 @endsection
