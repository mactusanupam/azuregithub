@extends('layouts.app')

@section('content')
<style type="text/css">
  table{
    text-align: center;
  }
</style>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/submit1') }}">
{!! csrf_field() !!}

<script src="{{asset('newdt/datetimepicker_css.js')}}"></script>


<?php

echo "<table><tbody>";
echo "<tr><td>Project:</td><td>";
echo "<select>";
foreach ($projectdetails as $project) {

  echo "<option value=".$project->id.">".$project->projec_name."</option>";

}
echo"</select></td></tr>";
echo "</tbody></table>";
 /*for ($i = 0; $i < count($data) ; $i++)
    {
    	//echo  Form::select('project_name'.$i.'', $user_options )
    	echo "list:".$data[$i]->compney_id;

    	}*/
echo "</tbody></table>";
?>


</form>

@endsection