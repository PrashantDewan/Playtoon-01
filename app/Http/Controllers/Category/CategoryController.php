<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            // Retrieve all categories
            $categories = Category::all();

            return view('admin.category.index', compact('categories'));
        } catch (\Exception $e) {
            // Handle the exception
            return response()->json([
                'status' => 500,
                'error' => 'Failed to fetch categories'
            ], 500);
        }
    }
    public function activeCat()
    {
        try {
            // Retrieve all categories
            $categories = Category::where('status', 1)->get();

            return response()->json([
                'status' => 200,
                'categories' => $categories
            ], 200);
        } catch (\Exception $e) {
            dd($e);
            // Handle the exception
            return response()->json([
                'status' => 500,
                'error' => 'Failed to fetch categories'
            ], 500);
        }
    }
    public function create()
    {
        try {
            return view('admin.category.create');
        } catch (\Exception $e) {
            // Handle the exception
            return response()->json([
                'status' => 500,
                'error' => 'Failed to fetch categories'
            ], 500);
        }
    }
    public function store(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'name' => 'required|string',
                'description' => 'nullable|string',
                'image' => 'nullable',
                'status' => 'boolean',
            ]);

            $imagePath = null;
            //image uplaoad
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/category/'), $image_name);
                $image_path = 'images/category/' . $image_name;
            } else {
                $image_path = 'images/category/default.png';
            }

            // Create the category

            $category = new Category();
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->image = $image_path;
            $category->status = $request->input('status', 1);
            $category->save();

            return redirect()->route('admin.category.index')->with('message','Sucessfully Stored');
        } catch (\Exception $e) {
            // Handle the exception
            return redirect()->back()->with('message','Unsucessfull');
        }
    }
    public function edit($id)
    {
        try {
            $category = Category::findOrFail($id);

            return view('admin.category.edit',compact('category'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            // Find the category by ID
            $category = Category::findOrFail($id);

            // Validate the request data
            $request->validate([
                'name' => 'string',
                'description' => 'nullable|string',
                'image' => 'nullable|image',
            ]);

            // Upload and store the category image if provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/category/'), $image_name);
                $image_path = 'images/category/' . $image_name;
                $category->image = $image_path;
            }
            // Update the category fields
            $category = Category::find($id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();

            return redirect()->route('admin.category.index')->with('message','Update Sucessfull');
        } catch (\Exception $e) {
            // Handle the exception
            return redirect()->back()->with('message','Update Unsucessfull');
        }
    }

    public function destroy($id)
    {
        try {
            // Find the category by ID
            $category = Category::findOrFail($id);

            // Delete the category
            $category->delete();

            return redirect()->route('admin.category.index')->with('message','Sucessfully Deleted');
        } catch (\Exception $e) {
            // Handle the exception
            return redirect()->route('admin.category.index')->with('message','Unsucessfull');
        }
    }

    public function changeStatus($id){
        try {
            $category = Category::find($id);
            if ($category->status == '1') {
                $category->status = '0';
            } else {
                $category->status = '1';
            }
            $category->update();
            return redirect()->back()->with('message', 'Successfully Changed.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error.');
        }
    }

}
