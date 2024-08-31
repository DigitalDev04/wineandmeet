<?php
require_once 'models/Database.php';

class Events extends Database
{
    public $id;
    public $name;
    public $description;
    public $date;
    public $start;
    public $max_users;

    public function getEvent()
    {
        $query = "SELECT * FROM `kems_events`";
        $queryExecute = $this->db->query($query);
        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }

    public function getEventById()
    {
        $query = "SELECT * FROM `kems_events` WHERE `id` = :id";
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryExecute->execute();
        return $queryExecute->fetch(PDO::FETCH_OBJ);
    }

    public function getEventOfMonth($month)
    {
        $query = "SELECT * FROM `kems_events` WHERE MONTH(`date`) = :month";
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':month', $month, PDO::PARAM_STR);
        $queryExecute->execute();
        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }

    public function create_event()
    {
        $query = "INSERT INTO `kems_events`(`name`, `description`, `date`, `start`,`max_users`) 
        VALUES (:name,:description,:date,:start,:max_users);";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryExecute->bindValue(':description', $this->description, PDO::PARAM_STR);
        $queryExecute->bindValue(':date', $this->date, PDO::PARAM_STR);
        $queryExecute->bindValue(':start', $this->start, PDO::PARAM_STR);
        $queryExecute->bindValue(':max_users', $this->max_users, PDO::PARAM_STR);
        return $queryExecute->execute();
    }

    public function delete()
    {
        $query = "DELETE FROM `kems_events` WHERE `id` = :id;";
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        return    $queryExecute->execute();
    }
}
