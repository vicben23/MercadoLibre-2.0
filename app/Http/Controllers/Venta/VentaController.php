<?php

namespace App\Http\Controllers\Venta;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
 
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use Validator;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showPrecio()
    {
        return view('vender.precio');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     public function actualizarCorreo(Request $request)
    {
        //
    } 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
          'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
         ]);
         if($validation->passes())
         {
          $image = $request->file('select_file');
          $new_name = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('images'), $new_name);
          return response()->json([
           'message'   => 'Image Upload Successfully',
           'uploaded_image' => '<img src="../public/images/'.$new_name.'" class="img-thumbnail" width="300" />',
           'class_name'  => 'alert-success'
          ]);
         }
         else
         {
          return response()->json([
           'message'   => $validation->errors()->all(),
           'uploaded_image' => '',
           'class_name'  => 'alert-danger'
          ]);
         }
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
