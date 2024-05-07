<?php

namespace App\Http\Controllers\Audio;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use Illuminate\Http\Request;

use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $audio = Audio::all();
            return view('admin.audio.index', compact('audio'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.audio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = [
            'title' => 'required|string',
            'image' => 'nullable',
            'audio' => 'required|mimes:mp3,mp4,ogx,oga,ogg,webm',
            'description' => 'nullable',
            'status' => 'required'
        ];


        $validatedData = $request->validate($validate);

        // dd('here1');



        // handel image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/audio/'), $image_name);
            $image_path = $image_name;
        } else {
            return "No video file selected.";
        }

        // handel audio
        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');
            $audio_name = time() . '.' . $audio->getClientOriginalExtension();
            $audio->move(public_path('books/audio'), $audio_name);
            $audio_path = $audio_name;
        } else {
            return "No audio file selected.";
        }


        // Create the audio
        $audio = new Audio();
        $audio->title = $request->title;
        $audio->image = $image_path;
        $audio->audio = $audio_path;
        $audio->description = $request->description;
        $audio->status = $request->status;
        $audio->save();
        // Redirect to the book index page
        return redirect()->route('admin.audio.index')->with('message', ' Create successful.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $audio = Audio::find($id);
        return view('admin.audio.edit', compact('audio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // finding id
        $audio = Audio::findOrFail($id);

        // validate
        $validate = [
            'title' => 'required|string',
            'image' => 'nullable',
            'audio' => 'nullable|mimes:mp3,mp4,ogx,oga,ogg,webm',
            'description' => 'nullable',
        ];

        $validatedData = $request->validate($validate);
        $audio = Audio::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/audio/'), $image_name);
            $image_path = $image_name;
            $audio->image = $image_path;
        }

        if ($request->hasFile('audio')) {
            $file = $request->file('audio');
            $audio_name = $file->getClientOriginalExtension();
            $audio->move(public_path('books/audio'), $audio_name);
            $audio_path = $audio_name;
            $audio->audio  = $audio_path;
        }

        // update the audio
        $audio->title = $request->title;
        $audio->description = $request->description;
        $audio->update();

        // Redirect to the audio index page
        return redirect()->route('admin.audio.index')->with('message', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // making object of Audio
        $audio = Audio::findOrFail($id);

        $audio->delete();
        return redirect()->route('admin.audio.index')->with('message', 'Deleted successfully.');
    }

    public function changeStatus($id)
    {
        try {
            $audio = Audio::find($id);
            if ($audio->status == 'active') {
                $audio->status = 'inactive';
            } else {
                $audio->status = 'active';
            }
            $audio->update();
            return redirect()->back()->with('message', 'Successfully Changed.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error.');
        }
    }

    public function getAudios()
    {
        try {
            $audios = Audio::Where('status', 'active')->orderBy('id', 'desc')->get();
            
            return response([
                'status' => 200,
                "data" => $audios
            ]);
        } catch (\Throwable $th) {
            return response([
                'status' => 500,
                "message" => $th->getMessage()
            ]);
        }
    }
}
