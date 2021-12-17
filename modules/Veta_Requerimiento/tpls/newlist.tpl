<form action="index.php" method="POST" name="EditView" id="EditView" enctype="multipart/form-data">
    <input type="hidden" name="action" value="createlist" id="action">
    <input type="hidden" name="module" value="Veta_Requerimiento">
    <input type="hidden" name="SELECT_ENTIRE_LIST" value="{$SELECT_ENTIRE_LIST}">
    <input type="hidden" name="UIDS" value="{$UIDS}">

    <table width='100%' border='0' cellspacing='1' cellpadding='0' class='edit view'>
        <tr>
            <th>
                <h4>POR FAVOR SELECCIONA UNA LISTA DE PUBLICO OBJETIVO</h4>
            </th>
        </tr>

        <tr>
            <td>
                <select name=LISTA_ID>
                    {html_options options=$LISTAS selected=$LISTA_ID}
                </select>

            </td>
        </tr>
</form>

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top: 20px;">
    <tr>
        <td class="buttons" style="float:right">

            &nbsp;&nbsp;<input id="btncancel" class="button" type="button" name="button" value="Cancelar"  onclick="cancelar()">
            &nbsp;&nbsp;<input id="btnnext" class="button" type="button" name="button" value="Siguiente >>" onclick="siguiente()">
        </td>
    </tr>
</table>

{literal}
    <script language='javascript'>

        function siguiente() {
            document.getElementById('EditView').submit();
        }

        function cancelar() {
            location.replace("/index.php?module=Veta_Requerimiento&action=index") ;
        }

    </script>
{/literal}