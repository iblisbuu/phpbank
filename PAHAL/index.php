<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PAHAL - LPG subsidy scheme</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>PAHAL scheme application</h2>
  <p>Welcome  Customer,Do you want to avail benefit of LPG subsidy scheme<a href="addscore.php">add your own application</a>.</p>
  <hr />

<?php
  require_once('appvars.php');
  require_once('connectvars.php');

  // Connect to the database 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

  // Retrieve the score data from MySQL
  $query = "SELECT * FROM subsidy WHERE approved = 1";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of score data, formatting it as HTML 
  echo '<table>';
  $i = 0;
  while ($row = mysqli_fetch_array($data)) { 
    // Display the score data
    if ($i == 0) {
      echo '<tr><td colspan="2" class="topscoreheader">successful applicants:: ' . '</td></tr>';
    }
    echo '<tr><td class="scoreinfo">';
    echo '<span class="score">' . $row['score'] . '</span><br />';
    echo '<strong>Name:</strong> ' . $row['name'] . '<br />';
    echo '<strong>Date:</strong> ' . $row['date'] . '</td>';
    if (is_file(GW_UPLOADPATH . $row['screenshot']) && filesize(GW_UPLOADPATH . $row['screenshot']) > 0) {
      echo '<td><img src="' . GW_UPLOADPATH . $row['screenshot'] . '" alt="Score image" /></td></tr>';
    }
    else {
      echo '<td><img src="' . GW_UPLOADPATH . 'unverified.gif' . '" alt="Unverified score" /></td></tr>';
    }
     
	
    $i++;
  }
  echo '</table>';
  
  
  
  echo'<BR /><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttp://localhost/project/PAHAL/index.php&amp;layout=standard&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:80px;" scrolling="no" frameborder="0" allowTransparency="true"><a href="http://wordpress-themes.org" class="fbook">wordpress-themes.org</a></iframe>';
  
  
  
  
  

  mysqli_close($dbc);
?>

</body> 
</html>
