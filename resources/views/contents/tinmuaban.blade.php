@extends('layouts.layout')
@section('title')
{{$title}}
@endsection
@section('content')
<section class="section">
    <h1 class="section-header">
    <div>{{$title}}</div>
    </h1>
    <div class="row">
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
                <div class="float-right">
                <a href="#" class="btn btn-primary">View All</a>
                </div>
                <h4>Latest Posts</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>                         
                    <tr>
                        <td>
                        Introduction Laravel 5
                        <div class="table-links">
                            in <a href="#">Web Development</a>
                            <div class="bullet"></div>
                            <a href="#">View</a>
                        </div>
                        </td>
                        <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Laravel 5 Tutorial - Installation
                        <div class="table-links">
                            in <a href="#">Web Development</a>
                            <div class="bullet"></div>
                            <a href="#">View</a>
                        </div>
                        </td>
                        <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Laravel 5 Tutorial - MVC
                        <div class="table-links">
                            in <a href="#">Web Development</a>
                            <div class="bullet"></div>
                            <a href="#">View</a>
                        </div>
                        </td>
                        <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                        </td>
                        <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Laravel 5 Tutorial - Migration
                        <div class="table-links">
                            in <a href="#">Web Development</a>
                            <div class="bullet"></div>
                            <a href="#">View</a>
                        </div>
                        </td>
                        <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
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
</script>
 @endsection