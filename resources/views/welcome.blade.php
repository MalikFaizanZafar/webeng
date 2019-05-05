@extends('layouts.app')
@section('content')
<div class="row mt-5">
<div class="col-md-9">
    @include('includes.blogcards')
</div>
<div class="col-md-3">
    @include('includes.sidecard')
</div>
</div>
@stop