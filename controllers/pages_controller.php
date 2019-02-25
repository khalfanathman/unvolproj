<?php
  class PagesController {
    public function home() {
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    public function conditions() {
      require_once('views/pages/conditions.php');
    }
    public function contact_us() {
      require_once('views/pages/contact_us.php');
    }
    public function gallery() {
      require_once('views/pages/gallery.php');
    }
     public function navi() {
      require_once('views/pages/navi.php');
    }
  }
?>
