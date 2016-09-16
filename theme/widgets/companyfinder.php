<?php 
$url="http://public.symbion.dk/getcustomerinfo_json.aspx?siteid=4";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>

<div class="card card-block bg-cyan vh-lg-2 no-padding">
  <button class="btn btn-card-fill" data-toggle="modal" data-target="#companies" onclick="resetTimeout();">Find Company</button>
</div>
<!-- Modal companies -->
<div class="modal fade" id="companies" tabindex="-1" role="dialog" aria-labelledby="companies-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="companies-modal">Companies at Creators Floor</h4>
      </div>
      <div class="modal-body">

        <table class="table">
          <thead class="thead-default">
            <tr>
              <th>Office</th>
              <th>Company</th>
              <th>Phone</th>
            </tr>
          </thead>
          <tbody>
                
         <!-- loop -->
           <?php
               foreach($data as $key => $item){ 
           ?>
              
           <tr>
              <th scope="row"><?php echo $item['roomnr']; ?></th>
              <td><?php echo $item['company']; ?></td>
              <td><?php echo $item['mainphone']; ?></td>
            </tr>        
           
           <?php } ?>
       <!-- /loop -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
      </div>
    </div>
  </div>
</div>