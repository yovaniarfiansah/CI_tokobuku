		<!-- //market-->
		<div class="market-updates">
			<?php if ($this->session->userdata('level')=="admin"): ?>
		<a href="<?=base_url()?>index.php/petugas">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>CRUD</h4>
					<h3> - PETUGAS -</h3>
					<p>Other hand, we denounce</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		</a>
		<a href="<?=base_url()?>index.php/buku">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>CRUD</h4>
						<h3>- BUKU -</h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		</a>
        <a href="<?=base_url()?>index.php/kategori">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>CRUD</h4>
						<h3>- KATEGORI -</h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
        </a>
		<?php endif ?>
		<?php if ($this->session->userdata('level')=="kasir"): ?>
        <a href="<?=base_url()?>index.php/transaksi">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>KASIR</h4>
                        <h3>- TRANSAKSI -</h3>
                        <p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
        </a>
		<?php endif ?>
		   <div class="clearfix"> </div>
		</div>

	<!-- galerry start -->
		    <div class="gallery">
        <div class="gallery-grids">
                <div class="gallery-top-grids">
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="<?=base_url(); ?>asset/images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="<?=base_url(); ?>asset/images/g1.jpg" alt="" />
                                <div class="captn">
                                    <h4>TOGAMEDIA</h4>
                                    <p>Aliquam non</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="<?=base_url(); ?>asset/images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="<?=base_url(); ?>asset/images/g8.jpg" alt="" />
                                <div class="captn">
                                    <h4>TOGAMEDIA</h4>
                                    <p>Aliquam non</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="<?=base_url(); ?>asset/images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="<?=base_url(); ?>asset/images/g3.jpg" alt="" />
                                <div class="captn">
                                    <h4>TOGAMEDIA</h4>
                                    <p>Aliquam non</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="gallery-top-grids">
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="<?=base_url(); ?>asset/images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="<?=base_url(); ?>asset/images/g5.jpg" alt="" />
                                <div class="captn">
                                    <h4>TOGAMEDIA</h4>
                                    <p>Aliquam non</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="<?=base_url(); ?>asset/images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="<?=base_url(); ?>asset/images/g6.jpg" alt="" />
                                <div class="captn">
                                    <h4>TOGAMEDIA</h4>
                                    <p>Aliquam non</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 gallery-grids-left">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="<?=base_url(); ?>asset/images/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="<?=base_url(); ?>asset/images/g7.jpg" alt="" />
                                <div class="captn">
                                    <h4>TOGAMEDIA</h4>
                                    <p>Aliquam non</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                <script src="<?=base_url(); ?>asset/js/lightbox-plus-jquery.min.js"> </script>
        
    </div>
    </div>
	<!-- 	galerry end -->

