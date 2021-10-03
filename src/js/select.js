document.getElementById("zonas_search").addEventListener('change',function(){
    $.ajax({
        method: "get",
        url: "scripts/select_all.php",
        data: { id_zona: this.value}
    })
    .done(function( data ) {
        let json = JSON.parse(data);
        let bairros = document.getElementById("bairro-search");
        let content = "<option disabled selected>Selecione</option>";
        for(let bairro of json){
            content += "<option value='"+bairro.id_zonas+"'>"+bairro.bairro+"</option>";
        }
        bairros.innerHTML = content;
    });
});