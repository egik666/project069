<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EgikModel;

class EgikController extends Controller
{
    public function index()
    {

        $data = EgikModel::all();
        return response()->json($data);
    }
    public function create(Request $request)

    {
        EgikModel::create($request->all());
        return response()->json(
            [
                'message' => 'Data berhasil di simpan'
            ]

        );
    }
    public function update(Request $request, $id)

    {
        $data = EgikModel::where('id', $id)->first();
        $data->update($request->all());
        return response()->json(
            [
                'message' => 'Data berhasil diubah'
            ]
        );
    }
    public function delete($id)

    {
        $data = EgikModel::where('id', $id)->first();
        $data->delete();
        return response()->json(
            [
                'message' => 'Data berhasil di hapus'
            ]
        );
    }
}
