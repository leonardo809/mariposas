var preguntas=["¿Cuál es el color principal de las colias","¿Cuál es un género de las mariposas?","¿Cuál es una familia de las maiposas?","¿Quién clasificó a la familia pieridae?"];
    var respuestas=[
        ["Amarillo","Café","Rojo","Violeta"],
        ["Colias","Pieridae","Sesiidae","Urididae"],
        ["Pieridae","Diaethria","Melanis","Thereus"],
        ["Duponchel","Hubner","Fabricus","Edward"]];
        var indice_respuesta_correcta;
        jugar();
function jugar(){
    var indice_aleatorio=Math.floor(Math.random()*preguntas.length);
    var respuestas_posibles=respuestas[indice_aleatorio];
    var posiciones=[0,1,2,3];
    var repuestas_reordenadas=[];
    var ya_se_metio=false;
    
        for(i in respuestas_posibles){
            var posicion_aleatoria=Math.floor(Math.random()*posiciones.length);
            if(posicion_aleatoria==0 && ya_se_metio==false){    
                indice_respuesta_correcta=i;
                ya_se_metio=true;
            }
            repuestas_reordenadas[i]=respuestas_posibles[posiciones[posicion_aleatoria]];
            posiciones.splice(posicion_aleatoria,1);
        }
        var txt_respuestas="";
        for(i in repuestas_reordenadas){
            txt_respuestas+='<input type="radio" name="pp" value="'+i+'"><label>'+repuestas_reordenadas[i]+'</label><br>';
        }
        document.getElementById("respuesta").innerHTML=txt_respuestas;
        document.getElementById("pregunta").innerHTML=preguntas[indice_aleatorio];
}
function comprobar(){

    var forma=document.getElementById("forma");
   

    var aciertos=forma["aciertos"].value, ignorancia=forma["ignorancia"].value;
    var respuesta= $("input[type=radio]:checked").val();
    if(respuesta==indice_respuesta_correcta){
        aciertos++;
        document.getElementById("aciertos").innerHTML=aciertos;
    }else{
        ignorancia++;
        document.getElementById("ignorancia").innerHTML=ignorancia;
    }
    jugar();
}