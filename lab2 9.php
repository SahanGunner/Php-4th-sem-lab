<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
        echo "Output:";
        $x = range(11, 20);
        shuffle($x);
        print_r($x);
    ?>
</body>
</html>