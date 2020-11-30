<script>

    $("a#filter").click(function (e) {
        var $t = $("#box-filter");

        if ($t.is(':visible')) {
            $("#box-filter").slideUp();
            $("a#filter").removeClass('hover-filter');
        } else {
            $("#box-filter").slideDown();
            $("a#filter").addClass('hover-filter');
        }

        e.preventDefault();
    });
    
     $("a#sorting").click(function (e) {
         var $t = $("#box-sorting");

         if ($t.is(':visible')) {
             $("#box-sorting").slideUp();
             $("a#sorting").removeClass('hover-filter');
         } else {
             $("#box-sorting").slideDown();
             $("a#sorting").addClass('hover-filter');
         }

         e.preventDefault();
     });
</script>