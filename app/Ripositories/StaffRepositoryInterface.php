<?php

namespace App\Repositories;


interface StaffRepositoryInterface {

    public function listStaff();

    public function storeStaff($attributes = []);

}
