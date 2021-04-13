<?php
class DB
{
    private $conn; //connection to db server

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'genericbrowsergame');
    }

    public function registerPlayer(string $login, string $password) : bool
    {
        $passwordHash = password_hash($password, PASSWORD_ARGON2I);
        $query = $this->conn->prepare("INSERT INTO player (id, login, password) 
                                        VALUES (NULL, ?, ?)");
        $query->bind_param("ss", $login, $passwordHash);
        return $query->execute();
    }
    public function loginPlayer(string $login, string $password) : bool 
    {
        $query = $this->conn->prepare("SELECT id, password FROM player WHERE login=? LIMIT 1");
        $query->bind_param("s", $login);
        $query->execute();
        $result = $query->get_result();
        $player = $result->fetch_assoc();
        if(password_verify($password, $player['password']))
        {
            $_SESSION['player_id'] = $player['id'];
            $_SESSION['player_login'] = $login;
            return true;
        }
        else
            return false;
    }
}

?>