<?php

namespace App\Repositories;

use App\Model\Staff;

class StaffRepository implements StaffRepositoryInterface {

    public function __construct(Staff $model)
    {
        $this->model = $model;
    }

    public function listStaff()
    {
        return $this->model->orderBy('id', 'DESC')->get();
    }

    public function storeStaff($attributes = [])
    {
        return $this->model->create($attributes);
    }

}
