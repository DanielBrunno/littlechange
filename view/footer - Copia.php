    <div style="width:100%; text-align:center; ">
        <div class="col-md-12"><footer class="text-center"> <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="IR TOPO"> <span class="glyphicon glyphicon-chevron-up"></span> </a> </footer></div>
    </div>
    <div class="iphone"><br></div><hr><br>
    
    <script>
    $(document).ready(function(){
      // Initialize Tooltip
      $('[data-toggle="tooltip"]').tooltip(); 
      
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== ""){
              // Prevent default anchor click behavior
              event.preventDefault();
        
              // Store hash
              var hash = this.hash;
        
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({ scrollTop: $(hash).offset().top}, 900, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
        }
      });
    })
    </script>
    <nav  class="navbar navbar-default navbar-inverse navbar-fixed-bottom" style="font-size: 11px; color:#9497a8; padding:15px 0px 0px 0px; height:10px; background-color:#F2F4F7; border:0px; text-align:center;" role="navigation">
        <div class="soDesktop01"><a style="color:#9497a8;" href="http://startup.natal.br/"> Desenvolvimento Web - <?php $data = date("Y"); echo $data; ?>.</a></div>
        <div class="celView01"><a style="color:#9497a8;" href="http://startup.natal.br/"> Desenvolvimento Mobile - <?php $data = date("Y"); echo $data; ?>.</a></div>
    </nav>
</body>
</html>