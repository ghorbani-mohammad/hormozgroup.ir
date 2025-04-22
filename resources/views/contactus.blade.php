@extends('master')

@section('title', 'تماس با ما || گروه هرمز')
@section('keywords', 'خرید سینی کابل، فروش سینی کابل، خرید نردبان کابل، فروش نردبان کابل')
@section('description', 'در صورت نیاز به هر گونه مشاوره در زمینه خرید و نصب سینی کابل و نردبان کابل با شماره 0912-7194347 تماس بگیرید')

@section('head')
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>
	p{
		font-size: 0.9rem;
		margin-bottom: 0 !important;
	}
</style>
@endsection


@section('container')
<div class="row my-5 alert alert-info">
	<div class="col-12 col-sm-3 text-center">
		<img class="img-fluid rounded-circle my-2 my-sm-0" src="images/rd.jpg" alt="" style="max-height: 120px;">
	</div>
	<div class="col-12 col-sm-9 align-self-center">
		<p style="font-size: 0.9rem;">سلام. محمد قربانی هستم مدیر فروش گروه صنعتی هرمز. در صورت نیاز به هرگونه مشاوره در مورد محصولات لطفا با من تماس بگیرید.</p>
		<div class="text-center" dir="ltr">
			<p><i class="fa fa-mobile fa-2x" aria-hidden="true" style="padding-right:5px;"></i>{{persianumber("09127194347")}} :همراه</p>
			<p><i class="fa fa-telegram fa-2x"></i>تلگرام: <a style="color:#0c5460;" href="https://telegram.me/ghorbani_mohammad">@ghorbani_mohammad</a> </p>
		</div>
	</div>
</div>

<div class="row mb-5" style="margin-top: 15px;">
	<div class="col-md-6">
		<span style="color: #2ecc71;">دفتر فروش:</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-map-marker" aria-hidden="true"></i> آدرس: تهران، خ لاله زار جنوبی، پاساژ فراز، طبقه همکف، واحد {{persianumber("80")}}</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> تلفن: ۳۳۹۶۰۰۹۲ - ۳۳۹۵۰۷۷۰ - ۳۳۹۸۶۷۰۲</span>
		<br>
		{{--  <span style="font-size: 0.9rem;"><i class="fa fa-mobile" aria-hidden="true" style="padding-right:5px;"></i>  همراه: {{persianumber("09123102458")}}</span>  --}}
		{{--  <br>  --}}
		<br>
		<div class="text-center">
			<iframe class="lazy" data-src="https://api.neshan.org/v2/static?key=service.2TIB02BMIjvR3U4SgBb4LfDiSxtbhwYkpGVqJxcs&type=dreamy-gold&zoom=14&center=35.614971,51.402812&width=320&height=300&marker=green" frameborder="0" style='height:300px;width:320px;margin-left:auto; margin-right:auto;'></iframe>
		</div>
	</div>
	<div class="col-md-6 mt-3 mt-md-0">
		<span style="color: #2ecc71;">کارگاه تولیدی:</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-map-marker" aria-hidden="true"></i> آدرس: تهران، شور آباد، بلوار شصت متری معدن هفتم، پلاک {{persianumber("82")}}</span>
		<br>
		<span style="font-size: 0.9rem;"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> تلفن: {{persianumber("55440335")}}</span>
		<br>
		{{--  <span style="font-size: 0.9rem;"><i class="fa fa-mobile" aria-hidden="true" style="padding-right:5px;"></i> همراه: {{persianumber("09181626210")}} - {{persianumber("09127194347")}}</span>  --}}
		{{--  <br>  --}}
		<br>
		<div class="text-center">
			<!-- <iframe class="lazy" data-src="https://api.neshan.org/v2/static?key=service.2TIB02BMIjvR3U4SgBb4LfDiSxtbhwYkpGVqJxcs&type=dreamy&zoom=16&center=35.611090,51.400455&width=320&height=300&marker=red" frameborder="0" style='height:300px;width:320px;margin-left:auto; margin-right:auto;'scrolling="no"></iframe> -->
			<iframe data-src="https://api.neshan.org/v2/static?key=service.2TIB02BMIjvR3U4SgBb4LfDiSxtbhwYkpGVqJxcs&type=dreamy&zoom=16&center=35.611090,51.400455&width=320&height=300&marker=red" frameborder="0" style='height:300px;width:320px;margin-left:auto; margin-right:auto;'></iframe>
		</div>
	</div>
</div>
@endsection