<table border='1'>
@foreach($studs as $stud)
	@if ($stud->gender==0)
		<tr>
    		<td>{{$stud->id}}</td>
    		<td>{{$stud->name}}</td>
    		<td>{{$stud->email}}</td>
    		<td>{{$stud->gender}}</td>
  		</tr>
	@endif
@endforeach
</table>

@php
	$x = 10;
	echo $x;
@endphp
{{$x}}
