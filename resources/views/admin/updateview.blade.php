<x-app-layout>
        
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    
<div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px">
            <form action="{{url('/update', $data->id)}}" method="post" 
            enctype="multipart/form-data">

                @csrf


                <div>
                    <label for="">Title</label>
                    <input style="color:black" type="text" name="title" placeholder="
                    {{$data->title}}" required id="">
                </div>

                <div>
                    <label for="">Price</label>
                    <input style="color:black" type="text" name="price" placeholder="
                    {{$data->price}}" required id="">
                </div>

                <div>
                    <label for="">Old Image</label>
                    <img width="200" src="/foodimage/{{$data->image}}" alt="">
                </div>

                <div>
                    <label for="">New Image</label>
                    <input style="color:white" type="file" name="image" required id="">
                </div>

                <div >
                    <input style="background-color:white; color: black" type="submit" value="Save">
                </div>

            </form>

            <div>

</div>
    @include("admin.adminscript")
  </body>
</html>