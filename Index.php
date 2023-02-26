<?php
session_start();
require "Config.php";
?>

<?php
$user_id="";
    $user_id=$_SESSION['user_id'];

if(!isset($user_id)){
    header("location:login.php");
   }
?>
<?php


if(isset($_GET['logout'])){
  unset($_SESSION['user_id']);
  session_destroy();
  header("location:login.php");
}

?>
<style>

  p.p a:hover{
    text-decoration:underline;
  }
.bi-arrow-left-short{
  font-size:50px;
}
</style>

  <?php $conso="";?>
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['Options'])){
    echo $_POST['Options'];
    echo $conso;
  }
}
?>
<style>
.box-shadow{
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  border-radius:25px;
}
  </style>
  
<?php
    $mode="Index.php";
  if(isset($_GET['mode'])){
    $mode=$_GET['mode'];
  }
if(count($_GET)>0){
  switch($mode){
    case "Pilot-frame-tinted-sunglasses":
      ?>
          <form method="post" action="" >
            
            <section class="container sproduct my-5 pt-5"><div class="container-fluid">
                  <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
          
                <div class="row mt-5">                     
  
                    <div class="col-lg-5 col-md-12 col-12  "id="area" >                
  
                        <img src="GucciMenglasses/pilot-frametintedsunglasses.jpg"   class="img-fluid w-100 pb-1 magnified" id="MainImg"  width="300px" height="auto" >
  <input type="hidden" name="image" value="<?php echo "GucciMenglasses/pilot-frametintedsunglasses.jpg"?>">
                  <div class="magnifier" style="background-image:url('GucciMenglasses/pilot-frametintedsunglasses.jpg')"></div>
  
  
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="GucciMenglasses/pilot-frametintedsunglasses.jpg"  width="100%" class="small-img " style="object-fit:contain">
                             
                            </div>
         
                            <div class="small-img-col">
                            
                                <img src="GucciMenglasses/pilot-frametintedsunglasses_1.jpg" width="100%" class="small-img " style="object-fit:contain">
                                
         
       
                            </div>
    
                            <div class="small-img-col">
                               
                                <img src="GucciMenglasses/pilot-frametintedsunglasses_2.jpg" width="100%" class="small-img " style="object-fit:contain">
  
                                
        
                            </div> 
                            <div class="small-img-col">
  
                                <img src="GucciMenglasses/pilot-frametintedsunglasses_3.jpg" width="100%" class="small-img" style="object-fit:contain">      
  
                            </div>   
                        </div>
                    </div>
          
                    <div class="col-lg-6 col-md-12 col-12">
                  <h6>Home/MenGlasses/GucciMenglasses</h6>
                  <br>
                  <h3>Gucci Eyewear</h3>
                  <p>pilot-frame-tinted-sunglasses</p>
                  <br>
                  <h6>UPC :  GG1220S</h6>
                  <p>Stock Count : <?php
                  $sql = "select StockQuantity from menglasses where Name='Pilot-frame-tinted-sunglasses'";
                  $result=mysqli_query($connection,$sql);
                    while($rows=mysqli_fetch_assoc($result)){
                      echo $rows['StockQuantity'];
                      $stockCount=$rows['StockQuantity'];
  
                      }
  
                  ?></p>
                  <input type="hidden" name="Count" value="<?php echo $stockCount?>">
                  <input type="hidden" name="name" value="Pilot-frame-tinted-sunglasses">
                  <input type="hidden" name="id" value="GG1220S">
                  <input type="hidden" name="brand" value="Gucci">
  
                  <h3 style="display:inline-block">$100.45</h3> <span><del>$200.90</del></span><br>
                 <p>
                  <?php
                  if($stockCount>5){
                      echo "<h4 class='text-success'>Instock </h4>";
                     }else if($stockCount<=5 && $stockCount>1){
                      echo "<h4 class='text-warning'>Low In Stock </h4>";
                     }else {
                      echo "<h4 class='text-danger'>Out Of Stock</h4>";
                     }
                  ?>
                  </p>
                
                  <input type="hidden" name="Price" value="100.45" />
                  <select class="my-3" name="size">
                <option>Select Size</option>
                <option>52mm</option>
                <option>55mm</option>
                  </select>
  
                  <input type="number" value="1" name="number" min="1" max="<?php echo $stockCount?>">
               
                  <input  type="submit"  value="Add to Cart" class="btn btn-dark <?php echo ($stockCount > 1)?'':'disabled';?>" name="click" style="width:200px"/>
                  <span><button class="buy-btn btn btn-dark <?php echo ($stockCount > 1)?'':'disabled';?>" style="width:200px;" name="wishlist">Add to Wishlist &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
                  <div class="container-fluid  mb-5 mt-5">
    <div class="row">
      <div class=" col-lg-4">
      <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
      </div>
      <div class=" col-4">
      <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
     </div>
     <div class="col-4">
     <i class="bi bi-2-circle-fill" style="font-size:30px"></i><strong>YEARS WARRANTY</strong>
   </div>
    </div>
  </div>
  
  <div class="container-fluid">
      For More Information Please Visit Our FAQ :   <br><br>
           <button class="btn btn-warning " style="width:200px"><a href="FAQ.html" class="text-danger">FAQ</a></button>
  
      </div>
                    </div>
                </div>
        
            </section>
            
            
          </form>
          
  
  
  
  <section>
  
  <div class="container">
      <div class="row" style="background-color: #f4f4f4;">
      <div class="active-hover col-lg-3 p-3">
          The Details
      </div>
      <div class="active-hover col-lg-3 p-3">
                      Delivery & Return
   </div>
    </div>
  </div>
                 
     </section>
     
  <section>
  <div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
  <div class="row ">
      <div class="col-lg-6  ">
          <div class="d-flex">
          <div class=" p-3">
   <p>
   New Season</p>
   <br>
  <h3>Gucci Eyewear</h3><br>
  <p>pilot-frame tinted sunglasses</p>
  <br>
  <p>
  Gucci Eyewear presents its take on the classic pilot sunglasses. This pair features signature engraved logo detailing at the arm, with acetate tips and branded lenses completing the design.</p>
  
  
                  </p>
                  </div>
                  <br>
                  <div class="p-2 " style="width:100%">
                      <br>
                       <h3>Composition</h3>
  Metal 100%, Acetate 100%<br><br><br>
  
  <h3>Product IDs</h3>
  FARFETCH ID: 19370321<br>
  
  Brand style ID: GG1220S<br>
  <br>
                  </div>
                  </div>
                              
  <div class=" mt-3  col-lg-12 container">
                      <h3>Highlights</h3>
                      <ul>
                          <li>gold-tone</li>
  <li>metal/acetate</li>
  <li>pilot frame</li>
  <li>tinted lenses</li>
  <li>signature GG Supreme print</li>
  <li>logo-engraved arm</li>
  <li>straight arms</li>
  <li>curved tips</li>
  <li>These glasses come with a protective case</li>
                  </ul>
                  </div>
                  </div>
                  <div class="col-lg-6 ">
                  <img src="GucciMenglasses/pilot-frametintedsunglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">
  
                  </div>
     
                  </div> 
                  </div>
  
                  
  </section>
  
  <section>
  <div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
  <div class="container">
      <div class="row" style="column-gap:30px;">
      <div class="d-flex">
          <div class="col-lg-4 p-3 pt-3">
  
          <h4 class="mt-3">We've got your back</h4>
          <ul>
              <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
              <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
                  </li>
                  <li>All our deliveries are climate conscious</li>
                  </ul>
                  </div>
  
  
                  <div class="col-lg-4 ">
  
          <h4>Estimated delivery</h4>
         <p>Standard: Feb 24 - Feb 28</p>
         <p>Express: Feb 23 - Mar 1</p>
         <p>Sending from our marketplace seller in Italy</p>
                  </div>
                  <div class="col-lg-4 p-3 ">
  
  <h4>Need more information ?</h4>
  <p>Please Visit for more details</p>
  <ul>
  <li><a href="FAQ.php">FAQ</a></li>
      <li><a href="PrivatePolicy.php">PrivatePolicy</a></li>
      <li><a href="Term&Condition.php">Terms & Condition</a></li>
                  </ul>
          </div>
                  </div>
                  <div class="col-lg-12">
                  <h3>Import duties information</h3>
                  <p>
                  Let us handle the legwork.
  
  Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
                  </p>
  
                  </div>
      </div>
          </div>
          </div>
      
  </section>
            <!--Prodcut Page Features-->
            <section id="featured" class="my-5  ">
        <div class="container text-center mt-1 py-5">
            <h3 class="mb-5">Related Product</h3>
            <hr class="mx-auto">
        </div>
            </section>  
  
  
  
  
            <section>
             
            <?php
            $stocknumber="";
            $sql = "SELECT * From womenglasses LIMIT 4,4";
            $result=mysqli_query($connection,$sql);
            if(mysqli_num_rows($result)>0){ 
              ?>
              <div class="container-fluid">
             <div class="container">
              <div class="row">
                  <?php
       while($rows=mysqli_fetch_assoc($result)){
          ?>
  
     
      <form method="post" class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     
  
            <div class="border discount"><p>50%<br>OFF</p></div>
  
                <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
                <input type="hidden" name="image" value="<?php echo $rows['img']?>">
                
                <h5 class="p-name"><?php echo $rows['Name']?></h5>           
                <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
                <br>
                   <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
                   <br>
  
                <select class="my-3" name="size">
              <option>Select Size</option>
              <option>52mm</option>
              <option>55mm</option>
                </select>
                <br>
                <h6>UPC :<?php echo $rows['UPC']?></h6>
                <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
                <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
                <input type="hidden" name="Count" value="
                <?php echo $rows['StockQuantity'];
                $stocknumber=$rows['StockQuantity'];
                ?>">
         <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
                  <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
                  <p>
                      <?php 
                      if($stocknumber>5){
                          echo "<h4 class='text-success'>Instock </h4>";
                         }else if($stocknumber<=5 && $stocknumber>1){
                          echo "<h4 class='text-warning'>Low In Stock </h4>";
                         }else {
                          echo "<h4 class='text-danger'>Out Of Stock</h4>";
                         }
                  ?>
                  </p>
                  <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
       <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?' ':'disabled';?>" name="click">Add to cart</button>
       
      
                        </form>
  <?php
      }    
      ?>
      
      <?php
       
            }else{
              echo "No Result";
            }
            ?>
            </div>
            </div>
            </div>
       
      
<script src="script.js"></script>
<script>
    $(".magnified").hover(function(e){
        var imgPosition=$(".magnifier").position(),
        imgHeight=$(".magnified").height(),
        imgWidth=$(".magnified").width();

        $(".magnifier").show();
        $(this).mousemove(function(e){
            var posX=e.pageX - imgPosition.left,
            posY = e.pageY - imgPosition.top,
         percX=(posX/imgWidth)*100,
            percY =(posY/imgHeight)*100,
            perc=percX + "% " + percY +"%";

            $(".magnifier").css({
                top:posY,
                left:posX,
                backgroundPosition:perc
            });
        });
    },function(){
        $(".magnifier").hide();
    });
    </script>

 <script>
    let MainImg=document.getElementById("MainImg");
    let smallimg=document.getElementsByClassName("small-img");
    for(let i =0;i<smallimg.length;i++){
        smallimg[i].addEventListener("click",function(){
            MainImg.src=smallimg[i].src;
              });
            }
</script> 

<?php
?>
      <?php
      break;

        case "rectangular-frame blue-lightglasses":
        ?>  
        <form method="post" action="">

        <section class="container sproduct my-5 pt-5">
        <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12" > 
                    <img src="GucciMenglasses/rectangular-frameblue-lightglasses.jpg"   class="img-fluid w-100 pb-1  images " id="MainImg"  width="300px" height="auto" >
                    <input type="hidden" name="image" value='<?php echo "GucciMenglasses/rectangular-frameblue-lightglasses.jpg"?>'/>

                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="GucciMenglasses/rectangular-frameblue-lightglasses.jpg"  width="100%" class="small-img ">
                         
                        </div>
     
                        <div class="small-img-col">
                        
                            <img src="GucciMenglasses/rectangular-frameblue-lightglasses_1.jpg" width="100%" class="small-img ">
                            
     
   
                        </div>

                        <div class="small-img-col">
                           
                            <img src="GucciMenglasses/rectangular-frameblue-lightglasses_2.jpg" width="100%" class="small-img ">

                            
    
                        </div> 
                        <div class="small-img-col">

                            <img src="GucciMenglasses/rectangular-frameblue-lightglasses_3.jpg" width="100%" class="small-img">      

                          
   
      
                        </div>   
                      
                    </div>
                </div>
      
                <div class="col-lg-6 col-md-12 col-12">
              <h6>Home/MenGlasses/GucciMenglasses</h6>
              <h3>Gucci Eyewear</h3>
              <p>GucciRectangular-frame-blue-light-glasses</p>
              <h6>UPC : GG0340S011</h6>
              <p>Stock Count : <?php
               $select = "select StockQuantity from menglasses where Name='rectangular-frame blue-lightglasses'";
               $result=mysqli_query($connection,$select);
                 while($rows=mysqli_fetch_assoc($result)){
                    $stockCount= $rows['StockQuantity'];
                   echo $rows['StockQuantity'];
                 };
               ?></p>
               
               <input type="hidden" name="Count" value="<?php echo $stockCount?>">
              <input type="hidden" name="name" value="rectangular-frameblue-lightglasses">
              <input type="hidden" name="id" value="GG0340S011">
              <input type="hidden" name="brand" value="Gucci">
              <h3 style="display:inline-block">$200.40</h3> <span><del>$231</del></span>

              <br>
              <p>
               <?php
               if($stockCount>5){
                echo "<h4 class='text-success'>Instock </h4>";
               }else if($stockCount<=5 && $stockCount>1){
                echo "<h4 class='text-warning'>Low In Stock </h4>";
               }else {
                echo "<h4 class='text-danger'>Out Of Stock</h4>";
               }
               ?>
               </p>
              <input type="hidden" name="Price" value=" 200.40" />
              <select class="my-3" name="size">
            <option>Select Size</option>
            <option>52mm</option>
            <option>55mm</option>
              </select>
              <input type="number" name="number" value="1" min="1" max="255">
              <button class="buy-btn btn btn-dark  <?php echo ($stockCount > 1)?'':'disabled';?>" name="click">Add to Cart</button>
              <span><button class="buy-btn btn btn-dark <?php echo ($stockCount > 1)?'':'disabled';?>" style="width:200px" name="wishlist">Add to Wishlist &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
              <div class="container-fluid  mb-5 mt-5">
  <div class="row">
    <div class=" col-lg-4">
    <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
    </div>
    <div class=" col-4">
    <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
   </div>
   <div class="col-4">
   <i class="bi bi-2-circle-fill" style="font-size:30px"></i> <strong>YEARS WARRANTY</strong>
 </div>
  </div>
</div>
<div class="container-fluid">
    For More Information Please Visit Our FAQ :   <br><br>
         <button class="btn btn-warning" style="width:200px"><a href="FAQ.html">FAQ</a></button>

    </div>
                  </div>
              </div>
      
    
        </section>
     <section>
     </form> 
     <div class="container   mb-5 mt-3" style="background-color: #f4f4f4;">
  <div class= "d-flex" style="display:flex;justify-content:flex-start;align-self:flex-start">
    <div class="active-hover">
      The details
    </div>
    <div class="active-hover">
      Delivery & Returns
   </div>
 </div>
  </div>
</div>
 </section>
 
<section>
<div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
<div class="row ">
    <div class="col-lg-6  ">
        <div class="d-flex">
        <div class=" p-3">
 <p>
 New Season<br>
<h3>Gucci Eyewear</h3><br>
<p>square-frame sunglasses</p>
<br>
<p>
Classic rectangular easy to wear shape. Acetate front with rubber co-injected temple, characterized by the web gros grain insert that takes inspiration from Gucci man accessories. Low relief Gucci logo tone on tone.

                </p>
                <h3>Made in Italy</h3>
                </div>
                <br>
                <div class="p-2 " style="width:100%">
                    <br>
                     <h3>Composition</h3>
                     Acetate 100%<br><br><br>

<h3>Product IDs</h3>
FARFETCH ID: 17964448

<br>

Brand style ID: GG1084S001<br>
<br>
                </div>
                </div>
                            
<div class=" mt-3  col-lg-12 container">
                    <h3>Highlights</h3>
                    <ul>
                        <li>black</li>
<li>square frame</li>
<li>grey tinted lenses</li>
<li>gold-tone hardware</li>
<li>sculpted arms</li>
<li>These glasses come with a protective case</li>
                </ul>
                </div>
                </div>
                <div class="col-lg-6 ">
                <img src="GucciMenglasses/rectangular-frameblue-lightglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">

                </div>
   
                </div> 
                
                
                
</section>

<section>
<div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
<div class="container">
    <div class="row" style="column-gap:30px;">
    <div class="d-flex">
        <div class="col-lg-4 p-3 pt-3">

        <h4 class="mt-3">We've got your back</h4>
        <ul>
            <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
            <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
                </li>
                <li>All our deliveries are climate conscious</li>
                </ul>
                </div>


                <div class="col-lg-4 ">

        <h4>Estimated delivery</h4>
       <p>Standard: Feb 24 - Feb 28</p>
       <p>Express: Feb 23 - Mar 1</p>
       <p>Sending from our marketplace seller in Italy</p>
                </div>
                <div class="col-lg-4 p-3 ">

<h4>Need more information ?</h4>
<p>Please Visit for more details</P>
<ul>
<li><a href="FAQ.php">FAQ</a></li>
    <li><a href="PrivatePolicy.php">PrivatePolicy</a></li>
    <li><a href="Term&Condition.php">Terms & Condition</a></li>
                </ul>
        </div>
                </div>
                </div>
                <div class="col-lg-12">
                <h3>Import duties information</h3>
                <p>
                Let us handle the legwork.

Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
                </p>

                </div>
        </div>
</section>

          
<section>
           
           <?php
           $stocknumber="";
           $sql = "SELECT * From womenglasses LIMIT 0,4";
           $result=mysqli_query($connection,$sql);
           if(mysqli_num_rows($result)>0){ 
             ?>
             <div class="container-fluid">
            <div class="container">
             <div class="row">
                 <?php
      while($rows=mysqli_fetch_assoc($result)){
         ?>
 
    
     <form method="post" action=""class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     
 
           <div class="border discount"><p>50%<br>OFF</p></div>
 
               <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
               <input type="hidden" name="image" value="<?php echo $rows['img']?>">
               
               <h5 class="p-name"><?php echo $rows['Name']?></h5>           
               <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
               <br>
                  <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
                  <br>
 
               <select class="my-3" name="size">
             <option>Select Size</option>
             <option>52mm</option>
             <option>55mm</option>
               </select>
               <br>
               <h6>UPC :<?php echo $rows['UPC']?></h6>
               <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
               <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
               <input type="hidden" name="Count" value="
               <?php echo $rows['StockQuantity'];
               $stocknumber=$rows['StockQuantity'];
               ?>">
        <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
                 <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
                 <p>
                     <?php 
                     if($stocknumber>5){
                         echo "<h4 class='text-success'>Instock </h4>";
                        }else if($stocknumber<=5 && $stocknumber>1){
                         echo "<h4 class='text-warning'>Low In Stock </h4>";
                        }else {
                         echo "<h4 class='text-danger'>Out Of Stock</h4>";
                        }
                 ?>
                 </p>
                 <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
      <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?'':'disabled';?>" name="click">Add to cart</button>
      
     
                       </form>
 <?php
     }    
     ?>
     
     <?php
      
           }else{
             echo "No Result";
           }
           ?>
           </div>
           </div>
           </div>
      

  <script src="script.js"></script>
    
<script>
 let MainImg=document.getElementById("MainImg");
    let smallimg=document.getElementsByClassName("small-img");
    for(let i =0;i<smallimg.length;i++){
        smallimg[i].addEventListener("click",function(){
            MainImg.src=smallimg[i].src;
        })
        
    }
</script>
    <?php
    break;
    case "logosquaretintedsunglasses":
      ?>  
      <form method="post" action="">
      <section class="container sproduct my-5 pt-5">
      <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
          <div class="row mt-5">
              <div class="col-lg-5 col-md-12 col-12"> 
                  <img src="GucciMenglasses/logosquaretintedsunglasses.jpg"   class="img-fluid w-100 pb-1 " id="MainImg"  width="300px" height="auto" >
                  <input type="hidden" name="image" value='<?php echo "GucciMenglasses/logosquaretintedsunglasses.jpg"?>'/>

                  <div class="small-img-group">
                      <div class="small-img-col">
                          <img src="GucciMenglasses/logosquaretintedsunglasses.jpg"  width="100%" class="small-img ">
                       
  

                      </div>
   
                      <div class="small-img-col">
                      
                          <img src="GucciMenglasses/logosquaretintedsunglasses_1.jpg" width="100%" class="small-img ">
                          
   
 
                      </div>

                      <div class="small-img-col">
                         
                          <img src="GucciMenglasses/logosquaretintedsunglasses_2.jpg" width="100%" class="small-img ">

                          
  
                      </div> 
                      <div class="small-img-col">

                          <img src="GucciMenglasses/logosquaretintedsunglasses_3.jpg" width="100%" class="small-img">      

                        
 
    
                      </div>   
                    
                  </div>
              </div>
    
              <div class="col-lg-6 col-md-12 col-12">
            <h6>Home/MenGlasses/GucciMenglasses</h6>
            <h3>GucciEyewear</h3>
            <p>logosquaretintedsunglasses</p>
            <h6>UPC: GG0547SK001</h6>
            <p>Stock Count : <?php
             $select = "select StockQuantity from menglasses where Name='logosquaretintedsunglasses'";
             $result=mysqli_query($connection,$select);
               while($rows=mysqli_fetch_assoc($result)){
                  $stockCount= $rows['StockQuantity'];
                 echo $rows['StockQuantity'];
                 //$_SESSION["quantity"]=$rows['StockQuantity'];
               };
             ?></p>
              <input type="hidden" name="Count" value="<?php echo $stockCount?>">
            <input type="hidden" name="name" value="logosquaretintedsunglasses">
            <input type="hidden" name="id" value="GG0547SK001">
            <input type="hidden" name="brand" value="Gucci">
            <h3 style="display:inline-block">$150.45</h3> <span><del>$300.90</del></span><br>
           <p>
              <?php
              if($stockCount>5){
                  echo "<h4 class='text-success'>Instock </h4>";
                 }else if($stockCount<=5 && $stockCount>1){
                  echo "<h4 class='text-warning'>Low In Stock </h4>";
                 }else {
                  echo "<h4 class='text-danger'>Out Of Stock</h4>";
                 }
                 ?>
              </p>
            <input type="hidden" name="Price" value="150.45" />
            <select class="my-3" name="size">
          <option>Select Size</option>
          <option>52mm</option>
          <option>55mm</option>
            </select>
            <input type="number" name="number" value="1" min="1" max="255">

            <button class="buy-btn btn btn-dark  <?php echo ($stockCount > 1)?'':'disabled';?>" name="click">Add to Cart</button>
            <span><button class="buy-btn btn btn-dark <?php echo ($stockCount > 1)?'':'disabled';?>" style="width:200px" name="wishlist">Add to Cart &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
            <div class="container-fluid  mb-5 mt-5">
<div class="row">
  <div class=" col-lg-4">
  <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
  </div>
  <div class=" col-4">
  <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
 </div>
 <div class="col-4">
 <i class="bi bi-2-circle-fill" style="font-size:30px"></i> <strong>YEARS WARRANTY</strong>
</div>
</div>
</div>
<div class="container-fluid">
  For More Information Please Visit Our FAQ :   <br><br>
       <button class="btn btn-warning" style="width:200px"><a href="FAQ.html">FAQ</a></button>

  </div>
                </div>
            </div>
    
  
  
      </section>
  </form>
  <section>
   <div class="container   mb-5 mt-3" style="background-color: #f4f4f4;">
<div class= "d-flex" style="display:flex;justify-content:flex-start;align-self:flex-start">
  <div class="active-hover">
      The Details
  </div>
  <div class="active-hover">
      Delivery & Returns
 </div>
</div>
</div>
</div>
</section>

<section>
<div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
<div class="row ">
  <div class="col-lg-6  ">
      <div class="d-flex">
      <div class=" p-3">
<p>
New Season<br>
<h3>Gucci Eyewear</h3><br>
<p>logo square tinted sunglasses</p>
<br>
<p>
Classic rectangular easy to wear shape. Acetate front with rubber co-injected temple, characterized by the web gros grain insert that takes inspiration from Gucci man accessories. Low relief Gucci logo tone on tone.

              </p>
              <h3>Made in Italy</h3>
              </div>
              <br>
              <div class="p-2 " style="width:100%">
                  <br>
                   <h3>Composition</h3>
                   Acetate 100%<br><br><br>

<h3>Product IDs</h3>
FARFETCH ID: 17964448

<br>

Brand style ID: GG1084S001<br>
<br>
              </div>
              </div>
                          
<div class=" mt-3  col-lg-12 container">
                  <h3>Highlights</h3>
                  <ul>
                      <li>
                      black</li>
<li>logo plaque at the arm</li>
<li>square frame</li>
<li>tinted lenses</li>
<li>These glasses come with a protective case.</li>
              </ul>
              </div>
              </div>
              <div class="col-lg-6 ">
              <img src="GucciMenglasses/logosquaretintedsunglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">

              </div>
 
              </div> 
              
              
              
</section>

<section>
<div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
<div class="container">
  <div class="row" style="column-gap:30px;">
  <div class="d-flex">
      <div class="col-lg-4 p-3 pt-3">

      <h4 class="mt-3">We've got your back</h4>
      <ul>
          <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
          <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
              </li>
              <li>All our deliveries are climate conscious</li>
              </ul>
              </div>


              <div class="col-lg-4 ">

      <h4>Estimated delivery</h4>
     <p>Standard: Feb 24 - Feb 28</p>
     <p>Express: Feb 23 - Mar 1</p>
     <p>Sending from our marketplace seller in Italy</p>
              </div>
              <div class="col-lg-4 p-3 ">

<h4>Need more information ?</h4>
<p>Please Visit for more details</P>
<ul>
<li><a href="FAQ.php">FAQ</a></li>
  <li><a href="PrivatePolicy.php">PrivatePolicy</a></li>
  <li><a href="Term&Condition.php">Terms & Condition</a></li>
              </ul>
      </div>
              </div>
              </div>
              <div class="col-lg-12">
              <h3>Import duties information</h3>
              <p>
              Let us handle the legwork.

Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
              </p>

              </div>
      </div>
</section>
      
<section>
         
         <?php
         $stocknumber="";
         $sql = "SELECT * From menglasses LIMIT 8,4";
         $result=mysqli_query($connection,$sql);
         if(mysqli_num_rows($result)>0){ 
           ?>
           <div class="container-fluid">
          <div class="container">
           <div class="row">
               <?php
    while($rows=mysqli_fetch_assoc($result)){
       ?>

  
   <form method="post" action=""class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     

         <div class="border discount"><p>50%<br>OFF</p></div>

             <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
             <input type="hidden" name="image" value="<?php echo $rows['img']?>">
             
             <h5 class="p-name"><?php echo $rows['Name']?></h5>           
             <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
             <br>
                <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
                <br>

             <select class="my-3" name="size">
           <option>Select Size</option>
           <option>52mm</option>
           <option>55mm</option>
             </select>
             <br>
             <h6>UPC :<?php echo $rows['UPC']?></h6>
             <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
             <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
             <input type="hidden" name="Count" value="
             <?php echo $rows['StockQuantity'];
             $stocknumber=$rows['StockQuantity'];
             ?>">
      <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
               <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
               <p>
                   <?php 
                   if($stocknumber>5){
                       echo "<h4 class='text-success'>Instock </h4>";
                      }else if($stocknumber<=5 && $stocknumber>1){
                       echo "<h4 class='text-warning'>Low In Stock </h4>";
                      }else {
                       echo "<h4 class='text-danger'>Out Of Stock</h4>";
                      }
               ?>
               </p>
               <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
    <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?'':'disabled';?>" name="click">Add to cart</button>
    
   
                     </form>
<?php
   }    
   ?>
   
   <?php
    
         }else{
           echo "No Result";
         }
         ?>
         </div>
         </div>
         </div>
    


<script src="script.js"></script>
    <script>
    let MainImg=document.getElementById("MainImg");
    let smallimg=document.getElementsByClassName("small-img");
    for(let i =0;i<smallimg.length;i++){
        smallimg[i].addEventListener("click",function(){
          
            MainImg.src=smallimg[i].src;
        })
    }
</script>
    
     <?php
      break;
      case "square-frame-gradient-sunglasses":
        ?>  
        
        <form method="post" action="" >
          
        <section class="container sproduct my-5 pt-5"><div class="container-fluid">
        <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
      
            <div class="row mt-5">                     

                <div class="col-lg-5 col-md-12 col-12  "id="area" >                

                    <img src="GucciWomenGlasses/square-frame-gradient-sunglasses.jpg"   class="img-fluid w-100 pb-1 magnified" id="MainImg"  width="300px" height="auto" >
<input type="hidden" name="image" value="<?php echo "GucciWomenGlasses/square-frame-gradient-sunglasses.jpg"?>">
              <div class="magnifier" style="background-image:url('GucciWomenGlasses/square-frame-gradient-sunglasses.jpg')"></div>


                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="GucciWomenGlasses/square-frame-gradient-sunglasses.jpg"  width="100%" class="small-img " style="object-fit:contain">
                         
                        </div>
     
                        <div class="small-img-col">
                        
                            <img src="GucciWomenGlasses/square-frame-gradient-sunglasses_1.jpg" width="100%" class="small-img " style="object-fit:contain">
                            
     
   
                        </div>

                        <div class="small-img-col">
                           
                            <img src="GucciWomenGlasses/square-frame-gradient-sunglasses_2.jpg" width="100%" class="small-img " style="object-fit:contain">

                            
    
                        </div> 
                        <div class="small-img-col">

                            <img src="GucciWomenGlasses/square-frame-gradient-sunglasses_3.jpg" width="100%" class="small-img" style="object-fit:contain">      

                        </div>   
                    </div>
                </div>
      
                <div class="col-lg-6 col-md-12 col-12">
              <h6>Home/WomenGlasses/GucciWomenglasses</h6>
              <br>
              <h3>Gucci Eyewear</h3>
              <p>square-frame-gradient-sunglasses</p>
              <br>
              <h6>UPC : GG0034S</h6>
              <p>Stock Count : <?php
              $sql = "select StockQuantity from womenglasses where Name='square-frame-gradient-sunglasses'";
              $result=mysqli_query($connection,$sql);
                while($rows=mysqli_fetch_assoc($result)){
                  echo $rows['StockQuantity'];
                  $stockCount=$rows['StockQuantity'];

                  }

              ?></p>
              <input type="hidden" name="Count" value="<?php echo $stockCount?>">
              <input type="hidden" name="name" value="square-frame-gradient-sunglasses">
              <input type="hidden" name="id" value="GG0034S">
              <input type="hidden" name="brand" value="Gucci">

              <h3 style="display:inline-block">$200.25</h3> <span><del>$400.50</del></span><br>
             <p>
              <?php
              if($stockCount>5){
                  echo "<h4 class='text-success'>Instock </h4>";
                 }else if($stockCount<=5 && $stockCount>1){
                  echo "<h4 class='text-warning'>Low In Stock </h4>";
                 }else {
                  echo "<h4 class='text-danger'>Out Of Stock</h4>";
                 }
              ?>
              </p>
            
              <input type="hidden" name="Price" value="200.45" />
              <select class="my-3" name="size">
            <option>Select Size</option>
            <option>52mm</option>
            <option>55mm</option>
              </select>

              <input type="number" value="1" name="number" min="1" max="<?php echo $stockCount?>">
           
              <input  type="submit"  value="Add to Cart" class="btn btn-dark <?php echo ($stockCount > 1)?'':'disabled';?>" name="click" style="width:200px"/>
              <span><button class="buy-btn btn btn-dark" style="width:200px;">Add to Wishlist &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
              <div class="container-fluid  mb-5 mt-5">
<div class="row">
  <div class=" col-lg-4">
  <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
  </div>
  <div class=" col-4">
  <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
 </div>
 <div class="col-4">
 <i class="bi bi-2-circle-fill" style="font-size:30px"></i><strong>YEARS WARRANTY</strong>
</div>
</div>
</div>

<div class="container-fluid">
  For More Information Please Visit Our FAQ :   <br><br>
       <button class="btn btn-warning " style="width:200px"><a href="FAQ.html" class="text-danger">FAQ</a></button>

  </div>
                </div>
            </div>
    
        </section>
        
        
      </form>
      



<section>

<div class="container">
  <div class="row" style="background-color: #f4f4f4;">
  <div class="active-hover col-lg-3 p-3">
      The Details
  </div>
  <div class="active-hover col-lg-3 p-3">
                  Delivery & Return
</div>
</div>
</div>
             
 </section>
 
<section>
<div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
<div class="row ">
  <div class="col-lg-6  ">
      <div class="d-flex">
      <div class=" p-3">
<p>
New Season</p>
<br>
<h3>Gucci Eyewear</h3><br>
<p>square-frame gradient sunglasses</p>
<br>
<p>
Shield your eyes from the skies with these sunglasses from Gucci Eyewear. Because squinting isn't in. But gradient lenses are. Featuring square frames, gradient lenses, a brand logo on external arm and straight arms with curved tips. This item comes with 

              </p>
              </div>
              <br>
              <div  style="width:100%">
                  <br>
                   <h3>Composition</h3>
                   Acetate 100%, Acrylic 100%<br><br><br>

<h3>Product IDs</h3>
FARFETCH ID: 14922770<br>

Brand style ID: GG0034S<br>
<br>
              </div>
              
              </div>
<div class=" mt-3  col-lg-12 container">
  <strong>Made in Italy</strong> 

              </div>
              </div>
              <div class="col-lg-6 ">
              <img src="GucciWomenGlasses/square-frame-gradient-sunglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">

              </div>
 
              </div> 
              </div>

              
</section>

<section>
<div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
<div class="container">
  <div class="row" style="column-gap:30px;">
  <div class="d-flex">
      <div class="col-lg-4 p-3 pt-3">

      <h4 class="mt-3">We've got your back</h4>
      <ul>
          <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
          <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
              </li>
              <li>All our deliveries are climate conscious</li>
              </ul>
              </div>


              <div class="col-lg-4 ">

      <h4>Estimated delivery</h4>
     <p>Standard: Feb 24 - Feb 28</p>
     <p>Express: Feb 23 - Mar 1</p>
     <p>Sending from our marketplace seller in Italy</p>
              </div>
              <div class="col-lg-4 p-3 ">

<h4>Need more information ?</h4>
<p>Please Visit for more details</p>
<ul>
  <li><a href="FAQ.php">FAQ</a></li>
  <li><a href="PrivatePolicy.php">PrivatePolicy</a></li>
  <li><a href="Term&Condition.php">Terms & Condition</a></li>
              </ul>
      </div>
              </div>
              <div class="col-lg-12">
              <h3>Import duties information</h3>
              <p>
              Let us handle the legwork.

Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
              </p>

              </div>
  </div>
      </div>
      </div>
  
</section>
        <!--Prodcut Page Features-->
        <section id="featured" class="my-5  ">
    <div class="container text-center mt-1 py-5">
        <h3 class="mb-5">Related Product</h3>
        <hr class="mx-auto">
    </div>
        </section>  




        <section>
         
        <?php
        $stocknumber="";
        $sql = "SELECT * From menglasses LIMIT 4,4";
        $result=mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0){ 
          ?>
          <div class="container-fluid">
         <div class="container">
          <div class="row">
              <?php
   while($rows=mysqli_fetch_assoc($result)){
      ?>

 
  <form method="post" action=""class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     

        <div class="border discount"><p>50%<br>OFF</p></div>

            <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
            <input type="hidden" name="image" value="<?php echo $rows['img']?>">
            
            <h5 class="p-name"><?php echo $rows['Name']?></h5>           
            <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
            <br>
               <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
               <br>

            <select class="my-3" name="size">
          <option>Select Size</option>
          <option>52mm</option>
          <option>55mm</option>
            </select>
            <br>
            <h6>UPC :<?php echo $rows['UPC']?></h6>
            <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
            <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
            <input type="hidden" name="Count" value="
            <?php echo $rows['StockQuantity'];
            $stocknumber=$rows['StockQuantity'];
            ?>">
     <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
              <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
              <p>
                  <?php 
                  if($stocknumber>5){
                      echo "<h4 class='text-success'>Instock </h4>";
                     }else if($stocknumber<=5 && $stocknumber>1){
                      echo "<h4 class='text-warning'>Low In Stock </h4>";
                     }else {
                      echo "<h4 class='text-danger'>Out Of Stock</h4>";
                     }
              ?>
              </p>
              <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
   <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?'':'disabled';?>" name="click">Add to cart</button>
   
  
                    </form>
<?php
  }    
  ?>
  
  <?php
   
        }else{
          echo "No Result";
        }
        ?>
        </div>
        </div>
        </div>
   
      <script src="script.js"></script>

<script>
let MainImg=document.getElementById("MainImg");
let smallimg=document.getElementsByClassName("small-img");
for(let i =0;i<smallimg.length;i++){
  smallimg[i].addEventListener("click",function(){
    
      MainImg.src=smallimg[i].src;   
  })          

}  
</script>

<?php

        break;
        case "round-frame-gradient-sunglasses":
          ?>  
          <form method="post" action="">
  
          <section class="container sproduct my-5 pt-5">
          <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
              <div class="row mt-5">
                  <div class="col-lg-5 col-md-12 col-12" > 
                      <img src="GucciWomenGlasses/round-frame-gradient-sunglasses.jpg"   class="img-fluid w-100 pb-1  images " id="MainImg"  width="300px" height="auto" >
                      <input type="hidden" name="image" value='<?php echo "GucciWomenGlasses/round-frame-gradient-sunglasses.jpg"?>'/>
  
                      <div class="small-img-group">
                          <div class="small-img-col">
                              <img src="GucciWomenGlasses/round-frame-gradient-sunglasses.jpg"  width="100%" class="small-img ">
                           
                          </div>
       
                          <div class="small-img-col">
                          
                              <img src="GucciWomenGlasses/round-frame-gradient-sunglasses_1.jpg" width="100%" class="small-img ">
                              
       
     
                          </div>
  
                          <div class="small-img-col">
                             
                              <img src="GucciWomenGlasses/round-frame-gradient-sunglasses_2.jpg" width="100%" class="small-img ">
  
                              
      
                          </div> 
                          <div class="small-img-col">
  
                              <img src="GucciWomenGlasses/round-frame-gradient-sunglasses_3.jpg" width="100%" class="small-img">      
  
                            
     
        
                          </div>   
                        
                      </div>
                  </div>
        
                  <div class="col-lg-6 col-md-12 col-12">
                <h6>Home/WomenGlasses/GucciWomenglasses</h6>
                <h3>Gucci Eyewear</h3>
                <p>round-frame-gradient-sunglasses</p>
                <h6>UPC : GG1142SA00156</h6>
                <p>Stock Count : <?php
                 $select = "select StockQuantity from womenglasses where Name='round-frame-gradient-sunglasses'";
                 $result=mysqli_query($connection,$select);
                   while($rows=mysqli_fetch_assoc($result)){
                      $stockCount= $rows['StockQuantity'];
                     echo $rows['StockQuantity'];
                   };
                 ?></p>
                 
                 <input type="hidden" name="Count" value="<?php echo $stockCount?>">
                <input type="hidden" name="name" value="round-frame-gradient-sunglasses">
                <input type="hidden" name="id" value="GG1142SA00156">
                <input type="hidden" name="brand" value="Gucci">
                <h3 style="display:inline-block">$300.10</h3> <span><del>$600.20</del></span>
  
                <br>
                <p>
                 <?php
                 if($stockCount>5){
                  echo "<h4 class='text-success'>Instock </h4>";
                 }else if($stockCount<=5 && $stockCount>1){
                  echo "<h4 class='text-warning'>Low In Stock </h4>";
                 }else {
                  echo "<h4 class='text-danger'>Out Of Stock</h4>";
                 }
                 ?>
                 </p>
                <input type="hidden" name="Price" value=" 200.40" />
                <select class="my-3" name="size">
              <option>Select Size</option>
              <option>52mm</option>
              <option>55mm</option>
                </select>
                <input type="number" name="number" value="1" min="1" max="255">
                <button class="buy-btn btn btn-dark  <?php echo ($stockCount > 1)?'':'disabled';?>" name="click">Add to Cart</button>
                <span><button class="buy-btn btn btn-dark" style="width:200px">Add to Wishlist &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
                <div class="container-fluid  mb-5 mt-5">
    <div class="row">
      <div class=" col-lg-4">
      <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
      </div>
      <div class=" col-4">
      <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
     </div>
     <div class="col-4">
     <i class="bi bi-2-circle-fill" style="font-size:30px"></i> <strong>YEARS WARRANTY</strong>
   </div>
    </div>
  </div>
  <div class="container-fluid">
      For More Information Please Visit Our FAQ :   <br><br>
           <button class="btn btn-warning" style="width:200px"><a href="FAQ.html">FAQ</a></button>
  
      </div>
                    </div>
                </div>
        
      
          </section>
       <section>
       </form> 
       <div class="container   mb-5 mt-3" style="background-color: #f4f4f4;">
    <div class= "d-flex" style="display:flex;justify-content:flex-start;align-self:flex-start">
      <div class="active-hover">
        The details
      </div>
      <div class="active-hover">
        Delivery & Returns
     </div>
   </div>
    </div>
  </div>
   </section>
   
  <section>
  <div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
  <div class="row ">
      <div class="col-lg-6  ">
          <div class="d-flex">
          <div class=" p-3">
   <p>
   New Season<br>
  <h3>Gucci Eyewear</h3><br>
  <p>round-frame gradient sunglasses</p>
  <br>
  <p>
  Gucci Eyewear offers a timeless design with these sunglasses. Delicate gold-tone frames are accentuated by gradient lenses, creating an effortless and refined finish for the pair.
  
                  </p>
                  <h3>Made in Italy</h3>
                  </div>
                  <br>
                  <div class="p-2 " style="width:100%">
                      <br>
                       <h3>Composition</h3>
                       Acrylic 100%, Metal 100%
  
  <br><br><br>
  
  <h3>Product IDs</h3>
  FARFETCH ID: 18343607
  
  <br>
  
  Brand style ID:GG1142SA00156<br>
  <br>
                  </div>
                  </div>
                              
  <div class=" mt-3  col-lg-12 container">
                      <h3>Highlights
  </h3>
                      <ul>
                          <li>gold-tone/grey</li>
  <li>round frame</li>
  <li>gradient lenses</li>
  <li>UV-protective lenses</li>
  <li>nose pads</li>
  <li>straight arms</li>
  <li>curved tips</li>
  <li>These glasses come with a protective case</li>
                  </ul>
                  </div>
                  </div>
                  <div class="col-lg-6 ">
                  <img src="GucciWomenGlasses/round-frame-gradient-sunglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">
  
                  </div>
     
                  </div> 
                  
                  
                  
  </section>
  
  <section>
  <div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
  <div class="container">
      <div class="row" style="column-gap:30px;">
      <div class="d-flex">
          <div class="col-lg-4 p-3 pt-3">
  
          <h4 class="mt-3">We've got your back</h4>
          <ul>
              <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
              <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
                  </li>
                  <li>All our deliveries are climate conscious</li>
                  </ul>
                  </div>
  
  
                  <div class="col-lg-4 ">
  
          <h4>Estimated delivery</h4>
         <p>Standard: Feb 24 - Feb 28</p>
         <p>Express: Feb 23 - Mar 1</p>
         <p>Sending from our marketplace seller in Italy</p>
                  </div>
                  <div class="col-lg-4 p-3 ">
  
  <h4>Need more information ?</h4>
  <p>Please Visit for more details</P>
  <ul>
  <li><a href="FAQ.php">FAQ</a></li>
      <li><a href="PrivatePolicy.php">PrivatePolicy</a></li>
      <li><a href="Term&Condition.php">Terms & Condition</a></li>
                  </ul>
          </div>
                  </div>
                  </div>
                  <div class="col-lg-12">
                  <h3>Import duties information</h3>
                  <p>
                  Let us handle the legwork.
  
  Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
                  </p>
  
                  </div>
          </div>
  </section>
  
            
  <section>
             
             <?php
             $stocknumber="";
             $sql = "SELECT * From menglasses LIMIT 0,4";
             $result=mysqli_query($connection,$sql);
             if(mysqli_num_rows($result)>0){ 
               ?>
               <div class="container-fluid">
              <div class="container">
               <div class="row">
                   <?php
        while($rows=mysqli_fetch_assoc($result)){
           ?>
   
      
       <form method="post" action=""class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     
   
             <div class="border discount"><p>50%<br>OFF</p></div>
   
                 <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
                 <input type="hidden" name="image" value="<?php echo $rows['img']?>">
                 
                 <h5 class="p-name"><?php echo $rows['Name']?></h5>           
                 <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
                 <br>
                    <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
                    <br>
   
                 <select class="my-3" name="size">
               <option>Select Size</option>
               <option>52mm</option>
               <option>55mm</option>
                 </select>
                 <br>
                 <h6>UPC :<?php echo $rows['UPC']?></h6>
                 <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
                 <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
                 <input type="hidden" name="Count" value="
                 <?php echo $rows['StockQuantity'];
                 $stocknumber=$rows['StockQuantity'];
                 ?>">
          <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
                   <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
                   <p>
                       <?php 
                       if($stocknumber>5){
                           echo "<h4 class='text-success'>Instock </h4>";
                          }else if($stocknumber<=5 && $stocknumber>1){
                           echo "<h4 class='text-warning'>Low In Stock </h4>";
                          }else {
                           echo "<h4 class='text-danger'>Out Of Stock</h4>";
                          }
                   ?>
                   </p>
                   <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
        <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?'':'disabled';?>" name="click">Add to cart</button>
        
       
                         </form>
   <?php
       }    
       ?>
       
       <?php
        
             }else{
               echo "No Result";
             }
             ?>
             </div>
             </div>
             </div>
        
  
    <script src="script.js"></script>
  <script>
  
  let MainImg=document.getElementById("MainImg");
  let smallimg=document.getElementsByClassName("small-img");
  for(let i =0;i<smallimg.length;i++){
      smallimg[i].addEventListener("click",function(){
        
          MainImg.src=smallimg[i].src;
       
      })   
    
  }  
  </script>
<?php
          break;
          case "oversize-gradient-square-sunglasses":
            ?>  
            <form method="post" action="">
            <section class="container sproduct my-5 pt-5">
            <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-12 col-12"> 
                        <img src="GucciWomenGlasses/oversize-gradient-square-sunglasses.jpg"   class="img-fluid w-100 pb-1 " id="MainImg"  width="300px" height="auto" >
                        <input type="hidden" name="image" value='<?php echo "GucciWomenGlasses/oversize-gradient-square-sunglasses.jpg"?>'/>
    
                        <div class="small-img-group">
                            <div class="small-img-col">
                                <img src="GucciWomenGlasses/oversize-gradient-square-sunglasses.jpg"  width="100%" class="small-img ">
                             
        
    
                            </div>
         
                            <div class="small-img-col">
                            
                                <img src="GucciWomenGlasses/oversize-gradient-square-sunglasses_1.jpg" width="100%" class="small-img ">
                                
         
       
                            </div>
    
                            <div class="small-img-col">
                               
                                <img src="GucciWomenGlasses/oversize-gradient-square-sunglasses_2.jpg" width="100%" class="small-img ">
    
                                
        
                            </div> 
                            <div class="small-img-col">
    
                                <img src="GucciWomenGlasses/oversize-gradient-square-sunglasses_3.jpg" width="100%" class="small-img">      
    
                              
       
          
                            </div>   
                          
                        </div>
                    </div>
          
                    <div class="col-lg-6 col-md-12 col-12">
                  <h6>Home/WomenGlasses/GucciWomenglasses</h6>
                  <h3>GucciEyewear</h3>
                  <p>oversize-gradient-square-sunglasses</p>
                  <h6>UPC: GG0022S</h6>
                  <p>Stock Count : <?php
                   $select = "select StockQuantity from womenglasses where Name='oversize-gradient-square-sunglasses'";
                   $result=mysqli_query($connection,$select);
                     while($rows=mysqli_fetch_assoc($result)){
                        $stockCount= $rows['StockQuantity'];
                       echo $rows['StockQuantity'];
                       //$_SESSION["quantity"]=$rows['StockQuantity'];
                     };
                   ?></p>
                    <input type="hidden" name="Count" value="<?php echo $stockCount?>">
                  <input type="hidden" name="name" value="oversize-gradient-square-sunglasses">
                  <input type="hidden" name="id" value="GG0022S">
                  <input type="hidden" name="brand" value="Gucci">
                  <h3 style="display:inline-block">$143.22</h3> <span><del>$286.45</del></span><br>
                 <p>
                    <?php
                    if($stockCount>5){
                        echo "<h4 class='text-success'>Instock </h4>";
                       }else if($stockCount<=5 && $stockCount>1){
                        echo "<h4 class='text-warning'>Low In Stock </h4>";
                       }else {
                        echo "<h4 class='text-danger'>Out Of Stock</h4>";
                       }
                       ?>
                    </p>
                  <input type="hidden" name="Price" value="143.22" />
                  <select class="my-3" name="size">
                <option>Select Size</option>
                <option>52mm</option>
                <option>55mm</option>
                  </select>
                  <input type="number" name="number" value="1" min="1" max="255">
    
                  <button class="buy-btn btn btn-dark  <?php echo ($stockCount > 1)?'':'disabled';?>" name="click">Add to Cart</button>
                  <span><button class="buy-btn btn btn-dark" style="width:200px">Add to Cart &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
                  <div class="container-fluid  mb-5 mt-5">
      <div class="row">
        <div class=" col-lg-4">
        <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
        </div>
        <div class=" col-4">
        <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
       </div>
       <div class="col-4">
       <i class="bi bi-2-circle-fill" style="font-size:30px"></i> <strong>YEARS WARRANTY</strong>
     </div>
      </div>
    </div>
    <div class="container-fluid">
        For More Information Please Visit Our FAQ :   <br><br>
             <button class="btn btn-warning" style="width:200px"><a href="FAQ.html">FAQ</a></button>
    
        </div>
                      </div>
                  </div>
          
        
        
            </section>
        </form>
        <section>
         <div class="container   mb-5 mt-3" style="background-color: #f4f4f4;">
      <div class= "d-flex" style="display:flex;justify-content:flex-start;align-self:flex-start">
        <div class="active-hover">
            The Details
        </div>
        <div class="active-hover">
            Delivery & Returns
       </div>
     </div>
      </div>
    </div>
     </section>
     
    <section>
    <div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
    <div class="row ">
        <div class="col-lg-6  ">
            <div class="d-flex">
            <div class=" p-3">
     <p>
     New Season<br>
    <h3>Gucci Eyewear</h3><br>
    <p>oversize gradient square sunglasses</p>
    <br>
    <p>
    Offering quintessential Italian refinement, these Gucci glasses are instantly recognisable and expertly crafted with immaculate attention to detail. These black acetate oversize gradient square sunglasses feature square frames, gradient lenses, a logo decal on the lens and straight arms with angled tips. This item comes with a protective case.
    
    
                    </p>
                    </div>
                    <br>
                    <div class="p-2 " style="width:100%">
                        <br>
                         <h3>Composition</h3>
                         Acetate 100%<br><br><br>
    
    <h3>Product IDs</h3>
    FARFETCH ID:11963833
    
    <br>
    
    Brand style ID:  GG0022S<br>
    <br>
                    </div>
                    </div>
                                
    <div class=" mt-3  col-lg-12 container">
                        
                        <h3>Made in Italy</h3>
    
                    </div>
                    </div>
                    <div class="col-lg-6 ">
                    <img src="GucciWomenGlasses/oversize-gradient-square-sunglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">
    
                    </div>
       
                    </div> 
                    
                    
                    
    </section>
    
    <section>
    <div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
    <div class="container">
        <div class="row" style="column-gap:30px;">
        <div class="d-flex">
            <div class="col-lg-4 p-3 pt-3">
    
            <h4 class="mt-3">We've got your back</h4>
            <ul>
                <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
                <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
                    </li>
                    <li>All our deliveries are climate conscious</li>
                    </ul>
                    </div>
    
    
                    <div class="col-lg-4 ">
    
            <h4>Estimated delivery</h4>
           <p>Standard: Feb 24 - Feb 28</p>
           <p>Express: Feb 23 - Mar 1</p>
           <p>Sending from our marketplace seller in Italy</p>
                    </div>
                    <div class="col-lg-4 p-3 ">
    
    <h4>Need more information ?</h4>
    <p>Please Visit for more details</P>
    <ul>
        <li>FAQ</li>
        <li>Delivery</li>
        <li>Terms & Condition</li>
                    </ul>
            </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <h3>Import duties information</h3>
                    <p>
                    Let us handle the legwork.
    
    Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
                    </p>
    
                    </div>
            </div>
    </section>
            
    <section>
               
               <?php
               $stocknumber="";
               $sql = "SELECT * From menglasses LIMIT 8,4";
               $result=mysqli_query($connection,$sql);
               if(mysqli_num_rows($result)>0){ 
                 ?>
                 <div class="container-fluid">
                <div class="container">
                 <div class="row">
                     <?php
          while($rows=mysqli_fetch_assoc($result)){
             ?>
     
        
         <form method="post" action=""class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     
     
               <div class="border discount"><p>50%<br>OFF</p></div>
     
                   <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
                   <input type="hidden" name="image" value="<?php echo $rows['img']?>">
                   
                   <h5 class="p-name"><?php echo $rows['Name']?></h5>           
                   <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
                   <br>
                      <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
                      <br>
     
                   <select class="my-3" name="size">
                 <option>Select Size</option>
                 <option>52mm</option>
                 <option>55mm</option>
                   </select>
                   <br>
                   <h6>UPC :<?php echo $rows['UPC']?></h6>
                   <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
                   <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
                   <input type="hidden" name="Count" value="
                   <?php echo $rows['StockQuantity'];
                   $stocknumber=$rows['StockQuantity'];
                   ?>">
            <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
                     <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
                     <p>
                         <?php 
                         if($stocknumber>5){
                             echo "<h4 class='text-success'>Instock </h4>";
                            }else if($stocknumber<=5 && $stocknumber>1){
                             echo "<h4 class='text-warning'>Low In Stock </h4>";
                            }else {
                             echo "<h4 class='text-danger'>Out Of Stock</h4>";
                            }
                     ?>
                     </p>
                     <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
          <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?'':'disabled';?>" name="click">Add to cart</button>
          
         
                           </form>
     <?php
         }    
         ?>
         
         <?php
          
               }else{
                 echo "No Result";
               }
               ?>
               </div>
               </div>
               </div>
          
    
    
    <script src="script.js"></script>
    <script>
            let MainImg=document.getElementById("MainImg");
            let smallimg=document.getElementsByClassName("small-img");
            for(let i =0;i<smallimg.length;i++){
                smallimg[i].addEventListener("click",function(){
                  
                    MainImg.src=smallimg[i].src;
                    
                })   
              
            }  
           
        </script>
      </form> 
    
    <?php
            break;
            case "oversized-square-sunglasses":
              ?>  <form method="post" action="">
              <section class="container sproduct my-5 pt-5">
              <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
                  <div class="row mt-5">
                      <div class="col-lg-5 col-md-12 col-12"> 
                          <img src="GucciWomenGlasses/oversized-square-sunglasses.jpg"   class="img-fluid w-100 pb-1 " id="MainImg"  width="300px" height="auto" >
                          <input type="hidden" name="image" value='<?php echo "GucciWomenGlasses/oversized-square-sunglasses.jpg"?>'/>
      
                          <div class="small-img-group">
                              <div class="small-img-col">
                                  <img src="GucciWomenGlasses/oversized-square-sunglasses.jpg"  width="100%" class="small-img ">
                               
          
      
                              </div>
           
                              <div class="small-img-col">
                              
                                  <img src="GucciWomenGlasses/oversized-square-sunglasses_1.jpg" width="100%" class="small-img ">
                                  
           
         
                              </div>
      
                              <div class="small-img-col">
                                 
                                  <img src="GucciWomenGlasses/oversized-square-sunglasses_2.jpg" width="100%" class="small-img ">
      
                                  
          
                              </div> 
                              <div class="small-img-col">
      
                                  <img src="GucciWomenGlasses/oversized-square-sunglasses_3.jpg" width="100%" class="small-img">      
      
                                
         
            
                              </div>   
                            
                          </div>
                      </div>
            
                      <div class="col-lg-6 col-md-12 col-12">
                    <h6>Home/WomenGlasses/GucciWomenglasses</h6>
      <h3>GucciEyewear</h6>
                    
                    <p>oversized-square-sunglasses</p>
                   
                    <br>
                    <h6>UPC: GG0443S</h6>
                    <p>Stock Count : <?php
                     $select = "select StockQuantity from womenglasses where Name='oversized-square-sunglasses'";
                     $result=mysqli_query($connection,$select);
                       while($rows=mysqli_fetch_assoc($result)){
                          $stockCount= $rows['StockQuantity'];
                         echo $rows['StockQuantity'];
                       };
                     ?></p>
                      <input type="hidden" name="Count" value="<?php echo $stockCount?>">
                    <input type="hidden" name="name" value="oversized-square-sunglasses">
                    <input type="hidden" name="id" value=" GG0443S">
                    <input type="hidden" name="brand" value="Gucci">
                    <br>
                    <h3 style="display:inline-block">$205.16</h3> <span><del>$410.34</del></span><br>
                    <input type="hidden" name="Price" value="205.16" />
      
                    <p>
                      <?php
                      if($stockCount>5){
                          echo "<h4 class='text-success'>Instock </h4>";
                         }else if($stockCount<=5 && $stockCount>1){
                          echo "<h4 class='text-warning'>Low In Stock </h4>";
                         }else {
                          echo "<h4 class='text-danger'>Out Of Stock</h4>";
                         }
                         ?>
                      </p>
                    <select class="my-3" name="size">
                  <option>Select Size</option>
                  <option>52mm</option>
                  <option>55mm</option>
                    </select>
                    <input type="number"name="number" value="1" min="1" max="255">
                    <button class="buy-btn btn btn-dark <?php echo ($stockCount > 1)?'':'disabled';?>" name="click">Add to Cart</button>
                    <span><button class="buy-btn btn btn-dark" style="width:200px">Add to Wishlist &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
                    <div class="container-fluid  mb-5 mt-5">
        <div class="row">
          <div class=" col-lg-4">
          <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
          </div>
          <div class=" col-4">
          <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
         </div>
         <div class="col-4">
         <i class="bi bi-2-circle-fill" style="font-size:30px"></i> <strong>YEARS WARRANTY</strong>
       </div>
        </div>
      </div>
      <div class="container-fluid">
          For More Information Please Visit Our FAQ :   <br><br>
               <button class="btn btn-warning" style="width:200px"><a href="FAQ.html">FAQ</a></button>
      
          </div>
                        </div>
                    </div>
            
            
          
          
              </section>
          </form>
          <section>
           <div class="container   mb-5 mt-3" style="background-color: #f4f4f4;">
        <div class= "d-flex" style="display:flex;justify-content:flex-start;align-self:flex-start">
          <div class="active-hover">
              The Details
          </div>
          <div class="active-hover">
              Delivery & Return
         </div>
       </div>
        </div>
      </div>
       </section>
       
      <section>
      <div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
      <div class="row ">
          <div class="col-lg-6  ">
              <div class="d-flex">
              <div class=" p-3">
       <p>
       New Season<br>
      <h3>Gucci Eyewear</h3><br>
      <p>oversized square sunglasses</p>
      <br>
      <p>
      Gucci pays homage to their rich Italian heritage through iconic elements from the brand’s archives. The creative director explores new, modern paths to achieve this goal. Crafted in Italy, these gold-tone titanium oversized square sunglasses from Gucci Eyewear feature square frames, gradient lenses, an interlocking GG logo, 100% UVA and UVB protection and straight arms with angled tips. This item comes with a protective case.
      
                      </p>
                    
                      </div>
                      <br>
                      <div class="p-2 " style="width:100%">
                          <br>
                           <h3>Composition</h3>
                           Titanium 100%<br><br><br>
                       
      
      <h3>Product IDs</h3>
      FARFETCH ID:  13705955
      
      <br>
      
      Brand style ID: GG0443S<br>
      <br>
                      </div>
                      </div>
                                  
      <div class=" mt-3  col-lg-12 container">  
          <h3>Made in Italy</h3>
                          
                      </div>
                      </div>
                      <div class="col-lg-6 ">
                      <img src="GucciWomenGlasses/oversized-square-sunglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">
      
                      </div>
         
                      </div> 
                      
                      
                      
      </section>
      
      <section>
      <div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
      <div class="container">
          <div class="row" style="column-gap:30px;">
          <div class="d-flex">
              <div class="col-lg-4 p-3 pt-3">
      
              <h4 class="mt-3">We've got your back</h4>
              <ul>
                  <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
                  <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
                      </li>
                      <li>All our deliveries are climate conscious</li>
                      </ul>
                      </div>
      
      
                      <div class="col-lg-4 ">
      
              <h4>Estimated delivery</h4>
             <p>Standard: Feb 24 - Feb 28</p>
             <p>Express: Feb 23 - Mar 1</p>
             <p>Sending from our marketplace seller in Italy</p>
                      </div>
                      <div class="col-lg-4 p-3 ">
      
      <h4>Need more information ?</h4>
      <p>Please Visit for more details</P>
      <ul>
          <li>FAQ</li>
          <li>Delivery</li>
          <li>Terms & Condition</li>
                      </ul>
              </div>
                      </div>
                      </div>
                      <div class="col-lg-12">
                      <h3>Import duties information</h3>
                      <p>
                      Let us handle the legwork.
      
      Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
                      </p>
      
                      </div>
              </div>
      </section>
              
      <section>
                 
                 <?php
                 $stocknumber="";
                 $sql = "SELECT * From menglasses LIMIT 0,4";
                 $result=mysqli_query($connection,$sql);
                 if(mysqli_num_rows($result)>0){ 
                   ?>
                   <div class="container-fluid">
                  <div class="container">
                   <div class="row">
                       <?php
            while($rows=mysqli_fetch_assoc($result)){
               ?>
       
          
           <form method="post" action=""class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     
       
                 <div class="border discount"><p>50%<br>OFF</p></div>
       
                     <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
                     <input type="hidden" name="image" value="<?php echo $rows['img']?>">
                     
                     <h5 class="p-name"><?php echo $rows['Name']?></h5>           
                     <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
                     <br>
                        <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
                        <br>
       
                     <select class="my-3" name="size">
                   <option>Select Size</option>
                   <option>52mm</option>
                   <option>55mm</option>
                     </select>
                     <br>
                     <h6>UPC :<?php echo $rows['UPC']?></h6>
                     <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
                     <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
                     <input type="hidden" name="Count" value="
                     <?php echo $rows['StockQuantity'];
                     $stocknumber=$rows['StockQuantity'];
                     ?>">
              <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
                       <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
                       <p>
                           <?php 
                           if($stocknumber>5){
                               echo "<h4 class='text-success'>Instock </h4>";
                              }else if($stocknumber<=5 && $stocknumber>1){
                               echo "<h4 class='text-warning'>Low In Stock </h4>";
                              }else {
                               echo "<h4 class='text-danger'>Out Of Stock</h4>";
                              }
                       ?>
                       </p>
                       <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
            <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?'':'disabled';?>" name="click">Add to cart</button>
            
           
                             </form>
       <?php
           }    
           ?>
           
           <?php
            
                 }else{
                   echo "No Result";
                 }
                 ?>
                 </div>
                 </div>
                 </div>
            
      
      
        
            <script src="script.js"></script>
      
      <script>
              let MainImg=document.getElementById("MainImg");
              let smallimg=document.getElementsByClassName("small-img");
              for(let i =0;i<smallimg.length;i++){
                  smallimg[i].addEventListener("click",function(){
                    
                      MainImg.src=smallimg[i].src;
                     
                      
                  })   
                
              }  
             
          </script>
        </form> 
      <?php
              break;
              case "pilot-frame-sunglasses":
                ?> 
                 <form method="post" action="">
                <section class="container sproduct my-5 pt-5">
                <div class="container">
                  <a href="Index.php"><i class="bi bi-backspace-fill"></i></a>
          </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-12 col-12"> 
                            <img src="GucciWomenGlasses/pilot-frame-sunglasses.jpg"   class="img-fluid w-100 pb-1 " id="MainImg"  width="300px" height="auto" >
                            <input type="hidden" name="image" value='<?php echo "GucciWomenGlasses/pilot-frame-sunglasses.jpg"?>'/>
        
                            <div class="small-img-group">
                                <div class="small-img-col">
                                    <img src="GucciWomenGlasses/pilot-frame-sunglasses.jpg"  width="100%" class="small-img ">
                                 
            
        
                                </div>
             
                                <div class="small-img-col">
                                
                                    <img src="GucciWomenGlasses/pilot-frame-sunglasses_1.jpg" width="100%" class="small-img ">
                                    
             
           
                                </div>
        
                                <div class="small-img-col">
                                   
                                    <img src="GucciWomenGlasses/pilot-frame-sunglasses_2.jpg" width="100%" class="small-img ">
        
                                    
            
                                </div> 
                                <div class="small-img-col">
        
                                    <img src="GucciWomenGlasses/pilot-frame-sunglasses_3.jpg" width="100%" class="small-img">      
        
                                  
           
              
                                </div>   
                              
                            </div>
                        </div>
              
                        <div class="col-lg-6 col-md-12 col-12">
                      <h6>Home/WomenGlasses/GucciWomenglasses</h6>
                      <br>
                      <h3>Gucci EyeWear</h6>
                      <p>pilot-frame-sunglasses</p>
                      <h6>UPC :GG0062S</h6>
                      <p>Stock Count : <?php
                       $select = "select StockQuantity from womenglasses where Name='pilot-frame-sunglasses'";
                       $result=mysqli_query($connection,$select);
                         while($rows=mysqli_fetch_assoc($result)){
                            $stockCount= $rows['StockQuantity'];
                           echo $rows['StockQuantity'];
                         };
                       ?></p>
                                       <input type="hidden" name="Count" value="<?php echo $stockCount?>">
                      <input type="hidden" name="name" value="pilot-frame-sunglasses">
                      <input type="hidden" name="id" value="GG0062S">
                      <input type="hidden" name="brand" value="Gucci">
                      <h3 style="display:inline-block">$140.22 </h3> <span><del>$288.40</del></span><br>
                      <input type="hidden" name="Price" value="140.22"/>
        
                      <p>
                        <?php
                        if($stockCount>5){
                            echo "<h4 class='text-success'>Instock </h4>";
                           }else if($stockCount<=5 && $stockCount>1){
                            echo "<h4 class='text-warning'>Low In Stock </h4>";
                           }else {
                            echo "<h4 class='text-danger'>Out Of Stock</h4>";
                           }
                           ?>
                        </p>
                      <select class="my-3" name="size">
                    <option>Select Size</option>
                    <option>52mm</option>
                    <option>55mm</option>
                      </select>
                      <input type="number" value="1" name="number" min="1" max="255">
                      <button class="buy-btn btn btn-dark <?php echo ($stockCount > 1)?'':'disabled';?>" name="click">Add to Cart</button>
                      <span><button class="buy-btn btn btn-dark" style="width:200px">Add to Wishlist &nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill"></i></button></span>
                      <div class="container-fluid  mb-5 mt-5">
          <div class="row">
            <div class=" col-lg-4">
            <i class="bi bi-airplane-fill" style="font-size:30px"></i> <strong>Ship Today </strong>
            </div>
            <div class=" col-4">
            <i class="bi bi-info-circle-fill " style="font-size:30px"></i> <strong>24-Hour Support</strong>
           </div>
           <div class="col-4">
           <i class="bi bi-2-circle-fill" style="font-size:30px"></i> <strong>YEARS WARRANTY</strong>
         </div>
          </div>
        </div>
        <div class="container-fluid">
            For More Information Please Visit Our FAQ :   <br><br>
                 <button class="btn btn-warning" style="width:200px"><a href="FAQ.html">FAQ</a></button>
        
            </div>
                          </div>
                      </div>
                </section>
                 </form>
        
                      
                      <section>
             <div class="container   mb-5 mt-3" style="background-color: #f4f4f4;">
          <div class= "d-flex" style="display:flex;justify-content:flex-start;align-self:flex-start">
            <div class="active-hover">
                The Details
            </div>
            <div class="active-hover">
            Delivery & Returns
           </div>
         </div>
          </div>
        </div>
         </section>
         
        <section>
        <div class="container bg-white  mb-5 mt-3 text-left" style="display: block;" id="Div1">
        <div class="row ">
            <div class="col-lg-6  ">
                <div class="d-flex">
                <div class=" p-3">
         <p>
         New Season<br>
        <h3>Gucci Eyewear</h3><br>
        <p>pilot-frame sunglasses</p>
        <br>
        <p>Aviator sunglasses in gold metal are defined by the Web, a historical House code inspired by the equestrian world and repurposed in new ways every season. The bumble bee, a symbol of the House, finishes the tips for a subtle brand detail.
                        </p>
                        </div>
                        <br>
                        <div class="p-2 " style="width:100%">
                            <br>
                             <h3>Composition</h3>
                             Metal (Other) 90%, Acetate 10%<br><br>
                             <h3>Manufacturer</h3>
                             KERING EYEWEAR<br><br>
        <h3>Product IDs</h3>
        FARFETCH ID: 11941186
        
        <br>
        
        Brand style ID: GG0062S<br>
        <br>
                        </div>
                        </div>
                                    
        <div class=" mt-3  col-lg-12 container">
                            <h3>Highlights</h3>
                            <ul>
                                <li>green/red/gold-tone</li>
        <li>metal</li>
        <li>pilot frame</li>
        <li>gradient lenses</li>
        <li>double bridge</li>
        <li>nose pads</li>
        <li>straight arms</li>
        <li>curved tips</li>
        <li>These glasses come with a protective case.</li>
                        </ul>
                        </div>
                        </div>
                        <div class="col-lg-6 ">
                        <img src="GucciWomenGlasses/pilot-frame-sunglasses_2.jpg" width="100%" height="600px" style="object-fit:contain">
        
                        </div>
           
                        </div> 
                        
                        
                        
        </section>
        
        <section>
        <div class="container-fluid bg-white  mb-5 mt-3 " style="display: none;" id="Div2">
        <div class="container">
            <div class="row" style="column-gap:30px;">
            <div class="d-flex">
                <div class="col-lg-4 p-3 pt-3">
        
                <h4 class="mt-3">We've got your back</h4>
                <ul>
                    <li>One delivery fee to most locations (check our Orders & Delivery page)</li>
                    <li>Free returns within 14 days (excludes final sale and made-to-order items, face masks and certain beauty products containing hazardous or flammable materials, such as fragrances and aerosols)
                        </li>
                        <li>All our deliveries are climate conscious</li>
                        </ul>
                        </div>
        
        
                        <div class="col-lg-4 ">
        
                <h4>Estimated delivery</h4>
               <p>Standard: Feb 24 - Feb 28</p>
               <p>Express: Feb 23 - Mar 1</p>
               <p>Sending from our marketplace seller in Italy</p>
                        </div>
                        <div class="col-lg-4 p-3 ">
        
        <h4>Need more information ?</h4>
        <p>Please Visit for more details</P>
        <ul>
            <li>FAQ</li>
            <li>Delivery</li>
            <li>Terms & Condition</li>
                        </ul>
                </div>
                        </div>
                        </div>
                        <div class="col-lg-12">
                        <h3>Import duties information</h3>
                        <p>
                        Let us handle the legwork.
        
        Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR and Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.
                        </p>
        
                        </div>
                </div>
                
        </section>
        
        <section>
                   
                   <?php
                   $stocknumber="";
                   $sql = "SELECT * From menglasses LIMIT 4,4";
                   $result=mysqli_query($connection,$sql);
                   if(mysqli_num_rows($result)>0){ 
                     ?>
                     <div class="container-fluid">
                    <div class="container">
                     <div class="row">
                         <?php
              while($rows=mysqli_fetch_assoc($result)){
                 ?>
         
            
             <form method="post" action=""class=" col-lg-3  col-md-4 col-12 mx-auto hover text-center mb-3">     
         
                   <div class="border discount"><p>50%<br>OFF</p></div>
         
                       <img class=" img-responsive mb-3 " value="<?php echo $rows['img']?>"  src="<?php echo $rows['img']?>" width="300px" height="300px" style="object-fit:contain" >
                       <input type="hidden" name="image" value="<?php echo $rows['img']?>">
                       
                       <h5 class="p-name"><?php echo $rows['Name']?></h5>           
                       <input type="hidden" name="name" value="<?php echo $rows['Name']?>">
                       <br>
                          <input type="number" name="number" min="1" max=<?php echo $rows['StockQuantity']?> value="1">
                          <br>
         
                       <select class="my-3" name="size">
                     <option>Select Size</option>
                     <option>52mm</option>
                     <option>55mm</option>
                       </select>
                       <br>
                       <h6>UPC :<?php echo $rows['UPC']?></h6>
                       <input type="hidden" name="id" value="<?php echo $rows['UPC']?>">
                       <p>Stock count :<?php echo $rows['StockQuantity'];$stockCount=$rows['StockQuantity'];?></p>
                       <input type="hidden" name="Count" value="
                       <?php echo $rows['StockQuantity'];
                       $stocknumber=$rows['StockQuantity'];
                       ?>">
                <input type="hidden" name="brand" value="<?php echo $rows['Brand']?>">
                         <h3 class="d-inline">$<?php echo $rows['DiscountedPrice']?></h3><span><del><?php echo $rows['OrginalPrice']?></del></span>
                         <p>
                             <?php 
                             if($stocknumber>5){
                                 echo "<h4 class='text-success'>Instock </h4>";
                                }else if($stocknumber<=5 && $stocknumber>1){
                                 echo "<h4 class='text-warning'>Low In Stock </h4>";
                                }else {
                                 echo "<h4 class='text-danger'>Out Of Stock</h4>";
                                }
                         ?>
                         </p>
                         <input type="hidden" name="Price" value="<?php echo $rows['DiscountedPrice']?>">
              <button class="buy-btn btn btn-dark <?php echo ($rows['StockQuantity'] > 1)?'':'disabled';?>" name="click">Add to cart</button>
              
             
                               </form>
         <?php
             }    
             ?>
             
             <?php
              
                   }else{
                     echo "No Result";
                   }
                   ?>
                   </div>
                   </div>
                   </div>
              
        
        
          <script src="script.js"></script>
              <script>
                let MainImg=document.getElementById("MainImg");
                let smallimg=document.getElementsByClassName("small-img");
                for(let i =0;i<smallimg.length;i++){
                    smallimg[i].addEventListener("click",function(){
                      
                        MainImg.src=smallimg[i].src;
                      
                        
                    })   
                  
                }  
               
            </script>
          </form> 
        
              <?php
              break;
              }
            }
             ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home </title>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body{
    overflow-X: hidden;
  }
