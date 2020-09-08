<?php

namespace App\Http\Controllers;

use App\Http\Resources\api\TasksListResource;
use App\TasksList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksListsController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TasksList  $tasksList
     * @return \Illuminate\Http\Response
     */
    public function show(TasksList $tasksList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TasksList  $tasksList
     * @return \Illuminate\Http\Response
     */
    public function edit(TasksList $tasksList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TasksList  $tasksList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TasksList $tasksList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TasksList  $tasksList
     * @return \Illuminate\Http\Response
     */
    public function destroy(TasksList $tasksList)
    {
        //
    }
}
