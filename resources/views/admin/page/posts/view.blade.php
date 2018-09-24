<div class="info-style">
<p><strong>Tiêu đề: </strong>{{$row->title}}</p>
<p><strong>Slug: </strong>{{$row->slug}}</p>
<p><strong>Trạng thái: </strong>@if($row->status == 1) Hiện @else Ẩn @endif</p>
<p><strong>Thời gian tạo: </strong>{{$row->created_at}}</p>
<p><strong>Thời gian sửa: </strong>{{$row->updated_at}}</p>
</div>
<style type="text/css">
	.info-style p{
		margin-top: 0;
		margin-bottom:5px;
		font-size: 13px;
	}
</style>