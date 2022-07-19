<?php
// Creating a Associative array for stored hotel prices
$Hotels = ['The Westin'=> 1550.50, 'Raddison Blu'=> 1321.65,'Garden Court'=> 1731.65,'Southern Sun'=> 1921.65];

function dateDiffInDays($date1, $date2) 
  {
      // Calculating the difference in timestamps
      $diff = strtotime($date2) - strtotime($date1);
  
      // 1 day = 24 hours
      // 24 * 60 * 60 = 86400 seconds
      return abs(round($diff / 86400));
  }
?>