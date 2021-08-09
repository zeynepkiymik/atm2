<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <style>
.box{
  margin-top: 200px;

}

.image{
  margin-top: 150px;
}
#x{
  margin-right: 10px;
}
.sifreUnuttum{
 background-color: rgba(145, 95, 165, 0.192);
 padding: 170px;
 color:white;
}
 </style>
    <title>ATM</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      
      <div class="col-2 image" >  <img src="https://www.payten.com/media/_versions/images/product_groups/institut_atm_product_group.png" alt="">  
      </div>

      <div class="col-6 box">

       <form action="{{ route('girissayfasi') }}" method="get">
        <div class="form-control sifreUnuttum">

        <div class="row">
          <h3> <span id="x" class="">Şifre Giriniz</span> </h3>
       

        </div>

        <div class="row" style="margin-top: 3px;margin-bottom: 3px;">
          <input type="password" placeholder="Şifre Giriniz">
        </div>
        <div class="row"></div>

        <div class="row" style="margin-top: 3px;margin-bottom: 3px;">
         <a href="{{ route('sifremiUnuttum') }}" class="btn btn-secondary Şifremi Unuttum"> <i class="fa fa-key"></i> Şifremi Unuttum </a> 

          </div>          
         <div class="row">
            <button type="submit" class="btn btn-primary mt-3"> 
              <i class="fa fa-user"> </i>  Giriş Yap</button>
          </div>
    </div>
      </form>
               
        </div>
      <div class="col-2"></div>
     
    </div>

  </div>
  </body>
</html>
