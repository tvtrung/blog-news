@extends('admin.index')
@section('style')
@endsection
@section('content')
	<div class="page-content-wrapper">
	    <div class="page-content">
	        <h3 class="page-title">Thêm bài viết</h3>
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
				        	<div class="col-md-12">
				        		<div class="portlet light bordered">
			                        <div class="portlet-body form">
			                    		<div class="form-group">
			                                <label>Tiêu đề <span class="require-field">(*)</span></label>
			                                <div class="input-group">
			                                    <span class="input-group-addon">
			                                        <i class="fa fa-pencil"></i>
			                                    </span>
			                                    <input type="text" class="form-control input-title" placeholder="Tiêu đề" name="title" value="{{old('title')}}" autocomplete="off"> 
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <label>Slug</label>
			                                <div class="input-group">
			                                    <span class="input-group-addon">
			                                        <i class="fa fa-pencil"></i>
			                                    </span>
			                                    <input type="text" class="form-control" placeholder="Slug" name="slug" readonly="readonly" value="{{old('slug')}}"> 
			                                </div>
			                            </div>
			                            <div class="form-group form-select">
			                                <label>Thuộc chủ đề</label>
			                                <select class="bs-select form-control list-cats-id" name="list-cats-id">
			                                {!! $html_option !!}
                                            </select>
			                            </div>
			                            <div class="form-group">
			                            	<label>Hình ảnh</label><div class="clearfix"></div>
			                                <div class="fileinput fileinput-new" data-provides="fileinput">
			                                    <div class="fileinput-new thumbnail" style="height: 150px;">
			                                        <img src="" alt="" /> </div>
			                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
			                                    <div>
			                                        <span class="btn default btn-file">
			                                            <span class="fileinput-new"> Chọn Hình </span>
			                                            <span class="fileinput-exists"> Thay đổi </span>
			                                            <input type="file" name="photo">
			                                        </span>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <div class="checkbox-list">
			                                    <label class="checkbox-inline">
			                                        <input type="checkbox" checked="checked" name="status"> Hiển thị
			                                    </label>
			                                </div>
			                            </div>
			                            <div class="form-group">
			                                <label>Mô tả</label>
			                                <textarea name="text-description" class="form-control m-input ckeditor">{{old('text-description')}}</textarea>
			                            </div>
			                            <div class="form-group">
			                                <label>Nội dung</label>
			                                <textarea name="text-content" class="form-control m-input ckeditor">{{old('text-content')}}</textarea> 
			                            </div>
			                            <div class="form-group">
			                                <label>SEO keyword</label>
			                                <textarea name="seo_keyword" class="form-control m-input">{{old('seo_keyword')}}</textarea>
			                            </div>
			                            <div class="form-group">
			                                <label>SEO Description</label>
			                                <textarea name="seo_description" class="form-control m-input">{{old('seo_keyword')}}</textarea>
			                            </div>
			                            {{-- <div class="form-group">
			                                <label>SEO Content</label>
			                                <textarea name="seo_content" class="form-control m-input">{{old('seo_keyword')}}</textarea> 
			                            </div> --}}
			                            <div class="form-actions right">
			                                <button type="reset" class="btn default">Hủy</button>
			                                <button type="submit" class="btn green">Cập nhật</button>
			                            </div>
			                        </div>
			                    </div>
				        	</div>
				        </div>
				        <input type="hidden" value="{{ csrf_token() }}" name="_token">
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
	<script type="text/javascript" src="/editor/ckeditor/ckeditor.js"></script>
	<script>
		$('.ckeditor').each(function(index, el) {
			var attr = $(this).attr('name');
			CKEDITOR.replace( attr, {
				filebrowserBrowseUrl: '{{route('upload_editor')}}',
				filebrowserImageBrowseUrl: '{{route('upload_editor') . "?type=Images"}}',
				filebrowserFlashBrowseUrl: '{{route('upload_editor') . "?type=Flash"}}',
				filebrowserUploadUrl: '{{ asset('/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
				filebrowserImageUploadUrl: '{{ asset('/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
				filebrowserFlashUploadUrl: '{{ asset('/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
			});
		});
	</script>
@endsection