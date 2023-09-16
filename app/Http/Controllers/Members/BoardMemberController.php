<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Member\BoardMember;
use Illuminate\Http\Request;

class BoardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Members.Board.manageBoard');
    }

    public function getAllMemebers()
    {
        $bMember = BoardMember::query()->where('status',1)->get();
        $output = '';
        if($bMember->count() > 0){
            $output .= '<table id="memberTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Full Name</th>
                <th>Position</th>
                <th>Mobile</th>
                <th>DOB</th>
                <th>Blood Group</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($bMember as $bm) {
                // Generate the image URL
                $defaultImage = asset('storage/images/1694713766.jpg');
                $imageUrl = asset('storage/images/'.$bm->photo);
                $imageSrc =  $bm->photo ? $imageUrl : $defaultImage;

                $output .= '<tr>
                <td>'.$bm->id.'</td>
                <td><img src='.$imageSrc.' width="50" class="img-thumbnail"></td>
                <td>'. $bm->full_name.'</td>
                <td>'.$bm->position.'</td>
                <td>'.$bm->mobile.'</td>
                <td>'.$bm->dob.'</td>
                <td>'.$bm->blood_group.'</td>
                <td>
                  <a class="btn-edit editIcon" data-bs-toggle="modal" data-bs-target="#editMemberModal" id="' . $bm->id . '"><i class="bx bxs-edit"></i></a>

                  <a class="ms-3 btn-delete" id="' . $bm->id . '"><i class="bx bxs-trash"></i></a>
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
