@extends('layouts.shkolo')

@section('content')
@include('partials.flash_msgs')
<div class="row justify-content-center grid">
	@for($i = 0; $i < 9; $i++)
		<div class="col-md-3 col-sm-1 text-center grid-item">
			<span class="grid-span">
				@if(is_array($gridItems[$i]))
					<a href="{{ $gridItems[$i]['link'] }}" target="_blank" class="grid-link" style="color:{{ $gridItems[$i]['color']['hex_code'] }}"> 
						{{ $gridItems[$i]['title'] }} 
					</a>
					<?php $id = $gridItems[$i]['id']; ?>
					<a href='{{ url("/edit/$id") }}'><i class="fas fa-edit"></i>  </a>
				@else
					<a href='{{ url("/create/$i") }}'> 
						<i class="fas fa-plus-circle fa-7x"></i>
					</a>
				@endif
			</span>
		</div>
	@endfor
</div>
@endsection