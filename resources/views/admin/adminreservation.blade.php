<x-app-layout>
        
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    
<div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 70px; right: -150;">
        <table bgcolor="grey" border="1px">
            <tr>
                <th style="padding: 30px;">Date</th>
                <th style="padding: 30px;">Time</th>
                <th style="padding: 30px;">Name</th>
                <th style="padding: 30px;">Number</th>
                <th style="padding: 30px;">Guest</th>
            </tr>

            @foreach($data as $data)

            <tr align="center">
                <th>{{$data->date}}</th>
                <th>{{$data->time}}</th>
                <th>{{$data->name}}</th>
                <th>{{$data->number}}</th>
                <th>{{$data->guest}}</th>
            </tr>
            @endforeach
        </table>
    </div>

</div>
    @include("admin.adminscript")
  </body>
</html>