<h1 id="abus">About us</h1>
<div class="swiper tranding-slider">
    <div class="swiper-wrapper">
        @foreach($data2 as $data2)
        <!-- <div  class="about">
        <div style="height:200px; width:200px;" class="grid-container">
            <div  class="grid-item">
                <img src="chefimage/{{$data2->image}}" id="img1" alt="">
                    <h4>{{$data2->name}}</h4>
                    <span>{{$data2->speciality}}</span>
            </div>
        </div>
    </div> -->
        <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
                <img src="/chefimage/{{$data2->image}}" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                    <h4>{{$data2->name}}</h4>
                    <span>{{$data2->speciality}}</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>