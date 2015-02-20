<?php
function pbc($teaxt)	{

	$teaxt = str_replace(',', '', $teaxt);
    $teaxt = str_replace('.', '', $teaxt);
    $teaxt = str_replace(':', '', $teaxt);
    $teaxt = str_replace('?', '', $teaxt);
    $teaxt = str_replace('!', '', $teaxt);
    $teaxt = str_replace(';', '', $teaxt);
    $teaxt = str_replace('/', '', $teaxt);
    $teaxt = str_replace('\'', '', $teaxt);
    $teaxt = str_replace('"', '', $teaxt);
    $teaxt = str_replace('*', '', $teaxt);
    $teaxt = str_replace('1', '', $teaxt);
    $teaxt = str_replace('2', '', $teaxt);
    $teaxt = str_replace('3', '', $teaxt);
    $teaxt = str_replace('4', '', $teaxt);
    $teaxt = str_replace('5', '', $teaxt);
    $teaxt = str_replace('6', '', $teaxt);
    $teaxt = str_replace('7', '', $teaxt);
    $teaxt = str_replace('8', '', $teaxt);
    $teaxt = str_replace('9', '', $teaxt);
    $teaxt = str_replace('0', '', $teaxt);
    $teaxt = str_replace('(', '', $teaxt);
    $teaxt = str_replace(')', '', $teaxt);
    $teaxt = str_replace('–', '', $teaxt);
    $teaxt = str_replace('-', '', $teaxt);
    $teaxt = str_replace('…', '', $teaxt);
    $teaxt = str_replace('«', '', $teaxt);
    $teaxt = str_replace('»', '', $teaxt);
    $teaxt = str_replace('I', '', $teaxt);
    $teaxt = str_replace('S', '', $teaxt);
    $teaxt = str_replace('M', '', $teaxt);
    $teaxt = str_replace('X', '', $teaxt);
    $teaxt = str_replace('D', '', $teaxt);
    $teaxt = str_replace('E', '', $teaxt);
    $teaxt = str_replace('W', '', $teaxt);
    $teaxt = str_replace('[', '', $teaxt);
    $teaxt = str_replace(']','', $teaxt);
    $teaxt = str_replace(' ', '', $teaxt);


	return $teaxt;
}
function mb_str_split($str)
    {
        preg_match_all('#.{1}#uis', $str, $out);
        return $out[0];
    }
$text='доноры крови';
function stl($str) {
 $str = strtolower($str);

 $search = array(
 'Й','Ц','У','К','Е','Н','Г','Ш','Щ','З','Х','Ъ','Ф','Ы','В','А','П','Р','О','Л','Д','Ж','Э','Я','Ч','С','М','И','Т','Ь','Б','Ю','Ё'
 );

 $replace = array(
 'й','ц','у','к','е','н','г','ш','щ','з','х','ъ','ф','ы','в','а','п','р','о','л','д','ж','э','я','ч','с','м','и','т','ь','б','ю','ё'
 );

 $str = str_replace($search, $replace, $str);
 return $str;
 }
$text=stl($text);
$text=pbc($text);
$text=mb_str_split($text);
$tec="";
$pred=" ";
$arr=array();
for($i=0; $i<=count($text); $i++) {
$tec=$text[$i];
$arr[$pred][count($arr[$pred])]=$tec;
$pred=$tec;
}
$_SESSION['ttes']="";
$teka=rand(0, count($arr[' ']));
$tek=$arr[' '][rand(0, count($arr[$teka]))];
$pred=" ";
for($i=0;$i<=1000;$i++) {
if($pred=="") echo ''.$tek;
if($pred!="") {
$tek=$arr[$pred][rand(0, count($arr[$pred])-1)];
$_SESSION['ttes'].=$tek;
}
$pred=$tek;
}
for($t=1; $t<=30; $t++) {
$_SESSION['ttes']="";
$teka=rand(0, count($arr[' ']));
$tek=$arr[' '][rand(0, count($arr[$teka]))];
$pred="";
for($i=0;$i<=1000;$i++) {
if($pred=="") echo ''.$tek;
if($tek=="") $tek=$arr[' '][rand(0, count($arr[$teka]))];
if($pred!="") {
$tek=$arr[$pred][rand(0, count($arr[$pred])-1)];
$_SESSION['ttes'].=$tek;
}
$pred=$tek;
}
echo $_SESSION['ttes'].'<hr>';
}
