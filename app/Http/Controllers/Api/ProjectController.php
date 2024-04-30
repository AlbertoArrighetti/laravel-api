<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with(['type', 'technologies'])->get();

        return response()->json([
            "success" => true,
            "results" => $projects,
        ]);
    }



    public function show($id) {

        // per trovare il post senza eager loading
        // $post = Post::find($id);

        $post = Project::with(['type', 'technologies'])->where('id', '=', $id)->first();

        // dd($post);

        return response()->json([
            "success" => true,
            "post" => $post
        ]);

    }





}
