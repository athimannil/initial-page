<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/mypostcard.css">
</head>
<body>
<section class="hero text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="mb-4">Hero</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis animi, laudantium ratione atque consectetur quos commodi voluptatibus numquam consequatur tempore at culpa voluptate fugit, qui exercitationem repellendus ea tempora deleniti.</p>
        <button type="button" class="btn btn-primary mt-4 open-member">Start journey</button>
      </div>
    </div>
  </div>
</section>

<section class="works text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-5">How it works</h2>
      </div>
      <div class="col-md-4">
        <i class="fa-camera-retro works-icon"></i>
        <p class="works-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio inventore, aliquid, sit fugit laborum culpa, hic tempore at ullam ad in reiciendis provident voluptatum atque rerum consequatur delectus quam?</p>
      </div>
      <div class="col-md-4">
        <i class="fa-image works-icon"></i>
        <p class="works-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quibusdam voluptates fuga consequatur tempore rem nisi error minus cum ipsam corporis molestias voluptate laudantium totam debitis, facere ipsa ea explicabo.</p>
      </div>
      <div class="col-md-4">
        <i class="fa-credit-card works-icon"></i>
        <p class="works-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia beatae dicta reiciendis, atque enim nostrum vero vel quisquam consequatur magnam sed totam consectetur accusantium illum. A ullam saepe amet.</p>
      </div>
    </div>
  </div>
</section>

<section class="photo-products text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="mb-5"><?php echo $product['title'] ?></h2>
            </div>
            <div class="col-md-5">
                <img src="<?php echo $product['url'] ?>" class="img-fluid" alt="<?php echo $product['alt_tag'] ?>">
            </div>
            <div class="col-md-7 align-self-center text-md-left">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis animi, laudantium ratione atque consectetur quos commodi voluptatibus numquam consequatur tempore at culpa voluptate fugit, qui exercitationem repellendus ea tempora deleniti.</p>
                <a href="#" class="btn btn-primary mt-3">One of three columns</a>
            </div>
        </div>
    </div>
</section>

<section class="content text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="mb-3">SEO Content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, odit ea pariatur a. Cupiditate magni ratione odit mollitia molestiae, dicta cumque quae facilis ex ullam, placeat reiciendis dolore voluptatum maxime?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis natus non reiciendis, optio saepe, suscipit, fuga id facere magnam error soluta atque quae recusandae quo, aperiam sunt magni veniam nihil.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum minima impedit facilis soluta aliquid temporibus earum inventore mollitia delectus laboriosam ipsam labore sapiente iure laudantium minus, asperiores quasi nam esse!</p>
      </div>
      <div class="col-sm-12">
        <img src="https://placeimg.com/990/365/people" class="img-fluid mt-3 mb-5" alt="Responsive image">
      </div>
      <div class="col-sm-12">
        <h3 class="mb-3">SEO Content <small>Subpage</small></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque odio, quaerat accusamus esse dolore sunt et praesentium quibusdam ipsa eligendi debitis ducimus id perferendis, tempore quis, libero non obcaecati quo.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam totam, dignissimos minima. Praesentium suscipit voluptatum cumque sequi, architecto quos error consectetur, laborum, similique labore dignissimos voluptas voluptates! A, laudantium voluptatum.</p>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="footer-heading">Footer</h2>
      </div>
      <div class="col text-right">
        <a href="#" class="btn btn-light footer-btn">Button here</a>
      </div>
    </div>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="members-model" tabindex="-1" role="dialog" aria-labelledby="members-modelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content members-wrap"></div>
  </div>
</div>
  <script src="./js/mypostcard.js"></script>
</body>
</html>
