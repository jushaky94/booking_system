@extends('layout')

@section('content')

<div class="row">

<ul id="doctor-nav" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="http://materializecss.com/images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="http://materializecss.com/images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name"></span></a>
      <a href="#!email"><span class="white-text email"></span></a>
    </div></li>
    <li><a href="{{ url('dashboard') }}" class="waves-effect">Dashboard</a></li>
    <li><a href="{{ url('clinics') }}" class="waves-effect">Clinics</a></li>
    <li class="active"><a href="{{ url('services') }}" class="waves-effect">Services</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">My Account</a></li>
    <li><a class="waves-effect" href="{{ url('profile') }}">My Profile</a></li>
    <li><a class="waves-effect" href="#!" id="sidebar_signout">Sign Out</a></li>
  </ul>
	<div class="col s12" style="padding-left: 300px;">
	@include('navbar')
		<div class="card">
		 	<div class="card-content">
		 		<h4>Services</h4>
		 	</div>
	      </div>
	</div>

</div>

@endsection


@section('auth-js')

<script async="true">
		firebase.auth().onAuthStateChanged(function(user) {
	  if (user) {
	  	// User is signed in
	  }else{
	  	window.location.href="/";
	  }
	});
</script>
@endsection