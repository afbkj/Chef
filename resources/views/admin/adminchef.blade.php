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

    <form action="{{url('/uploadchef')}}" method="Post" 
    enctype="multipart/form-data">

        @csrf

        <div style="color: white;">
            <label for="">Name</label>
            <input style="color:black; margin-left:27px; background-color: white;" name="name" placeholder="Enter name"
             type="text">
        </div>

        <div>
            <label for="">Speciality</label>
            <input style="color:black; background-color: white; margin-top: 15px;" name="speciality" placeholder="Enter speciality"
             type="text" required="">
        </div>

        <div>
            <input type="file" style="margin: 15px;" name="image" required="">
        </div>

        <div>
            <input style="color: black; width:50px; background-color: white;  border-radius:20%; margin: 15px;" type="submit" value="Save">
        </div>
    </form>

    <table bgcolor="black" style="height: 100px">
        <tr>
            <th style="padding: 30px;">Chef Name</th>
            <th style="padding: 30px;">Speciality</th>
            <th style="padding: 30px;">Image</th>
            <th style="padding: 30px;">Action</th>
            <th style="padding: 30px;">Action2</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img style="width:100px; height:100px"
             src="/chefimage/{{$data->image}}" alt=""></td>
            <td><a href="{{url('/updatechef', $data->id)}}">Update</a></td>

            <td><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

</div>
    @include("admin.adminscript")
  </body>
</html>