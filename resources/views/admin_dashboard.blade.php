

@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-3 mr-5">
            <div class="card" style="width: 18rem;">
                <img src="https://pbs.twimg.com/profile_images/1204800558319751172/E2uRyBjA_400x400.jpg" class="card-img-top" alt="..." style="height:80%;">
             4   <div class="card-body">
                <h5 class="card-title"> {{Auth::user()->username}}</h5>
                  <h5 class="card-title">User Type : {{Auth::user()->type}}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>  

              </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <a href="#"><h5 class="card-title">Import Student Module</h5></a>
                  <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                    <a href="#"><h5 class="card-title">Add New Users</h5></a>
                  <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                </div>
              </div>
        </div>
     
    
    </div>
</div>
@endsection
