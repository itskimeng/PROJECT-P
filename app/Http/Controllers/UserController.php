<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    // public function getUserInfo()
    // {
    //     return response()->json(ProcurementModel::
    //     select(ProcurementModel::raw('
    //     tbl_office.id,
    //     officfe_id,
    //     office_title'))
    //     ->join('user', 'tbl_office.office_id', '=', 'user.id')
    //     ->limit(1)
    //     ->get());
    // }
}
