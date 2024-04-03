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


    <form action="{{route('admin.coupon-insert')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div>
            <label for="">Купоны код</label>
            <input style="color:black; margin-left:20px; background-color: white;" type="text" name="code"
                   placeholder="Coupon ын кодыг энд бич" required>
        </div>

        <div>
            <label for="">Хямдралын үнэ</label>
            <input style="color:black; background-color: white; margin: 15px;" type="number" name="value"
                   placeholder="Coupon ын үнэ энд бич" required>
        </div>

        <button type="submit">Save</button>

    </form>


</div>
@include("admin.adminscript")
</body>
</html>
