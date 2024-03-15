<section id="tranding">

  <div class="container">
    <div class="menu" id="menu">
      Menu
    </div>
    <form action="{{url('/addcart')}}" method="post">
      <div class="swiper tranding-slider">
        <div class="swiper-wrapper">


          @foreach($data as $data)

            @csrf

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide ">
              <div class="tranding-slide-img">
                <img src="/foodimage/{{$data->image}}" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    {{$data->title}} - {{$data->price}}.000
                  </h2>
                </div>
              </div>
              <input type="number" id="quantity" name="quantity" value="1" min="1" style="width:80px;">
              <!-- <input type="submit" value="add cart" style="width:80px; background-color:orange"> -->
              <button type="submit" style="width: 100px; background-color:orange; color:white; border:20px; border-radius:5px" formaction="{{url('/addcart', $data->id)}}">add cart</button>

            </div>

          </form>
          @endforeach
          <!-- Slide-end -->


        </div>
      </div>
    </form>
  </div>

</section>