.bi-2-circle-fill{
  color:green;
}
    img{
        padding:10px 10px;
    }
    h2{
        text-align:center;
    }
  .discount{
    width:100px;
    height:100px;
    background-color:rgba(255,255,0,0.5);
    color:white;
    border:2px solid red;
    border-radius: 100%;
    padding-top:19px;
    font-size:23px;
    overflow: hidden;
    text-align:center;
    display:block;
    float:right;
  
  }
  .discount p{
    display:flex;
    justify-content:center;
    align-items:center;
  }
  .hover{
    transition:all 0.4s;
  }
  .hover:hover{
    transform:scale(1.1);
  
  }
    img{
    box-sizing:contain-box;
    width:100%;
    }
    .fa-star{
        color:gold;
    }
    .bi-airplane-fill{
        color:orange;
    }
    .bi-heart-fill:hover{
        color:red;
    }
    .fa-cart{
 position:relative;
    }
    .fa-star:nth-child(odd){
        color:black!important;

    }
    .filter_data{
display:grid;
grid-template-rows:auto auto auto;

grid-template-columns:auto auto auto;
    }
    .bi-backspace-fill{
        color:red;
        font-size:30px;
    }
    input:focus{
        outline:none;
    }
    

  img{
    object-fit:contain;
  }
  
