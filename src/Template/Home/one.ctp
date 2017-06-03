<?php
$this->layout = 'ecommerce';
?>



<div class="container">

<div class="single">
      <div class="col-md-9 top-in-single">
        <div class="col-md-5 single-top">
          <ul id="etalage">
            <li>
              <a href="#">

                <?php echo $this->Html->image('si1.jpg', ['class'=>'etalage_thumb_image img-responsive']);?>
                <?php echo $this->Html->image('s2.jpg', ['class'=>'etalage_source_image img-responsive']);?>

              </a>
            </li>
            <li>
              <?php echo $this->Html->image('s3.jpg', ['class'=>'etalage_thumb_image img-responsive']);?>
              <?php echo $this->Html->image('s3.jpg', ['class'=>'etalage_source_image img-responsive']);?>

            </li>
          </ul>

        </div>
        <div class="col-md-7 single-top-in">
          <div class="single-para">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            <div class="star">
              <ul>
                <li><i> </i></li>
                <li><i> </i></li>
                <li><i> </i></li>
                <li><i> </i></li>
                <li><i> </i></li>
              </ul>
              <div class="review">


              </div>
            <div class="clearfix"> </div>
            </div>

              <label  class="add-to">$32.8</label>

            <div class="available">
              <h6>Available Options :</h6>
              <ul>

              <li>Size:<select>
                <option>Large</option>
                <option>Medium</option>
                <option>small</option>
                <option>Large</option>
                <option>small</option>
              </select></li>

            </ul>
          </div>
            <form>
              <div class="input text required col-lg-12"><label for="card"></label><input type="text" name="card" required="required" maxlength="50" id="card" placeholder="Card Number"></div>
              <div class="input text required col-lg-4"><label for="month"></label><input type="text" name="month" required="required"  placeholder="Month" id="month"></div>

              <div class="input text required col-lg-4"><label for="year"></label><input type="text" name="year" required="required" maxlength="50" id="year" placeholder="Year"></div>
              <div class="input text required col-lg-4"><label for="cvv"></label><input type="text" name="cvv" required="required"  placeholder="CVV" id="cvv" ></div>
              <div class="input text required col-lg-0"><label for="uuid"></label><input type="hidden" value="<?=uniqid()?>" name="uuid" required="required" id="uuid" placeholder="uuid" ></div>

                  <div>
                      <a class="cart "onclick="cardToken()">Buy!</a>
              </div>

            </form>


          </div>
        </div>
      <div class="clearfix"> </div>
      <div class="product-top">
  <div class="col-md-4 grid-product-in">
  <div class=" product-grid">
    <a href="/home/one">  <?php echo $this->Html->image('sh2.png', ['class'=>'img-responsive']);?></a>
    <div class="shoe-in">
      <h6><a href="/home/one">Lorem Ipsum is simply</a></h6>
      <label>$67.99</label>
      <a href="/home/one" class="store">FIND A STORE</a>
    </div>

    <b class="plus-on">+</b>
  </div>
  </div>
  <div class="col-md-4 grid-product-in">
  <div class=" product-grid">
    <a href="/home/one"> <?php echo $this->Html->image('pr1.png', ['class'=>'img-responsive']);?></a>
    <div class="shoe-in">
      <h6><a href="/home/one">Lorem Ipsum is simply</a></h6>
      <label>$67.99</label>
      <a href="/home/one" class="store">FIND A STORE</a>
    </div>

    <b class="plus-on">+</b>
  </div>
  </div>
  <div class="col-md-4 grid-product-in">
  <div class=" product-grid">
    <a href="/home/one"><?php echo $this->Html->image('pr.png', ['class'=>'img-responsive']);?></a>
    <div class="shoe-in">
      <h6><a href="/home/one">Lorem Ipsum is simply </a></h6>
      <label>$67.99</label>
      <a href="/home/one" class="store">FIND A STORE</a>
    </div>

    <b class="plus-on">+</b>
  </div>
  </div>
<div class="clearfix"> </div>
</div>
      </div>
      <div class="col-md-3">
        <div class="single-bottom">

        </div>
        <div class="single-bottom">

        </div>
        <div class="single-bottom">
          <h4>Product Categories</h4>
            <div class="product-go">
              <?php echo $this->Html->image('sh.png', ['class'=>'img-responsive fashion']);?>
            <div class="grid-product">
              <a href="#" class="elit">Consectetuer adipiscing elit</a>
              <span class=" price-in"><small>$500.00</small> $400.00</span>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="product-go">
              <?php echo $this->Html->image('sh1.png', ['class'=>'img-responsive fashion']);?>
            <div class="grid-product">
              <a href="#" class="elit">Consectetuer adipiscing elit</a>
              <span class=" price-in"><small>$500.00</small> $400.00</span>
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="product-go">
              <?php echo $this->Html->image('sh2.png', ['class'=>'img-responsive fashion']);?>
            <div class="grid-product">
              <a href="#" class="elit">Consectetuer adipiscing elit</a>
              <span class=" price-in"><small>$500.00</small> $400.00</span>
            </div>
            <div class="clearfix"> </div>
            </div>
      </div>
      </div>
      <div class="clearfix"> </div>
  </div>
</div>


<script>

    function cardToken() {
        var card= $("#card").val()
        console.log(card);
        var month= $("#month").val()
        var year= $("#year").val()
        var cvv= $("#cvv").val()
        var uuid=  $("#uuid").val()

        if((card==='')){
            alert('Card must be present')
        }else if(month===''){
            alert('Month must be present')

        }else if(year===''){
            alert('Year must be present')

        }else if(cvv===''){
            alert('CVV must be present')

        }
        else {
            var form = new FormData();
            form.append("card", card);
            form.append("month", month);
            form.append("year", year);
            form.append("cvv", cvv);
            form.append("uuid", uuid);

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "/home/getToken",
                "method": "POST",
                "headers": {
                    "cache-control": "no-cache",
                    "postman-token": "13267b6e-320c-0bd9-35be-8a7f42913603"
                },
                "processData": false,
                "contentType": false,
                "mimeType": "multipart/form-data",
                "data": form
            }

            $.ajax(settings).done(function (response) {
                console.log(response);
                confirm(response);
            });
        }

    }

    function confirm(response) {
        var uuid=  $("#uuid").val()

        var form = new FormData();

        form.append("data", response);
        form.append("uuid", uuid)

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "/home/confirm",
            "method": "POST",
            "headers": {
                "cache-control": "no-cache",
                "postman-token": "13267b6e-320c-0bd9-35be-8a7f42913603"
            },
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        }

        $.ajax(settings).done(function (response) {
            console.log(response);
            messages(response);
        });


    }

    function messages(response) {
        window.location.replace('/home/finish/'+response)
    }






</script>
