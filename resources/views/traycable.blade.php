@extends('master')

@section('title')
	سینی کابل
@endsection

@section('head')
	{!!$productSchema!!}
	{!!$videoSchema!!}
	<meta name="description" content="سینی کابل محصولی است که از آن برای محافظت از کابل های انتقال جریان و همچنین نظم دهی به آن ها استفاده می شود">
	<style>
		video {
			width: 100%;
			height: auto;
		}
</style>
@endsection

@section('container')



<div class="row" style="margin-top: 15px;">
	<div class="col-sm-12 col-md-9 order-2 mt-3 order-md-1 mt-md-0">
		<h1 style="color:blue;">سینی کابل</h1>
		<p class="mt-3" style="font-size: .9rem;">
			از سینی کابل برای نظم دهی به کابل ها استفاده می شود. در تصویر مقابل یک سینی کابل را مشاهده می کنید که در آن تعدادی کابل قرار گرفته است. سینی کابل علاوه بر نظم دهی برای محافظت از کابل ها نیز استفاده می شود. طبق استانداردهای جدید ساختمانی استفاده از سینی کابل برای کابل ها الزامی است.
		</p>
	</div>
	<div class="col-sm-12 col-md-3 order-1 order-md-2 px-2">
		<img class="img-fluid" src="images/traycable2.webp">
	</div>
</div>
<hr class="my-5">
<div id="پانچ_سی_ان_سی">
	<h2 class="display-5" style="color: blue;">پانچ CNC</h2>
	<div class="text-center mt-5">
		<p class="lead">گروه صعنعتی هرمز مفتخر است اعلام بدارد تمامی محصولات تولید شده توسط این گروه به صورت پانچ CNC می باشد.</p>
		<p>در زیر می توانید چگونگی پانچ CNC توسط دستگاه TRUMPH 600 را مشاهده کنید</p>
	</div>
	<div class="text-center">
		<video class="lazy my-5" data-src="videos/سینی کابل.mp4|video/mp4" style="max-height:600px; max-width: 600px;" controls></video>
	</div>
</div>
<hr class="mt-5">
<div style="margin: 90px 0px;">
	<h2 class="display-4 text-center" style="color: blue;">
		انواع سینی کابل
	</h2>

	<table class="table table-sm table-bordered table-hover mt-5">
		<tr>
			<td>سینی کابل سرد (فابریک)</td>
			<td>سینی کابل گرم (آبکاری شده)</td>
			<td>سینی کابل بدون پانچ (تراکینگ)</td>
			<td>سینی کابل با رنگ کوره ایی</td>
		</tr>
	</table>
	<div class="alert alert-primary">
		{{persianumber("1")}}. از <strong>سینی کابل گرم</strong> معمولا در مناطقی که دارای رطوبت غیر معمول است استفاده می شود <br>
		{{persianumber("2")}}. از <strong>سینی کابل های بدون پانچ</strong> در فضاهای باز که نیاز به بیشترین محافظت از کابل وجود دارد استفاده می شود
	</div>
</div>
<hr>
<div id="مشخصات_فنی_سینی_کابل" style="margin: 90px 0px;">
	<h2 class="display-4 text-center" style="color: blue;">
		مشخصات فنی سینی کابل
	</h2>
	<table class="table table-bordered table-hover text-center mt-5">
		<tr>
			<td>ضخامت <small>(ورق)</small></td>
			<td>{{persianumber("0.5 - 2")}} <small>(میلیمتر)</small></td>
		</tr>
		<tr>
			<td>عرض <small>(سینی)</small></td>
			<td>{{persianumber("5 - 70")}} <small>(سانتی متر)</small></td>
		</tr>
		<tr>
			<td>پانچ <small>(سوراخ)</small></td>
			<td><strong class="text-danger">CNC</strong></td>
		</tr>
		<tr>
			<td>برش</td>
			<td><strong class="text-danger">CNC</strong></td>
		</tr>
		<tr>
			<td>فرمت پانچ <small>(نحوه قرارگیری سوراخ ها)</small></td>
			<td>موازی یا متقاطع <small>(قابل سفارشی سازی)</small></td>
		</tr>
		<tr>
			<td>طول سینی <small>(شاخه)</small></td>
			<td>شاخه های {{persianumber("2")}} یا {{persianumber("3")}} متری</td>
		</tr>
		<tr>
			<td>لبه سینی</td>
			<td>برحسب سفارش {{persianumber("4")}} تا {{persianumber("...")}} <small>(سانتی متر)</small></td>
		</tr>
		<tr>
			<td>تعداد خم</td>
			<td>{{persianumber("4")}} یا {{persianumber("6")}} خم</td>
		</tr>
		<tr>
			<td>جنس ورق</td>
			<td>گالوانیزه - فولادی - استیل</td>
		</tr>
		<tr>
			<td>روکش ورق</td>
			<td>فابریک - آبکاری گرم - رنگ کوره ایی</td>
		</tr>
	</table>
	<div class="alert alert-primary">
		مشخصات فنی سینی کابل وابسته به محیط و شرایط مورد نیاز می باشد. به طور مثال ضخامت سینی با توجه به وزن کابل های عبوری تعیین می شود و یا عرض سینی وابسته به تعداد کابل های عبوری و همچنین فضای مورد نیاز برای سازماندهی کابل ها است.
	</div>
	<div class="alert alert-success">
		در صورت نیاز به هر گونه مشاوره جهت انتخاب محصول می توانید با دفتر فروش گروه کبیر <a href="/تماس-با-ما" class="alert-link">تماس</a> بگیرید.
	</div>
</div>
<hr>
<div style="margin: 90px 0px;">
	<h2 class="display-4 text-center" style="color: blue;">
		متعلقات سینی کابل
	</h2>
	<p class="mt-5">
		متعلقات سینی کابل به سه دسته ی اصلی <strong>اتصلات (رابط)</strong>، <strong>نگهدارنده (ساپورت)</strong> و <strong>تبدیلات</strong> تقسیم می شود. برخی از اقلام معمول این دو دسته به صورت زیر است:
	</p>
	<table class="table text-center table-hover table-bordered">
		<tr>
			<td>اتصالات</td>
			<td>رابط، زانویی ({{persianumber("45")}} و {{persianumber("90")}} درجه)، زانویی عمودی قابل تنظیم، سه راهی، چهار راهی</td>
		</tr>
		<tr>
			<td>نگهدارنده</td>
			<td>ساپورت سقفی، ساپورت لچکی شکل، براکت، ساپورت زمینی</td>
		</tr>
		<tr>
			<td>تبدیلات</td>
			<td>کاهشی یا افزایشی <small>(به طور مثال تبدیل {{persianumber("20")}} به {{persianumber("30")}})</small></td>
		</tr>
	</table>
	<div class="alert alert-success">
		در صورت نیاز به هر گونه مشاوره جهت انتخاب محصول می توانید با دفتر فروش گروه کبیر <a href="/تماس-با-ما" class="alert-link">تماس</a> بگیرید.
	</div>
</div>
<div style="height: 150px;"></div>
@endsection