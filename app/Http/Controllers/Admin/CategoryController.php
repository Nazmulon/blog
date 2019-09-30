<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|unique:categories',
            'image' =>  'required|image|mimes:jpeg,bmp,png,jpg'
        ]);
//        get form image
        $image = $request->file('image');
        $slug = str::slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            // Check if Category Dir exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
            // Resize image for category and upload
            $categoryImage = Image::make($image)->resize(1600,479)->save($image->getClientOriginalExtension());
            $categoryImage = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('category/'.$imageName, $categoryImage);

            // Check if Category Slider Dir exists
            if (!Storage::disk('public')->exists('category/slider'))
            {
                Storage::disk('public')->makeDirectory('category/slider');
            }

            // Resize image for category slider and upload
            $categorySlider = Image::make($image)->resize(500,333)->save($image->getClientOriginalExtension());
            $categorySlider = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('category/slider/'.$imageName, $categorySlider);

        }
        else
        {
            $imageName = 'default.png';
        }

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->image = $imageName;

        $category->save();
        Toastr::success('Category Saved Successfully','Success');
        return redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
            'name' => 'required',
            'image' =>  'image|mimes:jpeg,bmp,png,jpg'
        ]);
//        get form image
        $image = $request->file('image');
        $slug = str::slug($request->name);
        $category = Category::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            // Check if Category Dir exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }

//            delete Old category
            if (Storage::disk('public')->exists('category/'.$category->image))
            {
                Storage::disk('public')->delete('category/'.$category->image);
            }
            // Resize image for category and upload
            $categoryImages = Image::make($image)->resize(1600,479)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('category/'.$imageName, $categoryImages);

            // Check if Category Slider Dir exists
            if (!Storage::disk('public')->exists('category/slider'))
            {
                Storage::disk('public')->makeDirectory('category/slider');
            }
            //            delete Old category Slider
            if (Storage::disk('public')->exists('category/slider/'.$category->image))
            {
                Storage::disk('public')->delete('category/slider/'.$category->image);
            }

            // Resize image for category slider and upload
            $categorySliders = Image::make($image)->resize(500,333)->save($image->getClientOriginalExtension());
            Storage::disk('public')->put('category/slider/'.$imageName, $categorySliders);

        }
        else
        {
            $imageName = $category->image;
        }

        $category->name = $request->name;
        $category->slug = $slug;
        $category->image = $imageName;
        $category->save();
        Toastr::success('Category Update Successfully','Success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category = Category::find($id);
         if (Storage::disk('public')->exists('category/'.$category->image))
         {
             Storage::disk('public')->delete('category/'.$category->image);
         }

        if (Storage::disk('public')->exists('category/slider/'.$category->image))
        {
            Storage::disk('public')->delete('category/slider/'.$category->image);
        }

        $category->delete();
        Toastr::success('Category Delete Successfully','Success');
        return redirect()->route('admin.category.index');


    }
}
