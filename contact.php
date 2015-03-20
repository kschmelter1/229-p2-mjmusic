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


    <h1>Contact Us</h1>
  <ul class="links">
    <li>MJ Music Productions
    </li>
    <li>Phone: 732-890-9480</li>
    <li><a href="mailto:djmike@mjmusic.net" target="_blank">djmike@mjmusic.net</a></li>
  </ul>
<br>
  <form>
    <label>Name :</label>
    <input type="text" name="name">
    <br>
    <label>Address :</label>
    <input type="text" name="address">
    <br>
    <label>City :</label>
    <input type="text" name="city">
    <br>
    <label>State :</label>
    <input type="text" name="state">
    <br>
    <label>Zip :</label>
    <input type="text" name="zip">
    <br>
    <label>Telephone :</label>
    <input type="text" name="telephone">
    <br>
    <label>Email :</label>
    <input type="text" name="email">
    <br>
    <label>Event Date :</label>
    <input type="text" name="date">
    <br>
    <label>Type of Event :</label>
    <select name="event">
      <option value="none" selected>Select An Event Type...</option>
      <option value="wedding">Wedding Reception</option>
      <option value="corporate">Corporate Event</option>
      <option value="barbat">Bar / Batmitzvah</option>
      <option value="birthday">Birthday Party</option>
      <option value="anniversary">Anniversary Party</option>
      <option value="outdoor">Outdoor Event</option>
    </select>
    <br><br>
    <label>Additional Comments :</label> <br>
    <textarea name="message" rows="5" cols="30">
    </textarea>
    <br>
<input type="submit">
  </form>


  </div>



<?php include('includes/bottom.php'); ?>

</body>

</html>
