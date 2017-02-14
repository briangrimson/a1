
<?php 

$list=array("There is nothing to fear but fear itself - FDR", "I beleive I can fly - R Kelly", "I'm hungry - Dave");
$random = array_rand($list);

echo "
<!doctype html>
<html>
<head>
<link rel=stylesheet href=css/site.css>

</head>
<body>
<header>
<h1>BRIAN GRIMSON</h1>
<img class=portrait src=images/me_photo.jpg>
</header>
<hr>
 <p class=portrait>
    
My name is Brian Grimson. I am an artist currently living in the boston area. You can check out my website <a href=www.briangrimson.com>here</a> 

</p> 
<p class=quote>".$list[$random]."</p>
</body>
</html>"    
    ;
    

?>
    





    

