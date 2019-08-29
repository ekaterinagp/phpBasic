<?php 
//   $sName="Katya";
//   $sLastName="GP";
//     echo "Hi, ".$sName." ".$sLastName;
// $iYear=2019;
// $iNextYear=$iYear+1;
//   // echo $iYear;
//   echo "Next year will be ".$iNextYear;


// single quotes - strictly text
//double quotes - possible to put variables inside
//so if it is only text - only single quotes - so php doesnøt take time to try to read it 

  // $sName="A";
  // $sLastName="B";
  // echo "You are $sName $sLastName";
  // echo 'You are welcome';
    
  // $aLetters=['A', 'B'];

  // echo 'Your first friend is: '.$aLetters[0];

  // print_r ($aLetters);
  // var_dump($aLetters);

// $arrLastNames=['Awsome', 'Great', 'Donoso'];
// $strName='Santiago';
// $iYear=2019;

// echo "Hi, $strName $arrLastNames[2]. Welcome to $iYear ";

$arrLetters=['A', 'B', 'C'];
$arrNumbers=['one', 'two', 'three'];
$arrTest=['ax', 'by', 'cz'];

echo "I am $arrLetters[1] in position $arrNumbers[1] with test $arrTest[2]";