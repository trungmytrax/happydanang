@extends('admins.admin_template')
@section('content')
	{!! Former::open()->action('admin/products') !!}
	{!! Former::text('name_products')->required() !!}
	{!! Former::textarea('content') !!}
	{!! Former::submit('submit')->type('submit') !!}
	{!! Former::close() !!}
</div>
<script src="{{ asset('bower_components/AdminLTE/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'content');
</script>
@stop