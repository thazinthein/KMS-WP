<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: Contact-Us
*/
?>
<?php get_header();  ?>

              <div class="body container">
                  <div class="row">

                      <div class="col-md-12 breadcurmb">
                          <div class="" id="breadcrumb">
                              <?php woocommerce_breadcrumb(); ?>
                          </div>
                      </div>


                      <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.75376368239!2d103.72686400000002!3d1.323594999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da055492eef28b%3A0x9c5f2e088d1e060c!2s5B+Jln+Papan%2C+Singapore+619407!5e0!3m2!1sen!2ssg!4v1429572278568" width="100%" height="450" frameborder="0" style="border:0"></iframe>               
                      </div>
                      
                  </div>
                  
                  <div class="row">
                        <div class="col-md-4"> 
                            <div class="address"> 
                                <h2>Address</h2>
                                <?php $id =13; $page_data = get_page($id);?>                                                              
                                <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
                            </div>
                        </div>
                        
                        <div class="col-md-8"> 
                            <div class="contactform">
                                <h2>Feedback Form</h2>
                                <?php echo do_shortcode('[contact-form-7 id="50" title="Contact"]')  ?>
                            </div>
                        </div>
                  </div>
              </div>

<?php get_footer();  ?>
 
 