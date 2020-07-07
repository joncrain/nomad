<div id="nomad-tab"></div>
<h2 data-i18n="nomad.title"></h2>

<table id="nomad-tab-table"></table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/nomad/get_data/' + serialNumber, function(data){
        var table = $('#nomad-tab-table');
        $.each(data, function(key,val){
            var th = $('<th>').text(i18n.t('nomad.column.' + key));
            var td = $('<td>').text(val);
            table.append($('<tr>').append(th, td));
        });
    });
});
</script>
