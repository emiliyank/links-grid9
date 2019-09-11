@extends('layouts.shkolo')

@section('content')
<div class="container justify-content-center">

    @include('partials.validation_errors')
	<form action=' {{ url("/grid") }}' method="post" class="form">
		@csrf
		<input type="hidden" name="sequence" value="{{ $sequence }}">

        <div class="form-group row">
        	<label for="title">Title: </label>
        	<input type="text" name="title" id="title" class="form-control" placeholder="Google" value="{{old('title')}}" required>
        </div>
        
        <div class="form-group row">
        	<label for="link">Link: </label>
        	<input type="text" name="link" id="link" class="form-control" placeholder="https://google.com" value="{{old('link')}}" required>
        </div>
     
        <div class="form-group row">
        	<label for="color_id">Color: </label>
        	<select name="color_id" id="color_id" class="form-control">
        		@foreach($colors as $color)
        			<option value="{{ $color->id }}" style="color:{{$color->hex_code}}"> {{ $color->name }} </option>
        		@endforeach
        	</select>
        </div>

       <div class="form-group row">
            <a href="{{ url('/') }}" class="btn btn-default"> Back </a>
        	<input type="submit" name="save" value="Save" class="btn btn-primary">
        </div>
	</form>
</div>
@endsection