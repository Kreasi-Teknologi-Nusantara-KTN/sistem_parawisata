<h1 class="heading"> Judul Destinasi </h1>

<!-- course section  -->
<section class="course">
   <div class="constainer">
       <div class="row"style="padding-top :2.5rem"> 
           <div class="col-md-6">
               <div class="img text-center">
                   <img src="<?= base_url('assets/images/danau.svg')?>" width="300" alt="">
               </div>
           </div>
           <div class="col-md-6">
               <div class="informasi" style="font-size: 16px;">
                    <h2><Strong>Deskripsi</Strong></h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis rerum inventore tempora, ipsa amet voluptas. Culpa natus placeat eaque consectetur nobis, libero fugit, error ducimus veritatis nesciunt perferendis repudiandae autem?</p>
               </div>
           </div>
           <div class="row" style="padding-top :3.5rem">
               <div class="col-md-6 ">
                   <div class="title"><h1>Map</h1></div>
                   <div class="map">
                   <?php $url = prep_url("//www.facebook.com"); ?>
                    <iframe width="480" heigth="320"class="embed-responsive-item" src="<?=($url)?>" allowfullscreen></iframe>
                   </div>
               </div>
               <div class="col-md-6"></div>
           </div>
       </div>
   </div>
</section>