<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Hot Offers</h3>
			<div class="agile_top_brands_grids">
            <?php
			$con=mysqli_connect("localhost","root","","project1");
			$a="select * from product";
			$b=mysqli_query($con,$a);
			while($c=mysqli_fetch_array($b))
			{
			?>
            
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="tag">
                            <img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
					<?php echo "<a href=single.php?prod_name=$c[prod_name]>"?>
                      <?php echo "<img title='' alt='' src=admin/product_upload/$c[image]>"?></a>		
											<p><?php echo $c["prod_name"]; ?></p>
											<h4><?php echo $c["price"]?> <span>$10.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="checkout.html" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
													<input type="hidden" name="amount" value="7.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
													
											</form>
									
										</div>
									</div>
								</figure>
							</div>
                
						</div>
					</div>
                   
				</div>
				             <?php
			}
					?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>