<!DOCTYPE html>
<html>
   <head>
      <title>Client Page</title>

      <script src="{{ asset('js/app.js') }}" defer></script>
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
   </head>

   <body>	
   	   <table class="table table-bordered">
       		<tr>
         		<th>ticket number</th>
         		<th>title</th>
         	<th>description</th>
      	</tr>
      	@foreach($client as $row)
         <tr>
            <td>{{$row['ticket_number']}}</td>
            <td>{{$row['title']}}</td>
            <td>{{$row['description']}}</td>
         </tr>
        @endforeach
   </table>

   </body>
</html>