<?php 
require_once (__DIR__.'/tools/xmltojson.php');

$json=XmlToJson::Parse("http://symbion.dk/index.php?id=2485&type=9819");
$data=json_decode($json,true);
?>
<div class="card card-block feed blog-feed bg-petroleum card-inverse">
  <h2 class="card-title">Symbion Blog</h2>
    <?php
      $i = 0;
      foreach($data['item'] as $key => $entry){ 
      if($i==8) break;

      	$epoch = $entry['postdate'];
		
		if($entry['postdate'] < time()): ?>
	   	<!-- Event loop -->
	   	<div class="feed-item blog">    
	   	  <h3><a class="modal-link" data-toggle="modal" data-target="#<?php echo $entry['uid']; ?>" onclick="resetTimeout();"><?php echo $entry['title']; ?></a>
	   	  </h3>
	   	  <div class="feed-meta text-muted">
	   	    Posted<i class="fa fa-clock-o text-muted"></i><?php echo date('d/M/Y', $epoch); ?>
	   	  </div>
	   	</div>
	   	<!-- /Event row -->
	   
    <?php endif; $i++;}?>
    <!-- / loop -->
    
</div>
<?php
  $i = 0;
  foreach($data['item'] as $key => $entry){ 
  if($i==8) break;
?>
<!-- Modal train -->
<div class="modal fade" id="<?php echo $entry['uid']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $entry['uid']; ?>-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title"><?php echo $entry['title']; ?></h3>
      </div>
      <div class="modal-body">

      	<?php if (!empty($entry['teaser'])){

        echo preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "\\2", $entry['teaser']);}

        else echo '<p class="na">No preview text available for this article.</p>'
         ?>

      	<h4>Read full article</h4>
      	<p>Scan with your phone:</p>
      	<img class="qr-code" src="core/widgets/tools/phpqrcode/get_qr.php?input=<?php echo $entry['event-link']; ?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $i++;}?>
