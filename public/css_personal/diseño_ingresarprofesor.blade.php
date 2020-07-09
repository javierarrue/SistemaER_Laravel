<style>
*{
    margin:0;
    padding: 0;
}

body{
    background-color: #E9ECF4;
    font-family: 'Roboto', sans-serif;
overflow:hidden;
}



/*-------------Contenedor principal-----------------*/

.contenedor{

overflow-y: hidden;

    display: grid;
    grid-gap: 10px;
    grid-template-columns: repeat(4,1fr); /*Usando grid para estructurar la pagina*/
    grid-template-rows: repeat(3,auto);
    /*Definiendo la esctructura de la pagina*/
    grid-template-areas: "header header header header header"
                          "menu_rastros menu_rastros menu_rastros menu_rastros menu_rastros"
                          "verticall contenido contenido contenido contenido";

}

/*-------------Contenedor principal-----------------*/

header{

    grid-area: header;

} 

/*--------IMAGENES------------*/
.imagenesHorizontales{
    width: 100%;
    background-color: rgb(61, 182, 71);
    display: flex; /*Usando flexbox para alinear los elementos al centro*/
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    
}

header img{
    max-height: 150px;
}

aside{
    grid-area:verticall;
}

.contenedor_imagen_vertical{
    text-align: center;
    margin-left: 20px;
    border-right:2px solid rgb(199, 199, 199);
    background-color: rgb(253, 253, 253);
    font-size: 15px;
}

.img_vertical{
    max-width: 100%;
    max-height: 100%;
}


.imgFoto
{
    max-width: 100%;
    max-height: 100%;
}

aside a{
    color:rgb(0, 153, 255);
}

/*--------IMAGENES------------*/


/*------------- Menu de rastros --------------*/
/*Contenedor principal*/
.contenedor_menu_rastros{
    margin-left: 20px;
    margin-right: 20px;
    grid-area:menu_rastros;
    background-color: rgb(226, 223, 223);
    padding:0.5% 0% 0.5% 2%;
    position: relative;
}

.menu_rastros{
    display: inline-block;
}

.nombre_usuario{
    display: inline-block;
    position: absolute;
    right:0;
    margin-right: 20px;
}


.rastro_item{
    text-decoration: none;
    display: inline-block;
}

.rastro_link{
    color:rgb(70, 69, 69);
    font-size: large;
    text-decoration: none;
}

.rastro_link:hover{
    color:rgb(0, 0, 0);
}

/*Selector que ingresa un: ">" en medio de cada item, EXCEPTO del ultimo: Home>Pag1>Pag2 */
.rastro_item:not(:last-of-type)::after {
    content:">";
    margin: 0px 5px;
    color:rgb(121, 121, 121);
}

.rastro_link_activo{
    font-weight: bold;
}

/*------------- Menu de rastros --------------*/

/*Contendor del contenido de la pagina*/
.contenido{
width:100%;
overflow-y:auto;
    
    grid-area:contenido;
    background-color: rgb(253, 253, 253);
    padding: 0px;

  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;

}

footer{

    grid-area: footer;
    background-color: rgb(226, 223, 223);;
    
}

/*------------------------------ RESPONSIVE ---------------------------*/
/*Hay distintos @media para poder ajustar el tamaño de la imagen una vez empieza
disminuir el tamaño del dispositivo*/
@media screen and (max-width: 1426px)
{
    header img{
        max-height: 100px !important;
    }
}

@media screen and (max-width:970px)
{
    .nombre_usuario{
        display: block;
        position: relative;
    
        margin-top: 5px !important;
    }
}

@media screen and (max-width: 948px)
{
    header img{
        max-height: 80px !important;
    }
}

@media screen and (max-width: 768px){

    .contenedor{

        /*Definiendo la esctructura de la pagina*/
        grid-template-areas: "header header header header"
                            "menu_rastros menu_rastros menu_rastros menu_rastros"
                            "contenido contenido contenido contenido";

                        
    }

    .contenedor_menu_rastros a
    {
        font-size: 13px !important;
    }
 

    .contenedor_imagen_vertical{
        display: none !important;
    }

.contenido{
    margin-right: 0;
 
}

header img{
    max-height: 50px !important; 
}

}

@media screen and (max-width: 493px)
{
    .contenedor_menu_rastros a
    {
        font-size: 11px !important;
    }

    header img{
        max-height: 30px !important;
    }
   
}

/*--------------------------------- RESPONSIVE -----------------------------*/

h2{
color:white;
background-color:green;
text-align:center;
padding: 10px;
font-weight:100;
font-size:30px;
border-top-left-radius:7px;
border-top-right-radius:7px;
border-bottom:5px solid #F3FC8C;
}

.form-register{
width:95%;
max-width:600px;
margin:auto;
background:white;
border-radius:7px;
position: absolute;
top: 32%;
left: 37%;
}

.contenedor-inputs{
padding: 5px 30px;
display:flex;
flex-wrap:wrap;
justify-content:space-between !important;
}

input{
margin-bottom: 15px !important; 
padding:10px;
font-size:16px;
border-radius:3px;
border:1px solid darkgray;
}
.input-48{
width: 35%;
}
.input-100{
width: 100%;
}

.btn-enviar{
    position: absolute;
left:35%;
    top:103%;
    background-color:#16AB26;
    color:#fff;
    margin:auto;
    padding:10px 40px;
    cursor: pointer;
    font-size:22px;
    }
    

.btn-enviar:active{

transform:scale(1.05);
}

.btn-enviar:hoover{
    background-color:#0A6514 !important;
    }
    
.botonvolver{
position: absolute;
top: 94%;
}


.custom-select{
    position: relative;
    

}

.custom-select select {
    display: none; /*hide original SELECT element: */
  }

  .select-selected:after {
    position: absolute;
    content: "";
    top: 14px;
    right: 10px;
    width: 0;
    height: 0;
    border: 6px solid transparent;
    border-color: #fff transparent transparent transparent;
  }

  /* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
    border-color: transparent transparent #fff transparent;
    top: 7px;
  }

  
  /* style the items (options), including the selected item: */
.select-items div,.select-selected {
    color: #ffffff;
    padding: 8px 16px;
    border: 1px solid transparent;
    border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
    cursor: pointer;
  }
  
  /* Style items (options): */
  .select-items {
    position: absolute;
    background-color: rgb(29, 238, 10);
    top: 100%;
    left: 0;
    right: 0;
    z-index: 99;
  }


  /* Hide the items when the select box is closed: */
.select-hide {
    display: none;
  }
  .select-items div:hover, .same-as-selected {
    background-color: rgba(0, 0, 0, 0.1);
  }


  
.alert{

    width: 35%;
    background:white;
    text-align: center;
    position: absolute;
    top: -2%;
left: 30%;
}

.msg_error{
color: #ee6655;
}

.msg_save{

    color: #126e00;
    background: #66e07d66;
}

.alert p{
    padding: 0px;
}


</style>