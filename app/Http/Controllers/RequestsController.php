<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\Auth::user()->status==1)
        {
        return view('faculty.newreq');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(\Auth::user()->status==1)
        {
        $this->validate($request, Requests::$rules);
        $data=$request->only('item', 'quantity', 'name','role','department');
        $data['name']=\Auth::user()->name;
        $data['role']=\Auth::user()->role;
        $data['department']=\Auth::user()->department;

        $user=Requests::create($data);
        if($user)
        return back()->withInput();
        else
        return 0;
        }
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
    public function requests()
    {
        return 1;
    }

    public function viewstatus()
    {
        if(\Auth::user()->status==1)
        {
            if((\Auth::user()->role)==1)
            {
        $items=DB::select('select item, sum(quantity) as quantity from requests where statusH=:statusH 
        && (role=:role||role=:role1) && department=:department group by item', 
        ['statusH' => '0', 'role' => '0', 'role1' => '1', 'department' => \Auth::user()->department]);

    
        return view('hod.viewstatus', ['items' => $items]);
            }
            if(\Auth::user()->role==2)
            {

                $indentno=DB::select('select indentno from indentno where status=:status', ['status' => '0']);
                $i=count($indentno);
                //return $indentno[0] ->indentno;
                return view('storemanager.viewstatus', ['indentno' => $indentno, 'i' => $i]);
            }
        }

    }

}
