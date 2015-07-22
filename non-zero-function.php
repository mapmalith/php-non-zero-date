  /*
   *@author Pasan Mallawaarachchi
   *@description this function removes the leading zero on date and month of date
   *@example 01/01/1999 to 1/1/1999 
   */
  function remove_zero_from_date($date_to_format=""){
	//remove leading zero
	$no_zeros = str_replace('*0', '', $date_to_format);
	//clean * from the date
	$non_zero_date = str_replace('*', '', $no_zeros);
	return $non_zero_date;
  }
