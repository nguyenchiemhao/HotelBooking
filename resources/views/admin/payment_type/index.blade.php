@extends('admin.layout.masterpage')

@section('css')
{{-- css table --}}
<link rel="stylesheet" href="admin_page_asset/css/lib/datatable/dataTables.bootstrap.min.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
@endsection

@section('title')
    Quản lý loại thanh toán
@endsection

@section('breadcrumbs')
  <div class="breadcrumbs">
      <div class="breadcrumbs-inner">
          <div class="row m-0">
              <div class="col-sm-4">
                  <div class="page-header float-left">
                      <div class="page-title">
                          <h1>Dashboard</h1>
                      </div>
                  </div>
              </div>
              <div class="col-sm-8">
                  <div class="page-header float-right">
                      <div class="page-title">
                          <ol class="breadcrumb text-right">
                          <li><a href="">Dashboard</a></li>
                              <li><a href="#">Quản lý loại thanh toán</a></li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('content')
<div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <strong class="card-title">Loại thanh toán</strong>
                  <a class="btn btn-primary btn-md" href={{route('get-payment-type-create')}}><span><i class="fa fa-plus"></i></span> Thêm mới</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
              </div>
              <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Loại thanh toán</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if (!empty($paymenttype) )
                        @foreach ($paymenttype as $pt)
                        <tr>
                          <td>{{$pt->id}}</td>
                          <td>{{$pt->payment_type}}</td>
                          <td><p>{{$pt->description}}</p></td>
                          <td>
                            <form id="data_status_edit" action="{{route('post-payment-type-edit-active', ['id'=>$pt->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="">
                                @csrf 
                                    @if($pt->active==1)
                                    <select name="payment_active" id="payment_active" class="form-control" data-parsley-trigger="change">                          
                                        <option value="1" selected="selected" >Đang hoạt động</option>
                                        <option value="2">Không hoạt đông</option>
                                    </select>
                                    <button type="submit"  class="btn btn-primary">
                                        <i class="fa fa-dot-circle-o"></i> Lưu
                                    </button>
                                    <button  class="btn btn-danger"></i> Hủy</button>
                                    @else
                                    <select name="payment_active" id="payment_active" class="form-control" data-parsley-trigger="change">                          
                                        <option value="1"  >Đang hoạt động</option>
                                        <option value="2" selected="selected">Không hoạt đông</option>
                                    </select>
                                    <button type="submit"  class="btn btn-primary">
                                        <i class="fa fa-dot-circle-o"></i> Lưu
                                    </button>
                                    <button type="reset" class="btn btn-danger"></i> Hủy</button>
                                    @endif
                                </form>
                          </td>
                          <td>
                                <a class="btn btn-success btn-sm mr-2" href="" data-toggle="modal" data-target="#myModal-{{$pt->id}}" data-backdrop="false"> <span><i class="fa fa-eye"></i></span> Xem</a>
                          		<a class="btn btn-warning btn-sm mr-2" href="{{route('get-payment-type-edit', ['id' => $pt->id])}}"> <span><i class="fa fa-edit"></i></span> Sửa</a>
                              <a class="btn btn-danger btn-sm mr-2" href="{{route('get-payment-type-delete', ['id' => $pt->id])}}"> <span><i class="fa fa-delete"></i></span> Xóa</a>
                                        
                                  <!-- model delete-->
                                  <div style="text-align: left;" id="myModal{{$pt->id}}" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title alert alert-danger">Xác Nhận</h4>
                                              </div>
                                              <div class="modal-body">
                                                  <p><strong>Loại thanh toán {{ $pt->payment_type }} hiện có {{ count($pt->payments) }} thanh toán</strong></p>
                                                  <p>Bạn có chắc chắn muốn xóa loại thanh toán: "{{ $pt->payment_type }}" không?</p>
                                              </div>
                                              <div class="modal-footer">
                                                  <a class="btn btn-danger" href="{{route('get-payment-type-delete', ['id'=>$pt->id])}}">Đồng ý xoá</a>
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                                              </div>
                                          </div>
  
                                      </div>
                                  </div>
                                  <!-- end model-->
                                <div class="modal fade" id="myModal-{{$pt->id}}">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title">Thông tin loại thanh toán</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <table class="table table-boderless">
                                          <tr>
                                            <th>Id: </th>
                                            <td>{{$pt->id}}</td>
                                          </tr>
                                          <tr>
                                            <th>Loại thanh toán: </th>
                                            <td>{{$pt->payment_type}}</td>
                                          </tr>
                                          <tr>
                                            <th>Mô tả: </th>
                                            <td>{{$pt->description}}</td>
                                          </tr>
                                          <tr>
                                            <th>Trạng thái: </th>
                                            <td>{{$pt->active == 1 ? 'Đang hoạt động': 'Không hoạt động'}}</td>
                                          </tr>
                                        </table>
                                      </div>
                                      <div class="modal-footer">
                                        <a class="btn btn-warning" href={{route('get-payment-type-edit', ['id'=>$pt->id])}}> <span><i class="fa fa-edit"></i></span> Sửa</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </td>
                            {{-- modal --}}
                            <!-- The Modal -->
                        </tr>
                        @endforeach
                      @endif
                              {{-- end modal --}}
                    </tbody>
                </table>
              </div>
          </div>
      </div>


    </div>
</div><!-- .animated -->
@endsection

@section('script')
  {{-- scrip data table --}}
  <script src="admin_page_asset/js/lib/data-table/datatables.min.js"></script>
  <script src="admin_page_asset/js/lib/data-table/dataTables.bootstrap.min.js"></script>
  <script src="admin_page_asset/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="admin_page_asset/js/lib/data-table/buttons.bootstrap.min.js"></script>
  <script src="admin_page_asset/js/lib/data-table/jszip.min.js"></script>
  <script src="admin_page_asset/js/lib/data-table/vfs_fonts.js"></script>
  <script src="admin_page_asset/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="admin_page_asset/js/lib/data-table/buttons.print.min.js"></script>
  <script src="admin_page_asset/js/lib/data-table/buttons.colVis.min.js"></script>
  <script src="admin_page_asset/js/init/datatables-init.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    });
  </script>
@endsection
