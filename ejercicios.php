<?php
$tabladeldos=[];
$countdown=100;
$contadorEjTres=range(1,5);
$numero=0;
$contador=0;
$contadorDeUnos=0;
$nombres=["Lala","Clara","Cielo","Pato","Fede"];
$numerosEj6=[rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10)];
$numerosEj7=[rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100)];
$mascota=[
"animal" => "perro",
"edad" => 5,
"altura" => 0.69,
"nombre" => "Sonic",
];
$ceu = [
	"Italia"=>"Roma",
	"Luxembourg"=>"Luxembourg",
	"Bélgica"=> "Bruselas",
	"Dinamarca"=>"Copenhagen",
	"Finlandia"=>"Helsinki",
	"Francia" => "Paris",
	"Slovakia"=>"Bratislava",
	"Eslovenia"=>"Ljubljana",
	"Alemania" => "Berlin",
	"Grecia" => "Athenas",
	"Irlanda"=>"Dublin",
	"Holanda"=>"Amsterdam",
	"Portugal"=>"Lisbon",
	"España"=>"Madrid",
	"Suecia"=>"Stockholm",
	"Reino Unido"=>"London",
	"Chipre"=>"Nicosia",
	"Lithuania"=>"Vilnius",
	"Republica Checa"=>"Prague",
	"Estonia"=>"Tallin",
	"Hungría"=>"Budapest",
	"Latvia"=>"Riga",
	"Malta"=>"Valletta",
	"Austria" => "Vienna",
	"Polonia"=>"Warsaw"];

