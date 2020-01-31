<?php
class model_notes
{
    private $db;
    private $notes;
    private $users;
    private $conferences;
    private $speakers;

    public function __construct()
    {
        $connection = new Connection();
        $conn = $connection->connection();

        $this->db=$conn;
        $this->notes=array();
        $this->users=array();
        $this->conferences=array();
        $this->speakers=array();
    }

    public function saveNote($user,$conference,$speaker,$note)
    {
        $result=pg_query($this->db,"insert into public.note(user_id,speaker_id,conference_id,note_text) values(".$user.",".$speaker.",".$conference.",'".$note."')");
        return $result;
    }

    public function returnNotes()
    {
        $result=pg_query($this->db,"SELECT n.id,u.display_name,c.year,c.month,s.name,n.note_text
        FROM public.note as n
        inner join public.user as u ON (u.id = n.user_id)
        inner join public.conference as c ON (c.id = n.conference_id)
        inner join public.speaker as s ON (s.id = n.speaker_id)");

        while($rows=pg_fetch_assoc($result)){
            $this->notes[]=$rows;
        }
        return $this->notes;
    }

    public function returnUsers()
    {
        $result=pg_query($this->db,"select id, display_name from public.user");

        while($rows=pg_fetch_assoc($result)){
            $this->users[]=$rows;
        }
        return $this->users;
    }
    public function returnConferences()
    {
        $result=pg_query($this->db,"SELECT id, year, month FROM public.conference");

        while($rows=pg_fetch_assoc($result)){
            $this->conferences[]=$rows;
        }
        return $this->conferences;
    }
    public function returnSpeakers()
    {
        $result=pg_query($this->db,"SELECT id, name FROM public.speaker");

        while($rows=pg_fetch_assoc($result)){
            $this->speakers[]=$rows;
        }
        return $this->speakers;
    }
}