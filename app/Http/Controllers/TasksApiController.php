<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Task::all();

        return response()->json($tasks);
    }

  

    public function show($id){
        $task = Task::find($id);

        return response()->json($task);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);

        if($validator->fails()){
            $response = array('response'=>$validator->messsages, 'success'=>false);
            
            return $response;
        }else{
            $task = new Task;

            $task->name = $request->input('name');
            $task->description = $request->input('description');
            $task->due = $request->input('due');
            $task->status = $request->input('status');

            $task->save();

            return response()->json($task);
        }
    }

   

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required'
        ]);

        if($validator->fails()){
            $response = array('response'=>$validator->messages,'success'=>false);

            return $response;
        }else{
            $task = Task::find($id);

            $task->name = $request->input('name');
            $task->description = $request->input('description');
            $task->due = $request->input('due');
            $task->status = $request->input('status');

            $task->save();

            $response = array('response'=>'Item updated successfully','success'=>true);

            return $response;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        $response = array('response'=>'Item deleted','success'=>true);
        return $response;
    }
}
