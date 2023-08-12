<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {overflow: hidden;}
            
            .margin {
                margin-top: 100px
            }

            .head-margin {
                margin-top: 160px;
                margin-bottom: -80px
            }
        </style>
        <title>Weather App</title>
    </head>
    <body>
       
        <div class="conatiner">
            <div class="row">
                <div class="col-md-6">

                    <h3 class="text-center head-margin">What's the weather today??</h3>
                    <form class="card p-2 margin" method="POST" action="index.php">
                        <div class="input-group">
                            <input type="text" name="weather" class="form-control" placeholder="Enter city name e.g Cairo, Berlin, Tokyo">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
           </div>
        </div>

      
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
     
    </body>
</html>
