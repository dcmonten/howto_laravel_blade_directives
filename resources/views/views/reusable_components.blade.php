
@extends('layouts.footer_only')

@section('styles')
<!-- Externo -->
<link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous"
>
<!-- Local, sin assets -->
<link rel="stylesheet" href="css/style.css">
@endsection
@section('title', 'COMPONENTS')
@section('body')
@include('components.component_with_data', ['some' => 'data'])
@endsection