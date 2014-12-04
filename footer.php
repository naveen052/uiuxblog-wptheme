
      <div class="col-md-4 sidebar">
        <div class="loop" id="sidebar">
            <?php get_sidebar(); ?>
        </div>
      </div>

    </div>
      <footer class="clearfix">
        <p class="pull-right"><a href="#">Something</a>
        <a href="#">Something</a>
        <a href="#">Something</a>
        <a href="#">Something</a></p>
        <p class="pull-left">// Lorem ipsum dolor sit amet</p>
      </footer>

<script>
    $(document).ready(function() {
      $(window).scroll(function () {
          //if you hard code, then use console
          //.log to determine when you want the
          //nav bar to stick.
          console.log($(window).scrollTop())
        if ($(window).scrollTop() > 100) {
          $('#sidebar').addClass('sidebar-fixed');
        }
        if ($(window).scrollTop() < 101) {
          $('#sidebar').removeClass('sidebar-fixed');
        }
      });
    });
</script>

  </body>
</html>
