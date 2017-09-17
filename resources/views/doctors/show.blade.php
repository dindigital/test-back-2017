@extends('layouts.app')

@section('content')
<section id="about-doctor" class="about-section"><!-- about start -->
    <div class="container">
    	<div class="row">
      		<div class="col-md-7">
        		<h1>{{ $doctor->name }}</h1>
        		<h1>{{ $doctor->specialty }}</h1>
        		<p class="lead">{{ $doctor->description }}</p>      
      		</div>
    	</div>
  	</div>
</section>
<!-- about close -->
@endsection