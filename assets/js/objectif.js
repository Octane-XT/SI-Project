var obj = document.getElementById('select_champ');
function getSelect(dat){
var text = `<select name="type" id="exampleInputName1" class="form-control input-shadow">`;
for (var i=0; i< dat.length; i++){
    text = text + "<option value="+dat[i].id+">"+dat[i].nom+"</option>";
}
text = text + "</select>";
obj.innerHTML = text;
}

// Sélectionnez l'élément input
const inputElement = document.getElementById('exampleInputUsername');
// Ajoutez un écouteur d'événement au clic sur l'input
inputElement.addEventListener('input', function(event) {
    event.preventDefault();
    let request =
        $.ajax({
            type: "POST",
            url: url,
            async: true,
            data: {'poids_but':inputElement.value},
            success: function (output) {
                const dat = JSON.parse(output);
                getSelect(dat.message);
            },
            beforeSend: function () {
                //Code à appeler avant l'appel ajax en lui même
            }
        });
});
