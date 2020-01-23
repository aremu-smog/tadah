
@extends('layout.app')
@section('content')
<div class="container intro">
        <h1 class="heading">Create Task</h1>
        <p>Kindly fill the form below to create a new task</p>
</div>
<div class="container">
        
            {{Form::open(['action'=>'TasksController@store','method'=>'POST'])}}
            
            {{Form::asText('task_name','',['placeholder'=>'Something straight to the point'])}}
            
            {{Form::asTextArea('task_description','',['placeholder'=>'Everything about the task'])}}
            
            <div class="row form-row">
                <div class="col-6">
                        {{Form::asSelect('status',['Pending'=>'Pending','In Progress'=>'In Progress','Completed'=>'Completed'],['placeholder'=>'e.g Friday February 14, 2020'])}}
                </div>
                <div class="col-6">
                        {{Form::asText('due_date','',['placeholder'=>'Friday February 14, 2020'])}}
                </div>
                
            </div>
            {{Form::asSubmit('task_name','Create Task',['class'=>'btn btn-primary'])}}
            
            {{Form::close()}}
        
</div>

   
   
@endsection
