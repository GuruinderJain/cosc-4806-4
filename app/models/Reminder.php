<?php

class Reminder {

  public function __construct() {

  }
  public function get_all_reminders (): array {
    $db = db_connect();
    $statement = $db->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function update_reminders ($reminder_id) {
    $db = db_connect();
    $statement = $db->prepare("UPDATE reminders SET subject = :subject WHERE id = :id");
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
    $statement->execute();
  }
  public function create_reminder($user_id, $subject) {
  $db = db_connect();
  $statement = $db->prepare("INSERT INTO reminders (user_id, subject, created_at) VALUES (:user_id, :subject, NOW())");
  $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
  $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
  $statement->execute();
}
  public function delete_reminder($id) {
  $db = db_connect();
  $statement = $db->prepare("DELETE FROM reminders WHERE id = :id");
  $statement->bindParam(':id', $id, PDO::PARAM_INT);
  $statement->execute();
  }
}
?>