<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Exception;

class PostController extends Controller
{

    public function showAll()
    {

        $result = ['status' => 200];

        try {   
           
            $result['data'] = Post::all();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        
        return response()->json($result, $result['status']);
    }

    public function show($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = Post::find($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }

    public function store(Request $request)
    {

        $data = $request->only([
            'title',
            'description',
        ]);

        $result = ['status' => 201];

        try {
            $result['data'] = Post::create($request->all());
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }

    public function update(Request $request, $id)
    {

       $data = $request->only([
            'title',
            'description'
        ]);

        $result2 = ['status' => 200];

        try {
            $result = Post::findOrFail($id);
            $result['data'] = $result->update($request->all());

        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result);

    }

    public function delete($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = Post::findOrFail($id)->delete();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }
        return response()->json($result, $result['status']);
    }

}