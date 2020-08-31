
@extends('layouts.nav_and_footer')

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
@section('title', 'FANCY CSS')
@section('body')
      <div class="container my-5 py-5">
        <div class="row my-5 border-top border-bottom border-dark">
            <div class="col-6 flex-center">
                <small>
                FANCY
                </small>
            </div>
            <div class="col-6 flex-center">
                <small>
                CSS
                </small>
            </div>
        </div>
      </div>  
@endsection