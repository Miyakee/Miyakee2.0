<?php
class DetailController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex($id)
	{            $reconment=array();

        $article=Article::find($id);
        $click=$article->click;
        $click++;
        $article->click=$click;
        $article->save();
        $coment=DB::table('conments')->where('categroy_id','1')->where('detail_id',$id )->get();

        foreach($coment as $m=>$each){
            $becoment=$each->id;
            $huifu=DB::table('conments')->where('categroy_id','2')->where('belong',$becoment)->get();
//                   if(empty($huifu)){
//                       $each->huifu=null;
//                   }

//var_dump($huifu);
            $each->huifu=$huifu;

        }
//        var_dump($coment);
//
//        exit();
        $coments=Conment::where('categroy_id','1')->where('detail_id',$id )->count();
        return View::make('home/detail')->with('detail_id',$id )->with('article',$article)->with('conment',$coment)->with('num',$coments);

    	}




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
    public function getDetail(){
        $article=Article::all();
        return View::make('home/detail')->with('article',$article);
    }


    public  function  postAddconments(){
        $add=new Conment();
        $data=$_POST['data'];
        $data=json_decode($data);
//        $add->name=$data->name;
//        $add->email=$data->email;
        $add->content=$data->content;
        $add->categroy_id=1;//1代表是给文章的评论，2代表是对某人评论的回复；
        $add->detail_id=$data->detail_id;
        $add->toSomeone=$data->toSomeone;//0代表无，这个值记录的是被回复的人的id；
        $add->goods=0;
        $add->bads=0;
        $add->visitor=$data->name;
        $res=$add->save();

        if($res>0){
            $coment=Conment::where('categroy_id','1')->where('detail_id',$data->detail_id )->orderBy('created_at','desc')->first();
          return $coment;

        }else{
            $arr=array(
                "status"=>400,
                "info"=>"error",
                "mes"=>""

            );
            return json_encode($arr);
        }
//          $coment=Conment::all();

        //        var_dump($data);
    }


    public  function  postAddhuifu(){
        $add=new Conment();
        $data=$_POST['data'];
        $data=json_decode($data);
//        $add->name=$data->name;
//        $add->email=$data->email;
        $add->content=$data->content;
        $add->categroy_id=2;//1代表是给文章的评论，2代表是对某人评论的回复；
        $add->detail_id=$data->detail_id;
        $add->toSomeone=$data->toSomeone;//0代表无，这个值记录的是被回复的人的id；
        $add->goods=0;
        $add->bads=0;
        $add->belong=$data->belong;

        $add->visitor=$data->name;
        $res=$add->save();

        if($res>0){
            $coment=Conment::where('categroy_id','2')->where('detail_id',$data->detail_id )->orderBy('created_at','desc')->first();
            return $coment;

        }else{
            $arr=array(
                "status"=>400,
                "info"=>"error",
                "mes"=>""

            );
            return json_encode($arr);
        }
//          $coment=Conment::all();

        //        var_dump($data);
    }

    public function postAddlike(){
        $data=$_POST['data'];
        $data=json_decode($data);
//        var_dump($data);
//        return $data;
//
        $id=$data->id;
        $res=$data->res;
        $article=Article::find($id);
        $goods=$article->goods;
        if($res==1){

            $goods++;

        }else{

            $goods--;

        }
        $article->goods=$goods;
        $article->save();
        return 200;
    }
}
