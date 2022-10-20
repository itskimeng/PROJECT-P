<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppItem;
use App\Http\Controllers\Controller;

class AppItemController extends Controller
{
    public function index()
    {
        $app_items = AppItem::all()->toArray();
        return array_reverse($app_items);      
    }
    public function getAppData()
    {
        return response()->json(AppItem::select('id','procurement','app_price','year')
            ->where('year', 2022)
            ->orderBy('procurement')
            ->limit(100)
            ->get());
    }
    public function show($id)
    {
        $app_item = AppItem::
        select(AppItem::raw('
            app_items.id as `app_id`,
            app_items.serial_no as `serial_no`,
            app_items.procurement as `procurement`,
            app_items.unit_id as `unit_id`,
            app_items.category_id as `category_id`,
            app_items.mode as `mode`,
            app_items.app_price as `app_price`,
            app_items.year as `year`,
            item_unit.item_unit_title as  `item_unit_title`,
            item_category.item_category_title as `item_category_title`,
            mode_of_proc.mode_of_proc_title as `mode_of_proc_title`


        '))
        ->join('item_category', 'app_items.category_id', '=', 'item_category.id')
        ->join('mode_of_proc', 'app_items.mode', '=', 'mode_of_proc.id')
        ->join('item_unit', 'app_items.unit_id', '=', 'item_unit.id')
        ->find($id);
        return response()->json($app_item);
    }
    public function store(Request $request)
    {
        $app_item = new AppItem([
            'name' => $request->input('name'),
            'detail' => $request->input('detail')
        ]);
        $app_item->save();
        return response()->json('Product created!');
    }
    public function update($id, Request $request)
    {
        $app_item = AppItem::find($id);
        $app_item->update($request->all());
        return response()->json('Product updated!');
    }
    public function destroy($id)
    {
        $app_item = AppItem::find($id);
        $app_item->delete();
        return response()->json('Product deleted!');
    }
}
