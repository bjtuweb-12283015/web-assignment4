
<html>
<meta charset="utf-8" />
<head>
</head>
<body>
<head>欢迎来到我的网页</head>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
  <nav>
  <ul>
    <li class="store"><span class="store-icon"></span><a href="#">红楼饰品</a></li>
    <li class="movies"><span class="movies-icon"></span><a href="#">红楼影视</a></li>
    <li class="music"><span class="music-icon"></span><a href="#">红楼音乐</a></li>
    <li class="books"><span class="books-icon"></span><a href="#">红楼书籍</a></li>
    <li class="magazines"><span class="magazines-icon"></span><a href="#">红楼杂志</a></li>
    <li class="devices"><span class="devices-icon"></span><a href="#">评说红楼</a></li>
  </ul>
</nav>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>您可以选择以上形式的文件浏览：</p>
<p>信息来源<a href="#" target="_blank">ＸＸＸＸ</a></p>

</div>
  <script type = "text/javascript">

         var seconds = 0;

         function startTimer() {
            window.setInterval( "updateTime()", 1000 );
         }

         function updateTime() {
            seconds++;
            var soFar = document.getElementById("soFar");
            soFar.innerHTML = seconds;   
         }

      </script>
   </head>

   <body onload = "startTimer()">

      <p>Seconds you have spent viewing this page so far:
      <strong id = "soFar">0</strong></p>

   </body>
</html>













