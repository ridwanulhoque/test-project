@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-6 offset-3">
		<div class="card">
			<div class="card-header">
				Add resume
			</div>
			<div class="card-body">
				<form action="{{ route('resumes.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="" class="control-label">Resume Title</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="" class="control-label">Resume (PDF)</label>
						<input type="file" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="form-control btn btn-primary btn-sm">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
			</div>
		</div>
	</div>
</div>
@endsection