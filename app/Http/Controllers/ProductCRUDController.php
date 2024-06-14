<?php

namespace App\Http\Controllers;

use App\Models\db_product_info;
use Illuminate\Http\Request;

class ProductCRUDController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->input();

        $product = db_product_info::create($data);
        return $product;
    }
    public function read(Request $request, int $id = -1)
    {
        if ($id === -1)  {
        return db_product_info::all();
        } else
            {
            return db_product_info::find($id);
            }
    }
    public function update(Request $request, int $id)
    {
        $data = $request->input();


        $updated=db_product_info::where('id', $id)
        ->update($data);

        return $updated;
    }
    public function delete(int $id)
    {
        $deleted = db_product_info::destroy($id);
        return $deleted;
    }
}

