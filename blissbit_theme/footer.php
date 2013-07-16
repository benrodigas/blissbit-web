

<footer>
        

        <div class="row-fluid">
          <div class="span6">
            <p>&copy; Blissbit | All Rights Reserved</p>

          </div><!-- /span6-->
          <div class="span6 text-right">


            <p><a href="mailto:contact@blissbit.com">contact@blissbit.org</a></p>

          </div><!-- /span6-->

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