.background{
  width:100%;
  height:500px;
  display:flex;
  justify-content:center;align-items:center;
  text-align:center;
  object-fit:cover;
}
video{
  width:100%;
  object-fit:cotain;

}
.content{
position:absolute;
}

div.playlist{
  width:100px;
  height:0px;
  display:inline-block;
  display:flex;
  justify-content:center;align-items:center;
  background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.3),rgba(0,0,0,0.3));
  object-fit:cover;
  margin :0 auto;
  margin-top:10%;
  padding:20px;
  border-radius:50px;
}

div.playlist div.playlist-child{
  display:flex;
  justify-content:center;
  align-items:center;
}

.percent{
width:100px;
height:auto;
overflow: hidden;
border-radius:50%;
background:#CCFFCC;
display:inline-block;
color: #000;
margin:0;
padding:0;
box-sizing:border-box;
position:absolute;
}
.hide{
  display:block;
}
.loader_bg{
  position:fixed;
  z-index:999999;
  background #fff;
  width:100%;
  height:100%;
  background:white;
}
.loader{
  border:0 solid transparent;
  border-radius:50%;
  width:150px;
  height:150px;
  position:absolute;
  top:calc(50vh - 75px);
  left:calc(50vw - 75px);
}
.loader:before,.loader:after{
  content:'';
  border:1em solid #ff5733;
  border-radius:50%;
  width:inherit;
  height:inherit;
  position:absolute;
  top:0;
  left:0;
  animation:loader 2s linear infinite;
  opacity:0;
}
.loader:before{
  animation-delay:.5s;
}
@keyframes loader{
  0%{
    transform:scale(0);
    opacity:0;
  }
  50%{
    opacity:1;
  }
  100%{
    transform:scale(1);
    opacity:0
  }
}
.container1{
  width:60px;
  height:60px;
  border-radius:50px;
  background:white;
  border:2px solid black;
  position:relative;

transition:0.5s;
}
.container1 .icon{
  position:absolute;
  left:30px;
  top:50%;
  transform:translate(-50%,-50%);
}
.container1 .icon .search{
  font-size:15px;
  cursor:pointer;
  color:#444;


}
.container1.active{
  width:400px;
overflow: hidden;
}
.container1 .input{
  position:relative;
  width:300px;
  height:60px;
  left:60px;
  display:flex;
  align-items:center;
  justify-content:center;
}
.container1 .input input{
  top:0;
  width:100%;
  height:100%;
  border:none;
  font-size:18px;
  outline:none;

}
.container1.input.clear{
  position:absolute;
  right:-25px;
  top:50%;
  transform:translate(-50%,-50%);
  border:2px solid red;

}
  </style>

  </head>
  <body> <div class="loader_bg">
      <div class="loader"></div>
