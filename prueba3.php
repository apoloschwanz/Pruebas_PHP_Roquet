<?php

echo '<br> --- Ejemplo Uno ---<br>' ;

$equipo_futbol = array
 					(
 					array("Rooney","Chicharito","Gigs"),
 					array("Suarez"),
 					array("Torres","Terry","Etoo")
 					);
 
 foreach($equipo_futbol as $equipo)
 	{
 	echo "En este equipo juegan: ";
 	foreach($equipo as $jugador)
 		{
 		echo $jugador ." ";
 		}
 	echo "<br>";
 	}



echo '<br> --- Ejemplo Dos ---<br>' ;


$datos = array(
              array(array(0, 0, 0),
                    array(0, 0, 1),
                    array(0, "Rinoceronte", 2) 
                    ),
              array(array(0, 1, 0),
                    array(0, 1, 1),
                    array(0, 1, 2) 
                    ),
              array(array(0, 2, 0),
                    array(0, 2, 1),
                    array(0, 2, 2) 
                    )
              );

foreach($datos as $datos2)
 	{
 	foreach($datos2 as $datos3)
 		{
 		foreach($datos3 as $dato)
 			{
 			echo "$dato ";
 			}
 		echo "<br>";
 		}
 	echo "<br>";
 	}


echo 'Un solo elemento: '. $datos[0][2][1];



?>
