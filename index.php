<?php


    //************************Estructura Selectiva Simple *****************/
    echo "<h1>1. Estructura Selectiva Simple <i>if</i></h1>";

    //declaramos variables
    $puntaje =  21; //registramos un puntaje en esta variable <---------------------
    $resultado = "No ingresó";
    $beca = "No";

    //evaluamos la condición
    if($puntaje > 50){
        $resultado = "Ingresó";
        $beca = "Sí";
    }

    //imprimimos resultados
    echo "Puntaje: " . $puntaje;    echo "<br>";
    echo $resultado;                echo "<br>";
    echo "Beca: " . $beca;

    echo "<hr>";//imprimimos línea separadoraa


    //************************Estructura Selectiva Doble *****************/
    echo "<h1>2. Estructura Selectiva Doble <i>if-else</i></h1>";

    //declaramos variables
    $edad = 11; //<---------------------
    $mayor_edad;

     //evaluamos la condición
    if($edad >= 18){
        $mayor_edad = "Sí";
    }else{
        $mayor_edad = "No";
    }

    //imprimimos resultados
    echo "Edad: " . $edad; echo "<br>";
    echo "¿El usuario es mayor de edad?: " . $mayor_edad;
    echo "<hr>";//imprimimos línea separadora


     //************************Estructura Selectiva Anidada *****************/
    echo "<h1>3. Estructura Selectiva Anidada <i>if-else-elseif</i></h1>";

    //declaramos variables
    $nota = 11;//<---------------------
    $aprobado;
    $beca = "No"; //la beca cambiará en el momento de evaluar las condiciones
    $recu = 0; //nota de recuperación
    
    //evaluamos la condición
    if($nota >= 13){
        $aprobado = "Sí";
        if($nota > 17){
            $beca = "Sí";
        }
    }else{
        $recu = 14;//<---------------------
        if($recu >= 13){
            $aprobado = "Sí";
        }else{
            $aprobado = "No";
        }
    }//fin if

    //imprimimos resultados
    echo "Nota: " . $nota;              echo "<br>";
    echo "Recuperación: " . $recu;      echo "<br>";
    echo "¿Aprobado?: " . $aprobado;    echo "<br>";
    echo "Beca: " . $beca;              echo "<br>"; 

    echo "<hr>";


    //************************Operador Lógico "Y" (&&) *****************/
    echo '<h1>4. Operador Lógico "Y" (&&)</h1>';

    //declaramos variables
    $temp =  21;//<---------------------
    $clima;

    //evaluamos la condición
    if($temp >= 10 && $temp <= 20){
        $clima =  "Nublado";
    }else{
        if($temp >= 21 && $temp <= 30){
            $clima = "Calor";
        }
        else{
            $clima = "Frío";
        }
    }

    //imprimimos resultados
    echo "Temperatura: " . $temp . " c°<br>";
    echo "Clima: " . $clima;
    echo "<hr>";


    //************************Operador Lógico "O" (||)*****************/
    echo '<h1>5. Operador Lógico "O" (||)</h1>';

    //declaramos variables
    $cuenta =  "Facebook";//<---------------------
    $plataforma;

    //evaluamos la condición
    if($cuenta == "Google" || $cuenta == "Facebook"){
        $plataforma =  "Zoom";

    }elseif($cuenta == "Microsoft" || $cuenta == "Telefono"){
        $plataforma = "Skype";

    }else{
        $plataforma = "Ninguna";
    }

    //imprimimos resultados
    echo "Cuenta de Usuario: " . $cuenta;   echo "<br>";
    echo "Plataforma de Acceso: " . $plataforma;

    echo "<hr>";

    
    //************************Operadores Selectiva Múltiple (switch) *****************/
    echo "<h1>3. Estructura Selectiva Múltiple <i>switch</i></h1>";

    //declaramos variables
    $estacion = 1;//<---------------------
    $resultado;

    //Evaluamos los casos
    switch($estacion){
        case 1: $resultado = "Verano"   ; break;
        case 2: $resultado = "Invierno" ; break;
        case 3: $resultado = "Otoño"    ; break;
        case 4: $resultado = "Primavera"; break;
        default: $resultado = "Valor incorrecto";
    }

    //imprimimos resultados
    echo "Valor ingresado: " . $estacion; echo "<br>";
    echo "Estación: " . $resultado; 






    //llevar todo a formulario mediante GET
    //imprimir la recuperación siempre y cuando haya dado recuperación
?>