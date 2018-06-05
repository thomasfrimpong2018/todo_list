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

                    You are logged in!
                </div>
                <div class="container">
                   <h2>Your Items</h2><small><a href="/new">Create New Task</a></small><hr>
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
                     </li>
                    @endforeach
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
