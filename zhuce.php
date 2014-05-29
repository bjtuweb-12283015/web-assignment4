<html>
<meta charset="utf-8" />
<style type="text/css">

body,td,th
 {
  font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
  font-size: 16px;
}
body 
{
  background-color: #CCC;
}
</style>

 <?php
    if (!@$_COOKIE["mycookie_name"]) {
      ?> 
   <head class="b">Register</head>
   <form  action="register.php" method="post">
   <table width="696">
  <tr>
    <td width="10" height="10"></td>
    <td width="76">Username:</td>

   <td width="239"><input type="text" name="name"/></td>
   <td width="351"></td>
   </tr>
    <tr>
      <td></td>
      <td>Password:</td>
      <td height="33"><input type="password" name="password"/></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td width="40" height="25"><input name="zhuce"  type="submit" value="注册"/></td>
      <td></td>
    </tr>
  </table>
   <img src="hua2.jpg" width="694" height="485"  alt=""/>
   <p></p>
  <p></p>
  <p></p>
  <p>
    <?php } 
  else { ?>
    <a href="logout.php">logout</a>
    <?php }
 ?>
</p>  

<Script language="javascript">

window.onload = getMsg;
window.onresize = resizeDiv;
window.onerror = function(){}
var divTop,divLeft,divWidth,divHeight,docHeight,docWidth,objTimer,i = 0;
function getMsg()
{
try{
divTop = parseInt(document.getElementById("eMeng").style.top,10)
divLeft = parseInt(document.getElementById("eMeng").style.left,10)
divHeight = parseInt(document.getElementById("eMeng").offsetHeight,10)
divWidth = parseInt(document.getElementById("eMeng").offsetWidth,10)
docWidth = document.documentElement.clientWidth;
docHeight = document.documentElement.clientHeight;
document.getElementById("eMeng").style.top = parseInt(document.documentElement.scrollTop,10) + docHeight + 10;// divHeight
document.getElementById("eMeng").style.left = parseInt(document.documentElement.scrollLeft,10) + docWidth - divWidth
document.getElementById("eMeng").style.visibility="visible"
objTimer = window.setInterval("moveDiv()",10)
}
catch(e){}
}

function resizeDiv()
{

try{
divHeight = parseInt(document.getElementById("eMeng").offsetHeight,10)
divWidth = parseInt(document.getElementById("eMeng").offsetWidth,10)
docWidth = document.documentElement.clientWidth;
docHeight = document.documentElement.clientHeight;
document.getElementById("eMeng").style.top = docHeight - divHeight + parseInt(document.documentElement.scrollTop,10);
document.getElementById("eMeng").style.left = docWidth - divWidth + parseInt(document.documentElement.scrollLeft,10)
}
catch(e){}
}

function moveDiv()
{
try
{
if(parseInt(document.getElementById("eMeng").style.top,10) <= (docHeight - divHeight + parseInt(document.documentElement.scrollTop,10)))
{
window.clearInterval(objTimer)
objTimer = window.setInterval("resizeDiv()",1)
}
divTop = parseInt(document.getElementById("eMeng").style.top,10)
document.getElementById("eMeng").style.top = divTop - 1
}
catch(e){}
}
function closeDiv()
{
document.getElementById('eMeng').innerHTML='';
document.getElementById('eMeng').style.visibility='hidden';
if(objTimer) window.clearInterval(objTimer)
}

</Script>

<div id=eMeng style="border-right: #455690 1px solid; 
                    border-top: #a6b4cf 1px solid; 
                    Z-INDEX:99999; left: 0px; 
                    VISIBILITY: hidden; 
                    border-left: #a6b4cf 1px solid; 
                    WIDTH: 260px; 
                    BORDER-BOTTOM: #455690 1px solid; 
                    position: absolute; 
                    top: 0px; 
                    height: 198px; ">
<table style="BORDER-TOP: #ffffff 1px solid; 
                    border-left: #ffffff 1px solid" cellSpacing=0 cellPadding=0 width="100%" bgColor=#AFDCF3 border=0>
<tbody>
<tr>
<td style="background-image: url('tupian.jpg'); 
         padding-right: 1px; padding-bottom: 1px; 
         width:254px; height:194px;" colSpan=2></TD>
<td  width="25" valign=middle  align="center" style="font-weight: normal; font-size: 12px; 
        width:25px;color: #ffffff; 
        padding-left: 2px; 
        padding-top: 10px ;
        background-color:#FB6413;">
        <span style="layout-flow:vertical-ideographic;font-weight:bold;" >点此关闭弹窗<br/></span>
        <span title=关闭 style="CURSOR: hand;color:white;font-size:14px;font-weight:bolder;margin-right:1px;" onclick=closeDiv() >X</span></td>
</tr>
</tbody>
</table>
</div>







<script>
function changeImage()
{
element=document.getElementById('myimage')
if (element.src.match("bulbon"))
  {
  element.src="/i/eg_bulboff.gif";
  }
else
  {
  element.src="/i/eg_bulbon.gif";
  }
}
  </script>

  <style type="text/css">
  .b{
    margin-left:100px;
  }
  form{
    margin:50px;
    margin-left:0px;
  }

  input{
    padding-left:20px;
    height: 30px;
    width: 100px;
  }
 html{font-size:20px;}    
 span{color: #666666;}
  </style>

</body>
</html>



































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