</div>
<?php


if(isset($_GET['logout'])){
  unset($_SESSION['user_id']);
  session_destroy();
}

?>
   
    <?php

    
    switch($mode){
      case "Index.php":
        
    ?>
    
    
    
    <header style="position:sticky;top:0;left:0;right:0;z-index:1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light h-20">
        <div class="container-fluid">
          <a class="navbar-brand" href="Index.php">
            <img src="image/logo.png" width="130px" height="130px"/>
          </a>
          
        
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main_nav">
  <ul class="navbar-nav">
    <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Product </a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="MenGlasses.php?page_no=1"> MenGlasses </a>
       
      </li>
        <li> <a class="dropdown-item" href="WomenGlasses.php?page_no=1"> WomenGlasses </a>
        
        </li>
      
      </ul>
    </li>
  </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-4">
                     
                       
              <li class="nav-item">
                <a class="nav-link" href="About.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="FAQ.php">Delivery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PrivatePolicy.php">Private Policy</a>
              </li>
             
            </ul>

            <form class="d-flex  " method="post">
              <button class="btn btn-white me-3" type="submit"></i>
                <?php 
                global $connection;
                
if(!isset($_SESSION['user_id'])){
  echo "<div><a href=login.php>Login / Signin</a></div>";

}else{
  $sql = "SELECT *From users where username='".$_SESSION['user_id']. "'";
  $result= mysqli_query($connection,$sql);
  if(mysqli_num_rows($result)>0){
    $rows= mysqli_fetch_assoc($result);
  
  };
  ?>
    <div class="flex">  
     Username : <span><?php echo $rows['username']?></span>&nbsp;&nbsp;

      <a href="index.php?logout=<?php echo $user_id;?>" onclick="return confirm('are you sure you want logout?');" class="btn btn-primary">Logout<a>
</div>

</form>
<?php
}
?>
              </button>
              <div class="container1" style="overflow:hidden">
              
              <div class="icon ">
                <i class="search fa fa-search"></i>
</div>
<div class="input">
<input type="text" id="search">
<i class="clear fa fa-times"></i>
</div>

</div>
              <a href="Wishlist.php"><button class="btn btn-white me-3" type="submit"><i class="bi bi-heart"></i>
              <?php
              if(isset($_SESSION['Wishlist'])){
                echo $_SESSION['Wishlist'];
                }else {
                  echo "0";
                }
                  ?>
            </button></a>
              <a href="Cart.php"><button class="btn btn-white me-3" type="submit"><i class="bi bi-cart"><span><?php 
              if(isset($_SESSION['Total_Cart'])){
                echo $_SESSION['Total_Cart'];
                }else {
                  echo "0";
                  }?></span></i></button></a>

            </form>
          </div>
        </div>
      </nav>
     </header>


     <section>
          <div class="col-lg-12 col-md-12 col-12 background" > 
           
             <video autoplay loop muted id="video1">
              <source src="https://media.ray-ban.com/cms/resource/blob/489710/2a7882e0107a06e04f9abefa4274a02c/rb-hp-hero-bts-d-data.mp4">
            
      </video>
<div style="margin-left:50%; display:flex;flex-direction:column;" class="content">
            <h2>FIND YOUR STYLE , MAKE YOUR MARK</h2>
            <p>Wherever you are, whatever you're up to , do it with attitude</p>
            <button class="btn btn-danger"><a href="MenGlasses.php" style="color:white">Shop More</a></button> 
             <div class=" playlist col-lg-12 col-md-12 col-12" >
              <div class="playlist-child ">
        <span  ><i class="bi bi-play" id="played" style="font-size:30px;"onclick="plays()"></i></span>
        <span><i class="bi bi-volume-down" id="sound"style="font-size:30px;"onclick="sounds()"> </i></span>
      </div>
      </div>
      </div> 
     
     
          </div>
          </section>
          
          
          
          <script>
        let sound = document.getElementById("video1");
        let playsound=document.getElementById("sound");
        let playVideo=document.getElementById("video1");
        let playButton = document.getElementById("played");
        var count=0;
        function sounds(){ 
          let audio= new Audio("https://media.ray-ban.com/cms/resource/blob/489710/2a7882e0107a06e04f9abefa4274a02c/rb-hp-hero-bts-d-data.mp4");
          if(count==0){
         audio.play();
          }else{
            audio.pause();
          }
        }
      
        function plays(){
          if(playVideo.paused){
          playVideo.play();
          playButton.innerText="";

          }else{
            playVideo.pause();
          playButton.innerHTML="";

          }


        }
        </script>
   <section>
<div class="container-fluid border" >
    <div class="row p-5 pt-5">
      <div class="col-lg-6 " style="text-align:left;display:flex;flex-direction:column;justify-content:center;align-items:flex-start">
        <h3 class="mb-4 paragraph">Last Day Sales ! <span><i class="bi bi-megaphone-fill"></i></span></h3>
        <p class="paragraph"> Come and Grab it now , Discount Applied when you shop with us more !Hurry up Now and purchase more 
           Happy Shopping 
          *Terms and condition applies*
        </p><button class="btn btn-primary"><a href="WomenGlasses.php" style="color:white">Shop Now</a></button>
      </div>
      <div class="col-lg-6">
        <img src="image/home-bg-3.png" width="100%" height="100%"/>
      </div>
  </div>

</div>
     </section>

<section>
<div class="container-fluid border  p-5 ">
  <div class="row logo-rows ">
    <div class="col-lg-3 col-md-6 ">
 <img src="image/Guicc.jpg" width="100px" height="100px" />
    </div>
    
    <div class="col-lg-3 col-md-6">
      <img src="image/prada-logo.jpg" width="100px" height="100px" />
         </div>
         
    <div class="col-lg-3 col-md-6">
      <img src="image/sunglass-logos-versace.png" width="100px" height="100px" />
         </div>
         
    <div class="col-lg-3 col-md-6">
      <img src="image/RayBan.png" width="100px" height="100px" />
         </div>
  </div>
</div>
</section>




<section>
<div class="container-fluid mx-auto mb-5 mt-3">
  <div class="d-flex">
    <div class="active-hover paragraph">
       Weekely BestSeller for Men
    </div>
    <div class="active-hover paragraph">
      Weekely BestSeller for Women
   </div>
   <div class="active-hover paragraph">
    New Arrivial
 </div>
  </div>
</div>
</section>


<section>
<div class="container-fluid bg-white text-center mb-5 mt-3 " style="display: block;" id="Div1">
  <div class="row mx-auto">
  <?php
$sql = "select *from menglasses Limit 0,3";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
 while($rows=mysqli_fetch_assoc($result)){
  ?>
  <form class="col-lg-4 mt-4 p-3 hover">
 
     <img src="<?php echo $rows['img']?>" width="200px" height="200px" style="object-fit:contain"/>
     <h6><?php echo $rows['Name']?></h6>
     <p><span>$<?php echo $rows['DiscountedPrice']?></span><del>$<?php echo $rows['OrginalPrice']?></p> 
     
     <form method="get" action="Menglasses.php">
<button class="btn btn-success" name="mode" value="<?php echo $rows['Name']?>">view more</button>
</form>
  
<?php
 }
}else{
  echo "<br>";
  echo "No Result";
}



