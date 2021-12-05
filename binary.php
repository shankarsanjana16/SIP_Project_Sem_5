<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Converter</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="slick/slick.css" rel='stylesheet' />
    <link href="slick/slick-theme.css" rel='stylesheet' />
    <link href="css/templatemo-real-dynamic.css" rel="stylesheet" />
</head>
<body>
<div class="tm-container">
        <div class="tm-site-header"></div>
        <div class="tm-site-header-overlay">
        <a href="converter.php" class="homebtn"><i class="fa fa-home"></i></a>
            <div class="tm-header-stripe ml-auto"></div>
            <div class="tm-header-stripe tm-header-stripe-short ml-auto"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 tm-site-header-left">
                        <h1 class="text-uppercase tm-site-name">converter</h1><br>
<style>
.homebtn {
  background-color: #e7e7e7;
  color: black;
  padding: 16px;
  font-size: 32px;
  border-radius: 12px;
  border: 2px solid black;
}
</style>
                    </div>
<h1>
<?php
$input = $_POST["number"];
echo "<br>Binary Input = $input";
$bin = (int)$input;
$dec = 0;
$l = 0;
while($bin>0)
{
$dec = ((2**$l)*($bin%10))+$dec;
$bin = (int)$bin/10;
$l++;
}
echo "<br>Decimal Equivalent = $dec";
$bin = $input;
$oct = "";
$p = 0;
while($bin>0)
{
$p = $bin%1000;
$d = 0;
$l = 0;
while($p>0)
{
$d = ((2**$l)*($p%10))+$d;
$p = (int)$p/10;
$l++;
}
$oct = strval($d).$oct;
$bin = (int)$bin/1000;
}
$oct = substr($oct,-(strlen($oct)-1));
if($oct=="")
{
echo "<br>Octal Equivalent = 0";
}
else
{
echo "<br>Octal Equivalent = $oct";
}
$bin = $input;
$hex = "";
$dig = "";
$p = 0;
$s = "";
while($bin>0)
{
$p = $bin%10000;
$d = 0;
$l = 0;
while($p>0)
{
$d = ((2**$l)*($p%10))+$d;
$p = (int)$p/10;
$l++;
}
if($d>9)
{
$s = strval(chr($d+55));
}
else
{
$s = strval($d);
}
$hex = $s.$hex;
$bin = (int)$bin/10000;
}
$hex = substr($hex,-(strlen($hex)-1));
if($hex=="")
{
echo "<br>Hexadecimal Equivalent = 0";
}
else
{
echo "<br>Hexadecimal Equivalent = $hex";
}
?>
</h1>
                    <div class="col-lg-8 tm-site-header-right">
                        <nav class="navbar navbar-expand-lg">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-header-stripe w-100"></div>
    </div>
    <div class="tm-container">
        <div class="parallax-window" data-parallax="scroll" data-image-src="img.jpg">
<style>
body, html {
  height: 100%;
}

.bg {
  background-image: url("img.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/tooplate-script.js"></script>
</body>
</html>