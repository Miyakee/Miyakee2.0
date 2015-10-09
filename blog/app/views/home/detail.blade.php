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
        }
        #head .blog_title{
       margin-top: 40px;
        margin-left: 40px;
        float: left;
            font-size: 14px;
        }
        #head .sentense{
           line-height: 121px;
            margin-left:240px ;
            /*padding-left: 200px;*/
            font-size: 18px;
            text-decoration: none;
            width: 500px;
        }
        #head .blog_title p span.second{
           color:   #848484;
            /*margin-top: -10px;*/
        }
        #contain {
            /*height:100%;*/
            /*height: 2000px;*/
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
        #left-nav .nav li p{
            font-family: 'Droid Serif', Verdana, Arial, sans-serif;
            font-size: 14pt;
            color: #707070;

        }
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
        }
        #contain div.content {
            padding-top:170px ;
        }
        #contain div.content h2{

            font-family: 'Droid Serif', Verdana, Arial, sans-serif;
        line-height: 0.6em;
        color: #454544;
        text-decoration: none;
        font-size: 15pt;
            font-weight: 100;
        }
        #contain div.content div.label ul{
            list-style-type: none;
        }
        #contain div.content div.label ul li{
            float: left;
            list-style-type: none;
            display: block;
            line-height: 20px;
            font-size: 10px;
            font-family: 'Droid Sans', Verdana, Arial, sans-serif;
            color:#a9b7b7;
            padding-left:20px;
            margin-right: 50px;
            margin-top: 30px;
            /*height: 20px;*/
            /*width: 20px;*/
        }
        #contain div.content div.label ul li.writer{
          background: url("{{__PUBLIC__.'/pic/iconfont-edit1.png'}}") no-repeat 0 0;

        }
        #contain div.content div.label ul li.time{
            background: url("{{__PUBLIC__.'/pic/jstong.png'}}") no-repeat 0 0;

        }
        #contain div.content div.label ul li.visitor{
            background: url("{{__PUBLIC__.'/pic/visitor1.png'}}") no-repeat 0 0;

        }
        #contain div.content div.label ul li.like{
            background: url("{{__PUBLIC__.'/pic/like1.png'}}") no-repeat 0 0;
        }
        #contain div.content div.label ul li.conments{
            background: url("{{__PUBLIC__.'/pic/xxi.png'}}") no-repeat 0 0;

        }
        
        #contain div.content div.article img.arctile-title{
            /*background: url("img/blog1.jpg") no-repeat;*/
            width: 720px;
            height: 280px;
            /*margin-left: 20px;*/
            margin-top: 30px;
        }
        #contain div.content div.article div.write{
            text-align: justify;
            margin-top: 40px;
            color: #848484;
            font-size: 14px;
            font-family: 'Droid Sans', Verdana, Arial, sans-serif;
        }
        #contain div.content div.conments h1{
            margin: 40px 0;
            border-bottom: 1px solid #848484;
        }
        #contain div.content div.conments div.each-conment{
         border-bottom: 1px solid #a9b7b7 ;
            padding-bottom: 20px;
            margin-top:20px;
        }
        #contain div.content div.conments div.each-conment div.huifu{

        margin-top: 20px;
        /*border-bottom:1px solid #5bc0de ;*/
        margin-bottom: 20px;

        }
        #contain div.content div.conments div.each-conment div.huifu div.message{
          display: inline-block;
           font-family: 'Droid Sans', Verdana, Arial, sans-serif;

          margin-left: 10px;
             font-size: 12px;
             color:#848484;
        }

        #contain div.content div.conments div.each-conment div.conmentor img,#contain div.content div.conments div.each-conment div.huifu_reply img, #contain div.content div.conments div.each-conment div.huifu img{
            height:40px;
            width: 40px;
            display: inline-block;
            border-radius: 50%;	/* relative value */
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            transition: linear 0.25s;

        }
        #contain div.content div.conments div.each-conment div.conmentor div.info{
