<?php


class ArticleController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $all=Article::all();
        return View::make('admin/article')->with('all',$all);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('admin/articleAdd');
	}

    public function getAdd(){
        $article=new Article();
        $article->theme=Input::get('theme');
        $article->category_id=Input::get('category_id');
        $article->content=Input::get('content');
        $article->save();
        return Redirect::to('article');

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
	public function getMedia($id)
	{
		$message=Article::find($id);
        return View::make('admin/articleMedia')->with('message',$message);

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUpdate($id)
	{
        $article=Article::find($id);
        $article->theme=Input::get('theme');
        $article->category_id=Input::get('category_id');
        $article->content=Input::get('content');
        $article->save();
        return Redirect::to('article');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($id)
	{
		$del=Article::find($id);
        DB::table('conments')->where('detail_id','=',$id)->delete();
        $del->delete();
        return Redirect::back();

    }

}
