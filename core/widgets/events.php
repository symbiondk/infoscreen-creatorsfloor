<?php 
require_once (__DIR__.'/tools/xmltojson.php');

$json=XmlToJson::Parse("http://symbion.dk/index.php?id=2471&type=9818");
$data=json_decode($json,true);
?>
<div class="card feed event-feed card-block bg-creators">
  <h2 class="card-title">Upcoming Events</h2>
    <?php
      $i = 0;
      foreach($data['item'] as $key => $entry){ 
      if($i==50) break;

      	$epoch = $entry['begin'];
		
		if($entry['begin'] > time()): 
			if($entry['category'] == 5) {$cat_icon = 'lightbulb-o';} //Gratis Åbne netværksarr
			if($entry['category'] == 7) {$cat_icon = 'suitcase';} //Eksterne
			if($entry['category'] == 10) {$cat_icon = 'glass';} //Åbne events
			if($entry['category'] == 3) {$cat_icon = 'group';} //Interne arrangementer
			if($entry['category'] == 9) {$cat_icon = 'comments-o';} //Seminarer og workshops
			if($entry['category'] == 8) {$cat_icon = 'building';} //Konferencecenter
			?>
	   	<!-- Event loop -->
	   	<div class="row event">
	   	  <div class="col-xs-3 event-meta no-padding-r">
	   	    <span class="event-date"><?php echo date('d', $epoch); ?></span>
	   	    <span class="event-month"><?php echo date('M', $epoch); ?></span>
	   	  </div>
	   	  <div class="col-xs-9 event-description">
	   	    <h3><?php echo $entry['title']; ?></h3>
	   	    <ul class="event-details no-style-list">
	   	    	<li><i class="sep-icon first fa fa-home"></i><?php if( empty($entry['location-id-title']) ) {echo $entry['location'];} else {echo $entry['location-id-title'];} ?></li>
	   	    	<li><i class="sep-icon first fa fa-<?php echo $cat_icon; ?>"></i><?php echo $entry['category-title']; ?></li>
	   	    </ul>
	   	  </div>
	   	</div>
	   	<!-- /Event row -->
	   
    <?php endif; $i++;}?>
    <!-- / loop -->
    
</div>