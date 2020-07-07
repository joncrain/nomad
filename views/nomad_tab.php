<div id="nomad-tab"></div>
<h2 data-i18n="nomad.title"></h2>

<table id="nomad-tab-table"></table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/nomad/get_data/' + serialNumber, function(data){
        var table = $('#nomad-tab-table');
        $.each(data, function(key,val){
            if (key == "nomad_enabled" || key == "nomad_login_enabled" || key == "use_keychain" || key == "local_password_sync") {
                val = val == 1 ? i18n.t('yes') :
         		(val == 0 && val != null ? i18n.t('no') : '')
            }
            var th = $('<th>').text(i18n.t('nomad.column.' + key));
            var td = $('<td>').text(val);
            table.append($('<tr>').append(th, td));
        });
    });
});
</script>