?>
    </div>
    
    </div>
</section>

    
<section>
<div class="container-fluid bg-white text-center mb-5 mt-3 " style="display: none;" id="Div2">
  <div class="row mx-auto">
  <?php
$sql = "select *from womenglasses Limit 0,3";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
 while($rows=mysqli_fetch_assoc($result)){
  ?>
  <form class="col-lg-4 mt-4 p-3 hover">
 
     <img src="<?php echo $rows['img']?>" width="200px" height="200px" style="object-fit:contain"/>
     <h6><?php echo $rows['Name']?></h6>
     <p><span>$<?php echo $rows['DiscountedPrice']?></span><del>$<?php echo $rows['OrginalPrice']?></p> 
     
     <form method="get" action="Menglasses.php">
<button class="btn btn-success" name="mode" value="<?php echo $rows['Name']?>">view more</button>
</form>
  
<?php
 }
}else{
  echo "<br>";
  echo "No Result";
}



?>
    </div>
    
    </div>
</section>




<section>
<div class="container-fluid bg-white text-center mb-5 mt-3 " style="display: none;" id="Div3">
  <div class="row mx-auto">
  <?php
$sql = "select *from womenglasses Limit 2,3";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
 while($rows=mysqli_fetch_assoc($result)){
  ?>
  <form class="col-lg-4 mt-4 p-3 hover">
 
     <img src="<?php echo $rows['img']?>" width="200px" height="200px" style="object-fit:contain"/>
     <h6><?php echo $rows['Name']?></h6>
     <p><span>$<?php echo $rows['DiscountedPrice']?></span><del>$<?php echo $rows['OrginalPrice']?></p> 
     
     <form method="get" action="Menglasses.php">
<button class="btn btn-success" name="mode" value="<?php echo $rows['Name']?>">view more</button>
</form>
  
<?php
 }
}else{
  echo "<br>";
  echo "No Result";
}



