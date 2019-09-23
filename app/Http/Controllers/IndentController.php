<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;
use App\User;
use App\Indent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class IndentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

        $data=$request->only( 'indentno', 'item', 'quantity', 'department');
        $user=Indent::create($data);
        /*$q=DB::table('requests')
        ->where([['statusH', 0], ['department',\Auth::user()->department], ['item', $user['item'] ]]);
        $que=DB::table('request')
        ->where(function($q)
        {
            $q->where('role', '=', '0')
            ->orWhere('role', '=', '1');
        });
        $query=DB::table('requests')
        ->update(['statusH' => 1]);*/

        DB::table('requests')
        ->where([['statusH', 0], ['role', 0], ['department',\Auth::user()->department], ['item', $user['item'] ]])
        ->orWhere([['statusH', 0], ['role', 1], ['department',\Auth::user()->department], ['item', $user['item'] ]])
        ->update(['statusH' => 1]);

        return redirect()->route('viewstatus');
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

    public function facultystatus($item)
    {
        if(\Auth::user()->status==1)
        {
       $names= DB::select('select name from requests where 
        statusH=:statusH && (role=:role || role=:role1) && department=:department && item=:item', 
        ['statusH' => '0', 'role' => '0', 'role1' => '1', 'department' => \Auth::user()->department, 'item' => $item]);
        return view('hod.facultystatus', ['names' => $names]);
        }
    }

    public function generateindent()
    {
        if(\Auth::user()->status==1)
        {
$data=DB::select('select item, quantity from indent where statusH=:statusH && 
department=:department',['statusH' => '0', 'department' => \Auth::user()->department]);
       
        return view('hod.generateindent', ['data' => $data]);
        }
    }


    public function indentsubmit(Request $request)
    {
        if(\Auth::user()->status==1)
        {
            $i=$request->only('i');
            $i= --$i['i'];
            while($i!=-1)
            {
            $data=$request->only('item'.$i, 'quantity'.$i, 'indentno');
            $item='item'.$i;
            $quantity='quantity'.$i;
                DB::table('indent')
                ->where([['indentno', $data['indentno']], ['item', $data[$item]], ['quantity', $data[$quantity]]])
                ->update(['statusH' => '1']);
                

                /*DB::table('indentno')
                ->insert(
                    ['indentno' => '1', 'status' => '1']


                );*/
                
                
            $i--;


            }

            return Redirect::back();
            
            
        }
    }

    public static function indentfaculty($i)
    {
        
        $items=DB::select('select item, quantity, department from indent where indentno=:indentno', 
        ['indentno' => $i]);
        return $items;
        // return view('storemanager.viewstatus', ['items' => $items]);
    }

}
