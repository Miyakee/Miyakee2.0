<html>
<head>

<style  >

*{margin:0;padding:0;}

 #header{ 
background-color:black;
height:20%;
width:100%;
font-size:2em;
color:white;
font-family:'Comic Sans MS', cursive, sans-serif;
}

 #container{
 min-height:80%;
 
overflow:hidden;padding:0;padding-left:200px;
 }
 #left{
 text-align:center;
 font-size:2em;
color:white;
font-family:'Comic Sans MS', cursive, sans-serif;
background:ghostwhite;
height:auto;
margin-bottom:-32767px;
padding-bottom:32767px;
display:inline;
float:left;
width:200px;
margin-left:-200px;}
 #right{
height:auto;
margin-bottom:-32767px;padding-bottom:32767px;
float:right;
width:100%;
background-color:white;
font-size:2em;
color:white;
font-family:'Comic Sans MS', cursive, sans-serif;
}

</style>
</head>
<body>
<div id="header">主人的博客首页</div>
<div id="container">
<div id="left">
<ul>
<a href="{{action('AdminController@index')}}"><li>
首页
</li></a>
<a href="{{action('MineController@getIndex')}}"><li>
个人信息
</li></a>
<a href="{{action('ArticleController@getIndex')}}"><li>
文章管理
</li></a>
<a href="{{action('PictureController@getIndex')}}"><li>
图片管理
</li></a>
<a href="{{action('ConmentController@getIndex')}}"><li>
评论管理
</li></a>
<a href=""><li>
访客管理
</li></a>
</ul>
</div>
<div id="right" >
<a href="{{action('ArticleController@getCreate')}}">
<button class="newArticle">add new</button></a>
<table border="1" width="80%">
<th>id</th><th>标题</th><th>分类</th><th>内容</th><th>喜欢</th><th>不喜欢</th><th>创建时间</th><th>修改时间</th><th>操作</th>
@foreach($all as $each)
<tr>
<td>{{$each->id}}</td>
<td>{{$each->theme}}</td>
<td>{{$each->category_id}}</td>
<td>{{$each->content}}</td>
<td>{{$each->goods}}</td>
<td>{{$each->bads}}</td>
<td>{{$each->created_at}}</td>
<td>{{$each->updated_at}}</td>
<td><p><a href="{{URL::action('ArticleController@getMedia',$each->id)}}">修改</a></p>
<p><a href="{{URL::action('ArticleController@getDestroy',$each->id)}}">删除</a></p></td>

</tr>
@endforeach
</table></div>

</div>
</body>
</html>