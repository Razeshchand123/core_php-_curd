
   <?php

 // $handle=fopen("text.txt","r");
 // while(!feof($handle)){
 //  $data=fgets($handle);
 //  echo"<p class=' text-justify m-3'>". $data."<br></p>";
 // }

   // pdf file padne tarika
$file='pdfe.pdf';
header("content-type:application/pdf");
header("content-Description:inline;filename='".$filename."'");
header("content-Traansfer-Encoding:binary");
header("Accept-ranges:bytes");
@readfile($file)
 



?>
