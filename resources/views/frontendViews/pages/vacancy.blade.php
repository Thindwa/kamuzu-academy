@extends('layouts.frontend-master')

@section('content')
<section class="page-header cta2">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
				<h2 class="mb-3 text-capitalize text-white">Vacancies</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a class="text-white" href="{{URL::to('/home')}}">Home</a>
					</li>
					<li class="list-inline-item text-white">/ &nbsp; <a class="text-white" href="{{URL::to('/vacancy')}}">Vacancies</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection