@extends('admin.index')
@section('content')
	<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">Header</h3>
        <form action="" method="post" enctype="multipart/form-data" id="submit-form-configs-header">
	        <div class="row">
	        	<div class="col-md-12">
	        		<div class="portlet light bordered">
                        <div class="portlet-body form">
                    		<div class="form-group">
                            	<label>Logo</label><div class="clearfix"></div>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="height: 150px;">
                                        <img src="/uploads/configs/{{isset($row['logo'])?$row['logo']:''}}" alt="" /> </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                    <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new"> Chọn Hình </span>
                                            <span class="fileinput-exists"> Thay đổi </span>
                                            <input type="file" name="logo">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Hotline 1</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    <input type="text" class="form-control" name="hotline-1" value="{{isset($row['hotline-1'])?$row['hotline-1']:''}}"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Hotline 2</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    <input type="text" class="form-control" name="hotline-2" value="{{isset($row['hotline-2'])?$row['hotline-2']:''}}"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Hotline 3</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    <input type="text" class="form-control" name="hotline-3" value="{{isset($row['hotline-3'])?$row['hotline-3']:''}}"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Link Đăng ký</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    <input type="text" class="form-control" name="link-register" value="{{isset($row['link-register'])?$row['link-register']:''}}"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Link Đăng nhập</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    <input type="text" class="form-control" name="link-login" value="{{isset($row['link-login'])?$row['link-login']:''}}"> 
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions right">
                        <button type="submit" class="btn green">Cập nhật</button>
                    </div>
	        	</div>
	        </div>
	        <input type="hidden" value="{{ csrf_token() }}" name="_token">
	        <input type="hidden" name="type" value="header">
    	</form>
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
        $(document).ready(function(e){
            $("#submit-form-configs-header").on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.configs.update') }}',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                        //Loading
                    },
                    success: function(html){
                        $('.modal-body').html("Cập nhật cấu hình thành công");
                        $('#modal-basic').modal('show');
                    }
                });
            });
        });
        </script>
    </script>
@endsection