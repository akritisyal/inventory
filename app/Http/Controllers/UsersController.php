<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyMail;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
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
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, User::$create_rules);
        $data=$request->only('name', 'email', 'password','role','department','verifyToken');
        $data['password']=bcrypt($data['password']);
        $data['verifyToken']=Str::random(40);

        $user=User::create($data);
        if($user)
        {
        \Auth::login($user); 
        $v=$this->verify($user);
        return redirect()->route('verifyEmail');

       

        }
        return back()->withInput();
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

    public function switchapps()
    {
        //$user=User::where(['email'=>$email])->first();
        if(\Auth::user()->status==1)
        return view('switchapps');
        else
        return redirect()->route('login');
    }
    public function welcome()
    {   if(\Auth::user()->status==1)
        return view('welcome');
    }
    public function others()
    { if(\Auth::user()->status==1)
        return view('others');
    }
    public function orders()
    { if(\Auth::user()->status==1)
        return view('orders');
    }
    public function verifyEmail()
    { 
        return view('verifyEmail');
    }
    public function sendEmail($thisUser)
    {
        Mail::to($thisUser['email'])->send(new verifyMail($thisUser));
        
    }
    public function sendEmailDone($email, $verifyToken)
    {
        $user=User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
        if($user)
        {
            $u= User::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
            return redirect()->route('switchapps');
        }
        else
        {
            return 'user not found';
        }
    }
    public function verify($user)
    {
        $thisUser=User::findOrFail($user->id);
        $this->sendEmail($thisUser);
        return $user;
    }



    public function role()
    {

        //return view('faculty.home');
        /*$user=User::where(['email'=>$email]);*/
        $user=User::where(['email'=>\Auth::user()->email])->first();
        if($user['role']==0 && $user['status']==1)
        return view('faculty.home');
        else if($user['role']==1)
        return view('hod.home');
        else if($user['role']==2)
        return view('storemanager.home');
        else
        return view('vc.home');
        //else if($user['role']==)
        
}


public function profile()
{
    if(\Auth::user()->status==1)
    {
 $user=User::where(['email'=>\Auth::user()->email])->first();
    if($user['role']==0 && $user['status']==1)
    return view('faculty.profile');
    else if($user['role']==1)
    return view('hod.profile');
    else if($user['role']==2)
    return view('storemanager.profile');
    else
    return view('vc.profile');
    //else if($user['role']==)
    }
    
}

public function request()
{ if(\Auth::user()->status==1)
    return view('faculty.newreq');
}

public function replacement()
{ if(\Auth::user()->status==1)
    return view('faculty.replacement');
}
public function request1()
{ if(\Auth::user()->status==1)
    return view('hod.newreq');
}

public function replacement1()
{ if(\Auth::user()->status==1)
    return view('hod.replacement');
}
public function viewstatus()
{ if(\Auth::user()->status==1)
    return view('hod.viewstatus');
}


public function assignitems()
{ if(\Auth::user()->status==1)
    return view('hod.assignitems');
}
public function usermanagement()
{ if(\Auth::user()->status==1)
    return view('storemanager.usermanagement');
}
public function reports()
{ if(\Auth::user()->status==1)
    return view('storemanager.reports');
}
public function replacement2()
{ if(\Auth::user()->status==1)
    return view('storemanager.replacement');
}
public function request2()
{ if(\Auth::user()->status==1)
    return view('storemanager.newreq');
}
public function itemmgmt()
{ if(\Auth::user()->status==1)
    return view('storemanager.itemmgmt');
}
public function fixedasset()
{ if(\Auth::user()->status==1)
    return view('storemanager.fixedasset');
}
public function consumables()
{ if(\Auth::user()->status==1)
    return view('storemanager.consumables');
}
public function nonconsumables()
{ if(\Auth::user()->status==1)
    return view('storemanager.nonconsumables');
}

public function reports1()
{ if(\Auth::user()->status==1)
    return view('vc.reports');
}

public function removefaculty()
{ if(\Auth::user()->status==1)
{
    $fac=DB::select('select name, email, status from users where department=:department && role=:role',
    ['department' => \Auth::user()->department, 'role' => '0']);
   return view('hod.removefaculty', ['fac' => $fac]);
}
}


public function remove($email)
{

    
   DB::table('users')
        ->where('email', $email )
        ->update(['status' => 0]);
        return redirect()->route('removefaculty');
        
}

public static function department($d)
{
    
    if($d==0)
    return 'IT';
    else if($d==1)
    return 'CSE';
    else if($d==2)
    return 'ECE';
    else if($d==3)
    return 'Mechanical';
    else if($d==4)
    return 'Architecture';
    else if($d==5)
    return 'Others';

}

public static function date()
{
$offset=19800;
$dateFormat="d-m-Y H:i";
$t=gmdate($dateFormat, time()+$offset);
return $t;

}

}