@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>First Name</td>
          <td>Email</td>
          <td>Subject</td>
    
        
        </tr>
    </thead>
    <tbody>
        @foreach($Teacher as $Teacher)
        <tr>
            <td>{{$Teacher->teacherID}}</td>
            <td>{{$Teacher->fname}} {{$Teacher->lname}}</td>
            <td>{{$Teacher->email}}</td>
            <td>{{$Teacher->subject}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
