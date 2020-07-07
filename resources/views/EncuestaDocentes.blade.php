<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de encuesta</title>
    <link rel="stylesheet" href="{{asset('css_personal/AplicarEncuesta.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  

</head>

<body>


    <div class="contenedor">

        <header>

            <!-- Aqui van las imagenes de arriba-->
            <div class="imagenesHorizontales">

                <div class="contenedorImagen"> <img src="css_personal/Imagenes/logoUtp.png" alt=""></div>
                <div class="contenedorImagen"> <img src="css_personal/Imagenes/img1.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="css_personal/Imagenes/img2.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="css_personal/Imagenes/img3.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="css_personal/Imagenes/img4.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="css_personal/Imagenes/img5.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="css_personal/Imagenes/logoFisc.png" alt=""></div>

            </div>

        </header>

        <!-- Menu de rastros-->

        <div class="contenedor_menu_rastros">

            <ul class="menu_rastros">

                <li class="rastro_item">
                    <a href="{{route('MenuEncuesta')}}" class="rastro_link">Menu</a>
                </li>

                <li class="rastro_item">
                    <a href="{{route('AplicarEncuesta')}}" class="rastro_link">Aplicació de la encuesta</a>
                </li>

                <li class="rastro_item">
                    <a href="{{route('EncuestaDocentes')}}" class="rastro_link rastro_link_activo">Encuesta</a>
                </li>


            </ul>

            <div class="nombre_usuario">
                <span>Nombre de usuario</span>
            </div>
        </div>




        <!-- Lado izq. de la pagina, tiene una imagen vertical -->
        <aside>

            <div class="contenedor_imagen_vertical">

                <img src="https://www.utp.ac.pa/sites/default/files/fisc-aniversario-2017.jpg" alt=""
                    class="img_vertical">
                <br>

                <span class="txt_imagenVertical">Este sitio es mantenido por la Universidad Tecnológica de Panamá</span>
                <br>
                <a href="">Política de privacidad</a>

            </div>

        </aside>



        <!---------------------------------------------------------------------------------------------------------------->
        <!-- AQUI VA CONTENIDO DE LA PAGINA-->
        <div class="contenido">
            
            <button type="button" class="btn btn-success float-right" >Cerrar Sesión</button>

                <form class="encuesta">
                
                   <center> <h2>Aplicación de la Encuesta</h2></center>
                        <br><br>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Nombre de la Asignatura:</label>
                            <select id="inputState" class="form-control">
                              <option disabled selected>Ninguno seleccionado</option>
                              <option value="1" name=""> ADMINISTRACION FINANCIERA</option>
                              <option value="2" name="">ADMINISTRACIÓN DE SISTEMAS OPERATIVOS</option>
                              <option value="3" name="">ADMINISTRACIÓN DE REDES</option>
                            <option value="4" name=""> ADMINISTRACIÓN Y ADQUISICIONES DE TIC</option>
                             <option value="5" name="">  ANALISIS Y DISEÑO DE REDES</option>
                             <option value="6" name="">  ANÁLISIS Y DISEÑO DE ALGORÍTMOS</option>
                              <option value="7" name="">ANÁLISIS DE RIESGOS DE TI</option>
                            <option value="8" name="">ANIMACIÓN Y PRODUCCIÓN DIGITAL</option>
                            <option value="9" name="">ANIMACIÓN DIGITAL Y VIDEO JUEGOS</option>
                            <option value="10" name="">APLICACIONES PARA AMBIENTES DISTRIBUIDOS</option>
                             <option value="11" name="">ARQUITECTURA DE PROTOCOLOS</option>
                             <option value="12" name="">ARQUITECTURA Y DISEÑO DEL SOFTWARE</option>
                              <option value="13" name="">AUDITORÍA DE REDES</option>
                             <option value="14" name="">BASE DE DATOS I</option>
                             <option value="15" name="">BASE DE DATOS I</option>
                             <option value="16" name="">BASE DE DATOS II</option>
                             <option value="17" name="">BASE DE DATOS II</option>
                             <option value="18" name="">CALCULO I</option>
                             <option value="19" name="">CÁLCULO II</option>
                             <option value="20" name="">CÁLCULO III</option>
                             <option value="21" name="">CALIDAD DE SOFTWARE</option>
                             <option value="22" name=""> CALIDAD DE SOFTWARE</option>
                             <option value="23" name="">CIRCUITOS LÓGICOS</option>
                              <option value="24" name="">CIRCUITOS LÓGICOS</option>
                            <option value="25" name="">CONTABILIDAD GENERAL</option>
                             <option value="26" name="">COMUNICACIÓN ORAL Y ESCRITA</option>
                              <option value="27" name="">COMUNICACIÓN DE DATOS</option>
                             <option value="28" name="">COMPUTACIÓN GRÁFICA Y VISUAL</option>
                             <option value="29" name="">CONTABILIDAD FINANCIERA</option>
                             <option value="30" name="">CONTROL DE COSTOS Y PRESUPUESTO</option>
                             <option value="31" name="">DESARROLLO DE SOFTWARE I</option>
                              <option value="32" name="">DESARROLLO DE SOFTWARE II</option>
                             <option value="33" name="">DESARROLLO DE SOFTWARE III</option>
                              <option value="34" name="">DESARROLLO DE SOFTWARE IV</option>
                             <option value="35" name="">DESARROLLO DE SOFTWARE V</option>
                            <option value="36" name="">DESARROLLO DE SOFTWARE VI</option>
                            <option value="37" name="">DESARROLLO DE SOFTWARE VIII</option>
                            <option value="38" name="">DESARROLLO DE SOFTWARE VII</option>
                            <option value="39" name="">DESARROLLO DE SOFTWARE IX</option>
                            <option value="40" name="">DESARROLLO DE SOFTWARE ORIENTADA A OBJ.</option>
                            <option value="41" name="">DESARROLLO DE SOFTW. PARA PLATAF. MÓVIL.</option>
                            <option value="42" name="">DESARROLLO LÓGICO Y ALGORITMOS</option>
                            <option value="43" name="">DIBUJO ASISTIDO POR COMPUTADORAS</option>
                            <option value="44" name="">DISEÑO Y EVALUACIÓN DE INTERFACES</option>
                            <option value="45" name="">ECOLOGÍA GENERAL</option>
                            <option value="46" name="">ECONOMIA</option>
                            <option value="47" name="">ECUACIONES DIFERENCIALES ORDINARIAS</option>
                            <option value="48" name="">ETICA PROFESIONAL Y DERECHO</option>
                            <option value="49" name="">ESTADISTICA Y PROBABILIDAD</option>
                            <option value="50" name="">ESTADÍSTICA CON APOYO INFORMÁTICO</option>
                            <option value="51" name="">ESTRUCTURA DE DATOS</option>
                            <option value="52" name="">ESTRUCTURA DE DATOS I</option>
                            <option value="53" name="">ESTRUCTURA DE DATOS II</option>
                            <option value="54" name="">ESTRUCTURAS DISCRETAS PARA LA COMP</option>
                            <option value="55" name="">ESTRUCTURA Y REPRESENTACIÓN DE DATOS</option>
                            <option value="56" name="">EVALUACIÓN DE PROY. DE TECN. DE INFORM.</option>
                            <option value="57" name="">ESTAND. MOD. Y POL. DE SEG. APL. A TI</option>
                            <option value="58" name="">FÍSICA I (MECÁNICA)</option>
                            <option value="59" name="">FÍSICA II (ELECTRICIDAD Y MAGNESTISMO)</option>
                            <option value="60" name="">FORMACIÓN DE EMPRENDEDORES</option>
                            <option value="61" name="">FORMACIÓN EMPRESARIAL</option>
                            <option value="62" name="">FORM. Y EVALUACIÓN DE PROY. INFORMÁTICOS</option>
                            <option value="63" name="">FUNDAMENTOS DE PROGRAMACIÓN</option>
                            <option value="64" name="">FUNDAMENTOS DE SIST. DE INFORMACIÓN</option>
                            <option value="65" name="">FUNDAMENTOS DE ELECTRICIDAD</option>
                            <option value="66" name="">FUND. DE ARQUITECTURA EMPRESARIAL DE TI</option>
                            <option value="67" name="">GERENCIA DE PROYECTOS INFORMÁTICOS</option>
                            <option value="68" name="">GERENCIA DE PROY. DE DESARR. DE SOFTWARE</option>
                            <option value="69" name="">GERENCIA DE RECURSOS TECN.DE INF.Y COM</option>
                            <option value="70" name="">GERENCIAS DE RECURSOS HUMANOS</option>
                            <option value="71" name="">GESTIÓN DE LA INFORMACIÓN</option>
                            <option value="72" name="">GLOBALIZACIÓN DEL SOFTWARE</option>
                            <option value="73" name="">HERRAMIENTAS APLIC. A LA INTEL. ARTIF</option>
                            <option value="74" name="">HERRAMIENTAS DE COMPUTACIÓN GRÁFICA</option>
                            <option value="75" name="">HERRAMIENTAS DE PROGRAMACIÓN APLICADA I</option>
                            <option value="76" name="">HERRAMIENTAS DE PROGRAMACIÓN APLICADA II</option>
                            <option value="77" name="">HERRAMIENTAS DE PROGRAMACIÓN APLICADA III</option>
                            <option value="78" name="">HERRAMIENTAS DE PROGRAMACIÓN APLICADA IV</option>
                            <option value="79" name="">IMPLEMENTACIÓN DE BASE DE DATOS I</option>
                            <option value="80" name="">IMPLEMENTACIÓN DE BASE DE DATOS I</option>
                            <option value="81" name="">INGLES I</option>
                            <option value="82" name="">INGLES I</option>
                            <option value="83" name="">INGLES II</option>
                            <option value="84" name="">INGLES II</option>
                            <option value="85" name="">INGLES TÉCNICO I</option>
                            <option value="86" name="">INGLES TÉCNICO II</option>
                            <option value="87" name="">INGENIERÍA DE SOFTWARE</option>
                            <option value="88" name="">INGENIERÍA DE SOFTWARE I</option>
                            <option value="89" name="">INGENIERÍA DE SOFTWARE II</option>
                            <option value="90" name="">INGENIERÍA DE SOFTWARE II</option>
                            <option value="91" name="">INGENIERÍA DE SOFTWARE APLICADA</option>
                            <option value="92" name="">INGENIERÍA DE SISTEMAS DINÁMICOS</option>
                            <option value="93" name="">INGENIERÍA DE REQUISITOS</option>
                            <option value="94" name="">INGENIERÍA AMBIENTAL</option>
                            <option value="95" name="">INGENIERÍA WEB</option>
                            <option value="96" name="">INVESTIGACION DE OPERACIONES</option>
                            <option value="97" name="">INVESTIGACION DE OPERACIONES</option>
                            <option value="98" name="">INGLÉS CONVERSACIONAL</option>
                            <option value="99" name="">INGENIERÍA DE SISTEMAS ROBÓTICOS</option>
                            <option value="100" name="">INTELIGENCIA ARTIFICIAL</option>
                            <option value="101" name="">INTRODUCCIÓN A LA QUÍMICA</option>
                            <option value="102" name="">INTRODUCCIÓN A LA TEORÍA COMPUTACIONAL</option>
                            <option value="103" name="">INTRODUCCIÓN A LA INGENIERÍA DE SOFTWARE</option>
                            <option value="104" name="">INTERACCIÓN HUMANO COMPUTADOR (HCI)</option>
                            <option value="105" name="">INTERACCIÓN HUMANO COMPUTADOR (HCI)</option>
                            <option value="106" name="">INFRAESTRUCTURA COMPUTACIONAL DE TI</option>
                            <option value="107" name="">INFORMÁTICA FORENSE Y EL TRAT. DE LA INF</option>
                            <option value="108" name="">INT. DE NEG. COMO ESTRATEGIA DE LA ORG.</option>
                            <option value="109" name="">LENGUAJE FORMALES, AUTÓMATAS Y COMPIL</option>
                            <option value="110" name="">LENG. FORMALES AUTÓMATAS Y PROC. DE LENG</option>
                            <option value="111" name="">MATEMÁTICA I</option>
                            <option value="112" name="">MATEMÁTICA II</option>
                            <option value="113" name="">MATEMÁTICA III</option>
                            <option value="114" name="">MATEMÁTICA BÁSICA</option>
                            <option value="115" name="">MATEMÁTICAS SUPERIORES PARA ING</option>
                            <option value="116" name="">MANTENIMIENTO Y PRUEBAS DE SOFTWARE</option>
                            <option value="117" name="">METODOLOGÍA DE LA INVESTIGACIÓN</option>
                            <option value="118" name="">METODOLOGÍA DE INVESTIGACIÓN EN ING</option>
                            <option value="119" name="">MÉTODOS NUMÉRICOS PARA ING</option>
                            <option value="120" name="">MODELADO Y SIMULACIÓN</option>
                            <option value="121" name="">MECANICA</option>
                            <option value="122" name="">ORG. Y ARQUITECTURA DE COMPUTADORA</option>
                            <option value="123" name="">ORGANIZACION Y ARG. DE COMP. I</option>
                            <option value="124" name="">ORGANIZACION Y ARG. DE COMP. II</option>
                            <option value="125" name="">POLÍTICA Y LEGISLACIÓN INFORMÁTICA</option>
                            <option value="126" name="">PRÁCTICA PROFESIONAL DE ING. DE SOFTWARE</option>
                            <option value="127" name="">PRE-CALCULO</option>
                            <option value="128" name="">PRINCIPIOS DE PROGRAMACIÓN</option>
                            <option value="129" name="">PROTOCOLOS DE COMUNICACIÓN</option>
                            <option value="130" name="">PROGRAMACIÓN APLICADA I</option>
                            <option value="131" name="">PROGRAMACIÓN APLICADA II</option>
                            <option value="132" name="">PROGRAMACIÓN DE SOFTWARE I</option>
                            <option value="133" name="">PROGRAMACIÓN DE SOFTWARE II</option>
                            <option value="134" name="">PROBABILIDAD Y ESTADÍSTICA PARA ING.</option>
                            <option value="135" name="">PROYECTO DE NEGOCIO PARA AMBIENTES WEB</option>
                            <option value="136" name="">REDACCIÓN DE INFORMES Y EXPRESIÓN ORAL</option>
                            <option value="137" name="">REDES DE AREA LOCAL</option>
                            <option value="138" name="">REDES DE COMPUTADORAS</option>
                            <option value="139" name="">REDES DE COMPUTADORAS</option>
                            <option value="140" name="">REDES INFORMÁTICAS</option>
                            <option value="141" name="">REDES PARA MULTIMEDIOS</option>
                            <option value="142" name="">REDES MOVILES E INALÁMBRICAS</option>
                            <option value="143" name="">RELACIONES HUMANAS Y SUPERV. DE PERSONAL</option>
                            <option value="144" name="">SALUD PARA EL EJERCICIO PROFESIONAL</option>
                            <option value="145" name="">SEGURIDAD EN TECNOLOGÍA DE COMPUTACIÓN</option>
                            <option value="146" name="">SEGURIDAD EN LOS SISTEMAS DE INFORMACION</option>
                            <option value="147" name="">SEGURIDAD EN APLICACIONES DE SOFTWARE</option>
                            <option value="148" name="">SEGURIDAD Y PRIVACIDAD EN REDES I</option>
                            <option value="149" name="">SEGURIDAD Y PRIVACIDAD EN REDES II</option>
                            <option value="150" name="">SEMINARIO DE INDUC. A LA VIDA EST.UNIV.</option>
                            <option value="151" name="">SISTEMAS DE INFORMACION</option>
                            <option value="152" name="">SISTEMAS DE INFORMACION GERENCIAL</option>
                            <option value="153" name="">SISTEMAS BASADOS EN EL CONOCIMIENTO</option>
                            <option value="154" name="">SISTEMAS COLABORATIVOS</option>
                            <option value="155" name=""> SISTEMAS GRAFICOS</option>
                            <option value="156" name="">SISTEMAS OPERATIVOS</option>
                            <option value="157" name="">SISTEMAS OPERATIVOS I</option>
                            <option value="158" name="">SISTEMAS OPERATIVOS II</option>
                            <option value="159" name="">SISTEMAS OPERATIVOS III</option>
                            <option value="160" name="">SISTEMAS DE BASE DE DATOS I</option>
                            <option value="161" name="">SISTEMAS DE BASE DE DATOS II</option>
                            <option value="162" name="">SISTEMAS EMPRESARIALES DE TI</option>
                            <option value="163" name="">SIMULACIÓN DE SISTEMAS</option>
                            <option value="164" name="">TECNOLOGÍA DE BASE DE DATOS</option>
                            <option value="165" name="">TECNOLOGÍA DE INFORMACIÓN Y COMUNICACIÓN</option>
                            <option value="166" name="">TELEINFORMÁTICA</option>
                            <option value="167" name="">TÓPICOS ESPECIALES I</option>
                            <option value="168" name="">TÓPICOS ESPECIALES II</option>
                            <option value="169" name="">TÓPICOS DE GEOGRAFÍA E HISTORIA DE PANAMÁ</option>
                            <option value="170" name="">TRABAJO EN EQUIPO Y LIDERAZGO</option>
                            <option value="171" name="">[8415] TRABAJO DE GRADUACIÓN I</option>
                            <option value="172" name="">[8420] TRABAJO DE GRADUACIÓN II</option>
                            <option value="173" name="">[8467] TRABAJO DE GRADUACIÓN I</option>
                            <option value="174" name="">[8473] TRABAJO DE GRADUACIÓN II</option>
                            <option value="175" name="">[8386] TRABAJO DE GRADUACIÓN I</option>
                            <option value="176" name="">[8391] TRABAJO DE GRADUACIÓN II</option>
                            <option value="177" name="">[8489] TRABAJO DE GRADUACIÓN I</option>
                            <option value="178" name="">[8490] TRABAJO DE GRADUACIÓN II</option>
                              
                            </select>


                          </div>
                    

                        <div class="form-group col-md-4">
                            <label for="inputState">Grupo:</label>
                            <select id="inputState" class="form-control">
                              <option disabled selected>Ninguno seleccionado</option>
                              <option value="1" name="">1LS121</option>
                              <option value="2" name="">1LS122</option>
                              <option value="3" name="">1LS123</option>
                              <option value="4" name="">1SL124</option>
                              <option value="5" name="">1SL131</option>
                              <option value="6" name="">1LS132</option>
                              <option value="7" name="">1SL141</option>
                              <option value="8" name="">1LS142</option>
                              <option value="9" name="">1LS201</option>
                              <option value="10" name="">1LS202</option>
                              <option value="11" name="">1LS221</option>
                              <option value="12" name="">1LS122</option>
                              <option value="13" name="">1LS231</option>
                              <option value="14" name="">1LS232</option>
                              <option value="15" name="">1LS241</option>
                              <option value="16" name="">1lS242</option>
                              <option value="17" name="">1LS701</option>
                              <option value="18" name="">1LS702</option>
                              <option value="19" name="">1LS703</option>
                              <option value="20" name="">1LS704</option>
                              <option value="21" name="">1LS705</option>
                              <option value="22" name="">1LS706</option>
                              <option value="23" name=""> VLS231</option>
                              <option value="24" name="">VLS311</option>
                              <option value="25" name="">VLS321</option>
                              <option value="26" name="">VLS331</option>
                              <option value="27" name="">VLS341</option>
                              <option value="28" name="">7LS221</option>
                              <option value="29" name="">7LS231</option>
                              <option value="30" name="">7LS231</option>
                              <option value="31" name="">  7LS901</option>
                              <option value="32" name="">  8LS201</option>
                              <option value="33" name="">  2LS211</option>
                              <option value="34" name=""> 2LS212</option>
                              <option value="35" name=""> 2LS221</option>
                              <option value="36" name="">  2LS231</option>
                              <option value="37" name=""> 2LS241</option>
                              <option value="38" name=""> 6LS121</option>
                              <option value="39" name=""> 6LS131</option>
                              <option value="40" name=""> 6LS141</option>
                              <option value="41" name="">  6LS701</option>
                              <option value="42" name="">  5LS201</option>
                              <option value="43" name="">  5LS221</option>
                              <option value="44" name="">  5LS231</option>
                              <option value="45" name=""> 5LS241</option>
                              <option value="46" name=""> 4LS121</option>
                              <option value="47" name=""> 4LS131</option>
                              <option value="48" name=""> 4LS141</option>
                              <option value="49" name=""> 4LS701</option>
                              <option value="50" name=""> 9LS121</option>
                              <option value="51" name="">  9LS131</option>
                              <option value="52" name="">  9LS221</option>
                              <option value="53" name=""> 9LS231</option>
                              <option value="54" name=""> 9LS241</option>
                              <option value="55" name=""> 9LS701</option>
                              <option value="56" name=""> 9LS901</option>
                              <option value="57" name="">  11R121</option>
                              <option value="58" name="">  11R141</option>
                              <option value="59" name=""> 11R222</option>
                              <option value="60" name=""> 11R242</option>
                              <option value="61" name=""> V1R321</option>
                              <option value="62" name=""> 11R122</option>
                              <option value="63" name=""> 11R201</option>
                              <option value="64" name=""> 11R231</option>
                              <option value="65" name=""> 11R701</option>
                              <option value="66" name=""> V1R331</option>
                              <option value="67" name=""> 11R131</option>
                              <option value="68" name="">  11R202</option>
                              <option value="69" name="">  11R232</option>
                              <option value="70" name="">  11R702</option>
                              <option value="71" name="">  V1R332</option>
                              <option value="72" name="">  11R132</option>
                              <option value="73" name=""> 11R221</option>
                              <option value="74" name="">  11R241</option>
                              <option value="75" name=""> V1R311</option>
                              <option value="76" name="">V1R421</option>
                              <option value="77" name=""> 71R901</option>
                              <option value="78" name=""> 81R231</option>
                              <option value="79" name="">  21R211</option>
                              <option value="80" name=""> 21R221</option>
                              <option value="81" name="">  21R231</option>
                              <option value="82" name="">  21R241</option>
                              <option value="83" name="">  V1R241</option>
                              <option value="84" name="">  61R221</option>
                              <option value="85" name="">  61R231</option>
                              <option value="86" name=""> 61R901</option>
                              <option value="87" name="">  51R201</option>
                              <option value="88" name="">  51R221</option>
                              <option value="89" name="">  41R701</option>
                              <option value="90" name="">  91R221</option>
                              <option value="91" name="">  91R231</option>
                              <option value="92" name="">  91R901</option>
                              <option value="93" name=""> 1IL121</option>
                              <option value="94" name="">  1IL122</option>
                              <option value="95" name="">  1IL123</option>
                              <option value="96" name="">  1IL124</option>
                              <option value="97" name=""> 1IL125</option>
                              <option value="98" name=""> 1IL131</option>
                              <option value="99" name=""> 1IL132</option>
                              <option value="100" name="">  1IL133</option>
                              <option value="101" name="">  1IL134</option>
                              <option value="102" name="">  1IL141</option>
                              <option value="103" name="">  1IL142</option>
                              <option value="104" name="">  1IL143</option>
                              <option value="105" name="">  1IL144</option>
                              <option value="106" name="">  1IL151</option>
                              <option value="107" name="">  1IL152</option>
                              <option value="108" name="">  1IL153</option>
                              <option value="109" name="">  1IL251</option>
                              <option value="110" name=""> 1IL701</option>
                              <option value="111" name="">  1IL702</option>
                              <option value="112" name="">  1IL703</option>
                              <option value="113" name="">  1IL704</option>
                              <option value="114" name="">  1IL705</option>
                              <option value="115" name="">  VIL131</option>
                              <option value="116" name="">  VIL321</option>
                              <option value="117" name="">  VIL331</option>
                              <option value="118" name="">  VIL341</option>
                              <option value="119" name="">  VIL342</option>
                              <option value="120" name="">  7IL131</option>
                              <option value="121" name="">  7IL141</option>
                              <option value="122" name="">  1IL151</option>
                              <option value="123" name="">  1IL701</option>
                              <option value="124" name="">  2IL111</option>
                              <option value="125" name="">  2IL112</option>
                              <option value="126" name="">  21L121</option>
                              <option value="127" name="">  2IL131</option>
                              <option value="128" name="">  2IL141</option>
                              <option value="129" name="">  2IL251</option>
                              <option value="130" name=""> 2IL331</option>
                              <option value="131" name="">  5IL701</option>
                              <option value="132" name=""> 4IL121</option>
                              <option value="133" name="">  4IL131</option>
                              <option value="134" name=""> 4IL141</option>
                              <option value="135" name="">  4IL151</option>
                              <option value="136" name=""> 4IL701</option>
                              <option value="137" name=""> 9IL121</option>
                              <option value="138" name="">  9IL131</option>
                              <option value="139" name=""> 9IL141</option>
                              <option value="140" name=""> 9IL701</option>
                              <option value="141" name=""> 1IF121</option>
                              <option value="142" name=""> 1IF122</option>
                              <option value="143" name=""> 1IF131</option>
                              <option value="144" name="">  1IF141</option>
                              <option value="145" name="">  1IF251</option>
                              <option value="146" name=""> 1IF701</option>
                              <option value="147" name=""> VIF341</option>
                              <option value="148" name=""> 2IF111</option>
                              <option value="149" name="">  2IF121</option>
                              <option value="150" name="">  2IF131</option>
                              <option value="151" name="">  2IF141</option>
                              <option value="152" name=""> 2IF251</option>
                              <option value="153" name="">  1SF701</option>
                              <option value="154" name="">  1SF702</option>
                              <option value="155" name=""> 1SF703</option>
                              <option value="156" name="">1SF121</option>
                              <option value="157" name="">1SF122</option>
                              <option value="158" name="">1SF123</option>
                              <option value="159" name="">1SF131</option>
                              <option value="160" name="">1SF132</option>
                              <option value="161" name="">1SF141</option>
                              <option value="162" name="">1SF142</option>
                              <option value="163" name=""> 1SF251</option>
                              <option value="164" name=""> 1SF111</option>
                              <option value="165" name=""> 1SF112</option>
                              <option value="166" name=""> 1SF113</option>
                              <option value="167" name=""> 1SF121</option>
                              <option value="168" name=""> 1SF122</option>
                              <option value="169" name=""> 1SF123</option>
                              <option value="170" name="">1SF131</option>
                              <option value="171" name="">1SF132</option>
                              <option value="172" name=""> 1SF133</option>
                              <option value="173" name="">1SF241</option>
                              <option value="174" name="">1SF242</option>
                              

                        </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">Sede: </label>
                            <select id="inputState" class="form-control">
                                <option disabled selected>Ninguno seleccionado</option>               
                                <option value="1">Campus Metropolitano “Dr. Víctor Levi Sasso”</option>
                                <option value="2">Centro Regional de Azuero</option>
                                <option value="3">Centro Regional de Bocas del Toro</option>
                                <option value="5">Centro Regional de Coclé</option>
                                <option value="6">Centro Regional de Colón</option>
                                <option value="4">Centro Regional de Chiriquí</option>
                                <option value="8">Centro Regional de Panamá Oeste</option>
                                <option value="7">Centro Regional de Veraguas</option>
                            </select>
                          </div>

                          <div class="form-group col-md-4">
                            <label for="inputState">Carrera:</label>
                            <select id="inputState" class="form-control">
                                <option disabled selected>Ninguno seleccionado</option>    
                                <option value="1" name="">Licenciatura en Desarrollo de Software</option>    
                                <option value="2" name="">Licenciatura en Redes Informáticas</option>    
                                <option value="3" name=""> Licenciatura en Ingeniería de Sistemas y Computación</option>    
                                <option value="4" name=""> Licenciatura en Ingeniería de Sistemas de Información</option>    
                                <option value="5" name=""> Licenciatura en Ingeniería de Software</option>    
                                <option value="6" name=""> Licenciatura en Informática Aplicada a la Educación</option>    
                                <option value="7" name=""> Técnico en Informática para la Gestión Empresarial</option>    

                            </select>
                          </div>

                          <div class="form-group col-md-4">
                            <label for="inputState">Semestre:</label>
                            <select id="inputState" class="form-control">
                                <option disabled selected>Ninguno seleccionado</option>    
                                <option value="I" name="">I Semestre</option>    
                                <option value="II" name="">II Semestre</option>    

                            </select>
                          </div>

                          <div class="form-group col-md-6">
                            <label >Cedula: </label>
                            <input type="text" class="form-control" name="cedula">
                          </div>


                </form>
                       
            </div>
            
            <button type="button" class="btn btn-success float-right" >Enviar Respuestas</button>
            
        <div>
            <a href="{{route('AplicarEncuesta')}}" class="btn btn-success">Volver</a>
        </div>
        </div>


    </div>
    <!---------------------------------------------------------------------------------------------------------------->



    </div>



</body>

</html>