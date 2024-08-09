<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
        .gray-background {
            background-color: #f8f9fa;
            min-height: 100vh;
            padding: 20px 10px;
            justify-content: flex-start;
        }
        .white-background {
            background-color: #ffffff;
            min-height: 100vh;
        }
        .menu{
           
        }
        h3{
            font-weight: 700;
            width: 100%;
            text-align: center;
        }
    </style>
    </head>
   <body>
   <div class="container-fluid">
        <div class="row">
         <div class="col-md-2 gray-background">
                <h3>WeHR</h3>
                <p class="mt-5 menu">MAIN MENU</p>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">DashBoard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recruitment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Employee</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 white-background">
                <h3>Dashboard</h3>
            </div>
         </div>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>
</html>
