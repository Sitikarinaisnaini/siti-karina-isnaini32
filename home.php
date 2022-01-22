<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>Pemula PHP</title>
  <head>
  <body>

   <?php 
    /*
      berapa baris
      komentar
      terserah teman2
    */

     // variabel pada php 
     $nama = "SEKOLAH KODING 345";
     $_123 = "Text Baru"; 
    
   echo "<h1>$nama</h1>";	
   echo "<h2>$_123</h2>";
   echo "Halo ". $nama ."<br>";
   echo "member " ; 
   
    //tipe data -string-
	$nama  = "Sekolah koding ";
    $nama2 = 'Bermain koding ';
	
	echo '<h3>Tipe Data String </h3>';
	echo $nama. " untuk " .$nama2 ;
	echo "<br>";
	echo "Selamat datang di $nama ";
	
	//tipe data angka/number 
	// 1.integar  2.float
	 
   $angka  =1000;
   $angka2 =100;
   $angka3 =100.345;   
   
   echo "<h3>Tipe Data Angka</h3>";
   echo "angkanya adalah $angka";
   echo "<br>";
   echo $angka + $angka2;
   echo "<br>";
   echo $angka + $angka3;
   
   //----------operator aritmatik----------
   //+ - * / % ++ --
   //nama = nilai
   //$angka = $angka + $angka2
   //$angka *= $angka2 
   $angka  = 1000;
   $angka2 = 5;
   $angka3 = 3; 
   $test   = $angka + $angka2;
   
   echo "<h3>Operator Aritmatik</h3>";
   echo $angka - $angka2;
   echo "<br>";
   echo $angka + $angka2 *$angka3;   
   echo "<br>";
   echo $test;
    
	
   //----------math method---------- 
   //round rand(min,max) max min
   
   $angka  = 2000;
   $angka2 = 6;
   $angka3 = 2.44; 
   
   echo "<h3>Math Method</h3>";
   echo round($angka3);
   echo "<br>";
   echo "Angka hari ini adalah ". rand(5,10);
   echo "<br>";
   echo "Angka hari ini adalah ". max($angka,$angka2,$angka3);
   echo "<br>";
   echo "Angka hari ini adalah ". min($angka,$angka2,$angka3);
   
   
   //----------string method----------
   //strlen && str_word_count
   //str_replace(find,replace,string)
   //str_repeat(text,times);   str_shuffle(text)
    
   $text ="Hai semuanya di sini";
   echo "<h3>String Method</h3>";
   echo strlen($text);
   echo "<br>";
   echo  str_word_count($text);
   echo "<br>";
   echo str_replace("Hai","Halo",$text);
   echo "<br>";
   echo str_repeat("Hai ", 4);
   echo "<br>";
   echo str_repeat (str_replace("Hai","Halo ",$text), 5);
   
   
   
   
    echo "<h1>ARRAY PHP </h1>";
   //----------tipe data array----------
   $kontak = array('kelinci','kurakura','lebah','beruang');
   $nama   = ['mark','haechan','chenle'];
   
   //print_r ($kontak);
   //echo $nama[0];
   
   echo "<h3>Tipe Data</h3>";
   print_r($kontak);
   echo "<br>";
   echo $kontak [1];
   echo "<br>";
   echo $nama [2];
   
   //---------metode array----------
   //array_unique, _reverse, shuffle, count, sort
   //shuffle ($kontak);
   //print_r ($kontak);
   //echo count ($kontak);
   echo "<h3>Metode Array</h3>";
   print_r(array_unique($kontak) );
   echo "<br>";
   print_r(array_reverse($kontak) );
   echo "<br>";
   shuffle ($kontak);
   print_r($kontak);
   echo "<br>";
   echo count($kontak);
   echo "<br>";
   sort ($kontak);
   print_r ($kontak);
   
   
   //----------Associative array----------
   //key => isi
   //$data = array( "nama"  => "chenle" ,
   //               "umur"  =>  20,
   //               "kerja" => "penyanyi"	
   //		);
   //$data2 = array( "istri"  => "belum ada" ,
   //               "laptop"  => " chromebook"
   //	    );
                
   
   echo "<h3>Associative array</h3>";
   $data = array( "nama"  => "chenle" ,
                  "umur"  =>  20,
                  "kerja" => "penyanyi"	
			);
   $data2 = array( "istri"  => "belum ada" ,
                  "laptop"  => " chromebook"
		    );
                  		
	
			
	//print_r($data);		
	//$data['nama'] = "zhong chenle";
	//echo "namanya adalah ". $data['nama'];
	
	
	print_r($data);
    echo "<br>";
	$data['nama'] = "zhong chenle";
    echo "namanya adalah ". $data['nama'];
	
	//----------methode assosiatif array-----
    //aray_values array_keys array_merge
    //print_r(array_merge($data, $data2) );
	
    echo "<h3>Methode assosiatif array</h3>";	
	print_r(array_values($data) );
	echo "<br>";
	print_r(array_keys($data) );
	echo "<br>";
	print_r(array_merge($data, $data2) );
	
	//---------multi dimensi array------
	
    echo "<h3>Multi dimensi array</h3>";
    $data3 = array(
              array("programmer","21","males"),
			  array("designer","25","rajin"),
              array("manager","31","males banget")
			);
			
	//00 01 02
	//10 11 12
	//20 21 22
	
			print_r ($data3);
	echo "<br>";		
    echo $data3 [2][0];
	 echo "<h1>Loop PHP </h1>";
	//----------pengulangan------
	//for(variabelawal(mulai); batasa(syarat); perubahan)
	 echo "<h3>Pengulangan</h3>";
		for($i = 0; $i <5; $i++)
		{
		echo "------------------";	
		echo "sekolah koding $i";
		echo "------------------<br>";	
		}
	
	$hewan = ['kelinci','kurakura','lebah','beruang','buaya'];
	//---------- 1) for loop ----------
	//  for($i = 0; $i < count($hewan) - 1; $i++)
	//	{
	//	echo "------------------";	
	//	echo $hewan [$i];
	//	echo "------------------<br>";	
	//	}
	
	//--------- 2) foreach ---------
	foreach($hewan as $h)
	   {
		echo "------------------";	
		echo $h;
		echo "------------------<br>";	
		}
	
	$data = ['nama' => 'chenle',
	        'umur'=>20,
			'sifat'=> 'malas'];
			
	foreach($data as $d =>$v){
      echo $d . "<br>";
	  echo $v . "<br>";
	}	  
	
	//---------- 3) while & do while -----------
	//while(syarat)
	

     $i = 0;
	 
	// while( $i < count($hewan) ){
	//	 echo $hewan[$i]. "<br>";
	//	 $i++;
	//     }
	 do{
		echo $hewan[$i]. "<br>";
		 $i++;
	 } while ( $i < count($hewan) );


	  echo "<h1>Logika di PHP </h1>";
	//----------- tipe data boolean -----------
	// $hasil  = true
	// $hasil2 = false 
	 
	//-------- if dan else ----------
	//------ else if 
	//operator logika == === > >= < <= !=
	$password = '123';
	
	if( $password == '123' ) {
		echo 'anda berhasil masuk!';
	}
	else{
		echo ' gagal passwordnya salah ';
	}
	echo "<br>";
	$password  = 1000;
	$password2 = 1234;
	
	if( $password < $password2 ) {
		echo 'password lebih besar';
	}
	else{
		echo ' password lebih kecil ';
	}
    
	echo "<br>";
	$password  = 1000;
	$password2 = 1000;
	
	if( $password != $password2 ) {
		echo 'benar password tidak sama';
	}
	else{
		echo 'salah, passwordnya sama,wee ';
	}
    
	//$uang_programmer = 1000;
	//$keyboard        = 2000;
	//$uang_designer   = 4000;
	//&& atau ||
	//echo "<br>";
	//if ($uang_programmer > $keyboard 
	//&& $uang_designer > $keyboard ){ 
	//    echo ' boleh beli keyboard ';
	//}else {
	//	echo 'ngga bisa beli';
	//}
	//echo "<br>";
	//if( $uang_programmer > $keyboard ) {
	//	echo 'dibeli!';
	//}
	//else if( $uang_designer > $keyboard ) {
	//	echo 'dibeli! oleh designer';
	//	echo "<br>";
    //---if bercabang
	//	if( $uang_designer >= $keyboard  * 2) {
	//	echo 'dibeli! dua kali oleh designer';
	//	}
	//}
	//else{
	//	echo ' ngga cukup  ';
	//}
	
	//switch case
	
	echo "<br>";
	$nama ="mark123";
	switch ($nama){
	  case 'haechan';
	   echo 'namanya haechan';
	    break;
		case 'jisung';
	   echo 'namanya chenle';
	    break;
		case 'mark';
	   echo 'namanya mark';
	    break;
	 default;
	   echo 'tidak ada yang benar';
	}
	
	
	echo "<h1>Fungsi PHP </h1>";
	//-------- fungsi -------
	
    // function panggil ()
	// {
	//	 echo "-----------";
	//	 echo " sekolah koding";
	//	 echo "-----------";
	//	 
	// }	 
	// function jarak(){
	//	 echo "<br>";
	// }
	
	//panggil();
	//jarak();
	//panggil();
	//jarak();
	//panggil();
	//jarak();
	
	//parameter
	// function print_text( $text,$angka )
	// {
	//	$text = "gedung" . $text . " " .$angka; 
	//	 echo "-----------";
	//	 echo  $text;
	//	 echo "-----------";
	//	 
	//}	 
	// function jarak(){
	//	 echo "<br>";
	// }
	
	//print_text(" koding",1);
	//jarak();
	//print_text(" perawat",2);
	//jarak();
	//print_text(" mengemudi",3);
	//jarak();
	
	
	//---- return fungsi -----
	
	//function menghitung($x, $y){
	//	$z = $x + $y;
	//  return $z;
	//}
	//$hasil = menghitung(2, 4) * 10;
	//echo "hasil dari penjumlahan ".$hasil;
	//echo "<br>";
	
	//---- scope ----
	
	//$a = 2000;
	//$b = 5;
	
	//function menghitung (){
	//	global $a, $b ;
	//	
	//	$c = $a + $b;
	//	return $c;
	//}
	
	//echo menghitung ();
	
	//----- anonymous function -----
	//echo "<br>";
	//$ngetik = function ( $text){
	//	echo $text;
	//};
	
	//$greeting = $ngetik;
	
	//$ngetik ('selamat datang semuanya 123');
	
	
	//----- callback function -----
	
	//function berteriak($callback){ 
	//	 echo 'HALOOOOO <br>';
	//$callback();
	//call_user_func($callback);
	
	//}
	 
	// berteriak(function){
    //    echo 'selamat datang';
    //});		
	
	//$panggil = function (){
	 //  echo ' selamat datang';
    //};
	
	//berteriak ( $panggil );
	
	// echo print 
	// print_r die var_dump
	
	echo "<br>";
	$car = ['mobil', 'motor'];
	var_dump($car);
	
	
   ?>  
   
   
  </body>
</html>