@extends('admin.index')
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
	                    <span>Edit Admin</span>
	                </li>
	            </ul>
	        </div>
	        <h3 class="page-title">Edit Admin</h3>
	        <div class="row">
            	<div class="col-md-12">
            		@if(session('success'))
						<div class="alert alert-success update-alert">   
						<li>{{ session('success') }}</li>
						</div>
					@endif
            	</div>
	        	<div class="col-md-12">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</div>
					@endif
	        	</div>
	        </div>
	        <form action="{{route('admin.admins.update',['id'=>$row->id])}}" method="post" enctype="multipart/form-data">
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="portlet light bordered">
	                        <div class="portlet-body form">
	                    		<div class="form-group">
	                                <label>User Login <span class="require-field">(*)</span></label>
	                                <div class="input-group">
	                                    <span class="input-group-addon">
	                                        <i class="fa fa-user"></i>
	                                    </span>
	                                    <input type="text" class="form-control" placeholder="User Login" name="userlogin" value="{{$row->user}}" readonly="readonly"> 
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label>Full name</label>
	                                <div class="input-group">
	                                    <span class="input-group-addon">
	                                        <i class="fa fa-user"></i>
	                                    </span>
	                                    <input type="text" class="form-control" placeholder="Full name" name="fullname" value="{{$row->name}}"> 
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label>Email</label>
	                                <div class="input-group">
	                                    <span class="input-group-addon">
	                                        <i class="fa fa-envelope"></i>
	                                    </span>
	                                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{$row->email}}"> 
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label>Phone</label>
	                                <div class="input-group">
	                                    <span class="input-group-addon">
	                                        <i class="fa fa-mobile-phone"></i>
	                                    </span>
	                                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$row->phone}}"> 
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label>Address</label>
	                                <div class="input-group">
	                                    <span class="input-group-addon">
	                                        <i class="fa fa-map-marker"></i>
	                                    </span>
	                                    <input type="text" class="form-control" placeholder="Address" name="address" value="{{$row->address}}"> 
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label>Password <span class="require-field">(*) Để trống nếu không thay đổi Password</span></label>
	                                <div class="input-group">
	                                    <span class="input-group-addon">
	                                        <i class="fa fa-lock"></i>
	                                    </span>
	                                    <input type="password" class="form-control" placeholder="Password" name="password" value=""> 
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label>Re-Type Password <span class="require-field">(*)</span></label>
	                                <div class="input-group">
	                                    <span class="input-group-addon">
	                                        <i class="fa fa-lock"></i>
	                                    </span>
	                                    <input type="password" class="form-control" placeholder="Re-Type Password" name="repassword" value=""> 
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <div class="checkbox-list">
	                                    <label class="checkbox-inline">
	                                        <input type="checkbox" @if($row->status == 1) checked="checked" @endif name="isActive"> Active
	                                    </label>
	                                </div>
	                            </div>
	                            <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="height: 150px;">
                                            <img src="/uploads/admin/{{$row->photo}}" alt="" /> </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                        <div>
                                            <span class="btn default btn-file">
                                                <span class="fileinput-new"> Select image </span>
                                                <span class="fileinput-exists"> Change </span>
                                                <input type="file" name="avatar"> 
                                            </span>
                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                        </div>
                                    </div>
                                </div>
	                            <div class="form-actions right">
	                                <button type="reset" class="btn default">Cancel</button>
	                                <button type="submit" class="btn green">Submit</button>
	                            </div>
	                        </div>
	                    </div>
		        	</div>
		        </div>
		        <input type="hidden" value="{{ csrf_token() }}" name="_token">
	    	</form>
	    </div>
	</div>
@endsection