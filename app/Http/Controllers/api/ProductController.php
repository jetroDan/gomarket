<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Articulo;

class ProductController extends Controller
{
  function getProducts () {
    $products = Articulo::select('id', 'sku', 'nombre')->get();

    return response()->json(["products" => $products]);
  }

  function postProducts (Request $request) {

    /* $validatedData = $request->validate([
        'name' => 'required|max:255'
    ]);


    if ($validatedData->fails()) {
      return response()->json(["message" => $validatedData->getMessage()], 422);
    } */


    Articulo::create([
      'nombre' => $request->name,
      'sku' => $request->sku
      ]);

    return response()->json(["validatedData" => $request->all()]);

    /* return response()->json(["articulo" => [
      'nombre' => $request->name,
      'descripcion' => $request->description,
      'sku' => $request->sku
      ]]); */
  }

  function putProducts (Articulo $product, Request $request) {

    $product->update([
      "nombre" => $request->name
    ]);

    /* $validatedData = $request->validate([
        'name' => 'required|max:255'
    ]);


    if ($validatedData->fails()) {
      return response()->json(["message" => $validatedData->getMessage()], 422);
    } */


    return response()->json(["product" => $product]);

    /* return response()->json(["articulo" => [
      'nombre' => $request->name,
      'descripcion' => $request->description,
      'sku' => $request->sku
      ]]); */
  }

  function deleteProducts (Articulo $product, Request $request) {

    $product->delete();

    return response()->json(["message" => "Producto eliminado exitosamente"]);
  }

}
