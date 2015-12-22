@extends('admins.admin_template')
@section('content')
{!! Former::open() !!}
{!! Former::text('name_products_categories')->required()!!}

{!! Former::textarea('description')->value(NULL)->plaseholder('please input')->required('abcde') !!}
{!! Former::submit('btn-primary') !!}
{!! Former::close() !!}
@stop