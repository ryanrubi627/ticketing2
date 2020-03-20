<!DOCTYPE html>
<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <th>Ticket Number</th>
            <th>Title</th>
            <th>Description</th>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->ticket_number }}</td>
            <td>{{ $user->title }}</td>
            <td>{{ $user->description }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>