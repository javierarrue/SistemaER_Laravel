
var indice = 1;

// DIV donde se estaran insertando los nuevos elementos.
var respuestas = document.getElementById("respuestas");

function agregarRespuesta(){
        //Creo un DIV
        var elemento = document.createElement('div');

        //Le asigno un ID a el DIV creado
        elemento.id = "resp_"+indice;

        //Le inserto un input y un boton para eliminar, al DIV.
        elemento.innerHTML = '<input required name="opcion'+indice+'" placeholder="Respuesta'+indice+'"'
        +'class="respuesta" type="text" id="resp_'+indice+'"> <button class="btn btn-danger" '
        +'id="eliminar_"'+indice+' onclick="eliminarRespuesta('+indice+')">Eliminar</button>'
        /*El boton de eliminar llama la funcion eliminarRespuesta
        le mando como parametro el indice de
        */

        //inserto el DIV con todo lo que se le agrego al DIV que esta en el HTML
        respuestas.appendChild(elemento);
        indice++;
}


function agregarCampo(){
    //Creo un DIV
    var elemento = document.createElement('div');

    //Le asigno un ID a el DIV creado
    elemento.id = "resp_"+indice;

    //Le inserto un input y un boton para eliminar, al DIV.
    elemento.innerHTML = '<input name="opcion'+indice+'" value="Otros escriba"'
    +'class="respuesta" type="text" id="resp_'+indice+'" readonly="readonly"> <button class="btn btn-danger"'
    +'id="eliminar_"'+indice+' onclick="eliminarRespuesta('+indice+')">Eliminar</button>'
    /*El boton de eliminar llama la funcion eliminarRespuesta
    le mando como parametro el indice de
    */

    //inserto el DIV con todo lo que se le agrego al DIV que esta en el HTML
    respuestas.appendChild(elemento);
    indice++;
}



//Recibo el ID correspondiente.
function eliminarRespuesta(id){
    //Rescato el ID del DIV al  que voy a eliminar.
    var elemento = document.getElementById("resp_"+id);
    //Procedo a ELIMINARLO
    elemento.remove();
    indice--;
}

function preguntaTipo(){

    var lista = document.getElementById("tipoPregunta");
    var texto = lista.options[lista.selectedIndex].text;

    var agregarPregunta = document.getElementById("agregarPregunta");
    var preguntaCerrada = document.getElementById("preguntaCerrada");

    if(texto=="Pregunta Abierta"){

        agregarPregunta.style.display="block";
        preguntaCerrada.style.display="none";

    }else if(texto=="Pregunta Cerrada"){
        agregarPregunta.style.display="block";
        preguntaCerrada.style.display="block";

    }

}
