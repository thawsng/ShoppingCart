<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', ['list'=> Product::paginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
//        $request->validate(
//            [
//                'name' => 'required|min:10|max:15',
//                'price' => 'required'
//            ],
//            [
//                'name.required' => 'Vui lòng nhập tên.',
//                'name.min' => 'Tên phải lớn hơn 10 ký tự.',
//                'name.max' => 'Tên phải nhỏ hơn 15 ký tự.',
//            ]
//        );
        $request->validate();
        return 'Hello';
//        $obj = new Product();
//        $obj->name = $request->get('name');
//        $obj->price = $request->get('price');
//        $obj->description = $request->get('description');
//        $obj->thumbnail = $request->get('thumbnail');
//        $obj->categoryId = $request->get('categoryId');
//        $obj->created_at = Carbon::now();
//        $obj->updated_at = Carbon::now();
//        $obj->save();
//        return redirect('/admin/products');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
