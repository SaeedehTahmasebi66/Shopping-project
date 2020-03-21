<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $products=Product::all();
        return view('admin.products.index',compact('products'));

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
        $request->validate([
            'name' => 'required | string',
            'description' => 'string',
            // 'category_id' => 'required',
            'price' => 'required',
            'number' => 'required | numeric',
            // 'discountid' => 'numeric',
        ]);

        $newProduct = new Product();
        $newProduct->name = $request->post('name');
        $newProduct->description = $request->post('description');
        // $newProduct->category_id = $request->post('category_id');
        $newProduct->price = $request->post('price');
        $newProduct->number = $request->post('number');
        // $newProduct->discountid = $request->post('discountid');
        $newProduct->save();

        return redirect('admin/products')->with('success', 'محصول جدید افزوده شد !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $selectedProduct = Product::find($id);
        return view('admin.products.edit', compact('selectedProduct'));
    }


      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required | string',
            'description' => 'string',
            // 'categoryid' => 'required',
            'price' => 'required',
            'number' => 'required | numeric',
            // 'discountid' => 'numeric',
        ]);

        $editProduct = Product::find($id);
        $editProduct->name = $request->post('name');
        $editProduct->description = $request->post('description');
        // $editProduct->categoryid = $request->post('categoryid');
        $editProduct->price = $request->post('price');
        $editProduct->number = $request->post('number');
        // $editProduct->discountid = $request->post('discountid');
        $editProduct->save();

        return redirect('admin/products')->with('success', 'محصول به روز رسانی شد !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $deleteProduct = Product::find($id);
        $deleteProduct->delete();
        return redirect('admin/products')->with('success', 'محصول مورد نظر حذف شد!');
    }
    
}

