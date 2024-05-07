<?php

namespace App\Http\Controllers\Rhymes;

use App\Http\Controllers\Controller;
use App\Models\RhymesLevel;
use Illuminate\Http\Request;

class RhymesLevelController extends Controller
{
    public function index()
    {
        try {
            $rhymesLevels = RhymesLevel::all();
            return view('admin.rhymesLevel.index', compact('rhymesLevels'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 400,

                'error' => 'Failed to fetch rhymes levels'
            ], 500);
        }
    }

    public function getRhymesLevel()
    {
        try {
            $rhymesLevels = RhymesLevel::all();
            return response([
                'status'=>200,
                "data"=>$rhymesLevels
            ]); 
        } catch (\Exception $e) {
            return response()->json([
                'status' => 400,

                'error' => 'Failed to fetch rhymes levels'
            ], 500);
        }
    }
    public function create()
    {
        return view('admin.rhymesLevel.create');
    }
    public function edit($id)
    {
        $level = RhymesLevel::find($id);
        return view('admin.rhymesLevel.edit', compact('level'));
    }
    // Get a specific rhymes level
    public function show($id)
    {
        try {
            $rhymesLevel = RhymesLevel::findOrFail($id);
            return response()->json(
                [
                    'status' => 200,
                    'rhymes_level' => $rhymesLevel
                ],
                200
            );
        } catch (\Exception $e) {
            return response()->json([
                'status' => 400,

                'error' => 'Rhymes level not found'
            ], 404);
        }
    }

    // Create a new rhymes level
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'description' => 'nullable|string',
            ]);

            $rhymesLevel = new RhymesLevel();
            $rhymesLevel->name = $request->name;
            $rhymesLevel->description = $request->description;
            $rhymesLevel->save();
            return redirect()->route('admin.rhymes.level.index')->with('message', 'Rhyme created successfully.');

        } catch (\Exception $e) {
            return redirect()-> to('admin.rhymes.level.create')->with('message','Try Again');
        }
    }

    // Update a rhymes level
    public function update(Request $request, $id)
    {
        try {
            $rhymesLevel= RhymesLevel::findOrfail($id);

            $validatedata = $request->validate([
                'name' => 'required|string',
                'description' => 'nullable|string',
            ]);

            $rhymesLevel = RhymesLevel::find($id);
            $rhymesLevel->name = $request->name;
            $rhymesLevel->description = $request->description; 
            $rhymesLevel->update();
            return redirect()->route('admin.rhymes.level.index')->with('message', 'Rhyme update successfully.');
        } catch (\Exception $e) {
            return back()->with('message', 'Update Unsuccessfull');
        }
    }

    // Delete a rhymes level
    public function destroy($id)
    {
        try {
            $rhymesLevel = RhymesLevel::findOrFail($id);
            $rhymesLevel->delete();
            return redirect()->route('admin.rhymes.level.index')->with('message', ' Sucesfully Deleted');
        } catch (\Exception $e) {
            return redirect()->route('admin.rhymes.level.index')->with('message', ' Unsucesfully');
        }
    }
}
