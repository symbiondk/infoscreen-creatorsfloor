<?php 
$url="https://spreadsheets.google.com/feeds/list/1rXaMAfZEqiPOgLYpTSYwnpanPNeyAJ1BsCXxuGF-fQU/od6/public/basic?alt=json";
$json=file_get_contents($url);
$data=json_decode($json,true);
$updated_day_number=date('L', strtotime($data['feed']['updated']['$t']));
$updated_date=date('d. M.', strtotime($data['feed']['updated']['$t']));
$the_day=array ('week','Mandag','Tirsdag','Onsdag','Torsdag','Fredag','Lørdag','Søndag');
?>
<div class="card menu bg-green">
  <img class="card-img-top img-fluid" src="core/inc/img/menu.jpg" alt="Card image cap">
  <div class="card-block">
    	<h2 class="card-title">Ugemenu</h2>
    	<ul class="no-style-list">
    	
      	<!-- menu loop -->
	      <?php
	          foreach($data['feed']['entry'] as $key => $item){ 
	          $menu = substr($item['content']['$t'], 11);	
	         	?>

	      	<li class="card-text menu-item"><span class="day"><?php echo $item['title']['$t']; ?>:</span>&nbsp<?php echo $menu; ?></li>
	      <!-- /menu loop -->

	      <?php } ?>
	      <div class="legend text-capitalize">
	      Opdateret: <?php echo $the_day[$updated_day_number] ?>&nbsp<?php echo $updated_date ?></div>
	      </ul>
  </div>
</div>