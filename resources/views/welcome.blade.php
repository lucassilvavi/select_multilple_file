<form enctype="multipart/form-data" id="upload_form" role="form" method="POST" action="product">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="form-group">
        <label for="catagry_name">Logo</label>
        <input type="file" name="photos" class="form-control" id="catagry_logo" multiple>
        <p class="invalid">Enter Catagory Logo.</p>
    </div>
    <div class="fotosGravadas">

    </div>
    <div class="modelFootr">
        <button type="button" class="addbtn">Add</button>
    </div>
    <div class="modelFootr">
        <button type="submit" class="salvar">Salvar</button>
    </div>
    <div class="modelFootr">
        <button type="button" class="sair">sair</button>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(".addbtn").click(function () {
        $.ajax({
            url: 'upload1',
            data: new FormData($("#upload_form")[0]),
            async: false,
            type: 'post',
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response[0]);
                $(".fotosGravadas").append("<p>"+response[0]['name']+"</p>");
                $(".fotosGravadas").append("<input type='hidden' class='fotosAdd' name='idFotos[]' value="+response[0]['fileID']+"></input>");
            },
        });
    });

</script>
<script>
    $(".sair").click(function () {
        $.ajax({
            url: 'sair',
            data: new FormData($("#upload_form")[0]),
            async: false,
            type: 'post',
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
            },
        });


//        $.ajax({
//            url: 'upload1',
//            data: new FormData($("#upload_form")[0]),
//            async: false,
//            type: 'post',
//            processData: false,
//            contentType: false,
//            success: function (response) {
//                console.log(response[0]);
//                $(".fotosGravadas").append("<p>"+response[0]['name']+"</p>");
//                $(".fotosGravadas").append("<input type='hidden' name='idFotos[]' value="+response[0]['fileID']+"></input>");
//            },
//        });
    });

</script>
