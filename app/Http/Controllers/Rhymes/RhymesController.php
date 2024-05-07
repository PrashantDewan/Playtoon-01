<?php

namespace App\Http\Controllers\Rhymes;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rhymes;
use App\Models\RhymesLevel;
use Illuminate\Http\Request;
use getID3;

use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class RhymesController extends Controller
{
    public function index()
    {
        try {
            $rhymes = Rhymes::all();
            return view('admin.rhymes.index', compact('rhymes'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function create()
    {
        $categories = Category::all();
        $rhyme_levels = RhymesLevel::all();
        return view('admin.rhymes.create', compact('categories', 'rhyme_levels'));
    }
    // Store
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string',
                'author' => 'nullable|string',
                'image' => 'nullable',
                'category_id' => 'required',
                'rhyme_level_id' => 'required',
            ]);

            $rhyme = new Rhymes();
            $rhyme->title = $validatedData['title'];
            $rhyme->author = $validatedData['author'];

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/rhymes/'), $image_name);
                $image_path = $image_name;
                $rhyme->image = $image_path;
            } else {
                $rhyme->image = 'images/rhymes/default.png';
            }
            // if ($request->hasFile('rhymes')) {
            //     $rhymes = $request->file('rhymes');
            //     $rhymes_name = time() . '.' . $rhymes->getClientOriginalExtension();
            //     $rhymes->move(public_path('videos/rhymes/'), $rhymes_name);
            //     $rhymes_path = 'videos/rhymes/' . $rhymes_name;
            //     $rhyme->rhymes = $rhymes_path;
            // } else {
            //     $rhyme->rhymes = 'videos/rhymes/default.png';
            // }

            // $getID3 = new getID3();
            // $video_file = $getID3->analyze('videos/rhymes/' . $rhymes_name);
            // // Get the duration in seconds, e.g.: 277 (seconds)
            // $duration_seconds = $video_file['playtime_seconds'];

            // $rhyme->length = $duration_seconds;
            $rhyme->category_id = $validatedData['category_id'];
            $rhyme->rhyme_level_id = $validatedData['rhyme_level_id'];
            $rhyme->save();

            return redirect()->route('admin.rhymes.index')->with('message','Sucessfully created');
        } catch (\Exception $e) {
            return redirect()->back()->with('message','Unsecessfull');
        }
    }

    // Edit
    public function edit($id)
    {
        try {
            $rhyme = Rhymes::findOrFail($id);
            $categories = Category::all();
            $rhyme_levels = Rhymes::all();

            return view('admin.rhymes.edit',compact('rhyme','categories','rhyme_levels'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Update
    public function update(Request $request, $id)
    {
        try {



            $rhyme = Rhymes::findOrFail($id);


            $validatedData = $request->validate([
                'title' => 'required|string',
                'author' => 'nullable|string',
                'image' => 'nullable',
                'category_id' => 'required',
                'rhyme_level_id' => 'required',
            ]);


            $rhyme = Rhymes::find($id);
            $rhyme->title = $request->title;
            $rhyme->author = $request->author;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/rhymes/'), $image_name);
                $image_path = 'images/rhymes/' . $image_name;
                $rhyme->image = $image_path;
            }
            // if ($request->hasFile('rhymes')) {
            //     $rhymes = $request->file('rhymes');
            //     $rhymes_name = time() . '.' . $rhymes->getClientOriginalExtension();
            //     $rhymes->move(public_path('videos/rhymes/'), $rhymes_name);
            //     $rhymes_path = 'videos/rhymes/' . $rhymes_name;
            //     $rhyme->rhymes = $rhymes_path;

            //     $getID3 = new getID3();
            //     $video_file = $getID3->analyze('videos/rhymes/' . $rhymes_name);
            //     // Get the duration in seconds, e.g.: 277 (seconds)
            //     $duration_seconds = $video_file['playtime_seconds'];

            //     $rhyme->length = $duration_seconds;
            // }


            $rhyme->category_id = $request->category_id;
            $rhyme->rhyme_level_id = $request->rhyme_level_id;
            $rhyme->update();


            return redirect()->route('admin.rhymes.index')->with('message', 'Updated successfully.');
        } catch (\Exception $e) {
            // return redirect()->back()->with('message', 'Unsucessfull');
            return response()->json([
                'status' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Delete
    public function destroy($id)
    {
        try {
            $rhyme = Rhymes::findOrFail($id);
            $rhyme->delete();
            return redirect()->route('admin.rhymes.index')->with('message', 'Sucessfully Deleted');

        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'Unsucessfull to delete');
        }
    }

    // Change Status
    public function changeStatus(Request $request, $id)
    {
        {
            try {
                $rhyme = Rhymes::find($id);
                if ($rhyme->status == '1') {
                    $rhyme->status = '0';
                } else {
                    $rhyme->status = '1';
                }
                $rhyme->update();
                return redirect()->back()->with('message', 'Successfully Changed.');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', 'Error.');
            }
        }
    }

    public function addVideo($id)
    {
        try {
            $rhyme = Rhymes::find($id);
            return view('admin.rhymes.addVideo', compact('rhyme'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function uploadVideo(Request $request, $id)
    {
        try {
            $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

            if (!$receiver->isUploaded()) {
                // file not uploaded
            }

            $fileReceived = $receiver->receive(); // receive file
            if ($fileReceived->isFinished()) { // file uploading is complete / all chunks are uploaded
                $video_file = $fileReceived->getFile(); // get file

                $video_new_name = md5(time()) . '.' . $video_file->getClientOriginalExtension();
                $replace = preg_replace('/\s+/', '_', $video_new_name);
                $video_file->move('rhymes/videos/', $replace);

                $rhymes = Rhymes::find($id);

                $rhymes->rhyme = 'rhymes/videos/' . $replace;

                // $getID3 = new getID3();
                // $video_file = $getID3->analyze('rhymes/videos/' . $replace);
                // // Get the duration in seconds, e.g.: 277 (seconds)
                // $duration_seconds = $video_file['playtime_seconds'];
                // $rhymes->length += $duration_seconds;
                $rhymes->update();

                // delete chunked file
                // unlink($file->getPathname());
                return [
                    'status' => 200
                ];
            }

            // otherwise return percentage informatoin
            $handler = $fileReceived->handler();
            return [
                'done' => $handler->getPercentageDone(),
                'status' => true
            ];
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    // api for get all rhymes
    function getRhymes()
    {
        try {
            $rhymes = Rhymes::where('status', 1)->get();
            foreach ($rhymes as $value) {
                $level = RhymesLevel::find($value->rhyme_level_id);
                $value['rhyme_level'] = $level;
                $category = Category::find($value->category_id);
                $value['category'] = $category;
            }
            return response([
                'status'=>200,
                "data" => $rhymes
            ]);
        } catch (\Throwable $th) {
            return response([
                'status' => 500,
                "message" => $th->getMessage()
            ]);
        }
    }


}
