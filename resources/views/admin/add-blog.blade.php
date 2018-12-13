@extends('master-admin')
@section('content')
<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<!-- Article Editor card start -->
					<div class="card">
						<div class="card-header">
							<h5>Add New Blog</h5>
						</div>
						<div class="card-block">
							<form action="{{route('post.add-blog')}}" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" readonly hidden name="author" class="form-control" value="{{Auth::guard('admins')->user()->name}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Title</label>
									<div class="col-sm-10">
										<input type="text" name="title" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Content</label>
									<div class="col-sm-10">
										<textarea name="content" id="editor_content"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image</label>
									<div class="col-sm-10">
										<input type="file" class="form-group" name="image">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<button type="submit" class="btn btn-primary m-b-0">Add</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>

@endsection
@section('ckeditor')
<script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('editor_content', {
		filebrowserBrowseUrl: '{{ url('ckfinder/ckfinder.html') }}',
		filebrowserImageBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Images') }}',
		filebrowserFlashBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Flash') }}',
		filebrowserUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
		filebrowserImageUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
		filebrowserFlashUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
	});
</script>
<script type="text/javascript" src="{{url('ckfinder/ckfinder-laravel-package/public/ckfinder/ckfinder.js')}}"></script>
@endsection