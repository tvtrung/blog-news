@if(!isset($configs_data['optimize']['css-js-inpage']) || $configs_data['optimize']['css-js-inpage'] == 0 || $configs_data['optimize']['css-js-inpage'] == null)
<script src="style/jquery/jquery-2.2.4.min.js"></script>
<script src="style/bootstrap-4.0.0/bootstrap.min.js"></script>
<script src="style/menu-mobile/js/webslidemenu.js"></script>
<script src="style/owl-carousel/owl.carousel.js"></script>
<script src="style/lazyload/lazyload.js"></script>
<script src="style/slick/slick.js"></script>
<script src="style/js/myscript.js"></script>
@else
<script type="text/javascript">
{!! file_get_contents(public_path('/style/jquery/jquery-2.2.4.min.js')) !!}
{!! file_get_contents(public_path('/style/bootstrap-4.0.0/bootstrap.min.js')) !!}
{!! file_get_contents(public_path('/style/menu-mobile/js/webslidemenu.js')) !!}
{!! file_get_contents(public_path('/style/lazyload/lazyload.js')) !!}
{!! file_get_contents(public_path('/style/slick/slick.js')) !!}
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
{!!isset($configs_data['seo']['chat-script'])?$configs_data['seo']['chat-script']:''!!}