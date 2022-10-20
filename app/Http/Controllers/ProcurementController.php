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

    public function countCart($id)
    {
        
        // return response()->json(ProcurementItems::select(ProcurementModel::raw('count(*)'))->find($id));
        return response()->json(ProcurementItems::select(ProcurementItems::raw('count(*) as cart,  sum(qty * abc) as "gTotal" '))->where('pr_id',$id)
        ->get());


    }

    public function findPurchaseNo($id)
    {
        return response()->json(ProcurementModel::find($id));
    }

    public function viewPRDetails($id){
       return response()->json(ProcurementModel::select('*')
        ->leftJoin('procurement_items', 'procurement_models.id', '=', 'procurement_items.pr_id')
        ->leftJoin('app_items', 'procurement_items.app_id', '=', 'app_items.id')
        ->where('procurement_models.id',$id)->get());

    }
    
    public function fetchPurchaseRequestList(){

        return response()->json(ProcurementModel::select('id','pr_no','purpose','office','user_id','admin_id','action_date','pr_date','target_date','submitted_date','received_date','received_by')
            ->orderby('ID','desc')
            ->get());
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
    public function updatePRDetails(Request $request, $id)
    {
        $pr = ProcurementModel::find($id);

        $pr->pr_date = $request->pr_date;
        $pr->target_date = $request->target_date;
        $pr->office = $request->office;
        $pr->purpose = $request->purpose;
        $pr->save();
       
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
