@extends('layout.app')

@section('content')
<div class="container intro">
        <a href="/" class="status status-progress">View all tasks</a>
        <h1 class="heading">{{$task->name}}</h1>
        <div class="row task-meta">
            <div class="col-4"><span class="status status-completed">{{$task->status}}</span></div>
            <div class="col-8">{{$task->due}}</div>
        </div>
</div>
<div class="container task-description">
        {{$task->description}}

        <div class="task-buttons row">
                <div class="col-4"><a href="/tasks/{{$task->id}}/edit" class="btn btn-primary">Edit Task</a></div>
                <div class="col-4">
                    {{Form::open(['action'=>['TasksController@destroy',$task->id],'method'=>'POST'])}}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::asSubmit('delete_task','Delete Task',['class'=>'btn btn-secondary'])}}
                    {{Form::close()}}
                </div>
        </div>
</div>

   
   
@endsection