/**
*@param foto. String con el full path de la imagen original
*/
function recortarImagen($foto){
	if(file_exists($foto)){
		$size = getimagesize($foto);
	 
    //Tamaño que se va a recortar por cada lado de la imagen
	  $margen = 135;
	  $w = $size[0]-($margen*2);
	  $h = $size[1]-($margen*2);

	  $origen = imagecreatefromjpeg($foto);
	  $final = imagecrop($origen, array('x' => $margen, 'y' => $margen, 'width' => $w, 'height' => $h ));
	  imagejpeg($final,'./recortada_'.$foto);
    
	  imagedestroy($origen);
	  imagedestroy($final);
	}
}
