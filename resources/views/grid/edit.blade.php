@extends('layouts.shkolo')

@section('content')
<div class="container justify-content-center">

    @include('partials.validation_errors')
	<form action=' {{ url("/grid-update/$gridItem->id") }}' method="post" class="form">
		@csrf
        @method('PUT')

        <div class="form-group row">
        	<label for="title">Title: </label>
        	<input type="text" name="title" id="title" class="form-control" placeholder="Google" value="{{old('title', $gridItem->getOriginal('title'))}}" required>
        </div>
        
        <div class="form-group row">
        	<label for="link">Link: </label>
        	<input type="text" name="link" id="link" class="form-control" placeholder="https://google.com" value="{{old('link', $gridItem->link)}}" required>
        </div>
     
        <div class="form-group row">
        	<label for="color">Color: </label>
        	<select name="color_id" class="form-control">
        		@foreach($colors as $color)
                    <?php $selected = $color->id == $gridItem->color_id ? 'selected' : '';  ?>
        			<option value="{{ $color->id }}" style="color:{{$color->hex_code}}" {{ $selected }}> {{ $color->name }} </option>
        		@endforeach
        	</select>
        </div>

       <div class="form-group row">
            <a href="{{ url('/') }}" class="btn btn-default"> Back </a>
        	<input type="submit" name="edit" value="Edit" class="btn btn-success">
        </div>

		
	</form>
</div>
@endsection