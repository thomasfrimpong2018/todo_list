@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-header">Create A New Task</div>
        <div class="card-body">
          @include('inc.messages')     

        {!!Form::open(['action'=>'HomeController@saveTask','method'=>'POST'])!!}
        {{Form::text('task','',['placeholder'=>'the name of your task','class'=>'form-control'])}}<br>
       {{Form::submit('Submit',['class'=>'btn btn-default'])}}
        {!!Form::close()!!}
        </div>


    </div>


</div>

</div>


@endsection