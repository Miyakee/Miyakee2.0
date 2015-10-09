<html>
<head>
<style type="text/css">
*{margin:0;padding:0}


.theme{
margin-top:140px;
text-align:center;
font-size:6em;
color:white;
font-family:'Comic Sans MS', cursive, sans-serif;}

#aj{
margin-left:-40px;
position:absolute;

left:50%;
width:80px;

}
.mofa{
background-color:black;
position:absolute;
top:50%;
left:50%;
margin:-250px 0 0 -250px;
height:500px;
width:500px;
}
  .circle{  width:475px;
    height:475px;
    border-radius:475px;
    border:10px solid white;
  }

 
</style>

</head >
<body bgcolor="black">

<div class="main">
</div></div>

<div class="mofa">
<div class="circle">
<p class="theme">Miyakee</p>
<img id="aj" src="{{__PUBLIC__.'/pic/aj1.jpg'}}" onclick="location.href='{{action('IndexController@getZone')}}'">

</div>
 

 </body>
 <script type="text/javascript" src="{{__PUBLIC__.'/js/jquery-1.11.1.js'}}"></script>

 <script type="text/javascript">
 $(document).ready(function(){
 $("#aj").hover(function(){
 $("#aj").attr("src","{{__PUBLIC__.'/pic/aj2.jpg'}}");
 },function(){
 $("#aj").attr("src","{{__PUBLIC__.'/pic/aj1.jpg'}}");
 });});
 </script>
</html>