?>
    </div>
    
    </div>
</section>



<section>
    <div class="container-fluid border">
      <div class="container mt-5 mb-5 ">
        <div class="row text-center">
          <h4>Earn When You Create An Account With Us</h4>
          <div class="col-lg-4 p-4">
            <img src="image/undraw_gift_card_re_5dyy.svg" width="300" height="300"/>
            <p class="mt-3 paragraph">We provide complimentary repair or exchange of your frames should there be any manufacturing defects within one year of purchase.

</p>
<buton class="btn btn-danger"><a href="NewUser.php"  style="color:white">>View More</a></button>
          </div>
          <div class="col-lg-4 p-4">
            <img src="image/undraw_winners_re_wr1l.svg" width="300" height="300"/>
            <p class="mt-3 paragraph">If your glasses are damaged within one year of purchase for reasons not covered by our warranty, we will offer you 50% discount when you purchase a replacement pair.

      </p>
      <buton class="btn btn-danger"><a href="NewUser.php"  style="color:white">>View More</a></button>

          </div>
          <div class="col-lg-4 p-4">
            <img src="image/undraw_secure_login_pdn4.svg" width="300" height="300"/>
            <p class="mt-3 paragraph" >We provide a one-time complimentary change of lens degree if you experience discomfort in your vision within the first year of purchase.


