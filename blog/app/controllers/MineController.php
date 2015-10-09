<?php


class MineController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $all=User::find(1);
        return View::make('admin/mine')->with('all',$all);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getMedia()
	{   $m=User::find(1);

        return View::make('admin/mineMedia')->with('message',$m);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUpdate($id)
	{
        $mine=User::find($id);
        $mine->name=Input::get('name');
        $mine->love=Input::get('love');
        $mine->school=Input::get('school');
        $mine->hobby=Input::get('hobby');
        $mine->age=Input::get('age');
        $mine->address=Input::get('address');
        $mine->work=Input::get('work');
        $mine->birthday=Input::get('birthday');
        $mine->save();
        return Redirect::to('mine');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($id)
	{
	}

}
