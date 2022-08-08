<html>
<head>
    <title>Question No.2</title>
</head>
<body>
    <?php
    $color = array('white', 'green', 'red');
    ?>
    <ol type="a">
        <li>
            <?php
            echo $color[0] . ", " . $color[1] . ", " . $color[2] . ",";
            ?>
        </li>
        <li>
            <ul>
                <li>
                    <?php echo $color[0]?>
                </li>
                <li>
                    <?php echo $color[1]?>
                </li>
                <li>
                    <?php echo $color[2]?>
                </li>
            </ul>
        </li>
    </ol>
</body>
</html>