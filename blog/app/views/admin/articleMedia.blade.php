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
color:black;
font-family:'Comic Sans MS', cursive, sans-serif;
}
 .newArticle{
position:relative;
top:10px;
;}
</style>
<script type="text/javascript" src="{{__PUBLIC__.'/ckeditor/ckeditor.js'}}"></script>

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
<form action="{{action('ArticleController@getUpdate',$message->id)}}" method="get">
                        <div><span>标题</span>
                            <div><input type="text" class="text" name="theme" value="{{$message->theme}}"/></div>
                        </div>
                        <div><span>分类</span>
                            <div><input type="text" class="text" name="category_id" value="{{$message->category_id}}"/></div>
                        </div>
						<div><span>内容</span>
                            <div><textarea class="text" id="TextArea1" name="content" cols="100" rows="30">{{$message->content}}</textarea></div>
                                                    <script type="text/javascript">CKEDITOR.replace('TextArea1');</script>

                        </div>
                        <div style="margin-top:20px;">
                            <input type="submit" name="submit" value="确定" class="submits" id="submit"/>
                            <button name="reset" onclick="javascript:history.back(-1);return false;" class="submits mybackbutton" id="reset" style="margin-left:50px;">
                            返回
                            </button>
                        </div>
                    </form>
</div></div>
<script type="text/javascript">
    window.onload = function()
    {
        CKEDITOR.replace( 'editor01' );
    };
</script></body>
</html>