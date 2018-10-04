<div class="info-style">
<p><strong>Tiêu đề: </strong>{!!$row->title!!}</p>
<p><strong>Slug: </strong>{{$row->slug}}</p>
<p><strong>Mô tả ngắn: </strong>{!!$row->description!!}</p>
<p><strong>Nội dung: </strong> <br> {!!$row->content!!}</p>
<p><strong>Hình ảnh: </strong> <br> <span class="photo"><img src="/uploads/posts/{{$row->photo}}"></span></p>
<p><strong>Trạng thái: </strong>@if($row->status == 1) Hiện @else Ẩn @endif</p>
<p><strong>Lượt xem: </strong>{{$row->view}}</p>
<p><strong>Thuộc danh mục: </strong>{{$title_cat[$row->cat_id]}}</p>
<p><strong>SEO Keyword: </strong>{!!$row->seo_keyword!!}</p>
<p><strong>SEO Description: </strong>{!!$row->seo_description!!}</p>
<p><strong>SEO Content: </strong>{!!$row->seo_content!!}</p>
<p><strong>Thời gian tạo: </strong>{{$row->created_at}}</p>
<p><strong>Thời gian sửa: </strong>{{$row->updated_at}}</p>
</div>
<style type="text/css">
	.info-style p{
		margin-top: 0;
		margin-bottom:5px;
		font-size: 13px;
	}
	.info-style p .photo img{
		max-width: 300px
	}
</style>