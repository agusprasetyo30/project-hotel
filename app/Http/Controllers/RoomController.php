<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRoom(Request $request)
    {
        $jumlah_halaman = 5;

        $keyword = $request->get('search') ? $request->get('search') : '';

        $rooms = Room::where("name", "LIKE", "%$keyword%")->simplePaginate($jumlah_halaman);

        $number = numberPagination($jumlah_halaman);

        return view('admin.room.index', compact('rooms', 'number'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRoom()
    {
        // return view('admin.room.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRoom()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRoom(Request $request)
    {
        $image = $request->file('image');

        if ($image) {
            $image_path = uploadOriginalImage($image, "room", "room");
        } else {
            $image_path = "NO IMAGE";
        }

        Room::create([
            'name' => $request->get('room_name'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'image_path' => $image_path,
        ]);

        return redirect()->route('admin.room.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRoom($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRoom(Request $request, $id)
    {
        //
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function addRoomFacility(Request $request, $id)
    {
        //
    }
}
