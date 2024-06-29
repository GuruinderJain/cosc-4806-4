<?php

class reminders {

  public function __construct() {

  }

  public function get_all_reminders () {
    $db = db_connect();
    $statement = $db->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

public function update_reminder ($reminder_id) {
   $db = db_connect();
  $statement = $db->prepare("UPDATE reminders SET subject = :subject WHERE id = :id");
  $statement->bindParam(':id', $id, PDO::PARAM_INT);
  $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
  $statement->execute();
}

?>