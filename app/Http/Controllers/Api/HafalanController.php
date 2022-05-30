<?php

namespace App\Http\Controllers\Api;

use App\Models\Hafalan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\HafalanResource;
use App\Http\Requests\StoreHafalanRequest;

class HafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 15;
        if(request()->perpage) {
            $perPage = request()->perpage;
        }
        // dd($perPage,request());
        return HafalanResource::collection(Hafalan::orderBy('created_at','DESC')->with('user')->paginate($perPage));
    }


    public function store(StoreHafalanRequest $request)
    {
        $hafalan = Hafalan::create($request->all());
        return new HafalanResource($hafalan);
    }


    public function show($id)
    {
        $hafalan = Hafalan::findOrFail($id);
        return new HafalanResource($hafalan);
    }



    public function update(StoreHafalanRequest $request, $id)
    {
        $hafalan = Hafalan::findOrFail($id);
        $hafalan->update($request->all());
        return new HafalanResource($hafalan);
    }


    public function destroy($id)
    {
        $hafalan = Hafalan::findOrFail($id);
        $hafalan->delete();
        return response('Hafalan deleted',200);
    }
}
