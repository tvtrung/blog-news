@if(!isset($configs_data['optimize']['css-js-inpage']) || $configs_data['optimize']['css-js-inpage'] == 0 || $configs_data['optimize']['css-js-inpage'] == null)
<script src="/style/jquery/jquery-2.2.4.min.js"></script>
<script src="/style/bootstrap-4.0.0/bootstrap.min.js"></script>
<script src="/style/menu-mobile/js/webslidemenu.js"></script>
<script src="/style/owl-carousel/owl.carousel.js"></script>
<script src="/style/lazyload/lazyload.js"></script>
{{-- <script src="/style/slick/slick.js"></script> --}}
<script src="/style/js/myscript.js"></script>
@else
<script type="text/javascript">
{!! file_get_contents(public_path('/style/jquery/jquery-2.2.4.min.js')) !!}
{!! file_get_contents(public_path('/style/bootstrap-4.0.0/bootstrap.min.js')) !!}
{!! file_get_contents(public_path('/style/menu-mobile/js/webslidemenu.js')) !!}
{!! file_get_contents(public_path('/style/owl-carousel/owl.carousel.js')) !!}
{!! file_get_contents(public_path('/style/lazyload/lazyload.js')) !!}
{{-- {!! file_get_contents(public_path('/style/slick/slick.js')) !!} --}}
{!! file_get_contents(public_path('/style/js/myscript.js')) !!}
</script>
@endif
<script type="text/javascript">
	//NewLetter Footer
	$(document).ready(function(){
	    $("#newletter-submit").on("click", function(){
	        $.ajax({
	            type:"POST",
	            url:"{{ route('contact_form_footer_ajax') }}",
	            data: $("#form-footer").serialize(),
	            success: function(html){
	                console.log("OK");
	                $("#alert-newletter").html(html);
	                $("#form-footer")[0].reset();
	                $("#newletter-modal").modal("show");
	            }
	        });
	    })
	});
</script>
<script type="text/javascript">
	function ajax_show(){
	   	$.ajax({
			type:'GET',
			url: '{{ route('view_online') }}',
			// data: $('#form-filter').serialize(),
			// timeout: 3000,
			success: function(html){
	            // $('.content-data').html(html);
			}
		})
   	}
   	setInterval(function(){ajax_show()}, 3000);
</script>
<script type="text/javascript">
	function ajax_cc_online(){
	   	$.ajax({
			type:'GET',
			url: '{{ route('cc.online') }}',
			success: function(html){
			}
		})
   	}
   	ajax_cc_online();
</script>
<script type="text/javascript">
	 var bLazy = new Blazy({
        breakpoints: [{
	    width: 420 // Max-width
          , src: 'data-src-small'
	}]
      , success: function(element){
	    setTimeout(function(){
		// We want to remove the loader gif now.
		// First we find the parent container
		// then we remove the "loading" class which holds the loader image
		var parent = element.parentNode;
		parent.className = parent.className.replace(/\bloading\b/,'');
	    }, 200);
        }
   });
</script>
{!!isset($configs_data['seo']['chat-script'])?$configs_data['seo']['chat-script']:''!!}