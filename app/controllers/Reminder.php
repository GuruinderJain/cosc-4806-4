<?php
class Reminder extends Controller{
public function index(){

$reminder = $this->model('reminder');
  
  $list_of_reminders = $reminder->get_all_reminders();
  $this->view('reminders/index', ['reminders' => $list_of_reminders]);
  

}
}
?>