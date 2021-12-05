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
$input = (int)$_POST["number"];
echo "<br>Decimal Input = $input";
$dec = $input;
$bin = "";
while($dec>0)
{
$bin = strval($dec%2).$bin;
$dec = (int)$dec/2;
}
$bin = substr($bin,-(strlen($bin)-1));
if($bin=="")
{
echo "<br>Binary Equivalent = 0";
}
else
{
echo "<br>Binary Equivalent = $bin";
}
$dec = $input;
$oct = "";
while($dec>0)
{
$oct = strval($dec%8).$oct;
$dec = (int)$dec/8;
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
$dec = $input;
$hex = "";
$dig = "";
while($dec>0)
{
if(($dec%16)>9)
{
$dig = chr(($dec%16)+55);
}
else
{
$dig = strval($dec%16);
}
$hex = $dig.$hex;
$dec = (int)$dec/16;
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