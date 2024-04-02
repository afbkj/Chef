<div class="contact">
  <div class="filter"></div>
  <div class="conus">
    <h3>
      Бидэнтэй холбогдох
    </h3>
    <h2>
      Энэ хэсэгт та урьдчилсан захиалга өгөх боломжтой.
    </h2>
    <h4>
      Энэ хэсэгт урьдчлан ширээ захиалах боломжтой ба дараах зүйлсийг бөглөн ширээгээ захиална уу.
      Захиалсан цагаас 30 минут хүлээх ба хоцрох тохиолдолд захиалга цуцлагдах болохыг анхаарна уу!
      <div class="phone">
        <div class="phnicn">
          <i class="fa-solid fa-phone"></i>
        </div>
        <h3 style="color: black;">
          Утас:
        </h3>
        <h3 style="color: black;">
          99887766
        </h3>
      </div>
      <div class="mail">
        <div class="mailicn">
          <i class="fa-solid fa-envelope"></i>
        </div>
        <h3 style="color: black;">
          Email:
        </h3>
        <h3>
          hello@company.com
        </h3>
      </div>
    </h4>
  </div>

  <form class="reserv" id="reserv" action="{{url('reservation')}}" method="post">
    @csrf
    <section class="banner">
      <div class="card-container">



        <div class="card-content">
          <h3>Захиалга өгөх</h3>
          <div class="form-row">
            <!-- <select style="color: black; font-size: 10px" name = "days">
                              <option value = "day-select">Select Day</option>
                              <option value = "sunday">Sunday</option>
                              <option value = "monday">Monday</option>
                              <option value = "tuesday">Tuesday</option>
                              <option value = "wednesday">Wednesday</option>
                              <option value = "thursday">Thursday</option>
                              <option value = "friday">Friday</option>
                              <option value = "saturday">Saturday</option>
                          </select> -->
            <input style="color:black" name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
            <input type="time" name="time" style="color: black; font-size: 10px">
          </div>

          <div class="form-row">
            <input name="name" id="name" type="text" placeholder="Нэр">
            <input name="number" type="text" id="number" placeholder="Утасны дугаар">
          </div>

          <div class="form-row">
            <input style="height: 30px" type="number" name="guest" placeholder="Хүний тоо" min="1">
            <input type="submit" id="form-submit" value="Захиалах">
          </div>
        </div>
      </div>
    </section>
  </form>

  <img src="image/bg.jpg" alt="" class="bg">
</div>