@extends('layouts.dashboards')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div>
                @foreach($student as $student)
                    <a href="{{ route('student.index') }}"><ul>{{$student->fname}}</ul></a>
                @endforeach
                </div>
                <div class="col-sm-12s">
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
@endsection
