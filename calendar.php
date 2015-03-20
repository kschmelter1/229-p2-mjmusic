<!doctype html>
<html>

<head>
  <link type="text/css" rel="stylesheet" href="css/reset.css" >
  <link type="text/css" rel="stylesheet" href="css/main.css" >
  <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
</head>

<body>

<?php include('includes/top.php'); ?>

  <div class="content">


    <div class="maintext">
    <h1>Event Calendar</h1>
    <br>
<!--Calendar from time.ly. Temporary solution for my client until I can create a way for him to log in and edit content through an admin set up-->
  <script class="ai1ec-widget-placeholder" data-widget="ai1ec_superwidget" data-no_navigation="true" data-action="month">
(function(){var d=document,s=d.createElement('script'),
i='ai1ec-script';if(d.getElementById(i))return;s.async=1;
s.id=i;s.src='http://live-timely-mafzcful.time.ly/?ai1ec_js_widget';
d.getElementsByTagName('head')[0].appendChild(s);})();
</script>
</div>

</div>

<?php include('includes/bottom.php'); ?>

</body>

</html>
