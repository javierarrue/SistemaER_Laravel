
@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')

            <?php
                // Variables
                //Indice se usara como contador
                //El idPregunta se usara para captar el id que se consiga de la BD.
                $indice = 1;
                $idPregunta = -1;
            ?>


        <h1 class="text-center text-success">Consulta de Preguntas</h1>
        <h6  class="text-center">Click en una pregunta para ver sus respuestas</h6>
        <br>
        <br>
                <!-- ACORDEON -->
                <div class="container">
                    <div class="row">
                    <!-- Foreach para listar todas las preguntas-->
                    @foreach ($preguntas as $pregunta)
                    <!-- mientras el idPregunta ( en la primera vuelta es -1) sea diferente al
                    ID de pregnta que traigo de la BD, puedes insertar una nueva carta.
                    Esto se hace debido a que la consulta de la BD trae resultados "repetidos"-->
                    <?php if($idPregunta !== $pregunta->id_pregunta): ?>
                        <div class="col-md-10">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $indice;?>">
                                    <h3 class="mb-0">
                                        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $indice;?>" aria-expanded="false" aria-controls="collapse<?php echo $indice;?>">
                                        <b># <?php echo $indice;?> </b>{{ $pregunta->descrip_preg }}
                                        </button>
                                    </h3>
                                    </div>

                                    <div id="collapse<?php echo $indice;?>" class="collapse" aria-labelledby="heading<?php echo $indice;?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <!-- Ahora capturo del idPRegunta de la BD-->
                                      <?php
                                        $idPregunta = $pregunta->id_pregunta;
                                      ?>
                                      <ul>
                                      <!-- Luego verifico, si el campo de descrip_opcion es diferente a ''
                                      Si esta vacio esto significa que esta pregunta no tiene opciones.-->
                                        <?php
                                            if( $pregunta->cod_preg <> 'A'):
                                        ?>
                                        @foreach ($preguntas as $pregunta)
                                            <?php
                                                if($idPregunta == $pregunta->id_pregunta AND $pregunta->cod_preg <> 'A'):
                                            ?>
                                                </label>
                                                <div class="list-group">
                                                <a href="#!" class="list-group-item list-group-item-action">
                                                        <b>- </b>{{$pregunta->descrip_opcion}}
                                                </a>
                                                </div>
                                                <?php endif ?>
                                        @endforeach
                                        <!-- Si esta vacio muestro un input.-->
                                        <?php else: ?>
                                            <span style="color:grey;">Esta pregunta es abierta, no tiene opciones establecidas</span>
                                        <?php endif ?>
                                        </ul>

                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- aumento el indice-->
                        <?php
                            $indice++;
                        ?>
                        <?php endif ?>
                    @endforeach
                    <a href="{{route('MenuEncuesta')}}" class="btn btn-primary btn-lg m-5">Volver</a>
                    </div>
                </div>



@endsection
