@extends('layouts.frontend')

@section('content')
<!-- START OF MAIN SLIDER -->
<section class="bg-primary pt-0 pb-xs-20">
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
	
		
		<div class="h-400x h-md-500x h-xs-600x oflow-hidden">
			
			<div class="w-50 w-md-100 float-left float-md-none h-100 h-md-50 h-xs-40 pr-10 pr-md-0 pb-md-10">
			
				<div class="w-100 float-left float-xs-none pos-relative h-100 ">
					<!-- Image as bg-1 -->
					<div class="img-bg bg-8 bg-grad-layer-6"></div>
					
					<div class="abs-blr color-white p-20">
						<h3 class="mb-10 mb-sm-5 t-upper">
							<a class="hover-grey" href="#"><b>WHAT'S INCLUDED IN CONGRESS' $13 TRILLION SPENDING BILL</b></a></h3>
						<ul class="list-li-mr-10 color-grey">
							<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
							<li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
							<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
					</div><!--abs-blr -->
				</div><!-- float-left -->
				
			</div><!-- w-50 -->
			<div class="w-50 w-md-100 float-left float-md-none h-100 h-md-50 h-xs-60">
			
				<div class="w-50 w-xs-100 h-100 float-left pr-10 pr-xs-0 pb-xs-10 h-xs-50">
					<div class="h-100 pos-relative">
						<!-- Image as bg-3 -->
						<div class="img-bg bg-9 bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 pr-10">
							<h3 class="mb-10 mb-sm-5 t-upper">
								<a class="hover-grey" href="#"><b>Five places under the falls and above the clouds</b></a></h3>
							<ul class="list-li-mr-10 color-grey">
								<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
								<li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
								<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
								<li><i class="mr-5 font-12 ion-eye"></i>105</li>
							</ul>
						</div><!--abs-blr -->
					</div><!-- h-50 -->
				</div><!-- h-50 -->
				
				<div class="w-50 w-xs-100 h-100 float-left h-xs-50">
					<div class="h-100 pos-relative">
						<!-- Image as bg-4 -->
						<div class="img-bg bg-10 bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 pr-10">
							<h3 class="mb-10 mb-sm-5 t-upper">
								<a class="hover-grey" href="#"><b>THE STORY OF ANTIGA BARBARA RECORD-BREAKING SEASON</b></a></h3>
							<ul class="list-li-mr-20 color-grey">
								<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
								<li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
								<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
								<li><i class="mr-5 font-12 ion-eye"></i>105</li>
							</ul>
						</div><!--abs-blr -->
					</div><!-- h-50 -->
				</div><!-- h-50 -->
				
			</div><!-- w-40 -->
		</div><!-- wrapper -->
	</div><!-- container -->
</section>
<!-- END OF MAIN SLIDER -->


<section class="ptb-30">
	<div class="container">
		<div class="row">
		
			<div class="col-md-12 col-lg-8">
				
				<div class="ptb-0">
					<a class="mt-10" href="#"><i class="mr-5 ion-ios-home"></i><b>HOME</b></a>
					<a class="mt-10 color-ash" href="#"><i class="mlr-10 ion-chevron-right"></i><b>SPORT</b></a>
					<h1 class="mtb-20"><b>News</b></h1>
					<p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat tincidunt mauris semper lorem, 
						in dignissim ex metus a lacus. 
						Sed venenatis dolor vitae vehicula varius. Aliquam vitae donis lobortis diamet</p>
				</div>
				
				@foreach($news as $data)
					<div class="mb-30 sided-250x s-lg-height card-view">
						<div class="s-left">
							<img src="{{ $data->image }}" alt="">
						</div><!-- left-area -->
						<div class="s-right ptb-30 pt-sm-20 pb-xs-5 plr-30 plr-xs-0">
							<h4><a href="#">{{ $data->title }}</a></h4>
							<ul class="mtb-10 list-li-mr-20 color-lite-black">
								<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
								<li><i class="mr-5 font-12 ion-android-person"></i>{{ $data->author }}</li>
								<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
								<li><i class="mr-5 font-12 ion-eye"></i>105</li>
							</ul>

							{!! $data->description !!}
							
						</div><!-- right-area -->
					</div><!-- sided-250x -->
				@endforeach
								
				<ul class="pagination mb-30">
					{{ $news->links() }}
				</ul>
				
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
					
				</div><!-- card-view -->
				<!-- END OF SIDEBAR RECENT POST -->
				
			</div><!-- col-sm-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section>
@endsection