

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="jumbotron">
                <h1 class="display-4">Welcome Teachers!</h1>
                <p class="lead">Villamor Instant records allows instant enconding of student grades</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
                <p>
               
                  You are logged in! as <strong>{{ strtoupper(Auth::user()->type) }}</strong>
                    
                  Admin Page: <a href="{{ url('/') }}/admin_dashboard">{{ url('/') }}/adminOnlyPage</a>
                          
                  Super Admin Page: <a href="{{ url('/') }}/superAdminOnlyPage">{{ url('/') }}/super_adminOnlyPage</a>
                          
                  Member Page: <a href="{{ url('/') }}/memberOnlyPage">{{ url('/') }}/memberOnlyPage</a>
                </p>
              </div>
        </div>
    </div>
</div>
@endsection
