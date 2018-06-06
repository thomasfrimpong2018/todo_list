@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
                <div class="container">
                <h2>Your Items</h2><small><a href="/new">Create New Task</a></small><hr>
                 @if(count($items )>0)
                   <small><b>Click the checkbox to mark the task as done</b></small><br><br>
                   <ul>
                   @foreach($items as $item)
                     <li>
                      {!!Form::open(['action'=>'HomeController@postIndex','method'=>'POST'])!!}
                      
                     <input type="checkbox" 
                     onClick="this.form.submit()"
                      {{$item->done ? 'checked':''}} />

                     <input  type="hidden" name="id" value="{{$item->id}}" />
                     {{$item->name}}
                      {!!Form::close()!!}
                     
                     {!!Form::open(['action'=>['HomeController@deleteTask',$item->id],'method'=>'POST'])!!}
                     <!--<button class="btn btn-danger" onClick="this.form.submit()" >x</button>-->
                     <input  type="hidden" name="id" value="{{$item->id}}" />
                     {{Form::hidden('_method','DELETE')}}
                     {{Form::submit('Delete Task',['class'=>'btn btn-danger'])}}
                    {!!Form::close()!!}<br>
                     
                     </li>
                    @endforeach
                   </ul>
                   @else
                   <h6>No Task Created Yet</h6>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
