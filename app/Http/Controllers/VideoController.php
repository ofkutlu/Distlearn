<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function uploadVideo(Request $request)
    {
        // $this->validate($request, [
        //     'video_path' => 'required|file|mimetypes:video/mp4',
        // ]);
        $video = new Video;
        if ($request->hasFile('video_path')) {
            $path = $request->file('video_path')->store('attachments', ['disk' => 'my_files']);
            $video->video = $path;
        }
        $video->save();
    }
}
