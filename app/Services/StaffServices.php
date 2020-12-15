<?php

namespace App\Services;

use App\Repositories\StaffRepositoryInterface;
use Illuminate\Http\Request;

class StaffServices extends BaseServices {

    public function __construct(StaffRepositoryInterface $staff)
    {
        $this->staff = $staff;
    }

    public function listStaff()
    {
        return $this->staff->listStaff();
    }

    public function storeStaff(Request $request)
    {
        $attributes = $request->all();
        return $this->staff->storeStaff($attributes);
    }

}
