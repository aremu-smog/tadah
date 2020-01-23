@extends('layout.app')

@section('content')
<div class="container intro">
        <h1 class="heading">Hi Aremu,</h1>
        <p>Here is the list of your recent tasks</p>
</div>
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
        
            <div class="task">
                <a href="/tasks/{{$task->id}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <h3>{{$task->name}}</h3>
                                <span class="due">{{$task->due}}</span>
                            </div>
                        <div class="col-3"><span class="status 
                            @if($task->status == 'Pending'){{ 'status-pending'}}
                            @elseif($task->status == 'In Progress'){{ 'status-progress'}}
                            @elseif($task->status == 'Completed'){{ 'status-completed'}}
                            @endif
                            ">{{$task->status}}</span></div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        
    @endif
    @include('inc.create-button')
    
   
@endsection