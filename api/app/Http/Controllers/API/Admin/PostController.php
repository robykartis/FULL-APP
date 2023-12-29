<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('mdd.admin.aksess');
    }

    public function index()
    {
        try {
            $title = 'Post Konten';
            $data = Post::all();
            $data = [
                'title' => $title,
                'data' => $data
            ];
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }
}
