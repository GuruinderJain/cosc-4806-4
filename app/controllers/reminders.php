<?php
class reminders extends Controller{
public function index(){

$reminder = $this->model('Reminder');
  
  $list_of_reminders = $reminder->get_all_reminder();
  print_r ($list_of_reminders);
  die;
  $this->view('reminders/index');
}
  
}
?>