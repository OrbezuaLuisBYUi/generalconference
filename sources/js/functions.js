function menuoption(opt)
{
    var view = "";
    if(opt == 'NOTES')
    {
        view = "views/notes.php";
    }
    else
    if(opt == 'CONFERENCES')
    {
        view = "views/generalconference.php";
    }
    else
    if(opt == 'SPEAKERS')
    {
        view = "views/speakers.php";
    }
    else
    if(opt == 'USERS')
    {
        view = "views/users.php";
    }

    $.post(view, { }, function(data){
        $("#contentviews").html(data);
    });
}
function saveNote()
{
    var user = $("#user").val();
    var conference = $("#conference").val();
    var speaker = $("#speaker").val();
    var note = $("#note").val();

    $.post('index.php', { operation: 'addnote',user:user,conference:conference,speaker:speaker,note:note }, function(data){
        $('#myModal').modal('toggle');
        $('#myModal').modal('hide');
        menuoption('NOTES');
    });
}