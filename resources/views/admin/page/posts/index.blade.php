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
        .url-create{
            background: #36c6d3;
            color: #FFF;
            padding: 5px 15px;
            float: left;
            margin-top: 5px;
        }
        .url-create:hover{
            color: #FFF;
            text-decoration: none;
        }
	</style>
@endsection
@section('content')
	<div class="page-content-wrapper">
	    <div class="page-content">
	        <h3 class="page-title">Bài viết</h3>
	        <div class="row">
            	<div class="col-md-12">
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
					@if (count($errors) > 0)
				        <div class="alert alert-danger">
				            <ul>
				                @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				                @endforeach
				            </ul>
				        </div>
				    @endif
            	</div>
	        	<div class="col-md-12">
                    <form action="" method="get">
	        		<div class="form-actions right">
                        <a class="url-create" href="{{route('admin.posts.create')}}">Thêm bài viết</a>
                        <select name="cat" class="bs-select form-control list-cats-id" style="width: 250px;float: right;" onchange="this.form.submit()">
                            <option value="0">Tất cả</option>
                            {!! $html_option !!}
                        </select>
                    </div>
                    </form>
                    <div class="clearfix"></div><br>
	        		<div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th> Tên bài viết </th>
                                        <th style="width: 50px;" class="text-center"> Thuộc danh mục </th>
                                        <th style="width: 50px;" class="text-center"> Lượt xem </th>
                                        <th style="width: 50px;" class="text-center"> Trạng thái </th>
                                        <th style="width: 150px;" class="text-center"> Thời gian tạo </th>
                                        <th style="width: 120px;">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <td>{!!$item->title!!}</td>
                                    	<td>{{$title_cat[$item->cat_id]}}</td>
                                    	<td class="text-center">{{$item->view}}</td>
                                    	<td class="text-center"><input type="checkbox" class="ajax-switch" data-link="{{route('admin.posts.ajax_switch',['id'=>$item->id])}}" @if($item->status == 1) checked="checked" @endif></td>
                                    	<td>{{$item->created_at}}</td>
                                    	<td class="text-center">
                                    		<a href="#" class="click-to-view" data-link="{{route('admin.posts.ajax_view',['id'=>$item->id])}}"><span class="label label-sm label-success"><i class="fa fa-eye"></i></span></a>&nbsp;
                                    		<a href="{{route('admin.posts.edit',['id'=>$item->id])}}"><span class="label label-sm label-warning"><i class="fa fa-edit"></i></span></a>&nbsp;
                                    		<a href="#" class="click-to-delete" data-link="{{route('admin.posts.delete',['id'=>$item->id])}}"><span class="label label-sm label-danger"><i class="fa fa-trash"></i></span></a>
                                    	</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right">
                        @if(isset($_GET['cat']) && $_GET['cat'] != 0 && $_GET['cat'] != null)
                        {!!$data->appends(['cat' => $_GET['cat']])->links()!!}
                        @else
                        {!!$data->links()!!}
                        @endif
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
    @if(isset($_GET['cat']) && $_GET['cat'] != '')
    cat_id = {{$_GET['cat']}};
    @else
    cat_id = 0;
    @endif
    $('.list-cats-id option[value='+cat_id+']').attr('selected','selected');
</script>
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