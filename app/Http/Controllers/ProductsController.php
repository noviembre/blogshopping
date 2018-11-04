<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image',

        ]);

        #----- Create a new instance
        $product = new Product;

        #------- Upload image open -------
        $product_image = $request->image;
        #---- assign new name for the image
        $product_image_new_name = time(). $product_image->getClientOriginalName();
        #----- move file where you want to uploaded
        $product_image->move('uploads/products', $product_image_new_name);

        #-------- upload image close ------


        #---------- saving data into the db
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = 'uploads/products/' . $product_image_new_name;

        $product->save();
        Session::flash('success', 'Product Created');

        return redirect()->route('products.index');
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
        return view('products.edit', ['product' => Product::find($id)]);

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
        $this->validate($request, [

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'nullable|image',

        ]);

        $product = Product::find($id);

        if($request->hasFile('image'))
        {
            #------- Upload image open -------
            $product_image = $request->image;
            #---- assign new name for the image
            $product_image_new_name = time(). $product_image->getClientOriginalName();
            #----- move file where you want to uploaded
            $product_image->move('uploads/products', $product_image_new_name);
            $product->save();

            #-------- upload image close ------
        }

        #---------- saving data into the db
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();
        Session::flash('success', 'Product Updated');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if(file_exists($product->image))
        {
            unlink($product->image);
        }
        $product->delete();
        Session::flash('success', 'Product Deleted');

        return redirect()->back();

    }
}
