@extends('layouts.layout')
@section('title')
    {{$title}}
@endsection
@section('content')
<section class="section">
    <h1 class="section-header">
        <div>{{$title}}</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h4>Danh sach tai khoan</h4>
                </div>
                <div class="input-append">
                    <input id="fieldID4" type="text" value="">
                    <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn" type="button">Select</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table table-striped">
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Quyen</th>
                                <th>Trang thai</th>
                                <th>Action</th>
                            </tr>
                        <?php $i=1;$status=""?>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->role ==0)
                                        {{"Quan tri vien"}}
                                    @else
                                        {{"Bien tap vien"}}
                                    @endif
                                </td>
                                <td><a href = "" class=" btn-action badge @if($user->status == 0){{'badge-success'}} <?php $status='Active'?> @else {{'badge-danger'}} <?php $status='Not Ative' ?> @endif">{{$status}}</a></td>
                                <td>
                                    <a class="btn btn-info btn-action mr-1"  title="Change password" href=""><i class="ion ion-ios-redo"></i></a>
                                    <a class="btn btn-primary btn-action mr-1"  title="Edit" href=""><i class="ion ion-edit"></i></a>
                                    <a class="btn btn-danger btn-action"  title="Delete"><i class="ion ion-trash-b"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $users->links() }}
                    </div>
                </div>
               
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="myModal" style="width: 700px; display: none;" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body" style="padding:0px; margin:0px; width: 700px;">
      <iframe width="700" height="400" src="../filemanager/filemanager/dialog.php?type=2&amp;field_id=fieldID4'&amp;fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
 @endsection
