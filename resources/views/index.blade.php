

@extends('master')

@section('title')
گروه هرمز تولید کننده سینی کابل و نردبان کابل	
@endsection

@section('head')
<meta name="description" content="هرمز گروپ تولید کننده انواع سینی کابل و نردبان کابل و تمامی متعلقات آن می باشد. این گروه محصولات خود را با استفاده از دستگاه CNC ترومپ 600 تولید می کند">
<link rel="canonical" href="http://hormozgroup.ir">
<style>
	.carousel-item{
		height: 300px;
	}
	img{
		max-width: 100%;
		height: auto;
	}
	.container{
		min-height: 0% !important;
	}
	@media (min-width: 576px) { 
		.carousel-item{
			height: 400px;
		}
		img{
			max-width: 100%;
		}
	}
</style>
@endsection



@section('container-fluid-carousel')
	@include('carousel')
@endsection

@section('content')
	<a href="tel:5555555555">Call Us</a>
	<div class="container text-center my-5 bg-danger" style="color:white; border-radius:1em;">
		گروه هرمز مفتخر است اعلام بدارد که با تهیه دستگاه Trumpf 600، توانایی انجام کلیه خدمات<strong class="lead text-warning"> لیزر</strong>،<strong class="lead text-warning"> پانچ</strong> و<strong class="lead text-warning"> برش </strong>CNC را دارا می باشد
	</div>
	<div class="jumbotron mb-0" style="border-radius: 0px;">
		<div class="row align-items-center p-0">
			<div class="col-3 text-center" >
				گروه صنعتی هرمز
			</div>
			<div class="col-9" style="border-right:3px solid #3498db;">
				فعالیتمان را از سال {{persianumber("87")}} در بخش تهیه و توزیع سینی و نردبان کابل، لوله فولادی و همچنین لوله فلکسی در کشور آغاز کرده ایم. رفته رفته با یاری خداوند متعال و تلاش و کوشش خود توانستیم فعالیت خود را توسعه دهیم. بدین سان در سال {{persianumber("90")}} در جهت تولید محصولاتی با کیفیت بیشتر بر آمدیم. همواره به دنبال افزایش رضایت مشتریان بوده ایم بدین سان در سال {{persianumber("95")}} با تهیه دستگاه های CNC توانستیم گامی بلند در جهت افزایش کیفیت محصولات خود برداریم. عمده فعالیت های این گروه تولید سینی و نردبان کابل و همچنین تهیه و توزیع لوله فولادی و لوله فلکسی می باشد.
			</div>
		</div>
	</div>
	<div class="my-5"></div>
	<div class="px-5 my-5">
		<div class="display-4" style="font-size: 2.5rem;">	خدمات ما</div>
		<div class="row mt-4">
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="lazy card-img-top pt-4" data-src="images/traycable.webp" style="height: 200px;border-radius: 3rem;" alt="سینی کابل">
				<div class="card-body">
					<h4 class="card-title">سینی کابل</h4>
					<p class="card-text">از سینی کابل برای عبور کابل ها در فضاهای باز و محیط های بیرونی استفاده می شود</p>
					<a href="سینی-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="lazy card-img-top pt-4" data-src="images/ladder_services.webp" style="height: 200px;border-radius: 3rem;" alt="نردبان کابل">
 				<div class="card-body">
					<h4 class="card-title">نردبان کابل</h4>
					<p class="card-text">معمولا در فضای های بسته و محیط های داخلی از نردبان کابل استفاده می شود</p>
					<a href="نردبان-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="lazy card-img-top pt-4" data-src="images/pipe_services.webp" style="height: 200px;border-radius: 3rem;" alt="لوله فولادی">
		 		<div class="card-body">
					<h4 class="card-title">لوله فولادی</h4>
					<p class="card-text">از لوله های فولادی برای انتقال کابل های فوق العاده حساس استفاده می شود</p>
					<a href="نردبان-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
			<div class="card col-sm-6 col-md-3" style="background-color: #e9ecef;border: none;">
				<img class="lazy card-img-top pt-4" data-src="images/pipe_flexi_services.webp" style="height: 200px;border-radius: 3rem;" alt="لوله فلکسی">
				<div class="card-body">
					<h4 class="card-title">لوله فلکسی</h4>
					<p>لوله فلکسی ها به دلیل انعطاف پذیری برای توزیع کابل ها مناسب است</p>
					<a href="نردبان-کابل" class="btn btn-primary">مشخصات فنی</a>
				</div>
			</div>
		</div>
	</div>
@endsection
