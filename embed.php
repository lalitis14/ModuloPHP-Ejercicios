<?php
$nombre="";
$numeroganador=rand(0,1);
$sitiosweb=[
 "Google"=>"https://www.google.com",
 "Facebook"=>"https://www.facebook.com",
 "Twitter"=>"https://www.twitter.com"
 ];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
   <h1>La Internet</h1>
   <marquee>Bienvenidos al mundo de la internet</marquee>
   <h2>Bienvenido <?php= $nombre ?></h2>
   <h3>¿Es usted un ganador?</h3>
         <?php if($numeroganador==0): ?>
         <p>SI</p>
           <?php else: ?>
             <p>NO</p>
         <?php endif; ?>
   <h3>Algunos sitios interesantes:</h3>
<?php foreach($sitiosweb as $sitio => $link): ?>
 <ul>
   <li>
       <a href= "<?=$link?>"><?=$sitio?></a>
</li>
</ul>
<?php endforeach; ?>
 </body>
</html>
