<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <title>Exam</title>
    
    <style>
        .logo{
            border-radius: 50%;
            padding: 20px;
        }
        .nav-item {
            padding: 0 30px;
        }
        #imageSlider img, .product img {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <img src="//via.placeholder.com/200?text=jovica" class="logo">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="imageSlider" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
            <li data-target="#imageSlider" data-slide-to="1"></li>
            <li data-target="#imageSlider" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="//via.placeholder.com/1800x600?text=First" alt="First">
            </div>
            <div class="carousel-item">
                <img src="//via.placeholder.com/1800x600?text=Second" alt="Second">
            </div>
            <div class="carousel-item">
                <img src="//via.placeholder.com/1800x600?text=Third" alt="Third">
            </div>
        </div>

        <a class="carousel-control-prev" href="#imageSlider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#imageSlider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="product mb-5 col-4">
                <img class="mb-3" src="//via.placeholder.com/450x200?text=Image">
                <div class="">
                    <h4 class="">Product Title</h4>
                    <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="product mb-5 col-4">
                <img class="mb-3" src="//via.placeholder.com/450x200?text=Image">
                <div class="">
                    <h4 class="">Product Title</h4>
                    <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="product mb-5 col-4">
                <img class="mb-3" src="//via.placeholder.com/450x200?text=Image">
                <div class="">
                    <h4 class="">Product Title</h4>
                    <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="product mb-5 col-4">
                <img class="mb-3" src="//via.placeholder.com/450x200?text=Image">
                <div class="">
                    <h4 class="">Product Title</h4>
                    <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="product mb-5 col-4">
                <img class="mb-3" src="//via.placeholder.com/450x200?text=Image">
                <div class="">
                    <h4 class="">Product Title</h4>
                    <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="product mb-5 col-4">
                <img class="mb-3" src="//via.placeholder.com/450x200?text=Image">
                <div class="">
                    <h4 class="">Product Title</h4>
                    <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        
        <div class="addCustom mb-5">
            <button class="addNewInput btn btn-primary">Add</button>
            
            <div class="border-primary card mt-5 p-3 customInputDiv">
                <div class="mb-3 row customInput">
                    <div class="col-8">
                        <input class="form-control" type="text" placeholder="Text">
                    </div>
                    <div class="col-4">
                        <button class="removeInput btn btn-danger">X</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>
            $('.addNewInput').on('click', function () {
                $('.customInputDiv').append(
                    `<div class="mb-3 row customInput">
                        <div class="col-8">
                            <input class="form-control" type="text" placeholder="Text">
                        </div>
                        <div class="col-4">
                            <button class="removeInput btn btn-danger">X</button>
                        </div>
                    </div>`
                );
            });
            
            $('.customInputDiv').on('click', '.removeInput',  function () {
                $(this).closest('.customInput').remove();
            });
    </script>
</body>
</html>