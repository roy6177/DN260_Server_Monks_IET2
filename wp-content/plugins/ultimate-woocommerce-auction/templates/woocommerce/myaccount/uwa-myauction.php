<?php
if ( ! defined( 'ABSPATH' ) ) {

$user_id  = get_current_user_id();
?>
	
		global $product;
		global $sitepress;
		
		$product_id =  $my_auction->auction_id;
		
		/* For WPML Support - start */		
		if (function_exists('icl_object_id') && method_exists($sitepress, 
			'get_current_language')) {				
			
			$product_id = icl_object_id($product_id	, 'product', false, 
				$sitepress->get_current_language());
		}
		/* For WPML Support - end */
		
		
		if (  method_exists( $product, 'get_type') && $product->get_type() == 'auction' ) {
		
            <td><?php echo $a ;?></td>
    <?php }
   } 
	}
   else {
	$shop_page_id = wc_get_page_id( 'shop' );   
	$shop_page_url = $shop_page_id ? get_permalink( $shop_page_id ) : '';
	?>  
   <div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">		
		  <a class="woocommerce-Button button" href="<?php echo $shop_page_url;?>">
			<?php _e( 'Go shop' , 'woocommerce' ) ?>		</a> <?php _e( 'No auctions available yet.' , 'woo_ua' ) ?>
		   </div>
                 
   <?php } ?>
  
</table>