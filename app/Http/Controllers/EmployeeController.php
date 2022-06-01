<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = User::select('rate' ,'name' ,'phone' ,'salary','email', 'id' , 'clientsNumber' )
        ->orderBy('id','DESC')
        ->where('role_id', '=' ,'3')->paginate(7);
        return view('empolyee/index',
        [
          'users'=>$users
        ]);
      
    }
    // public function edit($userid)
    // {
    //   $user = User::findOrFail($userid);
    //   return view('empolyee/edit', 
    //   [
    //        'user'=> $user
    //   ]);
    // }
    // public function update(User $user , Request $request)
    // {
    //       $data = $request->validate([
    //       'name'  => 'required ',
    //       'email'   => 'required ',
    //       'phone' => 'required ',
    //       'salary' => 'required ',
    //       'clientsNumber' => 'required ',
    //       'rate' => 'required ',
  
    //   ]);
     
    //    $user->update($data);
    //    return redirect(url('/users'));
    // }
    public function show( $user )
    {
        $user = User::findOrFail($user);
        return view('empolyee/show', 
        [
             'user'=> $user
        ]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(url('/empolyee'));
    }
    public function search(Request $request)
    {
    $keyword = $request->keyword;
    $users = User::where('name', 'like' , "%$keyword%")->get(); 
    return view('empolyee/search',[
          'users'=>$users,
          'keyword'=>$keyword
          ]);
    }
}
