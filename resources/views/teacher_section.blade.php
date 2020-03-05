@extends('layouts.dashboards')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div>
                    <h1>Hello</h1>
                    <a href="{{ route('Student.index') }}"><ul>{{$section->section_name}}</ul></a>

                </div>
                <div class="col-sm-12">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
