
@extends('layout.app')
@section('content')
<div class="container intro">
        <a href="/tasks/{{$task->id}}" class="status status-progress">Back to Task</a>
        <h1 class="heading">Edit Task</h1>
        <p>Kindly fill the form below to create a new task</p>
</div>
<div class="container">
        
            {{Form::open(['action'=>['TasksController@update',$task->id],'method'=>'POST'])}}
            {{Form::hidden('_method','PUT')}}
            
            {{Form::asText('task_name', $task->name ,['placeholder'=>'Something straight to the point'])}}
            
            {{Form::asTextArea('task_description',$task->description,['placeholder'=>'Everything about the task'])}}
            
            <div class="row form-row">
                <div class="col-6">
                        {{Form::asSelect('status',
                        ['Pending'=>'Pending','In Progress'=>'In Progress','Completed'=>'Completed'],
                        ['placeholder'=>'e.g Friday February 14, 2020','selected'=>$task->status])}}
                </div>
                <div class="col-6">
                        {{Form::asText('due_date',$task->due,['placeholder'=>'Friday February 14, 2020'])}}
                </div>
                
            </div>
            {{Form::asSubmit('update_task','Update Task',['class'=>'btn btn-primary'])}}
            
            {{Form::close()}}
        
</div>

   
   
@endsection
