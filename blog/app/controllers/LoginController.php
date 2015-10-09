<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
      //  $all=Article::all();
        return View::make('admin/login');
	}


    public function postLogin(){
        $user=new User;
        $name=Input::get('name');
        $password=md5(Input::get('username'));
        $res=$user->where('name',$name)->where('password',$password)->count();
//        var_dump($res);
if($res==1){
    Session::put('is_login',1);
    return Redirect::to('admin');
}else{
    Session::put('is_login',0);

    return Redirect::to('adminLogin');

}
    }
//    public function Article(){
//
//        $all=Article::all();
//        return View::make('Admin/article')->with('all',$all);
//    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
