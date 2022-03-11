// $(document).ready(function() {

    $(".input_search").keyup(function() {
        var txt = $(".input_search").val();
       
      
           $.post('../../../BusinessLogic/yta/ajax.php', {data:txt}, function(data){
               $('.SEARCH_RESULT').html(data);


           })
       

        })

    // })


   