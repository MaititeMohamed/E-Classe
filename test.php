<?php


$studentPayment =array(

 array(
 'Name'             =>'Karthi',
'Payment Schedule'  =>'First',
  'Bill Number'     =>'00012223',
  'Amount Paid'     =>'DHS 100,000',
 'Balance amount'    =>'DHS 500,000',
 'Date'              =>'05-Jan,2022',
 ),
 array(
  'Name'             =>'mohamed',
 'Payment Schedule'  =>'First',
   'Bill Number'     =>'00012223',
   'Amount Paid'     =>'DHS 100,000',
  'Balance amount'    =>'DHS 500,000',
  'Date'              =>'05-Jan,2022',
  ),
  array(
    'Name'             =>'ali',
   'Payment Schedule'  =>'First',
     'Bill Number'     =>'00012223',
     'Amount Paid'     =>'DHS 100,000',
    'Balance amount'    =>'DHS 500,000',
    'Date'              =>'05-Jan,2022',
    ),
    array(
      'Name'             =>'ahmed',
     'Payment Schedule'  =>'First',
       'Bill Number'     =>'00012223',
       'Amount Paid'     =>'DHS 100,000',
      'Balance amount'    =>'DHS 500,000',
      'Date'              =>'05-Jan,2022',
    ),
    array(
      'Name'             =>'ahmed',
     'Payment Schedule'  =>'First',
       'Bill Number'     =>'00012223',
       'Amount Paid'     =>'DHS 100,000',
      'Balance amount'    =>'DHS 500,000',
      'Date'              =>'05-Jan,2022',
    ),
      array(
        'Name'             =>'ahmed',
       'Payment Schedule'  =>'First',
         'Bill Number'     =>'00012223',
         'Amount Paid'     =>'DHS 100,000',
        'Balance amount'    =>'DHS 500,000',
        'Date'              =>'05-Jan,2022',
        )
    );


  // foreach($studentPayment as $value)
  // {
  //   foreach( $value as $v  )
  //   {
  //       echo $v;
  //   }
  // }

  // $index=count($studentPayment);
  // $key=array_keys($studentPayment);
  // for($i=0;$i<$index;$i++)
  // {
  //   echo $key[$i] . $studentPayment[$key[$i]].'<br>';
  // }
  

  $index=count($studentPayment);
  for($i=0;$i<$index;$i++)
  {
    echo $studentPayment[$i]["Name"] .'<br>';
    echo $studentPayment[$i]["Name"] .'<br>';
    echo $studentPayment[$i]["Name"] .'<br>';
    echo $studentPayment[$i]["Name"] .'<br>';
    echo $studentPayment[$i]["Name"] .'<br>';
    echo $studentPayment[$i]["Name"] .'<br>';


  }
  
  

?>