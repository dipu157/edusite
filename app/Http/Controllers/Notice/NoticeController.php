<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    protected $user_id;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user_id = Auth::id();

            return $next($request);
        });
    }

    public function index()
    {
        return view('notice.manageNotice');
    }

    public function getAllNotice()
    {
        $bMember = Notice::query()->where('status',1)->get();
        $output = '';
        if($bMember->count() > 0){
            $output .= '<table id="noticeTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Notice Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($bMember as $bm) {
                $output .= '<tr>
                <td>'.$bm->id.'</td>
                <td>'. $bm->title.'</td>
                <td>'.$bm->description.'</td>
                <td>'.$bm->notice_date.'</td>
                <td>
                  <a class="btn-edit editIcon" data-bs-toggle="modal" data-bs-target="#editNoticeModal" id="' . $bm->id . '"><i class="bx bxs-edit"></i></a>

                  <a class="ms-3 btn-danger deleteIcon" id="' . $bm->id . '"><i class="bx bxs-trash"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        }else{
            echo '<h1 class="text-center text-secondary my-5">No Record Found in Database</h1>';
        }
    }

    public function create(Request $request)
    {
        $bData = [
            'institute_id' => 1,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'notice_date' => $request->notice_date,
            'expiry_date' => $request->expiry_date,
            'type' => $request->type,
            'confidentiality' => $request->confidentiality,
            'receiver' => $request->receiver,
            'user_id' => $this->user_id,
        ];

        //dd($bData);

        Notice::create($bData);
        return response()->json(['status' => 200]);
    }

    public function edit(Request $request){

        $id = $request->id;
        $ins = Notice::find($id);
        return response()->json($ins);
    }

    // handle update an InstituteInfo ajax request
    public function update(Request $request) {

        $member = Notice::find($request->id);

        $bData = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'notice_date' => $request->notice_date,
            'expiry_date' => $request->expiry_date,
            'type' => $request->type,
            'confidentiality' => $request->confidentiality,
            'receiver' => $request->receiver,
            'user_id' => $this->user_id,
        ];

        $member->update($bData);
        return response()->json([
            'status' => 200,
        ]);
    }

    public function delete(Request $request) {
        $id = $request->id;
        Notice::destroy($id);
    }
}
