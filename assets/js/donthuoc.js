// $(document).ready(function() {

    $(".input_search_DonThuoc").keyup(function() {
        var txt = $(".input_search_DonThuoc").val();
       
      
           $.post('ajaxDonThuoc.php', {data:txt}, function(data){
               $('.SEARCH_RESULT_DONTHUOC').html(data);


           })
       

        })
    // })