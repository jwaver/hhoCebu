@extends('master')

@section('title')
	HHO Cebu
@endsection


@section('content')
	<br>
	<br>
	<br>
	<div class="row">
		<div id="logo" class="col-md-12 text-center"><a href=""><img src="images/logo.png" alt=""></a></div>
	</div>
	<br>
	<br>
	<div class="row db-padding-btm db-attached">
            <div class="col-md-4 col-md-offset-2">
				<div class="hho-pricing hho-basic popular">
					<div class="price">
						<sup>P</sup>5,000
						<small></small>
					</div>
					<div class="type">BASIC PACKAGE</div>
					<ul>
						<li><i class="fa fa-check"></i>One HHO Kit</li>
						<li><i class="fa fa-check"></i>Free Installation</li>
					</ul>
					<div class="pricing-footer">
						<a href="register?basic" class="btn db-button-color-square btn-lg">JOIN NOW</a>
					</div>
				</div>
            </div>
            <div class="col-md-4">
				<div class="hho-pricing hho-advance">
					<div class="price">
						<sup>P</sup>9,900
						<small></small>
					</div>
					<div class="type">ADVANCE PACKAGE</div>
					<ul>
						<li><i class="fa fa-check"></i>One HHO Kit</li>
						<li><i class="fa fa-check"></i>Free Installation</li>
						<li><i class="fa fa-check"></i>Network Bonus</li>
					</ul>
					<div class="pricing-footer">
						<a href="register?advance" class="btn db-button-color-square btn-lg">JOIN NOW</a>
					</div>
				</div>
            </div>
    </div>
	
	<div id="socialize" class="row">
		<div class="col-md-12">
			<a href="https://www.facebook.com/HHOCebu"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
			<a href="#"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
			<a href="#"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
			<a href="#"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
		</div>
	</div>
@endsection
