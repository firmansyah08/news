@extends('layouts.frontend')

@section('content')
<!-- START OF MAIN SLIDER -->
<section class="bg-primary p-0 pb-xs-20">
	<div class="container">
		<div class="row  ptb-10">
			<div class="col-md-8 col-lg-9">
				<a class="btn-fill-red plr-10 mtb-10 btn-b-md" href="#"><b>BREAKING NEWS</b></a>
				<a class="dplay-inl-block color-grey mtb-10 ml-15 ml-md-0 hover-grey" href="#">8:30 AM Eight People 
					have died and violent protest involving tens of thousands...</a>
			</div><!-- col-md-8 -->
			<div class="col-md-4 col-lg-3">
				<form class="abs-form mtb-10">
					<input type="text" placeholder="Search">
					<button type="submit"><i class="ion-ios-search"></i></button>
				</form>
			</div><!-- col-md-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section>
<!-- END OF MAIN SLIDER -->


<section class="ptb-30">
	<div class="container">
		<div class="row">
		
			<div class="col-md-12 col-lg-8">
				
				<div class="ptb-0">
					<a class="mt-10" href=""><i class="mr-5 ion-ios-home"></i><b>HOME</b></a>
					{{-- <a class="mt-10" href=""><i class="mlr-10 ion-chevron-right"></i><b>SPORT</b></a> --}}
					<a class="mt-10 mb-30 color-ash" href=""><i class="mlr-10 ion-chevron-right"></i>
						<b>{{ $news->title }}</b></a>
				</div>
				
				<div class="p-30 mb-30 card-view">
					<img src="{{ $news->image }}" alt="">
					<h3 class="mt-30 mb-5"><a href="#"><b>{{ $news->title }}</b></a></h3>
					<ul class="list-li-mr-10 color-lite-black">
						<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
						<li><i class="mr-5 font-12 ion-android-person"></i>{{ $news->author }}</li>
						<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
						<li><i class="mr-5 font-12 ion-eye"></i>105</li>
					</ul>
					
					{!! $news->content !!}
					
					<div class="sided-half">
						<ul class="s-left ptb-5 list-btn-semiwhite sided-sm-center">
							<li><a href="#">{{ $news->Category->name }}</a></li>
						</ul>
						<ul class="s-right sided-sm-center ptb-5 list-a-p-5 list-a-plr-10 font-11 color-ash">
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						</ul>
					</div><!-- sided-half -->
				</div><!-- card-view -->
			</div><!-- col-sm-8 -->
			
			<div class="col-md-12 col-lg-4">
				<!-- START OF SIDEBAR RECENT POST -->
				<div class="mb-30 p-30 card-view">
					<h4 class="p-title"><b>RECENT POST</b></h4>
					
					@foreach($recents as $data)
						<div class="sided-80x mb-20">
							<div class="s-left">
								<img src="{{ $data->image }}" alt="">
							</div><!-- s-left -->
							
							<div class="s-right">
								<h5><a href="{{ route('detail', $data->id) }}">
									<b>{{ $data->title }}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
									<li><i class="mr-5 font-12 ion-eye"></i>105</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
					@endforeach
									
			</div><!-- col-sm-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section>
@endsection