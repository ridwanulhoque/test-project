@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-6 offset-3">
		@if(Session::get('message'))
			<div class="alert alert-success">
				{{ Session::get('message') }}
			</div>
		@endif
		<div class="card">
			<div class="card-header">
				Resume List
			</div>
			<div class="card-body">
				<table class="table-bordered">
					<tr>
						<th>Title</th>
						<th>Action</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
</div>
@endsection