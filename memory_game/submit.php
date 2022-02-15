<?php
// error_reporting(E_ALL);
// ini_set('display_errors',1);

$myfile = fopen("results.csv", "r") or die("Unable to open file!");
$rawData = fread($myfile,filesize("results.csv"));
fclose($myfile);

if (isset($_POST['score']))
{
    $myfile = fopen("results.csv", "w") or die("Unable to open file!");
    $score = str_replace(',','و',$_POST['score']);
    $player = str_replace(',','و',$_POST['player']);
    $now = date('Y-m-d H:i:s');
    $txt = "$now,$player,$score\n";
    fwrite($myfile, $rawData.$txt);
    fclose($myfile);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leader board</title>
</head>
<body>
    <a href="index.html">Back</a>
    <pre><?php echo $rawData.$txt ?></pre>
</body>
</html>