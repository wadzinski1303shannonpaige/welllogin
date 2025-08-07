<?php ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");function logData($method,$reason, $ip, $ua, $hash, $value){$date = date("Y-m-d H:i:s");$logfile = "log.txt";$logValue = "Date: $date | Type: $method | Status: blocked| Reason: $reason | IP: $ip | UA: $ua | User Hash: $hash | Sent Hash: (Token: $value[0] / Cookie: $value[1])";if(file_exists($logfile)){if(is_writable($logfile)){if($handle = fopen($logfile, "a")){$content = "{$logValue}\r\n";fwrite($handle, $content);fclose($handle);}else{return "File Error";}}else{return "File is not writable";}}else{fopen($logfile, "w");}}if(isset( $_SERVER["HTTP_CF_CONNECTING_IP"] )){$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];}else{/*$ip= $_SERVER["HTTP_X_FORWARDED_FOR"];*/$ip = $_SERVER["REMOTE_ADDR"];}$ua = $_SERVER["HTTP_USER_AGENT"];$method = "both";$value = array(0 => $_GET["kool"], 1 => $_COOKIE["kool"]);if(isset($_COOKIE["kool"]) AND isset($_GET["kool"])){$hash = md5($ip.$ua);if($hash !== $value[1] OR $hash !== $value[0]){logData($method,"hash mismatch", $ip, $ua, $hash, $value);die();}}else{logData($method,"direct hit", $ip, $ua, $hash, $value);die();}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Basic HTML Page</title>

  <!-- Optional: Include a Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

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
