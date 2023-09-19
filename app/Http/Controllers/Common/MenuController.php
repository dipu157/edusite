<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Menu\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
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
        return view('menu.manageMenu');
    }

    public function getAllMenus()
    {
        $bMember = Menu::query()->where('status',1)->get();
        $output = '';
        if($bMember->count() > 0){
            $output .= '<table id="menuTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($bMember as $bm) {
                $output .= '<tr>
                <td>'.$bm->id.'</td>
                <td>'. $bm->menu_name.'</td>
                <td>'.$bm->status.'</td>
                <td>
                  <a class="btn-edit editIcon" data-bs-toggle="modal" data-bs-target="#editMenuModal" id="' . $bm->id . '"><i class="bx bxs-edit"></i></a>

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
            'menu_name' => $request->menu_name,
            'description' => $request->description,
            'user_id' => $this->user_id,
        ];

        //dd($insData);

        Menu::create($bData);
        return response()->json(['status' => 200]);
    }

    public function edit(Request $request){

        $id = $request->id;
        $ins = Menu::find($id);
        return response()->json($ins);
    }

    // handle update an InstituteInfo ajax request
    public function update(Request $request) {

        $member = Menu::find($request->id);

        $bData = [
            'menu_name' => $request->menu_name,
            'description' => $request->description,
            'user_id' => $this->user_id,
        ];

        $member->update($bData);
        return response()->json([
            'status' => 200,
        ]);
    }

    public function delete(Request $request) {
        $id = $request->id;
        Menu::destroy($id);
    }
}