<?php

?>

    <div id="affiche">
    
    </div>

        <button id="button">
            executer
        </button>

        <br>

        <button id="btn_delete">
            supprimer
        </button>



<script src="assets/js/jquery-3.6.0.js"></script>

<script language="javascript">
    $(document).ready(function(){

        $('#button').click(function(){
            reponse = prompt('Merci de renseigner votre prénom');
            getPrenom(reponse);

        })

        $('#btn_delete').click(function(){
            $('#affiche').empty();

        })

    })

    function getPrenom(reponse){
        
        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {
                'reponse': reponse
            },
            datatype: 'json',
            success: function(data) {
                $('#affiche').append(data);
            }
        });
    }


</script>
