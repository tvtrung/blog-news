@extends('admin.index')
@section('style')
@endsection
@section('content')
	<div class="page-content-wrapper">
	    <div class="page-content">
	        <h3 class="page-title">Chỉnh sửa danh mục</h3>
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
	        		<form action="" method="post" enctype="multipart/form-data">
				        <div class="row">
				        	<div class="col-md-6">
				        		<div class="portlet light bordered">
			                        <div class="portlet-body form">
			                    		<div class="form-group">
			                                <label>Tiêu đề <span class="require-field">(*)</span></label>
			                                <div class="input-group">
			                                    <span class="input-group-addon">
			                                        <i class="fa fa-pencil"></i>
			                                    </span>
			                                    <input type="text" class="form-control input-title" placeholder="Tiêu đề" name="title" value="{{$row->title}}" autocomplete="off"> 
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <label>Slug <span class="require-field">(*)</span></label>
			                                <div class="input-group">
			                                    <span class="input-group-addon">
			                                        <i class="fa fa-pencil"></i>
			                                    </span>
			                                    <input type="text" class="form-control" placeholder="Slug" name="slug" readonly="readonly" value="{{$row->slug}}"> 
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <label>Chọn vị trí</label>
			                                <select class="bs-select form-control" name="position">
			                                <option value="{{time()}}">Bỏ chọn</option>
			                                @for($i = 1; $i <= 5; $i++)
			                                <option value="{{$i}}" @if($row->position == $i) selected="selected" @endif>Vị trí {{$i}}</option>
			                                @endfor
                                            </select>
			                            </div>
			                            {{-- Tạm ẩn
			                            <div class="form-group form-select">
			                                <label>Chọn cấp danh mục</label>
			                                <select class="bs-select form-control" name="parent">
			                                <option value="0">Cấp cao nhất</option>
                                            {!! $html !!}
                                            </select>
			                            </div>
			                            --}}
			                            <input type="hidden" name="parent" value="0">
			                            <div class="form-group">
			                                <label>Sắp xếp <span class="require-field">(*)</span></label>
			                                <div class="input-group">
			                                    <input type="number" min="1" value="{{$row->order}}" class="form-control" name="order"> 
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="checkbox-list">
			                                    <label class="checkbox-inline">
			                                        <input type="checkbox" @if($row->status == 1) checked="checked" @endif name="status"> Hiển thị
			                                    </label>
			                                </div>
			                            </div>
			                            <div class="form-actions right">
			                                <button type="reset" class="btn default">Hủy</button>
			                                <button type="submit" class="btn green">Cập nhật</button>
			                            </div>
			                        </div>
			                    </div>
				        	</div>
				        </div>
				        <input type="hidden" value="{{ csrf_token() }}" name="_token">
				        <input type="hidden" name="id" value="{{$row->id}}">
			    	</form>
                </div>
                <!-- END BORDERED TABLE PORTLET-->
            </div>
		</div>
	</div>
@endsection
@section('script')
	<script type="text/javascript">
		$("input[type='text'].input-title").on('keyup', function() {
			$("input[name='slug']").val(to_slug($(this).val()));
		 });
		function to_slug(str){
		    str = str.toLowerCase();     
		    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
		    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
		    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
		    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
		    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
		    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
		    str = str.replace(/(đ)/g, 'd');
		 
		    // Xóa ký tự đặc biệt
		    str = str.replace(/([^0-9a-z-\s])/g, '');
		 
		    // Xóa khoảng trắng thay bằng ký tự -
		    str = str.replace(/(\s+)/g, '-');
		 
		    // xóa phần dự - ở đầu
		    str = str.replace(/^-+/g, '');
		 
		    // xóa phần dư - ở cuối
		    str = str.replace(/-+$/g, '');
		 
		    // return
		    return str;
		}
	</script>
	<script type="text/javascript">
		id = {{$row->id}};
		parent = {{$row->parent}};
		$('.form-select option[value='+id+']').attr('disabled','');
		$('.form-select option[value='+parent+']').attr('selected','selected');
	</script>
@endsection