<?php 
	require(FRONTEND.'include/header.php');
    require(FRONTEND."include/nav.php");
   
?>
	<main>
		<article>
	  <?php 	
	//   require(FRONTEND.'include/slider.php');?>
			<section class="row">
				<div class="col-id-1"></div>
				<div class="col-id-10">
				<?php  $shipping_cost=50;
				
				if($data){
					echo $data;
				}
				?>
				<?php	if(empty($_SESSION["cart_item"])){?>
								empty cart 
								<br>
								continue shopping
							<?php }else{?>
				<!-- content description of our Company -->
					<article >
						<div class="col-id-8">
						
							<table class="cart-table">
								<tr>
									<th>Image</th>
									<th>Book</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Total</th>
									<th>Remove</th>
								</tr>
								<?php 
								$item_total=0;
								foreach ($_SESSION["cart_item"] as $item){
									$item_price = $item["quantity"]*$item["price"];
									$item_total = $item_total + $item_price;
									
									?>
									<tr>
										<td><img src="<?php echo IMG.'books/'.$item['image'];?>" height="200" width="200"></td>
										<td><?php echo $item['title'];?></td>
										<td><input type="number" name="quantity" value="<?php echo $item['quantity'];?>" class="form-control cart-quantity" ></td>
										<td><?php echo $item['price'];?></td>
										<td><?php echo $item_price;?></td>
										<td>
											<button type="button" onClick="removeCartItem('<?php echo $item['id'];?>')">
											Remove Item
											</button>
										</td>
									</tr>

								<?php
								}
								?>
								
							</table>
					
							
						</div>
					<form class="col-id-4 form_body">
							
							<?php echo count($_SESSION['cart_item']);?> items in cart
							<hr>
							Sub total: 
							<?php echo $item_total;?>$ <br>
							
							Shipping: <?php echo $shipping_cost;?>$
							<hr>

							coupon: 
							<input type="text" class="coupon code" name="coupon_code" disabled/>
<hr>

							Total: <?php echo $item_total+$shipping_cost;?> $
							
							<?php if(authCheck()){?>

							<div class="form-control"><a href="<?php echo SITEROOT?>pages/checkout">
							<i class="fa fa-shopping-cart">Checkout</i></div>
							</a>
							<?php
								}?>
						</div>
						

				</div>


						
						<?php }?>

						
					</article>
					
				</div>
				<div class="col-id-1"></div>
			<!-- end of section -->			
			</section>			
			<!-- end of article -->
			<br><br><br>
		</article>
	<!-- end of main -->
	<!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"
            method="post" >
            <input type='hidden' name='business'
                value='sb-lozcb3400106@business.example.com'> <input type='hidden'
                name='item_name' value='Camera'> <input type='hidden'
                name='item_number' value='CAM#N1'> <input type='hidden'
                name='amount' value='10'> <input type='hidden'
                name='no_shipping' value='1'> <input type='hidden'
                name='currency_code' value='USD'> <input type='hidden'
                name='notify_url'
                value='http://localhost/paypal-payment-gateway-integration-in-php/notify.php'>
            <input type='hidden' name='cancel_return'
                value='http://localhost/paypal-payment-gateway-integration-in-php/cancel.php'>
            <input type='hidden' name='return'
                value='http://localhost/paypal-payment-gateway-integration-in-php/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> <input
                type="submit" name="pay_now" id="pay_now"
                Value="Pay Now">
        </form> -->
					
	</main>		
	<script type="text/javascript" src="<?php echo SITEROOT?>/public/scripts/project/remove-cart-item.js"></script>    

<?php

	require(FRONTEND.'include/footer.php');

?>