display: inline-block;
        margin-left: 10px;}
        #contain div.content div.conments div.each-conment div.huifu  div.main{
           margin: 10px 0;
                    text-align: justify;
                    color: #848484;
                    font-size: 12px;
                    font-family: 'Droid Sans', Verdana, Arial, sans-serif;
        }
        #contain div.content div.conments div.each-conment div.con {
            margin: 15px 0;
            text-align: justify;
            color: #848484;
            font-size: 14px;
            font-family: 'Droid Sans', Verdana, Arial, sans-serif;
        }
        #contain div.content div.conments div.each-conment div.reply{
            font-family: 'Droid Sans', Verdana, Arial, sans-serif;
            font-weight: 500;
            color: #269abc;
        }
        #contain div.content div.response{
            padding: 40px 0;
            border-bottom: 1px solid #848484;
            margin-bottom: 20px;
        }
        #contain div.content div.response div.response-title{
            /*margin:30px;*/
            margin-bottom:30px;
            color: #848484;        }
        #contain div.content div.response div.response-content span{
            color: #848484;
            font-family: 'Droid Sans', Verdana, Arial, sans-serif;
           font-size: 18px;

        }
        #contain div.content div.response div.response-content input, #contain div.content div.response div.response-content textarea{
        border-radius:5px;
            /*height:30px;*/
            /*padding: 5px;*/
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }
        #contain div.content div.response div.response-content input{
            height: 30px;
        }
        #contain div.content div.response div.response-content input.submit{
            padding: 5px;
            color: gray;
        }
        #contain div.content div.footer{
            height:20px;
            width: 720px;
            text-align: center;
            font-family: 'Droid Sans', Verdana, Arial, sans-serif;
            color: #848484;
        }
         #contain div.content div.conments div.each-conment div.reply span{
        cursor: pointer;
        }
        #noConmenets{
        color:#848484;
        }
        #huifu_all{
        font-family: 'Droid Sans', Verdana, Arial, sans-serif;
                    color: #848484;
        }
        #huifu_content,#huifu_name,#huifu_email,#answer{
                border-radius:5px;
                    /*height:30px;*/
                    /*padding: 5px;*/
                    -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;
        }
        #answer{
             padding: 3px;
            color: gray;}
              #left-nav .nav li p a:hover,#left-nav .nav li p a.current{
                        color: black;
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
        <p>Welcome to my Blog it's used by miyakee</p>
    </div>
</div>
<div id="contain">
    <div id="left-nav">
        <ul class="nav">
        <li id="home" ><p><a href="{{action('IndexController@getZone')}}" class="current">Home</a><img src="{{__PUBLIC__.'/pic/go.png'}}"></p></li>
        <li><p>About</p></li>
        <li><p>Articles</p></li>
            <li><p>Life</p></li>
            <li><p>Pictures</p></li>
            <li><p>Other</p></li>
</ul>
    </div>
    <div class="bottom">
        <ul>
           <li  class="facebook">   <a ></a></li>
            <li class="rss">     <a ></a></li>
            <li  class="twitter"> <a ></a></li>
</ul>
        <p>a Cake To You</p>

</div>
    <div class="content">
        <h2>{{$article->theme}}</h2>
        <div class="label">
            <ul>
                <li class="writer">Miyakee</li>
                <li class="time">{{$article->created_at}}</li>
                <li class="visitor">{{$article->click}}</li>
                <li class="like" id="like" >{{$article->goods}}</li>
                <li class="conments">{{$num}}</li>
            </ul>
        </div>
        <div class="article">
{{--        <img class="arctile-title" src="{{__PUBLIC__.'/img/blog1.jpg'}}">--}}

    <div class="write">
        {{$article->content}}
    </div>
        </div>
        <div class="conments" id="conments">
            <h1>Conments</h1>
            @if($num==0)
            <p id="noConmenets">木有评论，沙发你要么？</p>
            @else
            @foreach($conment as $every)
            <div class="each-conment" >
            <div class="conmentor">
                <img class="touxiang"src="{{__PUBLIC__.'/img/blog1.jpg'}}">
                <div class="info"> <p>{{$every->visitor}}</p><p>{{$every->created_at}}</p></div>
             {{--<input hidden="true" class="father_id" value="{{$m=$every->id}}">--}}
                </div>
            <div class="con">    {{$every->content}}
            </div>
                <div class="reply" >             <input hidden="true" class="father_id" value="{{$m=$every->visitor}}">     <input hidden="true" class="belong" value="{{$every->id}}">

<span >Reply</span></div>

@if($every->huifu!=null)
@foreach($every->huifu as $coss)
 <div class="huifu">
    <img  class="touxiang" src="{{__PUBLIC__.'/img/blog1.jpg'}}">
    <div class="message">
            <p>{{$coss->visitor}}回复{{$coss->toSomeone}}</p>
            <p>{{$coss->created_at}}</p>
    </div>
     <div class="main">{{$coss->content}}</div>
     <div class="reply" >
     <span>Reply</span><input hidden="true" class="father_id" value="{{$coss->visitor}}">
     <input hidden="true" class="belong" value="{{$every->id}}">
     </div>
 </div>
 @endforeach
  @else
     {{--<span >Reply</span>--}}

 @endif



            </div>
            @endforeach
            @endif
        </div>
        <div class="response">
            <div class="response-title">
            <h1>Give Some Conments</h1>
            <p>来了就说点什么呗，恩？</p></div>
            <div class="response-content">
                <textarea cols="100" rows="10" name="content" id="content"></textarea>
                <span>Name:</span><input type="text"  name="name" id="name" placeholder="name" />
                <span>Email:</span><input type="text"  name="emial"  id="email" placeholder="email"/>
                <input type="submit" class="submit" id="submit" value="Submit">

            </div>
        </div>
        <div class="footer">@Miyakee&&ccccc</div>
    </div>
