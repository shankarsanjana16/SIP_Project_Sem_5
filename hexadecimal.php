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
$input = strtoupper($_POST["number"]);
echo "<br>Hexadecimal Input = $input";
$hex = $input;
$bin = "";
$d = 0;
for($i = (strlen($hex)-1);$i>-1;$i--)
{
if($hex[$i]=='A')
{
$d = 10;
}
elseif($hex[$i]=='B')
{
$d = 11;
}
elseif($hex[$i]=='C')
{
$d = 12;
}
elseif($hex[$i]=='D')
{
$d = 13;
}
elseif($hex[$i]=='E')
{
$d = 14;
}
elseif($hex[$i]=='F')
{
$d = 15;
}
else
{
$d = (int)$hex[$i];
}
$t = $d;
if($d==0)
{
$bin = "00";
}
while($d>0)
{
$bin = strval($d%2).$bin;
$d = (int)$d/2;
}
$bin = substr($bin,-(strlen($bin)-1));
if($t<8)
{
$bin = "0".$bin;
}
if($t<4)
{
$bin = "0".$bin;
}
if($t<2)
{
$bin = "0".$bin;
}
}
$l = 0;
while($bin[$l]=="0")
{
$bin = substr($bin,-(strlen($bin)-1));
}
$b = (int)$bin;
$dec = 0;
$l = 0;
while($b>0)
{
$dec = ((2**$l)*($b%10))+$dec;
$b = (int)$b/10;
$l++;
}
echo "<br>Decimal Equivalent = $dec";
if($bin=="")
{
echo "<br>Binary Equivalent = 0";
}
else
{
echo "<br>Binary Equivalent = $bin";
}
$oct = "";
$b = (int)$bin;
$dig = "";
$p = 0;
$s = "";
while($b>0)
{
$p = $b%1000;
$d = 0;
$l = 0;
while($p>0)
{
$d = ((2**$l)*($p%10))+$d;
$p = (int)$p/10;
$l++;
}
$s = strval($d);
$oct = $s.$oct;
$b = (int)$b/1000;
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