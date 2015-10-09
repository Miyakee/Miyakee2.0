<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        a{
            text-decoration:none;
        }
        p{
            font-family: 'Droid Serif', Verdana, Arial, sans-serif;
            /*font-size:14pt;*/
        }
        ul{
            list-style-type: none;
        }
        #head{
            background-color: white;
            position: fixed;
            top:0;
            left: 0;
            height:121px;
            width: 100%;
            border-bottom: 1px solid #d8d8d8;
            z-index: 2;
            /*line-height: 121px;*/
        }
        #head .blog_title{
       margin-top: 40px;
        margin-left: 40px;
        float: left;
            font-size: 14px;
        }
        #head .sentense{
           /*line-height: 121px;*/
            margin-left:240px ;
            /*padding-left: 200px;*/
            font-size: 18px;
            margin-top: 30px;
            text-decoration: none;
            width: 500px;
        }
        #head .sentense p.pro{
            /*height:30px;*/
        }
        #head .blog_title p span.second{
           color:   #848484;
            /*margin-top: -10px;*/
        }
        #contain {
            /*height:100%;*/
            /*height: 1000px;*/
            width: 100%;
            background-color: white;

        }
        #left-nav{
            position: fixed;
            background-color: white;
            width: 200px;
            height: 300px;
            top:123px;
            left: 0;
        }
        #left-nav .nav{
         margin-left: 40px;
            margin-top: 60px;
        }
        #left-nav .nav li{
            display: block;
            margin-top: 5px;
        }
        #left-nav .nav li p a{
            font-family: 'Droid Serif', Verdana, Arial, sans-serif;
            font-size: 14pt;
            color: #707070;

        }
        #left-nav .nav li p a:hover,#left-nav .nav li p a.current{
            color: black;
        }
        /*#contain{*/
        /*min-width: 900px;*/
        /*}*/
        #contain .bottom{
            background-color: white;
            height: 60px;
            width:200px ;
            position: fixed;
            bottom: 2px;
            left: 30px;
        }
        #contain .bottom ul{
            overflow: hidden;
            /*margin-left: 30px;*/
        }
        #contain .bottom li{
            height: 25px;
            width: 25px;
            display: block;
            float: left;
            margin-left: 5px;

         /*margin-bottom: 10px;*/
/*border-width: 0;*/
            /*border: 1px solid #FFFFFF;*/
        }
        #contain .bottom li.facebook{
            background: url("{{__PUBLIC__.'/pic/facebook.png'}}") no-repeat;
        }
        #contain .bottom li.rss{
            background: url("{{__PUBLIC__.'/pic/rss.png'}}") no-repeat ;
        }
        #contain .bottom li.twitter{
            background: url("{{__PUBLIC__.'/pic/twitter.png'}}") no-repeat ;
        }
        #contain .bottom p{
        /*margin-left: 30px;*/
            font-size: 12px;
            color: #707070;
            margin-top: 10px;

        }
        #contain .content{
            background: white;
            width: 720px;
            height: inherit;
            margin-left:240px ;
            z-index: 4;
        }
        #contain div.content {
            padding-top:170px ;
        }
        #contain div.content div.slide{
            overflow: hidden;
            height: 320px;
            width: 720px;
        }
        #contain div.content div.slide ul.lunbo{
        /*overflow: hidden;*/
            /*display: inline;*/
            position: relative;
            left: 0px;
            width: 5999px;
        }
        #contain div.content div.slide ul.lunbo li{
            /*float: left;*/
            position: relative;
            display: inline-block;
            height: 320px;
            width: 720px;
            top:0;
            /*top:170px;*/
        }
        #contain div.content div.slide ul.lunbo li.img1{
            /*left: 3200px;*/
        }
        #contain div.content div.slide ul.lunbo li.img2{
            /*left: -800px;*/
        }
        #contain div.content div.slide ul.lunbo li.img3{
               /*left: 10px;*/
           }
        #contain div.content div.slide ul.lunbo li.img4{
                  /*left: 10px;*/
              }
        #contain div.content div.slide div.buttons{
            /*background-color: black;*/
            position: relative;
            bottom: 30px;
            left: 320px;
overflow: hidden;        }
        #contain div.content div.slide div.buttons span{
            display: block;
            width: 7px;
            height: 7px;
            background: whitesmoke;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            border-radius: 10px;
            z-index: 8;
            float: left;
            margin-left: 10px;
        }
        #contain div.content div.slide div.buttons span.on{

            background: gray;

        }
        #contain div.content div.slide div.arrow{
            position: relative;
            left: 0;
            top:-200px;
            /*width: 0px;*/
            /*position: absolute;*/

            height: 10px;
        }
        #contain div.content div.slide div.arrow span{
            /*display: inline-block;*/
