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

        <div style="position: relative; top: 60px; right: -150px">
            <form action="{{url('/uploadfood')}}" method="post" 
            enctype="multipart/form-data">

                @csrf


                <div>
                    <label for="">Title</label>
                    <input style="color:white; margin-left:5px; background-color: gray;" type="text" name="title" placeholder="
                    Write a title" required id="">
                </div>

                <div>
                    <label for="">Price</label>
                    <input style="color:white; background-color: gray;" type="text" name="price" placeholder="
                    Write a price" required id="">
                </div>

                <div>
                    <label for="">Image</label>
                    <input style="color:white" type="file" name="image" required id="">
                </div>

                <div >
                    <input style="background-color:white; color: black" type="submit" value="Save">
                </div>

            </form>

            <div>

                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px">Food name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                        <th style="padding: 30px">Action2</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td style="width: 200px"><img src="/foodimage/{{$data->image}}" alt=""></td>
                        <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
                    </tr>

                    @endforeach
                </table>

            </div>

        </div>

    </div>
    @include("admin.adminscript")
  </body>
</html>