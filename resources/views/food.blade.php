<section id="tranding">

    <div class="container">
        <div class="menu" id="menu">
            Хоолны цэс
        </div>


        <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
                @foreach($data as $food)
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="/foodimage/{{$food->image}}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    {{$food->title}} - {{$food->price}}₮
                                </h2>
                            </div>
                        </div>
                        <form action="{{url('/addcart')}}" method="POST">
                            @csrf
                            <input type="number" id="quantity" name="quantity" min="1" placeholder="тоо хэмжээ"
                                   style="width:80px;">
                            <button type="submit"
                                    style="width: 100px; background-color:orange; color:white; border:20px; border-radius:5px"
                                    formaction="{{url('/addcart', $food->id)}}">Сагсанд нэмэх
                            </button>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Slide-end -->
    </div>

</section>
