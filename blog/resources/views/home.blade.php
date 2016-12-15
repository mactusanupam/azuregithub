@extends('layouts.app')

@section('content')
<form id="myform "class="form-horizontal" role="form" method="POST" action="{{ url('/ApplyLeave') }}">
  {!! csrf_field() !!}
  <!DOCTYPE html>
  <html>
  <head>
    <style>
      .div {
        font-family:Arial, Helvetica, sans-serif;
        margin-top: 1%;
        margin-bottom: 1%;
        text-align: center;
        float: left;
      }
      .div1 {
        width: 70%;
        margin-left:5%;
        font-size: 150%;
      }
      .div2 {
        width: 18%;
        font-size: 100%;
        margin-right: 5%;
        margin-left: 2%;
      }
      .even {
       background-color: #ccccff;
       margin-top:0.3%;
      }

     .odd {
        background-color: #9999ff;
        margin-top:0.3%;
      }

     h5 {
      font-weight: bold;
      font-size: 180%;
      color: LAVENDERBLUSH;
      margin-top:15px;
    }
    .table1 {
      
    }

    .tbody1 {
      height: 130px;
      display: block;
      overflow-y: auto;
      overflow-x: hidden;
    }

    .th1 {
      padding: 3px;
      border: 1px solid black;
      background-color: #9999ff;
      font-weight: bold;
    }

    .td1 {
      width: 200px;
      border: 1px solid black;
      background-color: cyan;
      text-align: left;
    }

    .table2 {
      margin-top: 20px;
    }

    .tbody1 {
      height: 130px;
      display: block;
      overflow-y: auto;
      overflow-x: hidden;
    }
    .th2 {
      padding: 3px;
      border: 1px solid black;
      background-color: #9999ff;
      font-weight: bold;
    }
    .td2 {
      width: 200px;
      border: 1px solid black;
      background-color: cyan;
      text-align: left;
    }


  </style>
<?php

$username = Auth::user()->name;

$filepath = 'img/'.$username.'.png';

echo '<h5><center> Announcement and Achievements at work space</center></h5>';

$db1 = $db[0];
$db2 = $db[1];
$today = date("y-m-d");
$time = strtotime($today);
$d = date('m', $time); 
$d1= date('d', $time);
$d2= date('y', $time);



$dateofbirth = $db2[0]->date_of_birth;
$time1 = strtotime($dateofbirth);
$d3 = date('m', $time1);
$d4 = date('d', $time1); 
$d5 = date('y', $time1); 

echo "<div class='div div1'>"; 
for ($i = 0; $i < count($db1); $i++)
{
  $class = ( $i % 2 == 0 ) ? 'even' : 'odd';
  echo "<div class='".$class."'><br />".$db1[$i]->informationdetails."<br /><br /></div>"; 

}

echo("</div><div class='div div2'><table class='table1'><thead>");
$users = DB::table('users')->join('empdetails', 'users.id', '=', 'empdetails.user_id')->select('name')->where('date_of_birth', 'LIKE', '%-'.$d.'-'.$d1)->where('empdetails.user_id', '!=', $db2[0]->user_id)->where('date_of_birth', '!=', $today
  )->get();

if($d==$d3 && $d1==$d4 && $time != $time1) 
{
 echo "<tr><th class='th1'>"."Happy Birthday !". "$username"."</th></tr>";
 if(count($users)!=0){
 echo "<tr><th class='th1'>".count($users)." others have birthday today"."</th></tr>";
  }
 echo "<tr><th class='th1'>"."this is your ".convert_number_to_ordinal($d2-$d5)."  birthday"."</th></tr>"; 
} 
else {
  echo "<tr><th class='th1'>".count($users)." people have birthday today"."</th></tr>";
}
echo "</thead><tbody class='tbody1'>";
for($i=0; $i < count($users); $i++) {
  echo '<tr><td class="td1">'.$users[$i]->name.'</td></tr>';
}

echo "</tbody</table>";

echo "<table class='table2'><thead>";
$users = DB::table('users')->join('empdetails', 'users.id', '=', 'empdetails.user_id')->select('name')->where('date_of_birth', 'LIKE', '%-'.$d.'-'.$d1)->where('empdetails.user_id', '!=', $db2[0]->user_id)->where('date_of_birth', '!=', $today
  )->get();

if($d==$d3 && $d1==$d4 && $time != $time1) 
{
 echo "<tr><th class='th2'>"."Happy Birthday !". "$username"."</th></tr>";
 if(count($users)!=0){
 echo "<tr><th class='th2'>".count($users)." others have birthday today"."</th></tr>";
  }
 echo "<tr><th class='th2'>"."this is your ".convert_number_to_ordinal($d2-$d5)."  birthday"."</th></tr>"; 
} 
else {
  echo "<tr><th class='th2'>".count($users)." people have birthday today"."</th></tr>";
}
echo "</thead><tbody class='tbody1'>";
for($i=0; $i < count($users); $i++) {
  echo '<tr><td class="td2">'.$users[$i]->name.'</td></tr>';
}

echo "</tbody</table>";
echo "</div>";

   
// echo   "<div class='div1'><br> ".$db1['0']->informationdetails." </br><br></div>";
// echo   "<div class='div2'><br> ".$db1['1']->informationdetails."</br><br></div>";
// echo   "<div class='div3'><br> ".$db1['2']->informationdetails."</br><br></div>";
// echo   "<div class='div4'><br> ".$db1['3']->informationdetails."</br><br></div>";
// echo   "<div class='div5'><br> ".$db1['4']->informationdetails."</br><br></div>";
?>
</head>

</html>
</form>

@endsection

<?php
function convert_number_to_ordinal($number)
{
  if (!in_array(($number % 100),array(11,12,13))){
    switch ($number % 10) {
      case 1:  return $number.'st';
      case 2:  return $number.'nd';
      case 3:  return $number.'rd';
    }
  }
  return $number.'th';
}
?>
