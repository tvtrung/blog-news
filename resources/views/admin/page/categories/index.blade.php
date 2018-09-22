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
	        		<div class="form-actions right">
                        <button type="" class="btn green">Thêm Danh mục</button>
                    </div>
	        		<div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;"> STT </th>
                                        <th> Tên danh mục </th>
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
@endsection