</div>
<!--<script src="js/jquery.js"></script>-->
<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
<script type="text/javascript">



function createXmlHttp(){
    var xmlHttp;
    try{
    xmlHttp=new XMLHttpRequest();
    }catch (e){
   //IE
             try {
                 xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
             } catch (e) {
                  xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
               }
                 }
                     return xmlHttp;

}

function sendMessage(data,url,callback){
//var name=document.getElementById('name').value;
//var email=document.getElementById('email').value;
//var content=document.getElementById('content').value;

{{--var url="{{action('DetailController@postAddconments')}}";--}}
var xmlHttp=createXmlHttp();
{{--var detail_id="{{$detail_id}}";--}}
if(!xmlHttp){
alert("you can't conmment");
}
//var data="";
//data={
//'name':name,
//'email':email,
//'content':content,
//'detail_id':detail_id
//        };
//        data= JSON.stringify(data);//转出json数组；
xmlHttp.open("POST",url,true);
xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlHttp.onreadystatechange = function() {
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            if(xmlHttp.responseText != '400') {
             var respon=xmlHttp.responseText;
              callback(respon) ;

            }
        }
    };
    xmlHttp.send('data='+data);
}
var sub=document.getElementById('submit');
//function out(respondText){
//return respondText;}
function addNewDom(respondText){

respondText=JSON.parse(respondText);//将json转化为对象
//alert(respondText.id);
var html="";
var conment=document.getElementById("conments");
var head_img="{{__PUBLIC__.'/img/blog1.jpg'}}";
html+='<div class="each-conment" id="conments"><div class="conmentor"><img class="touxiang"src=" '+head_img+' "><div class="info"> <p>'+respondText.visitor+'</p><p>'+respondText.created_at+'</p></div></div><div class="con">'+respondText.content+'</div> <div class="reply">Reply</div> </div>';
//conment.innerHTML=html;
var fragment=document.createDocumentFragment();
var item;
item=document.createElement("div");
fragment.appendChild(item);
item.innerHTML=html;
//item.appendChild(document.createTextNode("Item"));
conment.appendChild(fragment);

}
//var name=document.getElementById('name');
//var email=document.getElementById('email');
//var content=document.getElementById('content');
{{--var detail_id="{{$detail_id}}";--}}

