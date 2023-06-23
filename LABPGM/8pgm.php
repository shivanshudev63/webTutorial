<?php
$txt1 = "";
$txt2 = "";
$res = "";

if (isset($_POST['sub'])) {
    $txt1 = $_POST['n1'];
    $txt2 = $_POST['n2'];
    $oprnd = $_POST['sub'];

    if ($oprnd == "+") {
        $res = $txt1 + $txt2;
    } else if ($oprnd == "-") {
        $res = $txt1 - $txt2;
    } else if ($oprnd == "x") {
        $res = $txt1 * $txt2;
    } else if ($oprnd == "/") {
        $res = $txt1 / $txt2;
    }
}
?>

<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="post" action="">
        <h2>Calculator</h2>
        <br>
        No1: <input type="text" name="n1" value="<?php echo $txt1; ?>">
        <br>
        No2: <input type="text" name="n2" value="<?php echo $txt2; ?>">
        <br>
        Res: <input type="text" name="res" value="<?php echo $res; ?>" readonly>
        <br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/">
    </form>
</body>
</html>