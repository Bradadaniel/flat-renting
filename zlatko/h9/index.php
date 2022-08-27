<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="js/validator.js"></script>
    <style>
        body {
            font-family: Arial;
        }

        label {
            display: block;
            padding-top: 10px;
        }

        label.radio-label {
            display: inline-block;
        }
        
        .hidden {
            display: none;
        }

        .error {
            color: red;
        }
        /*.container{*/
        /*    justify-content: center;*/
        /*    text-align: center;*/
        /*    align-items: center;*/
        /*}*/
        #education-form{
            background: linear-gradient(gray, white);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/dolphin_marine_mammals_water.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/dolphin_marine_mammals_water.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/dolphin_marine_mammals_water.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container" style="width: 1200px; padding-top: 50px; padding-bottom: 50px">

<form class="row g-3" id="education-form" action="process.php" method="post">

        <div class="col-md-4">
    <label for="name">First Name:</label>
    <input type="text" name="name" id="name"> * <span id="name_error" class="error"></span>
    </div>

        <div class="col-md-4">
    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name"> *<span id="last_name_error" class="error"></span>
    </div>

    <div class="col-md-4">
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email"> *<span id="email_error" class="error"></span>
    </div>

    <div class="col-md-12">
    <label for="education">(*) Education:</label>
    <input type="radio" name="education" value="high-school" id="high-school" class="education-radio">
    </div>

    <div class="col-md-12">
    <label for="high-school" class="radio-label">High school</label>
    <input type="radio" name="education" value="college" id="college" class="education-radio">
        </div>

    <div class="col-md-12">
    <label for="college" class="radio-label">College</label>
    <span id="education_radio_error" class="error"></span>
            </div>
    <div class="col-md-12">
    <select name="id_city">
        <option value="choose">choose</option>
        <option value="1">Subotica</option>
        <option value="2">Belgrade</option>
        <option value="3">Budapest</option>
        <option value="4">London</option>
    </select>
    </div>

    <div class="col-md-12">
    <div id="college-input" class="hidden"><label>College Name:</label>
        <input type="text" name="college_name" id="college_name">
        <span id="college_error" class="error"></span>
    </div>
    </div>
    <br>
    <br>
    <div class="col-md-12">
    <input type="submit" value="Submit Form" class="btn btn-warning" style="max-width: 300px">
    </div>

</form>

</div>

</body>
</html>