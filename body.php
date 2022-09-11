<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">FOODS</h3>	
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
						   <!-- product -->
										<?php
                    include 'db.php';
								
                    
					$food_query = "SELECT * FROM foods where food_id ";
                $run_query = mysqli_query($con,$food_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $food_id    = $row['food_id'];
                        $food_title = $row['food_title'];
                        $food_price = $row['food_price'];
                        $food_image = $row['food_image'];

                        echo "
				
                        
                                
								<div class='product col-md-3'>
									<a href='product.php?p=$food_id'><div class='product-img'>
										<img src='food_images/$food_image' style='max-height: 170px;' alt=''>
									</div></a>
									<div class='product-body'>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$food_id'>$food_title</a></h3>
										<h4 class='product-price header-cart-item-info'>Rs.$food_price</h4>
										

										<div class='add-to-carts'>
											<button pid='$food_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
										</div>
										
									</div>
								</div>
                               
							
                        
			";

		}
        ;
      
}
?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

</div>







