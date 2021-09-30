<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Anasayfa</title>
<h4>İŞLEMLER</h4>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
#kutu1:hover{
zoom:1.1;
      transition:all 5s;
      border:3px solid black;
      perspective: 75px;
    }
#kutu1{
    width:150px;
    height: 75px;
    background:rgba(41, 187, 114, 0.767);
    padding-top:30px;
    color:white;
    margin: 15px;
    float:left;
    }
    #kutu2:hover{
        zoom:1.1;
          transition:all 5s;
          border:3px solid black;
          perspective: 75px;
        }
    #kutu2{
        width:150px;
        height: 75px;
        background: #264456;
        padding-top:30px;
        color:white;
        margin: 15px;
        float:left;
    }
    #kutu3:hover{
          zoom:1.1;
          transition:all 5s;
          border:3px solid black;
          perspective: 75px;
        }
    #kutu3{
        width:150px;
        height: 75px;
        background: rgb(236, 61, 61);  
        padding-top:30px;
        color:white;
        margin: 15px;
        float:left;
     
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">

                <div class="col-2 image" >  <img src="https://www.payten.com/media/_versions/images/product_groups/institut_atm_product_group.png" alt="">  
                </div>
            </div>

            <div class="col-sm-10">
                <label for="fname">Adı-Soyadı:xxxxx</label><br>
                <br>
                 <label for="lname">Bakiye: {{request()->session()->get('bakiye')}}
                </label><br>
                <br><br>
                 
                <a href="{{route('paracek')}}">
                 <div id="kutu1">
                    <center>PARA ÇEK</center> 
                </div>
                </a>
                <a href="{{route('paraekle')}}">
                 <div id="kutu2">
                    <center>PARA EKLE</center> 
                </div>
                </a>
                <a href="{{route('cikis')}}">
                 <div id="kutu3">
                    <center>ÇIKIŞ</center> 
                </div>
                </a>
             </div>
         </div>
     </div>
 </body>
 </html>