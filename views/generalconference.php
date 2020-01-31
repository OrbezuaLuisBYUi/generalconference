<?php
    require_once("../db/db.php");
    $connection = new Connection();
    $conn = $connection->connection();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" href="sources/css/main.css?<?php echo time(); ?>" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <!--This is the CDN to connect with BootstrapCDN CSS-->
    <!-- JS AND JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    <meta charset="UTF-8">
    <!-- CDN FOR ICONS CART -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- CDN JS FUNCTIONS -->
    <script src="sources/js/functions.js?<?php echo time(); ?>"></script>
    <title>CONFERENCES</title>
</head>
<body>
<h1>CONFERENCES</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Year</th>
        <th scope="col">Month</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $result = pg_query($conn, "SELECT id, year, month FROM public.conference");
        while ($row = pg_fetch_row($result))
        {
    ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
    </tr>
    <?php
        }
    ?>
    </tbody>
</table>
</body>
</html>