<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php $xml = file_get_contents("http://localhost:8080/api/v1/portfolios");
    echo $xml;?> 
 </body>
</html>