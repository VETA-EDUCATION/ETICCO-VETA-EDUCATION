<div class="moduleTitle">
    <h2 class="module-title-text"><a href="#">OBSERVACIONES</a> <span class="pointer">»</span> PARA {$NAME}
    </h2>

</div>
<div class="clear"></div>


<table width='100%' border='0' cellspacing='1' cellpadding='0' class='edit view'>

    <tr>
        <td>
            <table width='200px' border='1' cellspacing='1' cellpadding='0' class='list view table-responsive'>
                <thead>
                <tr class='pagination'>
                    <th><span class='ListViewThLinkS1'>OBSERVACIONES</span></th>
                    <th><span class='ListViewThLinkS1'>FECHA</span></th>
                    <th><span class='ListViewThLinkS1'>CREADO POR</span></th>
                </tr>
                </thead>
                <tbody>

                {foreach from=$LISTA key=team item=auditoria}
                    <tr class='oddListRowS1'>

                        <td>{$auditoria->observaciones}</td>
                        <td>{$auditoria->fecha}</td>
                        <td>{$auditoria->usuario}</td>
                    </tr>
                {/foreach}
                </tbody>
                </td>
                </tr>
            </table>
            </form>