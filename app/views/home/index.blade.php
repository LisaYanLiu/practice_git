@extends('layouts.master')

@section('content')
	{{ Form::open('user')}}
		{{ Form::label('firstName', 'First Name:')}}
		{{ Form::text('firstName')}}
	{{ Form::close}}
@stop