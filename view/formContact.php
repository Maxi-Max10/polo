<div id="mensajeC"></div>
                        <form id="form_enviar" method="post">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            placeholder="">
                                        <label>Nombre</label>
                                    </div>
                                    <div id="aler_nombre" class="text-danger" style="font-size: 12px;"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="">
                                        <label >Email</label>
                                        <div id="e_email" class="text-danger" style="font-size: 12px;"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="telefono" name="telefono"
                                            placeholder="">
                                        <label >Teléfono</label>
                                        <div id="aler_telefono" class="text-danger" style="font-size: 12px;"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa"
                                            placeholder="">

                                        <label >Nombre Empresa <span style="font-size: 10px;">(Opcional)</span></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" id="mensaje"
                                            name="mensaje" style="height: 100px" maxlength="2500"></textarea>
                                        <label >Mensaje</label>
                                        <div id="aler_mensaje" class="text-danger" style="font-size: 12px;"></div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <input type="button" class="btn btn-primary w-100 py-3" id="btnEnviarF" value="Enviar">
                                </div>
                            </div>
                        </form>
<script>
$(function()
{
    $("#btnEnviarF").click(function(){
        var url = "controller/datos.php";
        $.ajax({
            type:"POST",
            url: url,
            data: $("#form_enviar").serialize(),
            success: function(data)
            {
                $('#aler_nombre').html('');
                $('#e_email').html('');
                $('#aler_telefono').html('');
                $('#aler_mensaje').html('');

                $('#nombre').css('border-color','');
                $('#email').css('border-color','');
                $('#telefono').css('border-color','');
                $('#mensaje').css('border-color','');

                $("#mensajeC").html(data);
                
                
            }

        });
    });
});
</script>