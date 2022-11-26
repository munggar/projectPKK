<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        background: rgb(52, 52, 255);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: rgb(52, 52, 255);
    }

    .profile-button {
        background: rgb(52, 52, 255);
        box-shadow: none;
        border: none;
    }

    .profile-button:hover {
        background: rgb(0, 0, 71);
    }

    .profile-button:focus {
        background: rgb(52, 52, 255);
        box-shadow: none;
    }

    .profile-button:active {
        background: rgb(52, 52, 255);
        box-shadow: none;
    }

    .back:hover {
        color: rgb(52, 52, 255);
        cursor: pointer;
    }

    .mas-rafli a {
        text-decoration: none
    }
    .image {
        position: relative;
        top: -30px;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .foto:hover .image {
        opacity: 0.3;
    }

    .foto:hover .middle {
        opacity: 1;
    }

    .text {
        color: black;
        font-size: 16px;
        padding: 16px 32px;
    }

    input {
        display: none;
    }

    .profile-pic {
        color: transparent;
        transition: all .3s ease;
        position: relative;
        transition: all .3s ease;
    }

    input {
        display: none;
    }

    span {
        display: inline-flex;
        padding: .2em;
        height: 2em;
    }

    a:hover {
        text-decoration: none;
    }
</style>

<body>
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data"></form>
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5 foto">
                    <label for="file">
                        <input id="file" type="file" onchange="loadFile(event)" />
                        <img class="image rounded-circle mt-5" src="" width="90"
                            id="output" width="200">
                        <div class="middle">
                            <div class="text"><i class="fa-solid fa-camera"></i><br>Ganti Foto Profil</div>
                        </div>
                    </label>
                </div>
                <H5 class="text-center" style="position: relative;top: -65px;"></H5>
                <p class="text-center" style="position: relative;top: -65px;"></p>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="mas-rafli d-flex flex-row align-items-center back">
                            <a href=""><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                <h6>Back to home</h6>
                            </a>
                        </div>
                        <h6 class="text-right">Edit Profil</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-11"><input type="text" class="form-control" placeholder="Your Name"
                                value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-11"><input type="text" class="form-control" placeholder="Email"
                                value=""></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-11"><input type="text" class="form-control"
                                value="" placeholder="Username"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-11"><input type="text" class="form-control" value=""
                                placeholder="Your Acoount"></div>
                    </div>

                    <div class="mt-5 text-right">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</body>

</html>
