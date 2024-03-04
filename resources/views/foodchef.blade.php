



<div class="chefbg">
    <h1 id="abus">About us</h1>
    <div class="chef-grid-container">
        @foreach($data2 as $data2)
        <div class="chef-grid-item">

        
            <img style="width: 90%; height: 290px; border-radius:10px;" src="/chefimage/{{$data2->image}}" alt="">

            <div class="chef-name">
                <h4>{{$data2->name}}</h4>
                <h6>{{$data2->speciality}} hariutssan togooch</h6>
            </div>
        </div>
        @endforeach
    </div>  
    <h1 style="text-align: center;"><button style="border: none;">See more</button></h1>
</div>