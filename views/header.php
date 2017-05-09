<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/site.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/family.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/dist/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/dist/css/skins/skin-blue.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/dist/css/page/page.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/site/common.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/site/member.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/site/representative.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
<!--     <script type="text/javascript" charset="utf-8" >
          $(function() {
                     
            //retrieve comments to display on page
            $.getJSON("comments.php?jsoncallback=?", function(data) {
                         
              //loop through all items in the JSON array
              for (var x = 0; x < data.length; x++) {
                             
                //create a container for each comment
                var div = $("<div>").addClass("row").appendTo("#comments");
                                 
                //add author name and comment to container              
                $("<label>").text(data[x].name).appendTo(div);           
                $("<div>").addClass("comment").text(data[x].comment).appendTo(div);
              }
            });         
          });           
    </script> -->
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo URL; ?>dashboard" class="logo">
        <span  class="logo-lg">MVC
        </span> -->
    </a>
    <nav style="" class="navbar navbar-static-top">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
            <a href="<?php echo URL; ?>dashboard/logout">
              <span>
                <i class="fa fa-sign-out"></i>
                Logout
              </span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
            
<!--全体-->
<div class="content-wrapper padding-top20">
    
