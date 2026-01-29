<?php

namespace App\Http\Controllers;

use App\Models\VideoProfil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminVideoProfileController extends Controller
{
    public function index()
    {
        return view('admin.video-profile.index', [
            'videoProfile'  => VideoProfil::first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $videoProfile = VideoProfil::find($id);
        $validator = Validator::make($request->all(), [
            'url_video'   => 'required|url',
        ], [
            'url_video.required'   => 'Wajib menambahkan url video !',
            'url_video.url'        => 'Format URL tidak valid !',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Convert YouTube URL to embed format
        $url = $request->url_video;
        
        // Extract video ID from various YouTube URL formats
        if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoId = $matches[1];
            $url = "https://www.youtube.com/embed/{$videoId}";
        }

        $videoProfile->update([
            'url_video'     => $url
        ]);

        return redirect()->back()->with('success', 'Berhasil memperbarui link video profile desa');
    }
}
