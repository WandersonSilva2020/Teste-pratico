@if ($message = Session::get('success'))
<div class="alert alert-success alert-block border rounded border-circle m-2">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <strong><h3>{{ $message }}</h3></strong>
</div>
@endif

@if ($message = Session::get('ERRO'))
<div class="alert alert-danger alert-block border rounded border-circle m-2">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <strong><h3>{{ $message }}</h3></strong>
</div>
@endif

@if ($message = Session::get('Delete'))
<div class="alert alert-primary alert-block border rounded border-circle m-2">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <strong><h3>{{ $message }}</h3></strong>
</div>
@endif