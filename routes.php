<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'project':
        // we need the model to query the database later in the controller
        require_once('models/project.php');
        $controller = new ProjectController();
      break;
     
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error','conditions','contact_us','gallery','navi'],
                        'project'=> ['index','add','added','view_all','view_all_projects','search','search_result','view','delete','confirm','block','home','logout','edit']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>
