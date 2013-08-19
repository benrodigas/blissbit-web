

<footer>
        

        <div class="row-fluid">
          <div class="span12 photo-feed">
            <h3>Photo Feed</h3>
            <br/>
          
            <div class="instagram_desktop_large photo-feed"><!-- SnapWidget -->
            <iframe src="http://snapwidget.com/in/?u=Ymxpc3NiaXR8aW58MjI1fDR8Mnx8bm98NXxub25l" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:920px; height: 460px" ></iframe>

            </div>            

            <div class="instagram_desktop"><!-- SnapWidget -->
            <iframe src="http://snapwidget.com/in/?u=Ymxpc3NiaXR8aW58MjAwfDR8Mnx8bm98NXxub25l" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:820px; height: 410px" ></iframe>
            </div>


            <div class="instagram_inbetween"><!-- SnapWidget -->
            <iframe src="http://snapwidget.com/in/?u=Ymxpc3NiaXR8aW58MTUwfDR8Mnx8bm98NXxub25l" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:620px; height: 310px" ></iframe>
            </div>


            <div class="instagram_ipad_p"><!-- SnapWidget -->
            <iframe src="http://snapwidget.com/in/?u=Ymxpc3NiaXR8aW58NzV8NHwyfHxub3w1fG5vbmU=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:320px; height: 160px" ></iframe>
            </div>


            <div class="instagram_iphone_ls"><!-- SnapWidget -->
            <iframe src="http://snapwidget.com/in/?u=Ymxpc3NiaXR8aW58NzV8NHwyfHxub3w1fG5vbmU=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:320px; height: 160px" ></iframe>
            </div>



            <div class="instagram_iphone"><!-- SnapWidget -->
            <iframe src="http://snapwidget.com/in/?u=Ymxpc3NiaXR8aW58NzB8NHwyfHxub3w1fG5vbmU=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:300px; height: 150px" ></iframe>
            </div>

          </div><!-- /span12-->

        </div><!-- /row-fluid-->
          


          <div class="row-fluid">
          <div class="span12">
            <h3>Our Location</h3>
            <br/>
            <iframe class="map-margin" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=4919+Pentridge+Street,+Philadelphia,+PA&amp;aq=0&amp;oq=4919+pentridge+street&amp;sll=40.115496,-75.2516&amp;sspn=1.243447,2.683411&amp;ie=UTF8&amp;hq=&amp;hnear=4919+Pentridge+St,+Philadelphia,+Pennsylvania+19143&amp;t=m&amp;ll=39.948141,-75.221801&amp;spn=0.00987,0.012875&amp;z=15&amp;output=embed&amp;iwloc=near"></iframe><br />

            <p><a href="http://thecedarworks.com/" target="_blank">The Cedar Works</a><br/>
            West Philadelphia<br/>
            4919 Pentridge Street<br/>
            Philadelphia, PA 19143
            <p>

          </div><!-- /span12-->
        </div><!-- /row-fluid -->

        <div>
            <p class="blissbit-copywrite">&copy;Blissbit | All Rights Reserved <br/>
            <a href="mailto:contact@blissbit.com">contact@blissbit.com</a></p>
        </div>  






      </footer>



    </div> <!-- /container -->




    <!-- Javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script> 
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>-->
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.smartresize.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.backgroundSize.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/custom.js" type="text/javascript"></script>


<?php if (is_home()) : ?>

    <script type="text/javascript">
      $(document).ready(function() {
        // setup and refresh navspry
        $('#spry-nav').scrollspy();

        $('[data-spy="scroll"]').each(function () {
          var $spy = $(this).scrollspy('refresh')
        }); 

        $('#spry-nav li a').bind('click', function(e) {
            e.preventDefault();
            target = this.hash;
            console.log(target);
            $.scrollTo(target, 700, {offset: 0});
        });
      });
    </script>

<?php endif; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42381718-1', 'blissbit.org');
  ga('send', 'pageview');

</script>

  <?php wp_footer(); ?>



  </body>
</html>








