<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Information::get()->pluck('content', 'type')->sortBy('id')->toArray();

        return $info;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Information $information
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Information $information
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        $datas = $request->all() ?: [];
        foreach ($datas as $key => $data) {
            /** @var Information $info */
            $info = Information::where('type', $key)->first();
            if ($info->update(['content' => $data])) {
                $datas[$key] = $data;
                continue;
            }

            return [
                'datas' => false,
                'mess'   => 'Your changes have been error',
            ];
        }
        DB::commit();
        if (empty($datas)) {
            return [
                'datas' => false,
                'mess'   => 'Your changes have been error',
            ];
        }

        return [
            'datas' => $datas,
            'mess'   => 'Your changes have been saved',
        ];
//        while ($item = current($array)) {
//
//            $info = Information::where('type', key($array))->first();
//            $info->update(array('content'=>$item));
//            next($array);
//        }
//
//        return response()->json('');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Information $information
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
    }
}
