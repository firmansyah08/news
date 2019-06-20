@extends('layouts.frontend')

@section('content')
<!-- START OF MAIN SLIDER -->
<section class="pt-0 bg-primary">
    <div class="container ptb-10">
        <div class="row">
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
        
    <div class="plr-50 h-600x h-md-800x h-xs-1000x oflow-hidden">
        
        <div class="w-60 w-md-100 float-left float-md-none h-100 h-md-40 h-xs-50">
        
            <div class="w-50 w-xs-100 float-left float-xs-none pos-relative h-100 h-xs-50">
                <!-- Image as bg-1 -->
                <div class="img-bg bg-1 bg-grad-layer-6"></div>
                
                <div class="abs-blr color-white p-20">
                    <h3 class="mb-10 mb-sm-5 t-upper">
                        <a class="hover-grey" href="#"><b>WorldcupHAT'S INCLUDED IN CONGRESS' $13 TRILLION SPENDING BILL</b></a></h3>
                    <ul class="list-li-mr-10 color-grey">
                        <li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
                        <li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
                        <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
                        <li><i class="mr-5 font-12 ion-eye"></i>105</li>
                    </ul>
                </div><!--abs-blr -->
            </div><!-- w-50 -->
            
            <div class="w-50 w-xs-100 float-left float-xs-none pos-relative h-100 h-xs-50 pt-xs-10">
                <div class="mlr-10 mr-md-0 ml-xs-0 pos-relative h-100">
                    <!-- Image as bg-2 -->
                    <div class="img-bg bg-2 bg-grad-layer-6"></div>
                    
                    <div class="abs-blr color-white p-20">
                        <h3 class="mb-10 mb-sm-5 t-upper">
                            <a class="hover-grey" href="#"><b>Five places under the falls and above the clouds</b></a></h3>
                        <ul class="list-li-mr-10 color-grey">
                            <li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
                            <li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
                            <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
                            <li><i class="mr-5 font-12 ion-eye"></i>105</li>
                        </ul>
                    </div><!--abs-blr -->
                </div><!-- w-50 -->
            </div><!-- w-50 -->
            
        </div><!-- w-60 -->
        <div class="w-40 w-md-100 float-left float-md-none h-100 h-md-60 h-xs-50">
        
            <div class="h-50 pb-5 pt-md-10">
                <div class="h-100 pos-relative">
                    <!-- Image as bg-3 -->
                    <div class="img-bg bg-3 bg-grad-layer-6"></div>
                    
                    <div class="abs-blr color-white p-20">
                        <h3 class="mb-10 mb-sm-5 t-upper">
                            <a class="hover-grey" href="#"><b>Five places under the falls and above the clouds</b></a></h3>
                        <ul class="list-li-mr-10 color-ash">
                            <li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
                            <li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
                            <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
                            <li><i class="mr-5 font-12 ion-eye"></i>105</li>
                        </ul>
                    </div><!--abs-blr -->
                </div><!-- h-50 -->
            </div><!-- h-50 -->
            
            <div class="h-50 pt-5">
                <div class="h-100 pos-relative">
                    <!-- Image as bg-4 -->
                    <div class="img-bg bg-4 bg-grad-layer-6"></div>
                    
                    <div class="abs-blr color-white p-20">
                        <h3 class="mb-10 mb-sm-5 t-upper">
                            <a class="hover-grey" href="#"><b>Five places under the falls and above the clouds</b></a></h3>
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
</section>
<!-- END OF MAIN SLIDER -->


<section class="">
    <div class="container">
        <div class="row">
        
            <div class="col-md-12 col-lg-8">
                <div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
                    <h4 class="p-title"><b>TODAY FEATURED</b></h4>
                    <img src="{{ asset('assets/images/news-1-700x400.jpg') }}" alt="">
                    <h3 class="mt-30"><a href="#">WPP is investigating an allegation of personal misconduct against 
                        its chief executive Sir Martin Sorrell.</a></h3>
                    <ul class="mtb-10 list-li-mr-20 color-lite-black">
                        <li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
                        <li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
                        <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
                        <li><i class="mr-5 font-12 ion-eye"></i>105</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat tincidunt mauris 
                        semper lorem, in dignissim ex metus a lacus. Sed venenatis dolor vitae vehicula varius. 
                        Aliquam vitae donis lobortis diamet...</p>
                </div><!-- bg-white -->
                
                @foreach($news as $data)
                <div class="mb-30 sided-250x card-view">
                    <div class="s-left">
                        <img src="{{ $data->image }}" alt="">
                    </div><!-- left-area -->
                    <div class="s-right ptb-50 p-sm-20 pb-sm-5 plr-30 plr-xs-0">
                        <h4><a href="{{ route('detail', $data->id) }}">{{ $data->title }}</a></h4>
                        <ul class="mtb-10 list-li-mr-20 color-lite-black">
                            <li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
                            <li><i class="mr-5 font-12 ion-android-person"></i>{{ $data->author }}</li>
                            <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
                            <li><i class="mr-5 font-12 ion-eye"></i>105</li>
                        </ul>
                    </div><!-- right-area -->
                </div><!-- sided-250x -->
                @endforeach
                
                <div class="row" align="center">
                    <div class="col-md-12">
                        <button class="mt-15 plr-20 btn-b-sm btn-fill-primary dplay-block">
                            <a href="{{ route('index') }}"><b>View More</b></a>
                        </button>
                    </div>
                </div>

            </div><!-- col-sm-8 -->
            
            <div class="col-md-12 col-lg-4">
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
                                
            </div><!-- col-sm-4 -->
        </div><!-- row -->
    </div><!-- container -->
</section>

@endsection