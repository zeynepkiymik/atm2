<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>para çek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<h4 class=>PARA ÇEK</h4>
<style>

#button{
    margin-bottom: 3px;
}
    
</style>
<body>
    <div class="container">
        
    <div class="row" style="margin-top:3px; margin-bottom: 3px;">
        <div class="col-sm-6">

            <form action="{{route('post.paracek')}}" method="POST">
                @csrf
                <input type="number" name="cekilen_para" class="form-control" placeholder="Tutar Giriniz">
                <button type="submit" class="btn btn-primary mt-2" id="button"> 
              <i class="fa fa-check"> </i>  Tamam </button>
            </form>
        </div>
        
        </div>

    </div>
</body>
</html>