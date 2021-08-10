<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        #button{
            width: 140px;
            height: 30px;
            line-height: 0.5;
            margin top: 5px;
        }

        #email{
            margin top: 5px;

        }
        #emailadresi{
            margin top: 5px;

        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="emailgiriniz">

            <p> <span id="email" class="">Şifrenizi yenilemek için e-mail adresi giriniz</span> </p>
            </div><br>

            <div class="row">
            <div class="col-12 text center">

            <input type="text" id="emailadresi" placeholder="e-mail adresi" style="background color:bg-primary">
            </div>
            </div><br>

            <div class="row" >
                <div class="col-12 text center">
            <button type="submit" class="btn btn-primary mt-2" id="button"> 
              <i class="fa fa-redo"> </i>  Şifremi Yenile</button>
              </div>
          </div>
            </form>
        </div>
    </div>
</body>
</html>