</p>
<button class="btn btn-danger paragraph"><a href="NewUser.php" style="color:white">View More</a></button>

          </div>
        </div>
      </div>
      
    </div>
</section>


<section>
    <div class="container-fluid border  ">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12 col-md-6 ">
          <img src="image/undraw_discount_d-4-bd.svg" width="400px" height="400px" class="image-floating" />
        
        </div>
        <div class="col-lg-6 col-sm-12 p-5 mt-5 mb-5 col-md-6 text-inner">
        <h2 style="text-align:left!important;" class="paragraph">50% OFF</h2>
        <p class="paragraph">Come and shop with the latest glasses and get purchase more than 5 items to get 50% discount , <b>What are you waiting for ?</b> Hurry up and grab it now</p>
        <button class="btn btn-success"><a href="Term&Condition.php" style="color:white;line-decoration:none;">Shop Now</a></button>

        </div>
      </div>
      </div>
    </div>
</section>


<section>
    <div class="container-fluid  ">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12 col-md-6 ">
          <img src="image/undraw_web_shopping_re_owap.svg" width="400px" height="400px" class="image-floating" />
        
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 mt-5 px-5 p-5 mb-5 text-inner">
        <h2 style="text-align:left!important;" class="paragraph">Shop Above $100 For Free Shipping</h2>
        <p class="paragraph">Purchase and Shop Above $100 for free shopping with purchase more items from us </p>
          <button class="btn btn-success"><a href="Term&Condition.php" style="color:white;line-decoration:none;">Learn More</a></button>
        </div>
      </div>
      </div>
    </div>
