<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $validated = $request->validate(
            [
                'name' => 'required|min:5|max:150|unique:products,name',
                'image' => 'nullable|image|max:256',
                'price' => 'numeric|min:0',
                'quantity' => 'numeric|min:0',
                'description' => 'min:5|max:150',            
            ]
        );
    
        $formData = $request->all();
    
        //image management
        if($request->hasFile('image')) {
            $img_path = Storage::disk('public')->put('products_images', $formData['image']);
            $formData['image'] = $img_path;
        } else {
            // Use a default image if none is provided
            $formData['image'] = 'public/logo.png';
        }
    
        $newProduct = new Product();
        $newProduct->fill($formData);
        $newProduct->slug = Str::slug($newProduct->name, '-' );
        $newProduct->save();
        $product = $newProduct;
    
        return redirect()->route('admin.products.show', ['product' => $newProduct->id])->with('message', $newProduct->name . ' successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $formData = $request->all();

        $formData['slug']= Str::slug($formData['name'], '-');
        $product -> update($formData);

        return redirect()->route('admin.products.show', ['product' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
