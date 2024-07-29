<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $video = Video::find(1);

        // $video = Video::with('comments')->find(1);

        // return $video->comments;

        // return $video;

        // echo "<h1>$video->title</h1>";
        // echo "<h4>$video->url</h4>";

        // foreach($video->comments as $comment){
        //     echo $comment->detail;
        //     echo "<hr>";
        // }

        $video = Video::with("oldestComment")->find(1);
        return $video;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $video = Video::find(2);

        $video->comments()->create([
            'detail' => 'This Video is Good Video'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