sub.onclick=function(){
var name=document.getElementById('name').value;
var email=document.getElementById('email').value;
var content=document.getElementById('content').value;
var noConmenets=document.getElementById('noConmenets');
noConmenets.remove(noConmenets);
var detail_id="{{$detail_id}}";
var url="{{action('DetailController@postAddconments')}}";

var data="";
//data='name='+name+'&email='+email+'&content='+content;
data={
'name':name,
'email':email,
'content':content,
'detail_id':detail_id,
'toSomeone':0,
'belong':0
        };
        data= JSON.stringify(data);//转出json数组；
sendMessage(data,url,addNewDom);//使用了回调函数，在sendmessage里面调用了addnewdom函数，就是等于把sendmessage里面callback的位置指向了addnewdom
document.getElementById('name').value=' ';
document.getElementById('email').value=' ';
document.getElementById('content').value=' ';

};
var reply=document.getElementById("conments").getElementsByTagName("span");
var k;
var self;
var m;
function addNewReply(respondText){
//var reply=document.getElementById("conments").getElementsByTagName("span");
//var now=reply[k];
//alert(now);
//alert(respondText.visitor);
respondText=JSON.parse(respondText);//将json转化为对象

var img_head="{{__PUBLIC__.'/img/blog1.jpg'}}";
var fragment=document.createDocumentFragment();
var dom;
var addHtml="";
//alert(m);
dom=document.createElement("div");
fragment.appendChild(dom);
dom.innerHTML=' <div class="huifu"><img  class="touxiang" src="'+img_head+'"> <div class="message"><p>'+respondText.visitor+'回复'+respondText.toSomeone+'</p><p>'+respondText.created_at+'</p></div> <div class="main">'+respondText.content+'</div><div class="reply" ><span >Reply</span></div></div>';
var cha=self.parentNode.parentNode.lastChild;
console.log(cha+"ol");
//return addHtml+=' <div class="huifu"><img  class="touxiang" src="'+img_head+'"> <div class="message"><p>'+respondText.visitor+'</p><p>'+respondText.create_at+'</p></div> <div class="main">'+respondText.content+'</div> </div>';
self.parentNode.parentNode.insertBefore(fragment,cha);
//alert(k);
}
var haved=false;
//var nowthat;
//var replys=document.getElementById('huifu');
for(k=0;k<reply.length;k++)
{m=k;
reply[k].onclick=function replyhuifu(){
if(haved==false){
haved=true;
var fragment=document.createDocumentFragment();
var dom;
var co=document.getElementById("conments").getElementsByClassName("each-conment");
dom=document.createElement("div");
dom.id="huifu_all";
fragment.appendChild(dom);
var toSomeone=this.parentNode.getElementsByTagName("input")[0].value;//获取div下input值
var belong=this.parentNode.getElementsByTagName("input")[1].value;//获取div下input值

dom.innerHTML='<textarea cols="100" rows="6" id="huifu_content"></textarea>Name: <input type="text" id="huifu_name" >E-mail:<input type="text" id="huifu_email" ><input type="submit" id="answer" value="Submit" >';
that=this.parentNode.parentNode;
console.log(this.parentNode);
that.insertBefore(fragment,null);
//回复评论的确认
var huifu=document.getElementById("answer");
self=this;
{{--var detail_id="{{$detail_id}}";--}}
huifu.onclick=function(){
console.log(this.parentNode);
//alert(m);
var huifu_content=document.getElementById("huifu_content").value;
var huifu_email=document.getElementById("huifu_email").value;
var huifu_name=document.getElementById("huifu_name").value;
//var details="";
//details+=document.getElementById("father_id").value;
//var details="2";
//var mes="";
var url="{{action('DetailController@postAddhuifu')}}";
//console.log(details);
//var details=2;
var detail_id="{{$detail_id}}";
console.log(belong+"aaa"+toSomeone);
var mes={
'name':huifu_name,
'email':huifu_email,
'content':huifu_content,
'detail_id':detail_id,
'toSomeone':toSomeone,
'belong':belong
};
        mes= JSON.stringify(mes);//转出json数组；
//var to=addNewReply();
sendMessage(mes,url,addNewReply);
//alert(ad);
haved=false;
this.parentNode.remove(this.parentNode);
// nowthat=this;
};
//addNewReply(k);
//var add=document.
}
else{
if(confirm("你想放弃正在回复的评论吗？")){
haved=false;
//console.log(this.parentNode+"22");
var nowthat=document.getElementById('huifu_all');
nowthat.remove(nowthat);
var reply=document.getElementById("conments").getElementsByTagName("span");
haved=true;

var fragment=document.createDocumentFragment();
var dom;
//var co=document.getElementById("conments").getElementsByClassName("each-conment");
dom=document.createElement("div");
dom.id="huifu_all";
fragment.appendChild(dom);
var toSomeone=this.parentNode.getElementsByTagName("input")[0].value;//获取div下input值
var belong=this.parentNode.getElementsByTagName("input")[1].value;//获取div下input值

dom.innerHTML='<textarea cols="100" rows="6" id="huifu_content"></textarea> <input type="text" id="huifu_name" ><input type="text" id="huifu_email" ><input type="submit" id="answer" value="sub" >';
that=this.parentNode.parentNode;
console.log(that);
that.insertBefore(fragment,null);
//回复评论的确认
var huifu=document.getElementById("answer");
self=this;
{{--var detail_id="{{$detail_id}}";--}}
huifu.onclick=function(){
//console.log(this.parentNode);
//alert(m);
var huifu_content=document.getElementById("huifu_content").value;
var huifu_email=document.getElementById("huifu_email").value;
var huifu_name=document.getElementById("huifu_name").value;
//var details="";
//details+=document.getElementById("father_id").value;
//var details="2";
//var mes="";
var url="{{action('DetailController@postAddhuifu')}}";
//console.log(details);
//var details=2;
var detail_id="{{$detail_id}}";
var mes={
'name':huifu_name,
'email':huifu_email,
'content':huifu_content,
'detail_id':detail_id,
'toSomeone':toSomeone,
'belong':belong
};
        mes= JSON.stringify(mes);//转出json数组；
//var to=addNewReply();
sendMessage(mes,url,addNewReply);
//alert(ad);
haved=false;
this.parentNode.remove(this.parentNode);
// nowthat=this;
};
//for(k=0;k<reply.length;k++)
//replyhuifu();//for(var i=0;i<nowthat.parentNode.length;i++)
//console.log(nowthat);
}else{
//console.log(this.parentNode);
//this.parentNode.remove(this.parentNode.nextSlbling);
//移动到上次评论框的位置
}
}
}
}

var like=document.getElementById('like');
like.onclick=function(){
like.style.background=" url('{{__PUBLIC__.'/pic/like3.png'}}') no-repeat 0 0";
like.innerHTML=parseInt(like.innerHTML)+1;
var url="{{action('DetailController@postAddlike')}}";
var res="1",
  id="{{$article->id}}";
var mes={
'res':res,
'id':id
};
mes=JSON.stringify(mes);//将json转化为对象

sendMessage(mes,url);

//alert(like.innerHTML);
}

</script>
</body>
</html>