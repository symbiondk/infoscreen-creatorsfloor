<div style="margin-left:50px;">
  <h2>Checking if a date is in the Past or Future</h2>
  <p>
    The <strong>strtotime</strong> function returns an integer value
    so it will be a simple matter to see
    if a <strong>date</strong> is in the past or in the future.
  </p>
<?
  /*
    we are creating $dateString variable,
    which will hold the string value for,
    future past or current date.
  */
  
  /*
    NOTE : change $dateString value to
    $dateString = "-1 day";
    OR
    $dateString = "now";
    to check other conditions.
  */
  $dateString = 1466775000;
  
  /*
    pass $dateString as strtotime function's argument,
    time() php function will return current timestamp.
  */
  
  /*
    below condition will echo if dateString contains value,
    which timestamp value is greater than current time.
  */
  if($dateString > time()) {
     echo "<strong>date is in the future</strong>";
   }
   
   /*
    below condition will echo if dateString contains value,
    which timestamp value is less than current time.
  */
   if($dateString < time()) {
     echo "<strong>date is in the past</strong>";
   }
   
   /*
    below condition will echo if dateString contains value,
    which timestamp value is equal to current time.
  */
   if($dateString == time()) {
     echo "<strong>date is right now</strong>";
   }
   echo time();
?>
</div>