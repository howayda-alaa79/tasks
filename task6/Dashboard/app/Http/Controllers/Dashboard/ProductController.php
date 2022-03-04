<?php

namespace App\Http\Controllers\Dashboard;

use App\Traits\Media;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')->select('id','name_en','code','price','status','quantity','created_at')->get();
        // return view('dashboard.products.index',compact('products'));
        $products = DB::table('products')->select('id', 'name_en', 'code', 'price', 'status', 'quantity', 'created_at')->get();
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        // $brands = DB::table('brands')->select('name_en','id')->get(); 
        // $subcategories = DB::table('sub_categories')->select('name_en','id')->get();
        // return view('dashboard.products.create',compact('brands','subcategories'));
        $brands = DB::table('brands')->select('name_en', 'id')->get();
        $subcategories = DB::table('sub_categories')->select('name_en', 'id')->get();
        return view('dashboard.products.create', compact('brands', 'subcategories'));
    }

    // public function store(Request $request)
    public function edit($id)
    {
        // validation
        // $rules = [
        //     'name_en'=>['required','string','between:3,255'],
        //     'name_ar'=>['required','string','between:3,255'],
        //     'price' => ['required','numeric','max:999999.99','min:0.5'],
        //     'quantity' => ['nullable','integer','between:1,9999'],
        //     'code' => ['required', 'unique:products,code', 'digits:5'],
        //     'status' => ['nullable' , 'integer' , Rule::in([0,1])],
        //     'des_en' => ['required' , 'string'],
        //     'des_ar' =>[ 'required' , 'string'],
        //     'brand_id' => ['nullable','integer', 'exists:brands,id'],
        //     'sub_category_id' => ['required','integer', 'exists:sub_categories,id'],
        //     'image' => ['required' , 'max:1024' , 'mimes:png,jpg,jpeg']
        // ];
        // $request->validate($rules);
        // // dd($request->);
        // // upload image
        // $photoName = uniqid() . '.' . $request->file('image')->extension();
        // $request->file('image')->move(public_path('images/products'),$photoName);
        $product = DB::table('products')->where('id', $id)->first();
        $brands = DB::table('brands')->select('name_en', 'id')->get();
        $subcategories = DB::table('sub_categories')->select('name_en', 'id')->get();

        return view('dashboard.products.edit', compact('product', 'brands', 'subcategories'));
    }



    public function store(StoreProductRequest $request)
    {

        $photoName = Media::upload($request->file('image'), 'products');
        $data = $request->safe()->except(['_token', 'image', 'submit']);
        $data['image'] = $photoName;
        DB::table('products')->insert($data);
    }

    public function update(UpdateProductRequest $request, $id)
    {

        $product = DB::table('products')->where('id', $id)->first();
        $data = $request->except('_token', '_method', 'submit', 'image');
        // check if the request has photo=> upload new photo , delete old photo
        if ($request->has('image')) {
            // upload image
            $newPhotoName = Media::upload($request->file('image'), 'products');
            // remove old photo
            Media::delete("images/products/{$product->image}");

            $data['image'] = $newPhotoName;
        }
        // update product into database
        DB::table('products')->where('id', $id)->update($data);
        // return redirect to all products
        return redirect()->route('dashboard.products.index')->with('success', 'Operation Successfull');
    }
    // public function edit($id)
    public function destroy($id)
    {
        // $product = DB::table('products')->where('id',$id)->first(); 
        // $brands = DB::table('brands')->select('name_en','id')->get(); 
        // $subcategories = DB::table('sub_categories')->select('name_en','id')->get();
        // return view('dashboard.products.edit',compact('product','brands','subcategories'));
        $product = DB::table('products')->where('id', $id)->first();
        Media::delete("images/products/{$product->image}");
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Operation Successfull');
    }
    public function statusToggle(Request $request, $id)
    {

        $status = $request->has('my-checkbox') ? 1 : 0;
        DB::table('products')->where('id', $id)->update(['status' => $status]);
        return redirect()->back()->with('success', 'Operation Successfull');
    }
}
