<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\InstituteInfo\InstituteInfo;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$instituteInfo = InstituteInfo::query()->get();
        //dd($instituteInfo);
        return view('Institute.manageInstitute');
    }

    public function getAllInstitute()
    {
        $instituteInfo = InstituteInfo::all();
        $output = '';
        if($instituteInfo->count() > 0){
            $output .= '<table id="instituteTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>logo</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($instituteInfo as $i_info) {
                $output .= '<tr>
                <td>'.$i_info->id.'</td>
                <td><img src="storage/images/'.$i_info->logo.'" width="50"
                class="img-thumbnail"></td>
                <td>'. $i_info->name.'</td>
                <td>'.$i_info->address.'</td>
                <td>'.$i_info->email.'</td>
                <td>'.$i_info->phone_no.'</td>
                <td>'.$i_info->website.'</td>
                <td>
                  <a class="btn-edit" data-bs-toggle="modal" data-bs-target="#addDesignationModal" id="' . $i_info->id . '"><i class="bx bxs-edit"></i></a>

                  <a class="ms-3 btn-delete" id="' . $i_info->id . '"><i class="bx bxs-trash"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        }else{
            echo '<h1 class="text-center text-secondary my-5">No Record Found in Database</h1>';
        }
    }
}
