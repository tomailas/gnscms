<?php
  function newPage() {
    if ( isset( $_POST['saveChanges'] ) ) {
      // set the bot action values for insert into db
      ($_POST['botAction1'] == 'on') ? $botAction1 = 'index' : $botAction1 = 'noindex';
      ($_POST['botAction2'] == 'on') ? $botAction2 = 'follow' : $botAction2 = 'nofollow';
      ($_POST['menu'] == 'on') ? $_POST['menu'] = 1 : $_POST['menu'] = 0;
      $botActionArray = array($botAction1, $botAction2);
      $_POST['botAction'] = implode(", ", $botActionArray);
      // continue as normal
      // User has posted the setting edit form: save the new setting
      $page = new Page;
      $page->storeFormValues( $_POST );
      $page->insert();
      header( "Location: index.php?action=listPage&success=pageCreated" );
    }
  }
?>