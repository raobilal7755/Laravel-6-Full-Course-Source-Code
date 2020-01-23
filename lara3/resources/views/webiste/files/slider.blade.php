@extends('webiste.main.master')

@section('title','Slider Page')


{{-- @include('webiste.subviews.slider',['name'=>'Love you Laravel']) --}}
{{-- @includeIf('webiste.subviews.slider',['name'=>'Love you Laravel']) --}}
{{-- @includeWhen($boolean=false, 'webiste.subviews.slider', ['name'=>'Love you Laravel']) --}}
@includeFirst(['webiste.subviews.sliderr', 'webiste.subviews.slide'], ['name' => 'data'])
