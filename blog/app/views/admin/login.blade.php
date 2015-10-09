<html>
<head>

<style  >

*{margin:0;padding:0;}
body{
background-color:forestgreen;
color: indianred;
font-family: Microsoft YaHei;

}
body div.login{
font-size: 18px;
font-weight: 800;
text-align: center;
background-color:forestgreen ;
padding-top: 100px;
width:300px;
height:100%;
margin: auto;
/*text-align: justify;*/
}
body div.login input.shuru{
    border-radius:5px;
            /*height:30px;*/
            /*padding: 5px;*/
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
           margin:30px;
}
body div.login input.go{
background: url("{{__PUBLIC__.'/pic/login2.png'}}") no-repeat 0 0 ;
height: 40px;
width: 40px;
        border:0;

}
</style>
</head>
<body>
<div class="login">
<form method="post" action="{{action('LoginController@postLogin')}}">
<p>芝麻开门<input type="text" name=name class="shuru"/></p>
<p>魔法咒语<input type="password" name=password class="shuru"/></p>
<input type="submit" class="go" value="">
</form>
</div>
</body>
</html>