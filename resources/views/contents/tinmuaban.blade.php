@extends('layouts.layout')
@section('title')
{{$title}}
@endsection
@section('css')
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
            <form method="post" class="needs-validation" novalidate="">
                <div class="card">
                    <div class="card-header">
                    <h4>Quick Draft</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                        <div class="invalid-feedback">
                        Please fill in the title
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="summernote-simple" name="description"></textarea>
                    </div>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary">Save Draft</button>
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
<script>  
    CKEDITOR.replace( 'description', {
            filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        } );
    $(document).ready(function(){
        $("#vietbai").click(function(){
            $("#post").toggle();
        });
    });
</script>
 @endsection