display: none;
            width: 20px;
            height: 20px;
            background: gray;
            -moz-border-radius: 25px;
            -webkit-border-radius: 25px;
            border-radius: 20px;
            z-index: 8;
            /*float: left;*/
            /*margin-left: -20px;*/
        }
        #contain div.content div.slide div.arrow span.preve{
            /*left: 15px;*/
            float: left;
            margin-left: 30px;
        }
        #contain div.content div.slide div.arrow span.next{
            float: right;
            margin-right: 50px;
        }
        #contain div.content div.list{
            /*border-bottom: 1px solid #d8d8d8;*/
            padding-bottom: 50px;
        }
        #contain div.content div.list div.article{
            border-top: 1px solid #d8d8d8;
            margin-top: 45px;
            /*text-align: center;*/
            text-align:justify;

        }
        #contain div.content div.list div.article h2 a{
            color: #454544;
            line-height: 100px;
            /*border-bottom: 3px solid #d8d8d8;*/
            font-family: 'Droid Serif', Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>
<div id="head">
    <div class="blog_title">
       <p> <span class="second">WELCOME</span></p>
       <p> <span class="">MIYAKEE</span></p>
       <p> <span class="second">BLOGGGGGGGG</span></p>
    </div>
    <div class="sentense">
        <p class="pro">Welcome to my Blog  miyakeeヽ(*。>Д<)o゜ </p>
        <p class="pro" >死宅一枚(๑ŐдŐ)b</p>
    </div>
</div>
<div id="contain">
    <div id="left-nav">
        <ul class="nav" id="nav">
        <li id="home" ><p><a href="" class="current">Home</a><img src="{{__PUBLIC__.'/pic/go.png'}}"></p></li>
            <li id="article"><p><a  href="">Articles</a></p></li>
            <li><p><a  href="">About</a></p></li>
            <li><p><a  href="">Life</a></p></li>
            <li><p><a  href="">Pictures</a></p></li>
            <li><p><a  href="">Other</a></p></li>
</ul>
    </div>
    <div class="bottom">
        <ul>
           <li  class="facebook">   <a ></a></li>
            <li class="rss">     <a ></a></li>
            <li  class="twitter"> <a ></a></li>
</ul>
        <p> a Cake To You</p>

</div>
    <div class="content">
        <div class="slide" id="slide">
            <ul class="lunbo" id="lunbo">
           <li class="img1"> <img src="{{__PUBLIC__.'/img/y2.jpg'}}"></li>
           <li class="img2"> <img src="{{__PUBLIC__.'/img/m1.jpg'}}"></li>
            <li class="img3"><img src="{{__PUBLIC__.'/img/ss.jpg'}}"></li>
            <li class="img4"><img src="{{__PUBLIC__.'/img/sc1.jpg'}}"></li>
</ul>
        <div class="buttons" id="buttons">
            <span index="1" class="on"></span>
            <span index="2"></span>
            <span index="3"></span>
           <span index="4"></span></div>
      <div class="arrow">
          <span class="preve" id="preve"></span>
          <span class="next" id="next"></span>
      </div>
        </div>
        <div class="list">
        @foreach($article as $articles)
        <div class="article">
            <h2 class="title"><a href="{{action('DetailController@getIndex',$articles->id)}}">{{$articles->theme}}</a></h2>
            <p>{{$articles->content}}</p>
        </div>
        @endforeach
</div>
    </div>
</div>
<script>
//    <!-- 轮播效果第一版-->
window.onload=function(){
    var slide=document.getElementById("slide");
    var pre=document.getElementById("preve");
    var next=document.getElementById("next");
    var lunbo=document.getElementById("lunbo");
    var buttons=document.getElementById("buttons").getElementsByTagName("span");
    var index=1;
    var timer;
    next.onclick=function(){
        animate(-728);
        index++;
        if(index==buttons.length+1){
           lunbo.style.left=0+"px";
            index=1;
        }
        buttonson();
    };
    pre.onclick=function(){
        animate(728);
        index--;

        if(index==0){
            lunbo.style.left=-2184+"px";
            index=4;
        }
        buttonson();
    };
    function animate(offset){
        var time=300;
        var interval=10;
        now=lunbo.offsetLeft-240;
        lunbo.style.left=now+"px";
        var aim=now+offset;
        var speed=offset/(time/interval);
        function go(){
            if(aim<=0&&aim>=-2184){
                if((speed<0&&parseInt(lunbo.style.left)>aim)||(speed>0&&parseInt(lunbo.style.left)<aim)){
                lunbo.style.left=parseInt(lunbo.style.left)+speed+"px";
                setTimeout(go,interval);
                }
                else{
            lunbo.style.left=aim+"px";
                 }
            }else if(aim>0){
                 lunbo.style.left=2184+"px";
            }else{
                 lunbo.style.left=0+"px";
            }
        }
        go();
    }

    function buttonson(){
        for(var i=0;i<buttons.length;i++) {
            buttons[i].className = "";
        }
           buttons[index - 1].className = "on";
    }
    for(var i=0;i<buttons.length;i++) {
        buttons[i].onclick = function () {
            index=this.getAttribute('index');
            lunbo.style.left=-728*(index-1)+"px";
            buttonson();
        }
    }

    function start(){
        timer=setInterval(function(){
            next.onclick();
        },2000);
    }
    function stop(){
        clearInterval(timer);
    }
    lunbo.onmouseover = stop;
    lunbo.onmouseout = start;
 start();
};
//    侧栏鼠标移动上去效果
//    var nav=document.getElementById("nav").getElementsByTagName("a");
//for(var i=0;i<nav.length;i++)
//    nav[i].onmousemove=function(){
//
//  }
</script>
</body>
</html>