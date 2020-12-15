<?php

namespace App\Http\Controllers;

use App\Services\StaffServices;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function __construct(StaffServices $staff)
    {
        $this->staff = $staff;
    }

    public function index() {
        $data = $this->staff->listStaff();
        return view('staff.index', compact('data'));
    }

    public function create(Request $request)
    {

       return view('staff.create');
    }

    public function store(Request $request)
    {
        $this->staff->storeStaff($request);
        return response()->json([

        ]);
    }

}
