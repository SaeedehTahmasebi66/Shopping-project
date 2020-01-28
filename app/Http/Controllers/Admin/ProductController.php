<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Kala;

use Illuminate\Http\Request;

class productController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function getall(){

        //echo "HI";
        $allkala=Kala::all();
        return view('showKala')->with('all',$allkala);
    }

    public function index()
    {
        $products=Kala::all();
        return view('admin.products.index')->with('products',$products);
    }

    public function add()
    {
        return view('admin.products.add');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required | string',
            'description' => 'string',
            'categoryid' => 'required',
            'price' => 'required',
            'number' => 'required | numeric',
            'discountid' => 'numeric',

        ]);

       $form = new Kala();
       $form->name = $request->post('name');
        $form->description = $request->post('description');
        $form->categoryid = $request->post('categoryid');
        $form->price = $request->post('price');
        $form->number = $request->post('number');
        $form->discountid = $request->post('discountid');
        $form->save();

        return redirect('admin/products')->with('products',Kala::all());
    }

    public function edit($id)
    {
        $editProduct = Kala::find($id);
        return view('admin.products.edit')->with('selectedProduct',$editProduct);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $editUser = Kala::find($id);
        $editUser->name = $request->post('name');
        $editUser->description = $request->post('description');
        $editUser->categoryid = $request->post('categoryid');
        $editUser->price = $request->post('price');
        $editUser->number = $request->post('number');
        // $editUser->discountid = $request->post('discountid');

        $editUser->save();
        $allusers = Kala::all();
        return redirect('admin/products')->with('all',$allusers);
    }

    public function destroy($id)
    {
        $deleteUser = Kala::find($id);
        $deleteUser->delete();
        $allproducts = Kala::all();
        return redirect('admin/products')->with('all',$allproducts);
    }
}
