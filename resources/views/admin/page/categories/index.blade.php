@extends('admin.index')
@section('style')
	<style type="text/css">
		.table-bordered, 
		.table-bordered>tbody>tr>td, 
		.table-bordered>tbody>tr>th, 
		.table-bordered>tfoot>tr>td, 
		.table-bordered>tfoot>tr>th, 
		.table-bordered>thead>tr>td, 
		.table-bordered>thead>tr>th{
			font-size: 13px;
		}
	</style>
@endsection
@section('content')
	<div class="page-content-wrapper">
	    <div class="page-content">
	        <h3 class="page-title">Danh mục bài viết</h3>
	        <div class="row">
            	<div class="col-md-12">
            		@if(session('success'))
						<div class="alert alert-success update-alert">   
						<li>{{ session('success') }}</li>
						</div>
					@endif
					@if(session('fail'))
						<div class="alert alert-danger update-alert">   
						<li>{{ session('fail') }}</li>
						</div>
					@endif
            	</div>
	        	<div class="col-md-12">
	        		<div class="form-actions right">
                        <a href="{{route('admin.cats.create')}}"><button type="" class="btn green">Thêm Danh mục</button></a>
                    </div>
	        		<div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;"> STT </th>
                                        <th> Tên danh mục </th>
                                        <th style="width: 50px;" class="text-center"> Vị trí </th>
                                        <th style="width: 50px;" class="text-center"> Trạng thái </th>
                                        <th style="width: 120px;">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {!!$html!!}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END BORDERED TABLE PORTLET-->
            </div>
		</div>
	</div>

{{-- Modal --}}
<div class="modal fade" id="modal-delete" tabindex="-1" role="basic" aria-hidden="true">
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
<div class="modal fade" id="modal-view" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Thông tin chi tiết</h4>
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
<script type="text/javascript">
	{{--Ajax Status --}}
	$(document).ready(function() {
		$('.ajax-switch').on('click', function(){
			var get_link = $(this).data('link');
			$.ajax({
				type:'GET',
				url: get_link,
				success: function(html){
				},
			});
		});
	});
</script>

{{--Ajax Change Order --}}
<script type="text/javascript">
	$(":input.ajax-order").bind('keyup mouseup', function () {
          var get_link = $(this).data('link');
          var get_value = $(this).val();
          $.ajax({
          	type:"GET",
          	url: get_link,
          	data: "order=" + get_value,
          	success:function(html){}
          });
	});
</script>

{{--Ajax Delete --}}
<script type="text/javascript">
	$(document).ready(function() {
		$('.click-to-delete').on('click', function(e){
			e.preventDefault();
			var	get_link = $(this).data('link');
			$('.a-delete').attr('href',get_link);
			$('#modal-delete').modal('show');
		});
	});
</script>
{{--Ajax View --}}
<script type="text/javascript">
	$(document).ready(function() {
		$('.click-to-view').on('click', function(e){
			e.preventDefault();
			var	get_link = $(this).data('link');
			$.ajax({
				type:'GET',
				url: get_link,
				success: function(html){
					$('#modal-view .modal-body').html(html);
					$('#modal-view').modal('show');
				},
			});
		});
	});
</script>
@endsection