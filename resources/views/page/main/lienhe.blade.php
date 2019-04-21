@extends('page.index')
@section('title','Liên hệ')
@section('keywords',isset($configs_data['seo']['seo-keywords'])?$configs_data['seo']['seo-keywords']:'')
@section('description',isset($configs_data['seo']['seo-description'])?$configs_data['seo']['seo-description']:'')
@section('content')
	<main class="page-sub page-contact">
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="box-info">
							<div class="title">{!!isset($configs_data['lienhe']['contact-company-name'])?$configs_data['lienhe']['contact-company-name']:''!!}</div>
							<div class="box-addr">
								<div class="row">
									<div class="col-sm-6">
										<ul class="address">
											{!!isset($configs_data['lienhe']['contact-addr-1'])?$configs_data['lienhe']['contact-addr-1']:''!!}
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="address">
											{!!isset($configs_data['lienhe']['contact-addr-2'])?$configs_data['lienhe']['contact-addr-2']:''!!}
										</ul>
									</div>
								</div>
								<hr style="margin: 0;margin-bottom: 4px;">
								<div class="row">
									<div class="col-sm-6">
										<div>{!!isset($configs_data['lienhe']['contact-hotline'])?$configs_data['lienhe']['contact-hotline']:''!!}</div>
									</div>
									<div class="col-sm-6">
										{!!isset($configs_data['lienhe']['contact-email'])?$configs_data['lienhe']['contact-email']:''!!}
									</div>
								</div>
							</div>
						</div>
						<br>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="box-info">
							<div class="title">{!!isset($configs_data['lienhe']['contact-company-name'])?$configs_data['lienhe']['contact-company-name']:''!!}</div>
							<div class="box-support">
								{!!isset($configs_data['lienhe']['contact-content'])?$configs_data['lienhe']['contact-content']:''!!}
								<p></p>
							</div>
						</div>
						<br>
					</div>
				</div>
				<div class="row map">
					<div class="col-sm-6">
						<div class="title">{!!isset($configs_data['lienhe']['contact-map-title-1'])?$configs_data['lienhe']['contact-map-title-1']:''!!}</div>
						<div class="iframe-map">
							{!!isset($configs_data['lienhe']['contact-map-content-1'])?$configs_data['lienhe']['contact-map-content-1']:''!!}
						</div>
						<br>
					</div>
					<div class="col-sm-6">
						<div class="title">{!!isset($configs_data['lienhe']['contact-map-title-2'])?$configs_data['lienhe']['contact-map-title-2']:''!!}</div>
						<div class="iframe-map">
							{!!isset($configs_data['lienhe']['contact-map-content-2'])?$configs_data['lienhe']['contact-map-content-2']:''!!}
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection