<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'SELECT * FROM contact WHERE 1';
        $result = DB::select($sql);
        $arrResult = [];
        foreach ($result as $row){
            $arrResult[] = (array)$row;
        }
        //Show Contact View
        return view('Contact', compact('arrResult'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sql = 'SELECT * FROM contact WHERE 1';
        $result = DB::select($sql);
        $arrResult = [];
        foreach ($result as $row){
            $arrResult[] = (array)$row;
        }

        return view('Contact', compact('arrResult'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];
        //
        DB::insert(
            'INSERT INTO contact (name,email,message) VALUES(?,?,?)',[
                $name,
                $email,
                $message
            ]
        );

        $sql = 'SELECT * FROM contact WHERE 1';
        $result = DB::select($sql);
        $arrResult = [];
        foreach ($result as $row){
            $arrResult[] = (array)$row;
        }

        return view('Contact', compact('arrResult'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
