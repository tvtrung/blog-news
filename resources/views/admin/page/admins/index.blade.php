@extends('admin.index')
@section('style')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="/admin/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<style type="text/css">
	table tr td .btn{
		font-size: 13px;
	}
</style>
@endsection
@section('content')
	<div class="page-content-wrapper">
	    <div class="page-content">
	        <div class="page-bar">
	            <ul class="page-breadcrumb">
	                <li>
	                    <a href="{{route('admin.dashboard')}}">Home</a>
	                    <i class="fa fa-circle"></i>
	                </li>
	                <li>
	                    <span>List Admin</span>
	                </li>
	            </ul>
	        </div>
	        <h3 class="page-title">List Admin</h3>
	        <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                            	<a href="{{route('admin.admins.create')}}">
	                                <button class="btn sbold green"> Add New
	                                    <i class="fa fa-plus"></i>
	                                </button>
                            	</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-12">
                		@if(session('success'))
							<div class="alert alert-success update-alert">   
							<li>{{ session('success') }}</li>
							</div>
						@endif
                	</div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> 
                            </th>
                            <th class="text-center"> N.O </th>
                            <th> Username </th>
                            <th> Fullname </th>
                            <th class="text-center"> Status </th>
                            <th> Created at </th>
                            <th> Updated at </th>
                            <th>  </th>
                        </tr>
                    </thead>
                    <tbody>
                    	@if(isset($data))
                    	@php $i = 0; @endphp
                    	@foreach($data as $row)
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1" /> </td>
                            <td class="text-center"> {{++$i}} </td>
                            <td> {{$row->user}} </td>
                            <td> {{$row->name}} </td>                            
                            <td class="text-center">
                            	@if($row->status == 1)
                            		<button type="button" class="btn btn-success">Đã kích hoạt</button>
                            	@else 
                            		<button type="button" class="btn btn-danger">Chưa kích hoạt</button>
                            	@endif
                            </td>
                            <td> {{$row->created_at}} </td>
                            <td> {{$row->updated_at}} </td>
                            <td class="text-center"> 
                            	<button type="button" class="btn btn-primary click-view" title="View" data-link="{{route('admin.admins.view',['id'=>$row->id])}}"><i class="fa fa-eye"></i></button>
                            	<a href="{{route('admin.admins.edit',['id'=>$row->id])}}"><button type="button" class="btn yellow-crusta" title="Edit"><i class="fa fa-edit"></i></button></a>
                            	<button type="button" class="btn red click-delete" title="Delete" data-link="{{route('admin.admins.delete',['id'=>$row->id])}}"><i class="fa fa-trash"></i></button> 
                            </td>
                        </tr>
                        @endforeach
                       @endif
                    </tbody>
                </table>
            </div>
	    </div>
	</div>
	{{-- Modal --}}
	<div class="modal fade" id="modal-basic" tabindex="-1" role="basic" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	                <h4 class="modal-title">Thông báo</h4>
	            </div>
	            <div class="modal-body">Bạn có chắc muốn xóa mục này?</div>
	            <div class="modal-footer">
	                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Hủy</button>
	                <a href="" class="a-delete"><button type="button" class="btn btn-danger">Xóa</button></a>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="modal fade" id="modal-basic-view" tabindex="-1" role="basic" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	                <h4 class="modal-title">Thông tin admin</h4>
	            </div>
	            <div class="modal-body"></div>
	            <div class="modal-footer">
	                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Đóng</button>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
@section('script')

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/admin/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
	$(document).ready(function() {
	    $('#sample_1').DataTable();
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.click-view').on('click', function(){
			var	get_link = $(this).data('link');
			$.ajax({
				type:'GET',
				url: get_link,
				success: function(html){
					$('#modal-basic-view .modal-body').html(html);
					$('#modal-basic-view').modal('show');
				},
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.click-delete').on('click', function(){
			var	get_link = $(this).data('link');
			var link_delete = get_link;
			$('.a-delete').attr('href',link_delete);
			$('#modal-basic').modal('show');
		});
	});
</script>

@endsection