$ceu1 = [
	        "Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],
	        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
	        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
	        "Francia" => ["Paris", "Nantes", "Lyon"],
	        "Italia" => ["Roma", "Milan", "Venecia"],
	        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

$ceu2 = [
        "Argentina" =>
			["Ciudades" => ["Buenos Aires", "Córdoba", "Santa Fe"],
			"EsAmericano" => True
			],

        "Brasil" =>
			["Ciudades" => ["Brasilia", "Río de Janeiro", "Sao Pablo"],
			"EsAmericano" => True
			],

        "Colombia" =>
			["Ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
			"EsAmericano" => True
			],

        "Francia" =>
			["Ciudades" => ["Paris", "Nantes", "Lyon"],
			"EsAmericano" => False
			],

        "Italia" =>
			["Ciudades" => ["Roma", "Milan", "Venecia"],
			"EsAmericano" => False
			],

        "Alemania" =>

			["Ciudades" => ["Munich", "Berlin", "Frankfurt"],
			"EsAmericano" => False
			],

];

?>

    <!DOCTYPE html>
    <html lang="es" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Ejercicios PHP - Lala Mingrone</title>
    </head>

    <body>

        <header>
            <div class="container text-white text-center py-4">
                <h1>EJERCICIOS PHP</h1>
        </header>

        <main class="d-flex flex-wrap align-items-start">

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                <h2 class="text-uppercase">Ejercicio 1</h2>
                <h3>Tabla del Dos</h3>
                <h5 class="mt-4">Código</h5>
                <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                    $tabladeldos=[];
                    <br> for($i=1; $i
                    <=9; $i++){<br>
                        echo "2 x ". $i . " = " . ($i*2);
                        <br> }
                        <br>
                </div>

                <h5 class="mt-4">Ejecución</h5>
                    <div class="ejecucion py-2">
                        <?php for($i=1; $i<=9; $i++):?>
                            <ul><li> 2 x <?=$i?> = <?=$i*2?></ul></li>
                            <?php endfor; ?>
                    </div>
            </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                <h2 class="text-uppercase">Ejercicio 2</h2>
                <h3>Bucle de 100 a 85</h3>
                <h5 class="mt-4">Código</h5>
                <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                    $countdown=100;
                    <br> While ($countdown>=85) {
                    <br> echo $countdown;
                    <br> $i--;
                    <br> }

                </div>

                <h5 class="mt-4">Ejecución</h5>
                <div class="ejecucion py-2">

                    <?php While ($countdown>=85) :?>
                        <p>Contador en
                            <?= $countdown ?>
                        </p>
                        <?php $countdown--;?>
                            <?php endwhile; ?>

                </div>
            </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                <h2 class="text-uppercase">Ejercicio 3</h2>
                <h3>El Doble del Valor del Contador</h3>
                <h5 class="mt-4">Código</h5>
                <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                    $contadorEjTres=range(1,5);
                    <br> $i=1;
                    <br> While ($i
                    <=5) {<br>
                        echo $contadorEjTres=$i*2';
                        <br> $i++;
                        <br>
                            }
                            <br>

                </div>

                <h5 class="mt-4">Ejecución</h5>
                <div class="ejecucion py-2">

                    <?php $i=1;?>
                        <?php While ($i<=5) : ?>
                            <p>
                                <?=$contadorEjTres=$i*2?>
                            </p>
                            <?php $i++;?>

                                <?php endwhile;?>
                </div>
            </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                <h2 class="text-uppercase">Ejercicio 4</h2>
                <h3>Moneda</h3>
                <h5 class="mt-4">Código</h5>
                <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                    $numero=0;
                    <br> $contador=0;
                    <br> $contadorDeUnos=0;
                    <br> While ($contadorDeUnos != 5) {
                    <br> $numero=rand(0,1);
                    <br> if($numero==1){
                    <br> $contadorDeUnos++;
                    <br> }
                    <br> echo "Tiro Número ". $contador+1 . ". Salió el " .$numero . ". Hasta aquí, el Número 1 ha salido ". $contadorDeUnos ." veces";
                    <br> $contador++;
                    <br> }
                    <br> echo "Cantidad de tiros necesarios para sacar 5 veces el Número 1= ". $contador;
                </div>

                <h5 class="mt-4">Ejecución</h5>
                <div class="ejecucion py-2">

                    <?php While ($contadorDeUnos != 5) :
      	  	     		$numero=rand(0,1);
						      		  	   		if($numero==1){
									    			     $contadorDeUnos++;
								                }?>
                  <ul><li>Tiro Número <?=$contador+1?>: Salió el
                  <?=$numero?>. -- Hasta aquí, el Número 1 ha salido
                  <?=$contadorDeUnos?> veces.</ul></li>

                  <?php $contador++;
         					endwhile;?>

                  <p><b>
									Cantidad de tiros necesarios para sacar 5 veces el Número 1=
           				<?=$contador?>
									</b></p>

								</div>
            </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                <h2 class="text-uppercase">Ejercicio 5</h2>
                <h3>Nombres con bucles</h3>
                <h4 class="text-uppercase">a-Nombres con FOR</h4>
                <h5 class="mt-4">Código</h5>
                <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                    $nombres=["Lala","Clara","Cielo","Pato","Fede"];
                    <br> for($i=0;$i< count($nombres);$i++){
                    <br> echo $nombres[$i];}
                </div>

                <h5 class="mt-4">Ejecución</h5>
                <div class="ejecucion py-2">

                    <?php for($i=0;$i<count($nombres);$i++):?>
                        <ul>
                            <li>
                                <?=$nombres[$i]?>
                            </li>
                        </ul>
                        <?php endfor;?>
                </div>

                <h4 class="text-uppercase">b-Nombres con WHILE</h4>
                <h5 class="mt-4">Código</h5>
                <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                    $nombres=["Lala","Clara","Cielo","Pato","Fede"];
                    <br> $i=0;
                    <br> while($i< count($nombres)){
                    <br> echo $nombres[$i];
                    <br> $i++;
                    <br> }
                </div>

                <h5 class="mt-4">Ejecución</h5>
                <div class="ejecucion py-2">

                    <?php $i=0;
            				while($i<count($nombres)):?>
                        <ul>
                            <li>
                                <?=$nombres[$i]?>
                            </li>
                        </ul>
                      <?php $i++;
  	          			endwhile;?>
                </div>

								<h4 class="text-uppercase">c-Nombres con DO-WHILE</h4>
                <h5 class="mt-4">Código</h5>
                <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                    $nombres=["Lala","Clara","Cielo","Pato","Fede"];
                    <br> $i=0;
                    <br> do {
                    <br> echo $nombres[$i];
                    <br> $i++;
                    <br> }
                    <br> while($i < count($nombres));
								</div>

                <h5 class="mt-4">Ejecución</h5>
			            <div class="ejecucion py-2">
			                <?php $i=0;
			            		do { ?>
			                <ul><li><?=$nombres[$i]?></li></ul>
			                <?php $i++;
											}
			            		while($i<count($nombres));?>
			            </div>

            <h4 class="text-uppercase">d-Nombres con FOREACH</h4>
            <h5 class="mt-4">Código</h5>
            <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                foreach ($nombres as $valor){
                <br> echo $valor;}
                <br>

            </div>

            <h5 class="mt-4">Ejecución</h5>
            <div class="ejecucion py-2">

                <?php foreach ($nombres as $valor):?>
                    <ul><li><?=$valor?></li></ul>
                    <?php endforeach; ?>
            </div>

		</div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                    <h2 class="text-uppercase">Ejercicio 6</h2>
                    <h3>Buscando el 5 en Números Aleatorios</h3>
                    <h5 class="mt-4">Código</h5>
                    <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                        $numerosEj6=[rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10), rand(0,10)];
                        <br>
                        <br> $i=0;
                        <br> While($i
                        < count($numerosEj6)){<br>
                            echo "Valor n. ".($i+1)." del Array: ".$numerosEj6[$i];
                            <br>
                            <br> if($numerosEj6[$i]!=5){

                            <br> $i++;
                            <br> }
                            <br>
                            <br> else{
                            <br> echo "Se encontró un 5.-Se corta la ejecución";
                            <br> break;
                            <br> }
                            <br> }

                    </div>

                    <h5 class="mt-4">Ejecución</h5>
                    <div class="ejecucion py-2">

                        <?php $i=0;
              					While($i<count($numerosEj6)):?>
                            <ul><li>Valor n. <?=($i+1)?> del Array: <?=$numerosEj6[$i]?></ul></li>

														<?php if($numerosEj6[$i]!=5){
		                    		$i++;}

														else{?>
                            <p><b>Se encontró un 5.- Se corta la ejecución</b></p>
                            <?php break;
                        		} ?>

							        <?php endwhile; ?>
							      </div>

                </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                    <h2 class="text-uppercase">Ejercicio 7</h2>
                    <h3>Buscando números pares en array</h3>
                    <h5 class="mt-4">Código</h5>
                    <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                        $numerosEj7=[rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100), rand(0,100)];
                        <br>
                        <br> $pares=0;
                        <br> $i=0;
                        <br> While($i < count($numerosEj7)){
                        <br> echo "Número ". ($i + 1)."= ".$numerosEj7[$i];
                        <br>
                        <br> if($numerosEj7[$i]%2==0){
                        <br> $pares++;
                        <br> }
                        <br>
                        <br> $i++;
                        <br> }
                        <br> echo "Total números pares= ". $pares;

                    </div>

                    <h5 class="mt-4">Ejecución</h5>
                    <div class="ejecucion py-2">

                        <?php
												$pares=0;
												$i=0;
												While($i<count($numerosEj7)):?>
                      	<ul><li>Número<?=($i + 1)?> = <?=$numerosEj7[$i]?></li></ul>

														<?php	if($numerosEj7[$i]%2==0){
																	$pares++;
																	}

												$i++;
												endwhile; ?>

                        <p><b>Total Números pares = <?=$pares ?></b></p>
                    </div>
                </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                    <h2 class="text-uppercase">Ejercicio 8</h2>
                    <h3>Mascota</h3>
                    <h5 class="mt-4">Código</h5>
                    <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                        $mascota=[
                        <br> "animal" => "perro",
                        <br> "edad" => 5,
                        <br> "altura" => 0.69,
                        <br> "nombre" => "Sonic",
                        <br> ];
                        <br> foreach($mascota as $posicion => $valor){
                        <br> echo "$posicion: $valor";
                        <br> }

                    </div>

                    <h5 class="mt-4">Ejecución</h5>
                    <div class="ejecucion py-2">

                        <?php foreach($mascota as $posicion => $valor):?>
                            <p><b><?=$posicion?>: </b>
                                <?=$valor?>
                            </p>

                            <?php endforeach; ?>
                    </div>
                </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                    <h2 class="text-uppercase">Ejercicio 9</h2>
                    <h3>Script con capitales y países</h3>
                    <h5 class="mt-4">Código</h5>
                    <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                        $ceu = [ "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw"];
                        <br>
                        <br> foreach($ceu as $pais => $capital){
                        <br> echo $capital ." es la capital de ". $pais;
                        <br>}

                    </div>

                    <h5 class="mt-4">Ejecución</h5>
                    <div class="ejecucion py-2">

                        <?php foreach($ceu as $pais => $capital):?>
                            <ul>
                                <li><b><?=$capital?></b> es la capital de
                                    <?=$pais?>;</li>
                            </ul>

                            <?php endforeach; ?>
                    </div>
                </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                    <h2 class="text-uppercase">Ejercicio 10</h2>
                    <h3>Script con ciudades de cada país</h3>
                    <h5 class="mt-4">Código</h5>
                    <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                        $ceu1 = [
                        <br> "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
                        <br> "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
                        <br> "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
                        <br> "Francia" => ["Paris", "Nantes", "Lyon"],
                        <br> "Italia" => ["Roma", "Milan", "Venecia"],
                        <br> "Alemania" => ["Munich", "Berlin", "Frankfurt"]
                        <br> ];
                        <br>
                        <br> foreach($ceu1 as $pais => $ciudad){
                        <br> echo "Las ciudades de ".$pais." son:";
                        <br> foreach($ciudad as $value) {
                        <br> echo $value; }
                        <br> }

                    </div>

                    <h5 class="mt-4">Ejecución</h5>
                    <div class="ejecucion py-2">

                        <?php foreach($ceu1 as $pais => $ciudad):?>
                            <p>Las ciudades de <b><?=$pais?></b> son: </p>
                            <?php foreach($ciudad as $value):?>
                                <ul>
                                    <li>
                                        <?=$value?>
                                    </li>
                                </ul>
                                <?php endforeach;?>
                                    <?php endforeach;?>
                    </div>
                </div>

						<div class="ejercicio border border-dark shadow rounded m-4 p-3">
                    <h2 class="text-uppercase">Ejercicio 11</h2>
                    <h3>Script con ciudades de países americanos</h3>
                    <h5 class="mt-4">Código</h5>
                    <div class="solucion font-weight-bold p-2 mb-4 border bg-warning white">
                        $ceu2 = [
                        <br> "Argentina" =>
                        <br> ["Ciudades" => ["Buenos Aires", "Córdoba", "Santa Fe"],
                        <br> "EsAmericano" => True
                        <br> ],
                        <br> "Brasil" =>
                        <br> ["Ciudades" => ["Brasilia", "Río de Janeiro", "Sao Pablo"],
                        <br> "EsAmericano" => True
                        <br> ],
                        <br> "Colombia" =>
                        <br> ["Ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
                        <br> "EsAmericano" => True
                        <br> ],
                        <br> "Francia" =>
                        <br> ["Ciudades" => ["Paris", "Nantes", "Lyon"],
                        <br> "EsAmericano" => False
                        <br> ],
                        <br> "Italia" =>
                        <br> ["Ciudades" => ["Roma", "Milan", "Venecia"],
                        <br> "EsAmericano" => False
                        <br> ],
                        <br> "Alemania" =>
                        <br> ["Ciudades" => ["Munich", "Berlin", "Frankfurt"],
                        <br> "EsAmericano" => False
                        <br> ],
                        <br> ];
                        <br>
                        <br> foreach($ceu2 as $paises => $arraypaises){
                        <br> if($arraypaises["EsAmericano"]==False){break;}
                        <br> echo "Las ciudades de ".$paises. " son:";
                        <br>
                        <br> foreach ($arraypaises["Ciudades"] as $ciudad){
                        <br> echo $ciudad;}
                        <br>
                        <br> }

                    </div>

                    <h5 class="mt-4">Ejecución</h5>
                    <div class="ejecucion py-2">
                        <?php	foreach($ceu2 as $paises => $arraypaises):
												if($arraypaises["EsAmericano"]==False){break;}?>

												<p>Las ciudades de<b> <?=$paises?> </b>son:</p>

															<?php foreach ($arraypaises["Ciudades"] as $ciudad): ?>
                                <ul>
                                    <li>
                                        <?=$ciudad?>
                                    </li>
                                </ul>

															<?php endforeach; ?>
                      <?php endforeach; ?>
										</div>
                </div>

            </div>

        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>
