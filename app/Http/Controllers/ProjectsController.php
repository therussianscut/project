<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller

{


    public function index(Project $project) {






        return view('/projects', compact('project'));


    }


    public function create() {


        return view('projects.create');


    }



    public function store(Project $project) {




    $project->title= request('title');
    $project->description=request('description');

    $project->save();

    return redirect('/projects');



    }

    public function edit(Project $project)
    {






        if(!$project) {


            return dd('no record in the database');

        } else {


            return view('projects.edit', compact('project'));


        }


    }


    public function update(Project $project) {





      $project->title= request('title');
      $project->description=request('description');



      $project->save();


    }


    public function destroy($id) {


        Project::find($id)->delete();





    }

    public function show(Project $project) {






        return view('projects.show', compact('project'));


    }











}
