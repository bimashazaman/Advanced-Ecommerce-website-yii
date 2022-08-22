<?php
//   <div class="col mb-5">
//   <div class="card h-100 shadow">
//       <!-- Product image-->
//       <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
//       <!-- Product details-->
//       <div class="card-body p-4">
//           <div class="text-center">
//               <!-- Product name-->
//               <h5 class="fw-bolder">Fancy Product</h5>
//               <!-- Product price-->
//               $40.00 - $80.00
//           </div>
//       </div>
//       <!-- Product actions-->
//       <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
//           <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
//       </div>
//   </div>
// </div>

// </div>
?>
 <div class="col mb-5">
    <div class="card h-100 shadow w-100">
        <a href="#" class="img-wrapper">
            <img class="card-img-top" style="height: 19rem"  src="<?php echo $model->getImageUrl() ?>" alt="">
        </a>
        <div class="card-body p-4">
        <div class="text-center">
            <h5 class="card-title">
                <a href="#" class="text-dark fw-bolder"><?php echo \yii\helpers\StringHelper::truncateWords($model->name, 20) ?></a>
            </h5>
            <h5><?php echo Yii::$app->formatter->asCurrency($model->price) ?></h5>
            <div class="card-text">
                <?php echo $model->getShortDescription() ?>
            </div>
        </div>
        
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center">
            <br>
            <a href="<?php echo \yii\helpers\Url::to(['/cart/add']) ?>" class="btn btn-outline-dark mt-auto">
                Add to Cart
            </a>
        </div>
        </div>
    </div>
    </div>
 </div>