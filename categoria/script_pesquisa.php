<script>
        $("a.upload").click(function(e) {
            //codigo escrito em js puro
            // document.getElementById("categoria").value = e.target.id;

            //codigo escrito jquery
            $("#categoria").val(e.target.id);
            //  document.getElementById("UploadImage").click();
            $("#UploadImage").click();

        });

       //função enviar arquivo
       
       function enviar(){
        // document.getElementById("formUpload").submit();
        // jQuery
        $("#formUpload").submit();
       }
    </script>