<div class="card card-info card-inverse info">
	<img class="card-img-top img-fluid" src="core/inc/img/ask.jpg" alt="Information">
  <div class="card-block">
    	<h2 class="card-title">Information</h2>
    	<!-- Button trigger modal -->
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#taxi">
    	  <i class="fa fa-taxi" aria-hidden="true"></i> Taxi
    	</button>
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#train">
    	  <i class="fa fa-train" aria-hidden="true"></i> Tog
    	</button>
  </div>
</div>

<!-- Modal TAXI -->
<div class="modal fade" id="taxi" tabindex="-1" role="dialog" aria-labelledby="taxi-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="taxi-modal">Taxi-information</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-4">
	      		<div class="card taxi-yellow">
	      		  <img class="card-img-top" src="core/inc/img/taxi/amagerobro.jpg" alt="Card image cap">
	      		  <div class="card-block">
	      		    <h4 class="card-title">Amager-øbro taxa</h4>
	      		    <p class="card-text">Tlf: 27 27 27 27</p>
	      		  </div>
	      		</div>
      		</div>
      		<div class="col-md-4">
	      		<div class="card taxi-green">
	      		  <img class="card-img-top" src="core/inc/img/taxi/taxinord.jpg" alt="Card image cap">
	      		  <div class="card-block">
	      		    <h4 class="card-title">Taxinord</h4>
	      		    <p class="card-text">Tlf: 48 48 48 48</p>
	      		  </div>
	      		</div>
      		</div>
      		<div class="col-md-4">
	      		<div class="card taxi-midnightblue">
	      		  <img class="card-img-top" src="core/inc/img/taxi/4x35.jpg" alt="Card image cap">
	      		  <div class="card-block">
	      		    <h4 class="card-title">Taxa 4x35</h4>
	      		    <p class="card-text">Tlf: 35 35 35 35</p>
	      		  </div>
	      		</div>
      		</div>
      	</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal train -->
<div class="modal fade" id="train" tabindex="-1" role="dialog" aria-labelledby="train-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="train-modal">Tog-information</h4>
      </div>
      <div class="modal-body">
      	
      	<img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?center=55.715218,+12.553953&zoom=16&scale=2&size=600x350&maptype=roadmap&key=AIzaSyBw4qfRGatj5npSnwqrqqeZSlr3ZniQIAM&format=png&visual_refresh=true">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
      </div>
    </div>
  </div>
</div>