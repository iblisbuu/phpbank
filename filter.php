<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>QUERY FILTER</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
  
<?php
  if (isset($_POST['submit'])) {
    $query = $_POST['search'];
    $output_form = 'no';
	
	if (empty($query)) {
      // We know at least one of the input fields is blank 
      echo 'Please enter something to query.<br />';
      $output_form = 'yes';
    }
	
	
	function build_query($user_search) {
    $search_query = "SELECT * FROM riskyjobs";

    // Extract the search keywords into an array
    $clean_search = str_replace(',', ' ', $user_search);
    $search_words = explode(' ', $clean_search);
    $final_search_words = array();
    if (count($search_words) > 0) {
      foreach ($search_words as $word) {
        if (!empty($word)) {
          $final_search_words[] = $word;
        }
      }
    }

    // Generate a WHERE clause using all of the search keywords
    $where_list = array();
    if (count($final_search_words) > 0) {
      foreach($final_search_words as $word) {
        $where_list[] = "description LIKE '%$word%'";
      }
    }
    $where_clause = implode(' OR ', $where_list);

    // Add the keyword WHERE clause to the search query
    if (!empty($where_clause)) {
      $search_query .= " WHERE $where_clause";
    }

  

    return $search_query;
  }

	
	$query=build_query($query);
	
  }
  else {
    $output_form = 'yes';
  }

  if (!empty($query)) 
  {
     if( $query=="games")
        {
         header( 'Location: https://www.goodreads.com' );
		
		}		
     
	 if( $query=="porn")
        {
         header( 'Location: https://www.worshiptogether.com' );
		
		}		
      if(( $query=="video") || ($query=="youtube"))
        {
         header( "Location: https://www.codechef.com" );
		
		}		
      if( $query=="facebook")
        {
         header ( " Location: https://www.SPOJ.com");
		
		}		
    
	 
  
  }

  if ($output_form == 'yes') {
?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="search">search:</label>
    <input type="text" id="search" name="search" /><br />
    <input type="submit" name="submit" value="Submit" />
  </form>

  <?php
  }
?>

</body>
</html>
