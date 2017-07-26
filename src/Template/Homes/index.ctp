<main id="booking_page">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div id="booking_advanced">

                    <div class="main_title a_left upper">
                        <h2>Add Your Home</h2>
                    </div>
                    <!-- ========== BOOKING FORM ========== -->
                    <?php echo $this->Form->create($homes, ['id' => 'booking_form_advanced']); ?>
                    
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>County</label>
                                    <?php echo $this->Form->control('country_id', [ 'class' => 'form-control', 'placeholder'=> 'Country']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <?php echo $this->Form->control('state_id', [ 'class' => 'form-control', 'placeholder'=> 'State']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <?php echo $this->Form->control('city_id', [ 'class' => 'form-control', 'placeholder'=> 'City']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <?php echo $this->Form->control('pincode', [ 'class' => 'form-control', 'placeholder'=> 'Pincode']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Landline</label>
                                    <?php echo $this->Form->control('landline', [ 'class' => 'form-control', 'placeholder'=> 'Landline Number']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <?php echo $this->Form->control('pincode', [ 'class' => 'form-control', 'id' => 'lat', 'placeholder'=> 'Pincode', 'readonly']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <?php echo $this->Form->control('landline', [ 'class' => 'form-control', 'id' => 'long', 'placeholder'=> 'Landline Number', 'readonly']);?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php echo $this->Form->control('searchInput', [ 'class' => 'form-control', 'id' => 'pac-input', 'placeholder'=> 'Map Search']);?>
                                <div id="map-canvas"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="button btn_blue bb" id="modal-open"><i class="fa fa-bath"></i>Select Amenities</button>
                                    <button class="button btn_blue bb"><i class="fa fa-eye"></i>Select Features</button>
                                    <button class="button btn_blue bb"><i class="fa fa-user-o"></i>Add Members</button>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="main_title a_left upper">
                                <h5>Amenities</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="main_title a_left upper">
                                <h5>Features</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="main_title a_left upper">
                                <h5>Members</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Home Name</label>
                                    <?php echo $this->Form->control('name', [ 'class' => 'form-control', 'placeholder'=> 'Your Home Name']);?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> BOOK A ROOM NOW </button>
                            </div>
                        </div>
                        <?php echo $this->Form->end(); ?>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="special_offers">
                    <div class="main_title a_left upper">
                        <h2>Special Offers</h2>
                    </div>
                    <article class="room mb40">
                        <figure>
                            <a href="room.html" class="hover_effect h_blue h_link">
                                <img src="img/rooms/special1.jpg" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="room.html">Single Room</a></h4>
                                <div class="price">€ 89<span> / night</span></div>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="room mb40">
                        <figure>
                            <a href="room.html" class="hover_effect h_blue h_link">
                                <img src="img/rooms/special2.jpg" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="room.html">Double Room</a></h4>
                                <div class="price">€ 129<span> / night</span></div>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="room mb40">
                        <figure>
                            <a href="room.html" class="hover_effect h_blue h_link">
                                <img src="img/rooms/special3.jpg" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="room.html">Delux Room</a></h4>
                                <div class="price">€ 189<span> / night</span></div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>

        </div>
    </div>
</main>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
          <div id="map-canvas"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
