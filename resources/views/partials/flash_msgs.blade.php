@if(Session::has('msg_add'))
	<p class="alert alert-primary" style="margin-top: 10px;">{{ Session::get('msg_add') }}</p>
@endif

@if(Session::has('msg_update'))
	<p class="alert alert-success" style="margin-top: 10px;">{{ Session::get('msg_update') }}</p>
@endif