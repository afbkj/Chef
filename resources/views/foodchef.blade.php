<div class="chef-section" id="chef-section">
    <h1 class="section-title">About us</h1>
    <div class="chef-grid-container">
        @foreach($data2 as $chef)
        <div class="chef-grid-item">
            <img class="chef-image" src="/chefimage/{{$chef->image}}" alt="{{$chef->name}}">
            <div class="chef-details">
                <h4 class="chef-name">{{$chef->name}} {{$chef->speciality}} hariutssan togooch</h4>
                <!-- <h6 class="chef-speciality">{{$chef->speciality}} hariutssan togooch</h6> -->
            </div>
        </div>
        @endforeach
    </div>
    <!-- <div class="see-more-container">
        <button class="see-more-button">See more</button>
    </div> -->
</div>
