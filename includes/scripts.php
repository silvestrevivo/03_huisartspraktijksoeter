<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Add userAgent to html tag
        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);

        $(".button-collapse").sideNav();
        $("#titel").fadeIn(2500);
        $('.modal-trigger').leanModal();
      });
</script>
