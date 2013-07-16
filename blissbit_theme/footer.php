

<footer>
        

        <div class="row-fluid">
          <div class="span4">
            <h4>Photo Feed</h4>
            <br/>
            <!-- SnapWidget -->
<iframe src="http://snapwidget.com/in/?u=Ymxpc3NiaXR8aW58NzB8M3wzfHxub3w1fG5vbmU=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:225px; height: 225px" ></iframe>

            
          </div><!-- /span4-->
          <div class="span4">
            <h4>Our Location</h4>
            <br/>
            <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=4919+Pentridge+Street,+Philadelphia,+PA&amp;aq=0&amp;oq=4919+pentridge+street&amp;sll=40.115496,-75.2516&amp;sspn=1.243447,2.683411&amp;ie=UTF8&amp;hq=&amp;hnear=4919+Pentridge+St,+Philadelphia,+Pennsylvania+19143&amp;t=m&amp;ll=39.948141,-75.221801&amp;spn=0.00987,0.012875&amp;z=15&amp;output=embed&amp;iwloc=near"></iframe><br />

            <p><a href="http://thecedarworks.com/" target="_blank">The Cedar Works</a><br/>
            West Philadelphia<br/>
            4919 Pentridge Street<br/>
            Philadelphia, PA 19143


            </p>
          </div><!-- /span4-->
          <div class="span4 text-right">

            <p>&copy; Blissbit | All Rights Reserved <br/>
            <a href="mailto:contact@blissbit.com">contact@blissbit.com</a></p>

          </div><!-- /span4-->

        </div><!-- /row-fluid -->




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








