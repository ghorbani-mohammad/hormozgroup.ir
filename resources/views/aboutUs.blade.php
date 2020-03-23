@extends('master')


@section('title')
درباره گروه هرمز
@endsection

@section('head')
{!!$localBusiness!!}
<meta name="description" content="درباره ما - هرمز گروپ تولید کننده انواع سینی کابل و نردبان کابل">
<style>
	p{
		font-size: 0.9rem;
		margin-bottom: 0 !important;
	}
</style>
@endsection


@section('container')

<div class="row d-flex" style="margin-top: 15px; font-size: .9rem;">
	<div class="col-sm-12 col-md-9 order-2 mt-3 order-md-1 mt-md-0">
		فعالیتمان را در سال 87 با تولید سینی کابل و نردبان کابل آغاز کردیم. هر ساله با یاری خداوند و با تلاش کادر متعهد خود، توانستیم دایره فعالیت خود را گسترده&#x202F;تر کنیم و در زمینه تهیه و توزیع سایر اقلام دیگر چون لوله فولادی و لوله فلکسی وارد شویم. خداوند منان را شاکریم که امروزه توانسته&#x202F;ایم با تشکیل تیمی مجرب و تهیه بروزترین ابزار آلات، محصولات مرغوبی را تولید کنیم و رضایت مشتریان را جلب نماییم. همواره با برداشتن گام&#x202F;هایی هرچند کوچک به دنبال رشد و تعالی کشور عزیزمان بوده ایم و امیدواریم با کمک خداوند بزرگ و تلاش کادر خود بتوانیم به این مهم دست پیدا کنیم. 
	</div>
	<div class="col-sm-12 col-md-3 order-1 order-md-2">
		<img style="max-height: 100px !important;" class="img-fluid" src="images/4.jpg">
	</div>
</div>
<hr>

<div style="margin-top: 40px;margin-bottom: 40px;">
	<div class="display-4 text-center" style="color: #004085;font-size: 2rem;">فعالیت&#x202F;های ما</div>
</div>

<p>
	<span><i class="fa fa-arrow-left" aria-hidden="true"></i> تولید و توزیع انوع <span style="color: #155724"><strong>سینی کابل</strong></span> و متعلقات در کشور</span><br>
	<span><i class="fa fa-arrow-left" aria-hidden="true"></i> تولید و توزیع انواع <span style="color: #155724"><strong>نردبان کابل</strong></span> و متعلقات در کشور</span><br>
	<span><i class="fa fa-arrow-left" aria-hidden="true"></i> تهیه و توزیع انواع <span style="color: #155724"><strong>لوله فولادی</strong></span> و متعلقات در کشور</span><br>
	<span><i class="fa fa-arrow-left" aria-hidden="true"></i> تهیه و توزیع انواع <span style="color: #155724"><strong>لوله فلکسی</strong></span> و متعلقات در کشور</span>
</p>

<hr>
<div style="margin-top: 40px;margin-bottom: 40px;">
	<div class="display-4 text-center" style="color: #004085;font-size: 2rem;">گروه ما</div>
</div>
<div class="row">
	<div class="col-12 col-sm-6 mb-3">
		<div class="row">
			<div class="col-6 col-sm-3 text-center"><img style="max-height: 100px !important;" class="rounded-circle img-fluid lazy" data-src="images/ceo.png" alt=""></div>
			<div class="col-6 col-sm-9 align-self-center">
				<p>مهندس علی قربانی</p>
				<p>سمت: مدیر عامل</p>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 mb-3">
		<div class="row">
			<div class="col-6 col-sm-3 text-center"><img style="max-height: 100px !important;" height="120px" class="rounded-circle img-fluid lazy" data-src="images/sales.jpg" alt=""></div>
			<div class="col-6 col-sm-9 align-self-center">
				<p>مهندس لاله قائدی</p>
				<p>سمت: مدیر فروش</p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12 col-sm-6 mb-3">
		<div class="row">
			<div class="col-6 col-sm-3 text-center"><img style="max-height: 100px !important;" height="120px" class="rounded-circle img-fluid lazy" data-src="images/rd.jpg" alt=""></div>
			<div class="col-6 col-sm-9 align-self-center">
				<p>مهندس محمد قربانی</p>
				<p>سمت: مدیر تحقیق و توسعه <small>R&D</small></p>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 mb-3">
		<div class="row">
			<div class="col-6 col-sm-3 text-center"><img style="max-height: 100px !important;" height="120px" class="rounded-circle img-fluid lazy" data-src="images/sales.png" alt=""></div>
			<div class="col-6 col-sm-9 align-self-center">
				<p>مهندس سارا دانیال</p>
				<p>سمت: مدیر تولید</p>
			</div>
		</div>
	</div>
</div>

<hr>
<div class="text-center mb-5" style="background-color: #eee;font-size: 2rem;">ما باور داریم که با تلاش خود میتوانیم سرزمین بهتری برای زندگی داشته باشیم</div>

@endsection