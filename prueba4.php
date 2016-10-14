<?php





echo '<br> --- Ejemplo Uno ---<br>' ;


$campos=array();

$campos[]= array('descrip'=>'campo1','tipo'=>'texto','clase'=>new Rinoceronte()) ;
$campos[]= array('descrip'=>'campo2','tipo'=>'texto','clase'=> new GummiBaer()) ;


foreach ( $campos as $campo )
	{
		$campo['clase']->Nombre() ;	
	}

echo '<br> --- Ejemplo Uno y medio ---<br>' ;

for($i=0;$i<count($campos);$i++)
	{
		echo '<br> Procesa Campo: '.$campos[$i]['descrip'] ;
		$campos[$i]['clase']->Nombre();
	}


echo '<br> --- Ejemplo Dos ---<br>' ;


$rino = new Rinoceronte() ;
$gummi = new GummiBaer() ;


$rino->Nombre() ;
$gummi->Nombre();




class GummiBaer {
		public function Nombre ()
		{
			echo '<br> Ich bin ein Gummibär <br>';
		}
}

class Rinoceronte {
	public function Nombre ()
		{
			echo '<br> Soy un Rinoceronte <br>' ;
		}
}


?>