</section>



<footer class="text-white pt-5 pb-4" style="background-color:papayawhip">
  <div class="container text-center text-md-start">
<div class="row text-center text-md-start">


<div class="col-md-3 col-lg-3 col-xl-3 mt-3">
<img src="image/logo.png" width="100px" height="100px" alt="logo"/>
<h5 class="text-uppercase mb-4 fw-bold text-warning paragraph">Operation Hours</h5>

<p class="p paragraph">
  MODAY : 9AM -5PM<br>
  Tuesday : 10AM - 10PM<br>
  Wednesday : 12AM - 10PM<br>
  Thursday: 10AM - 4PM<br>
  Friday : 10AM - 9PM<br>
  Saturday : Closed<br>
  Sunday:Closed<br>
</p>
<p class="paragraph">Except Public Holiday and Holiday will be Opened</p>
</div>



<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
<h5 class="text-uppercase mb-4 fw-bold text-warning">Product</h5>
<h6 class="text-uppercase mb-4  text-warning paragraph"><a href="MenGlasses.php?page_no=1">Mens Sunglasses</a></h6>
<p class="p paragraph">
  Gucci
</p>
<p class="p paragraph">
  RayBan
</p>
<h6 class="text-uppercase mb-4  text-warning"><a href="WomenGlasses.php?page_no=1">Women Sunglasses</a></h6>
<p class="p paragraph">
  Guicc
</p>
<p class="p paragraph">
  RayBan
</p>


</div>


<div class="col-md-3 col-lg-2 col-xl-2  mt-3">
<h5 class="text-uppercase mb-4 fw-bold text-warning">Support</h5>
<p class="p">
<a href="contact.php ">Contact Us</a>
</p>
<p class="p">
<a href="FAQ.php paragraph" >FAQs</a>
</p>
<p class="p">
<a href="SystemRequirement.php ">System Requirements</a>
</p>
<p class="p">
<a href="NewUser.php">New Users Benifits</a>
</p>
<p class="p">
<a href="register.php ">Sign Up an Account </a>
</p>
<p class="p">
<a href="Term&Condition.php ">Terms & Conditions</a>
</p>
<p class="p">
<a href="PrivatePolicy.php " >Private Policy</a>
</p>
<p class="p">
<a href="StoreLocator.php" >Store Locator</a>
</p>
</div>

<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
<h5 class="text-uppercase mb-4 fw-bold text-warning paragraph">Follow Us More On Social Media</h5>
<ul class="list-unstyled list-inline">
<li class="list-inline-item">
<a href="https://www.facebook.com/owndays.sg/" class="btn-floating btn-sm " style="font-size:23px;"><i class="bi bi-facebook"></i></a>
</li>
<li class="list-inline-item">
<a href="https://twitter.com/owndays_PR" class="btn-floating btn-sm " style="font-size:23px;"><i class="bi bi-twitter"></i></a>
</li>
<li class="list-inline-item">
<a href="https://www.instagram.com/owndays_sg/" class="btn-floating btn-sm " style="font-size:23px;"><i class="bi bi-instagram"></i></a>
</li>
<li class="list-inline-item">
<a href="https://www.youtube.com/@owndays_sg" class="btn-floating btn-sm " style="font-size:23px;"><i class="bi bi-youtube"></i></a>
</li>
<li class="list-inline-item">
<a href="https://www.linkedin.com/company/owndays-co.-ltd." class="btn-floating btn-sm " style="font-size:23px;"><i class="bi bi-linkedin"></i></a>
</li>
</ul>
<h4 style="color:black">Scan More Related Website</h4>
<div>
<img src="image/frame.png" width="200" height="200">
</div>
</div>





<hr class="mb-4">
<div class="container-fluid">
  <div class="row">
<div class="col-md-7 col-lg-8 ">
<p class="p paragraph">Copyright <span>&copy;</span>All rights Reserved by:
<a href="#" class="text-decoration-none">
  <strong class="text-warning paragraph"><a href="Index.php">EyeSpy</a></strong>
</a>
</p>
</div>




<div class="col-md-5 col-lg-4 ">
<div class="text-center text-md-end">
<ul class="list-unstyled list-inline">
<li class="list-inline-item">
<i class="fa fa-cc-visa " style="font-size: 23px;color:black" aria-hidden="true"></i>
</a>
</li>
<li class="list-inline-item">
<i class="fa fa-cc-mastercard" style="font-size: 23px;color:black" aria-hidden="true"></i>

</li>
<li class="list-inline-item">
<i class="fa fa-cc-paypal" style="font-size: 23px;color:black" aria-hidden="true"></i>
</li>
<li class="list-inline-item">
<i class="fa fa-credit-card-alt" style="font-size: 23px;color:black" aria-hidden="true" aria-hidden="true"></i>

</li>
<li class="list-inline-item">
<i class="fa fa-cc-stripe" style="font-size: 23px;color:black" aria-hidden="true"></i>

</li>
</ul>
</div>
</div>


  
  
 
  
</footer>

     
    <?php
    break;
      }
    ?>
    
      
  </body>

  
</html>

<script src="script.js"></script>


<script>
  document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
</script>


<?php 
global $connection;
global $toatlprice;
global $input_Brand;
global $input_id;
global $newQuantity;
global $input_size;
global $input_name;
global $input_img;
global $input_Price;
global $input_quantity; 
global $input_StockCount;
if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['click'])){
        $input_id=$_POST['id'];
        $input_name=$_POST['name'];
        $input_img=$_POST['image'];
        $input_Brand=$_POST['brand'];
        $input_StockCount=$_POST['Count'];
        $input_Price=$_POST['Price'];
        $input_quantity=$_POST['number'];
        $input_size=$_POST['size'];
        $toatlprice=$input_Price * $input_quantity;
        $select ="SELECT Size from shoppingcart  where UPC='". $input_id."'";
        $result=mysqli_query($connection,$select);
       if(mysqli_num_rows($result)>1){
    ?>
    <script>alert("Product existed ")</script>
    <?php   

       }else{
$sqlInsert = "INSERT INTO shoppingcart(user_name,UPC,Name,Brand,Size,Price,img,Quantity,TotalPrice) values('".$user_id."','". $input_id."','". $input_name."','". $input_Brand."','". $input_size."','". $input_Price."','". $input_img."','". $input_quantity."','". $toatlprice."' )";
$result=mysqli_query($connection,$sqlInsert);
  $newQuantity = $input_StockCount - $input_quantity;
  echo $newQuantity;
  echo $input_id;
$sql = "UPDATE womenglasses set StockQuantity='". $newQuantity."' where UPC='". $input_id."'";
mysqli_query($connection,$sql);

        ?>
        <script>alert("Item added to cart ");</script>
<?php  
     
?>
        <?php

}
       } 
    }
    ?>
   
<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script>
<script>
 

let search = document.querySelector(".search");
let clear = document.querySelector(".clear");

search.onclick= function(){
  document.querySelector(".container1").classList.toggle('active');
  document.getElementById("search").value="";
  document.querySelector(".fa-times").classList.toggle("show1");

}
clear.onclick= function(){
  document.getElementById("search").value="";
}
var input = document.getElementById("search");
// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    let textToSearch = input.value;
    let paragraph = document.getElementsByClassName("paragraph");
    for(let i =0;i<paragraph.length;i++){
      textToSearch = textToSearch.replace(/[.*+?^${}()|[\]\\]/g,"\\$&");

let pattern = new RegExp(`${textToSearch}`,"gi");

paragraph[i].innerHTML = paragraph[i].textContent.replace(pattern, match => `<mark style="background:yellow;color:black;">${match}</mark>`)
    }
    


  }
});
  </script>
  <script>
     $(window).on("load",function() {	
setTimeout(function(){
$('.loader_bg').fadeToggle();
},1500);
});
</script>