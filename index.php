<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Transform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Text Transform</h1>
    <p>Put a text inside this textarea and click on the button convert:</p>
    <form class="frm-horizontal" id="frm-process">
        <div class="form-group">
            <textarea name="text" rows="5" cols="150" id="text"></textarea>
        </div>
        <div class="mb-2"></div>
        <div class="form-group">
            <input type="button" class="btn btn-success" value="Convert" id="btn-process">
        </div>
    </form>
    <div class="mb-3"></div>
    
        <div class="col-md-8" id="convert"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  
</body>
</html>