<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <title>Final Mock Practice</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
        * {
            box-sizing: border-box;
        }
        #reg_input
        {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 my-4">
                <div class="form-group text-center">
                    <label class="h2 text-info mb-3" for="reg_input">Extract domain from url</label>
                    <textarea class="form-control" rows="6" cols="100" name="reg_input" id="reg_input" value="" placeholder="Enter URL's separated with spaces: "></textarea> 
                </div>
                <button type="button" class="btn btn-outline-info btn-block" onclick="extract()">Extract</button>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Domain</th>
                        </tr>
                    </thead>
                    <tbody id="table_body">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>

        function extract()
        {
            var url = document.getElementById("reg_input").value;
            if(url.trim() != "")
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("table_body").innerHTML = this.responseText;
                    }
                };
                
                xhttp.open("GET", "extractURL.php?url="+url, true);
                xhttp.send();
            }
        }

    </script>

</body>
</html>