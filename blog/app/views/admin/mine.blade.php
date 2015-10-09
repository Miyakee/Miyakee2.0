<html>
<head>

<style>

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
color:ghostwhite;
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
 .newArticle{
position:relative;
top:10px;
;}
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
<table border="1" width="80%">
<tr>
<td>主人的名字</td>
<td>{{$all->name}}</td>
</tr>
<tr>
<td>主人的年龄</td>
<td>{{$all->age}}</td>
</tr><tr>
<td>主人的like</td>
<td>{{$all->love}}</td>
</tr><tr>
<td>主人的生日</td>
<td>{{$all->birthday}}</td>
</tr><tr>
<td>主人的家在</td>
<td>{{$all->address}}</td>
</tr><tr>
<td>主人的职业</td>
<td>{{$all->work}}</td>
</tr>
<tr>
<td>主人的学校</td>
<td>{{$all->school}}</td>
</tr>
<tr>
<td>主人的爱好</td>
<td>{{$all->hobby}}</td>
</tr>
</table>
<a href="{{action('MineController@getMedia')}}">
<button class="newArticle">啊咧？！资料不对？请主人修改咯</button>
</div></div>
</body>
</html>