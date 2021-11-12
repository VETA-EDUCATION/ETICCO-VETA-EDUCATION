<div class="moduleTitle">
    <h2 class="module-title-text"><a href="#">IMPORTAR </a> <span class="pointer">»</span>CURSOS
    </h2>

</div>
<div class="clear"></div>

<form action="index.php" method="POST" name="EditView" id="EditView" enctype="multipart/form-data">
    <input type="hidden" name="action" value="importar" id="action">
    <input type="hidden" name="module" value="Veta_Curso">
    <input type="hidden" name="importar" value="1">

    {foreach from=$PROCEDIMIENTOS key=team item=p}
        <input type='hidden' name='procedimientos[]' value="{$p}">
    {/foreach}

    <table width='100%' border='0' cellspacing='1' cellpadding='0' class='edit view'>
        <tr>
            <th>
                {if $IMPORTAR == '1'}
                    <h3 id="soel_msg">Hemos encontrado datos que provienen de la hoja de calculo de Google, deseas importarlos ?</h3>
                {else}
                    {if $IMPORTAR == '0'}
                        <h3 id="soel_msg">No existen datos para importar</h3>
                    {else}
                        <h3 id="soel_msg">Importación Completada</h3>
                    {/if}

                {/if}
            </th>
        </tr>
</form>

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top: 20px;">
    <tr>
        <td class="buttons" style="float:right">
            {if $IMPORTAR == '1'}
                <input id="btnnext" class="button" type="button" name="button" value="Si, Importar Datos" onclick="siguiente()">
            {/if}
        </td>
    </tr>
</table>

{literal}
    <script language='javascript'>

        function siguiente() {

            var r = confirm("Esta seguro ? Esta operacion puede tomar muchos minutos");

            if (r == true) {
                $("#soel_msg").text('Procesando, un momento por favor ....');
                $('#btnnext').hide();
                document.getElementById('EditView').submit();
            }
        }
    </script>
{/literal}