@extends('master')

@section('title')
لیست قیمت سینی کابل	
@endsection


@section('head')
	<meta name="description" content="در این صحفه شما می توانید لیست قیمت اقلام مهم مرتبط با سینی کابل را به دست آورید">
	<style>
		.tab{
			color: #2ecc71 !important;
		}
	</style>
@endsection

@section('container')
<style type="text/css">
	th{
		text-align: right;
	}
	table{
		font-size: .9rem;
	}
</style>

<div class="alert alert-success my-5" role="alert">
	<span style="font-size: 0.9rem;">قیمتها در تاریخ 
		<strong style="direction: rtl;">{{$lastUpdatedDate}}</strong>
		به روز رسانی شده است.
	</span>
</div>
<ul class="nav nav-tabs px-0" id="myTab" role="tablist" style="color: ;">
	<li class="nav-item">
		<a class="tab nav-link active" id="traycable-tab" data-toggle="tab" href="#traycable" role="tab" aria-controls="traycable" aria-selected="true">سینی کابل</a>
	</li>
	<li class="nav-item">
		<a class="tab nav-link" id="accessories-tab" data-toggle="tab" href="#accessories" role="tab" aria-controls="accessories" aria-selected="false">متعلقات</a>
	</li>
	<li class="nav-item">
		<a class="tab nav-link" id="ladder-tab" data-toggle="tab" href="#ladder" role="tab" aria-controls="ladder" aria-selected="false">نردبان کابل</a>
	</li>
	<li class="nav-item">
		<a class="tab nav-link" id="pipe-tab" data-toggle="tab" href="#pipe" role="tab" aria-controls="pipe" aria-selected="false">لوله فولادی</a>
	</li>
	<li class="nav-item">
		<a class="tab nav-link" id="flexible-tab" data-toggle="tab" href="#flexible" role="tab" aria-controls="flexible" aria-selected="false">لوله فلکسی</a>
	</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="traycable" role="tabpanel" aria-labelledby="traycable-tab">
		<table class="table table-hover table-sm table-bordered mt-3">
			<thead class="text-right">
				<tr>
					<th>عرض <small>(سانتی متر)</small></th>
					<th>ضخامت <small>(میلیمتر)</small></th>
					<th>قیمت <small>(شاخه دو متری)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=20*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=20*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=20*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=20*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=30*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=30*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=30*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=30*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=40*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=40*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=40*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=40*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
							<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=50*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=50*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=50*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=50*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=60*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=60*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=60*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=60*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="tab-pane fade" id="ladder" role="tabpanel" aria-labelledby="ladder-tab">
		<div class="alert alert-danger my-5">در دسترس نیست</div>
	</div>
	<div class="tab-pane fade" id="accessories" role="tabpanel" aria-labelledby="accessories-tab">
		<div class="mt-3 text-danger text-center lead">درب سینی کابل</div>
		<table class="table table-hover table-sm table-bordered mt-3">
			<thead class="text-right">
				<tr>
					<th>عرض <small>(سانتی متر)</small></th>
					<th>ضخامت <small>(میلیمتر)</small></th>
					<th>قیمت <small>(شاخه دو متری)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=15*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=15*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=15*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=15*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=25*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=25*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=25*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=25*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=35*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=35*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=35*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=35*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
							<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=45*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=45*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=45*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=45*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=55*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=55*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=55*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=55*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee)); ?> <small>تومان</small></td>
				</tr>
			</tbody>
		</table>
		<div class="mt-3 text-danger text-center lead">رابط سینی کابل</div>
		<table class="table table-hover table-sm table-bordered mt-3">
			<thead class="text-right">
				<tr>
					<th>عرض <small>(سانتی متر)</small></th>
					<th>ضخامت <small>(میلیمتر)</small></th>
					<th>قیمت <small>(هر عدد)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=20*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=20*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=20*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=20*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=30*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=30*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=30*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=30*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=40*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=40*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=40*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=40*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
							<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=50*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=50*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=50*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=50*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=60*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=60*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=60*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=60*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/10)); ?> <small>تومان</small></td>
				</tr>
			</tbody>
		</table>
		<div class="mt-3 text-danger text-center lead">زانویی، سه‌راهی و چهارراهی سینی کابل</div>
		<table class="table table-hover table-sm table-bordered mt-3">
			<thead class="text-right">
				<tr>
					<th>عرض <small>(سانتی متر)</small></th>
					<th>ضخامت <small>(میلیمتر)</small></th>
					<th>قیمت <small>(هر عدد)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=20*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=20*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=20*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("10")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=20*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=30*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=30*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=30*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("20")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=30*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=40*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=40*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=40*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("30")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=40*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
							<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=50*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=50*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=50*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("40")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=50*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1")}} میل</td>
					<td><?php $fee=60*16*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.25")}} میل</td>
					<td><?php $fee=60*20*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("1.5")}} میل</td>
					<td><?php $fee=60*24*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
				<tr style="border-bottom: 2px solid green;">
					<td>{{persianumber("50")}} سانت</td>
					<td>{{persianumber("2")}} میل</td>
					<td><?php $fee=60*32*$value/100; $fee=(string)$fee; persianumber(priceFormatter($fee/2)); ?> <small>تومان</small></td>
				</tr>
			</tbody>
		</table>
		
	</div>
	<div class="tab-pane fade" id="pipe" role="tabpanel" aria-labelledby="pipe-tab">
		<table class="table table-hover table-sm table-bordered mt-3">
			<thead class="text-right">
				<tr>
					<th>قطر</th>
					<th>نوع <small>(سرد یا گرم)</small></th>
					<th>قیمت <small>(متری)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{persianumber('13')}}</td>
					<td>سرد</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('13')}}</td>
					<td class="text-danger">گرم</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('16')}}</td>
					<td>سرد</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('16')}}</td>
					<td class="text-danger">گرم</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('21')}}</td>
					<td>سرد</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('21')}}</td>
					<td class="text-danger">گرم</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('27')}}</td>
					<td>سرد</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('27')}}</td>
					<td class="text-danger">گرم</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('29')}}</td>
					<td>سرد</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('29')}}</td>
					<td class="text-danger">گرم</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('34')}}</td>
					<td>سرد</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('34')}}</td>
					<td class="text-danger">گرم</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('37')}}</td>
					<td>سرد</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('37')}}</td>
					<td class="text-danger">گرم</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="tab-pane fade" id="flexible" role="tabpanel" aria-labelledby="flexible-tab">
		<div class="mt-3">توس فلکس</div>
		<table class="table table-hover table-sm table-bordered mt-1">
			<thead class="text-right">
				<tr>
					<th>سایز</th>
					<th>قیمت <small>(متری)</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{persianumber('13')}}</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('16')}}</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('19')}}</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('21')}}</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('27')}}</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
				<tr>
					<td>{{persianumber('29')}}</td>
					<td>{{persianumber('---')}} <small>تومان</small></td>
				</tr>
			</tbody>
		</table>
		<div class="mt-5">رهورد خراسان</div>
		<table class="table table-hover table-sm table-bordered mt-1">
			<thead class="text-right">
				<tr>
					<th>سایز</th>
					<th>قیمت <small>(متری)</small></th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>{{persianumber('13')}}</td>
						<td>{{persianumber('---')}} <small>تومان</small></td>
					</tr>
					<tr>
						<td>{{persianumber('16')}}</td>
						<td>{{persianumber('---')}} <small>تومان</small></td>
					</tr>
					<tr>
						<td>{{persianumber('19')}}</td>
						<td>{{persianumber('---')}} <small>تومان</small></td>
					</tr>
					<tr>
						<td>{{persianumber('21')}}</td>
						<td>{{persianumber('---')}} <small>تومان</small></td>
					</tr>
					<tr>
						<td>{{persianumber('27')}}</td>
						<td>{{persianumber('---')}} <small>تومان</small></td>
					</tr>
					<tr>
						<td>{{persianumber('29')}}</td>
						<td>{{persianumber('---')}} <small>تومان</small></td>
					</tr>
				</tbody>
			</table>
	</div>
</div>
	
@endsection

