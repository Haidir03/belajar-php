<?php
/*$nama = "Haidir"
$no = 10;
/*perulangan for
for ($i=0; $i<no; $i++) {
    $n = $i + 1;
    echo $n." "$nama. "<br/>";

}
*/
/*perulangan while
$i=0;

while ($i < $no ) {
    $n = $i + 1;
    echo  $n." ".$nama."<br/>"
    $i++;
}
*/
/*$i=0; 
perulangan do while
do {
    $n = $i + 1;
    echo  $n." ".$nama."<br/>"
    $i++;
} while ($i < $no )
*/
/*
$data = array('Avanza', 'Tesla', 'Mustang', 'Lamborghini', 'Mazda', 'Rubicon')
foreach($data as $value){
    echo $value ."<br>";
}
*/
/*$nama = "Budi"
if ($nama == haidir ){
    echo $nama. " adalah orang kendari";
} else if ($nama == putu) {
    echo $nama. " Berasal dari pulau bali";
} else { 
    echo $nama. " darimana yah ?";
}
*/
$nama = "Haidir"
switch ($nama) {
    case "Haidir";
        $pesan = $nama." adalah orang kendari";
    break;
    case  "putu";
        $pesan = $nama." adalah orang bali";
    break;
    default 
    $pesan  = $nama." darimana yah?"; 
}
echo $pesan;

?>
