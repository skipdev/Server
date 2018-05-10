<!DOCTYPE html>
<html>
<head>
  <title>Slick Playground</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
      height: 200px;
    }

    .slick-slide img {
      width: 100%;
      height: 200px;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

  </style>
</head>
<body>

  <section class="regular slider">
    <div>
      <img src="">
    </div>
    <div>
      <img src="">
    </div>
    <div>
      <img src="">
    </div>
    <div>
      <img src="">
    </div>
    <div>
      <img src="">
    </div>
    <div>
      <img src="">
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
  </script>

</body>
</html>