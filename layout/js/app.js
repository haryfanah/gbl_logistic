$(document).ready(function(){
    $('#matricule').keyup(function(){
        if(!$('#matricule').val().match(/^[0-9]{6}$/i)){
            $('#matricule').css("border","2px solid #FF0000");
        }else{
            $('#matricule').css("border","5px solid #28a745");
        }
    });
    $(".msg").hide();
    $('#login').on('click', function(e){
        
        var matricule = $('#matricule').val();
        var mdp = $('#mdp').val(); 
        
        if(matricule == "" || mdp == "")
        {
            $('.msg').show();
            e.preventDefault();
        }
            
    });
    
    setInterval(function(){
        $('.nav-load').load('navbar.html');
    }, 5000);
    
    setInterval(function(){
        $('.count').load('count_notif.html');
    }, 300);

    setInterval(function(){
        $('.nav-loading').load('ccp.html');
    }, 4000);
    setInterval(function(){
        $('.count-ccp').load('ccp_count.html');
    }, 300);

    setInterval(function(){
        $('.nav-ta').load('tache.html');
    }, 4000);
    setInterval(function(){
        $('.count-ta').load('tache_count.html');
    }, 300);
    setInterval(function(){
        $('.countSolde').load('count_notif_solde.html');
    }, 300);
    setInterval(function(){
        $('.nav-notif-solde').load('notif_solde.html');
    }, 4000);
    
    setInterval(function(){
        $('.count-suivi').load('count_suivi_dossiers.html');
    }, 300);
    setInterval(function(){
        $('.count-rejet').load('count_rejet.html');
    }, 300);
    setInterval(function(){
        $('.count-paquet').load('count_paquet.html');
    }, 300);
    setInterval(function(){
        $('.nav-notif-visa').load('notif_visa.html');
    }, 4000);
    
    setInterval(function(){
        $('.countVisa').load('count_visa.html');
    }, 300);
    setInterval(function(){
        $('.count-dossiers').load('count_dossiers.html');
    }, 300);
    setInterval(function(){
        $('.count-rejet-visa').load('count_rejet_visa.html');
    }, 300);
    var html ='<div class="col-12 col-lg-3"><div class="input-group"><input type="<?php echo $type_r;?>" name="piece[]" class="form-control mb-2" placeholder="Pièces..."><div class="input-group-preppend"><button type="button" id="remove" class="btn btn-danger"><span class="fa fa-minus"></span></button></div></div></div>';
    var max = 11;

    var x = 1;
   $("#add").click(function(){
       if(x <= max){
            $("#add_input").append(html);
            x++;
        }
   });
   $("#add_input").on('click','#remove',function(){
    $(this).closest('.col-12').remove();
    x--;
});
    // $('#submit').on('click', function(){
    //     var matricule = $("#matricule").val();
    //     var mdp = $("#mdp").val();
    //     if(matricule == "" || mdp == ""){
    //     alert('veuillez rempir les chaps svp');
    //     }else{
    //         $.ajax(
    //             {
    //                 url: 'connexion',
    //                 method: 'POST',
    //                 data: {
    //                     submit: 1,
    //                     matricule: matricule,
    //                     mdp: mdp
    //                 },
    //                 success:function(response){
    //                     $('#response').html(response);
    //                     // if(response.indexOf('success') >= 0)
    //                     // window.location = 'accueil';
    //                 },
    //                 dataType: 'text'
    //             }
    //         );
    //     }
    // });
    // $('#recherche').keyup(function(){
    //     var recherche = $(this).val();
    //     var data = 'motclef=' + recherche;
    //     if(recherche.lenght>3){
    //         $.ajax({
    //             type:"GET",
    //             url: "resultat",
    //             data: data,
    //             success: function(server_response){
    //                 $('#result').html(server_response).show();
    //             }
    //         });
    //     }
    // });
   
});