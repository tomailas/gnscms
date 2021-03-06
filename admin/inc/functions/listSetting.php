<?php
  function listSettings() {
    $results = array();
    $data = Setting::getSetting();
    $results['settings'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "Site Settings";
    if ( isset( $_GET['success'] ) ) {
      if ( $_GET['success'] == "settingCreated" ) $results['successMessage'] = "Your new setting has been created successully.";
      if ( $_GET['success'] == "changesSaved" ) $results['successMessage'] = "Your setting changes have been saved.";
      if ( $_GET['attention'] == "locked" ) $results['attentionMessage'] = "The previously created setting has been set as <strong>Locked!</strong> It will only be partialy editable to preserve system functionality.";
    }
    require( "inc/layout/listSettings.php" );
  }
?>