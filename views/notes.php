<?php
    require_once("../db/db.php");
    require_once("../controller/controllerNotes.php");
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
    <title>NOTES</title>
</head>
<body>

<div class="divleft"><h1>NOTES</h1></div>
<div class="divright">
    <button class="btn btn-warning text-white my-2 my-sm-0" type="button" data-toggle="modal" data-target="#myModal">
        <a class="fa fa-plus-circle" id="amountTotal">

        </a>
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Note</h4>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                User:
                            </td>
                            <td>
                                <select name="user" id="user">
                                    <option value="">-Select user-</option>
                                    <?php
                                    $data=$not->returnUsers();
                                    foreach($data as $dat) {
                                        ?>
                                        <option value="<?php echo $dat["id"]; ?>"><?php echo $dat["display_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Conference:
                            </td>
                            <td>
                                <select name="conference" id="conference">
                                    <option value="">-Select conference-</option>
                                    <?php
                                    $data=$not->returnConferences();
                                    foreach($data as $dat) {
                                        ?>
                                        <option value="<?php echo $dat["id"]; ?>"><?php echo $dat["year"]." ".$dat["month"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Speaker:
                            </td>
                            <td>
                                <select name="speaker" id="speaker">
                                    <option value="">-Select speaker-</option>
                                    <?php
                                    $data=$not->returnSpeakers();
                                    foreach($data as $dat) {
                                        ?>
                                        <option value="<?php echo $dat["id"]; ?>"><?php echo $dat["name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Note:
                            </td>
                            <td>
                                <textarea name="note" id="note" rows="5" cols="40"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" onclick="saveNote()" class="btn btn-success">Save note</button>
            </div>
        </div>

    </div>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Conference</th>
        <th scope="col">Speaker</th>
        <th scope="col">Note</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $data=$not->returnNotes();
        foreach($data as $dat)
        {
    ?>
    <tr>
        <td><?php echo $dat["id"]; ?></td>
        <td><?php echo $dat["display_name"]; ?></td>
        <td><?php echo "Year: ".$dat["year"]." Month: ".$dat["month"]; ?></td>
        <td><?php echo $dat["name"]; ?></td>
        <td><?php echo $dat["note_text"]; ?></td>
    </tr>
    <?php
        }
    ?>
    </tbody>
</table>
</body>
</html>