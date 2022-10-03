<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcurementModel;
use App\Models\ProcurementItems;


class ProcurementController extends Controller
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

    public function generatePRNo()
    {
        return response()->json(ProcurementModel::select(ProcurementModel::raw('id,pr_no,YEAR(pr_date) as pr_date'))
            ->limit(1)
            ->orderby('id', 'DESC')
            ->get());
    }


    public function ReservedPurchaseNo(Request $request)
    {

        ProcurementModel::create($request->all());

        return (['message' => 'successfull']);
    }
    public function create_pr_item(Request $request)
    {
        $request->validate([
            'qty' => ['required','max:255'],
            'description' => ['required'],
        ]);

        $app_item = new ProcurementItems([
            'id'          => $request->input('id'),
            'app_id'      => $request->input('app_id'),
            'pr_id'       => $request->input('pr_id'),
            'description' => $request->description,
            'unit_id'     => $request->input('unit_id'),
            'qty'         => $request->qty,
            'abc'         => $request->input('abc'),
        ]);
        $app_item->save();
        return response()->json('Product created!');
        // ProcurementItems::create($request->all());

        // return (['message' => 'successfull']);
    }

    public function findPurchaseNo($id)
    {
        return response()->json(ProcurementModel::find($id));
    }



    /**pr_no
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
