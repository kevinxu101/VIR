
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="title m-b-md">
                You cannot access this page! This is for only '{{$role}}'"
            </div>
        </div>
    </div>
</div>
@endsection