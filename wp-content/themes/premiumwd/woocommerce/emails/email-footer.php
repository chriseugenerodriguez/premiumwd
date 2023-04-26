<?php
/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
															</div>
														</td>
                                                    </tr>
                                                </table>
                                                <!-- End Content -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Body -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    
                                </td>
                            </tr>
                        </table><!-- Footer -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
                                    	<tr>
                                        	<td valign="top">
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="credit">
                                                        	<?php echo wpautop( wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ) ); ?>
                                                         <center>
                                                         <a style="margin-right:7px;" href="https://twitter.com/premiumwd" target="_blank"><i class="fa fa-twitter"></i></a> 
                                                         <a style="margin-right:7px;" href="https://www.facebook.com/premiumwd" target="_blank"><i class="fa fa-facebook"></i></a>  
                                                         <a style="margin-right:7px;" href="https://google.com/+Premiumwdesign" rel="publisher" target="_blank"><i class="fa fa-google-plus"></i></a> 
                                                         <a style="margin-right:7px;" href="http://www.pinterest.com/WPpremiumthemes/" target="_blank"><i class="fa fa-pinterest"></i></a> 
                                                         <a href="http://www.premiumwd.com/feed" target="_blank"><i class="fa fa-rss"></i></a> 
                                                         </center>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Footer -->
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
