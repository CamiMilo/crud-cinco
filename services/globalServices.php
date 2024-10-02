<?php
  // RENDER VIEWS
  function renderView($page, $data = array()) {
    extract($data);
    include $page;
  };
?>