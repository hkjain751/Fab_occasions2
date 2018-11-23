<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="resources/css/gallery-style.css" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">


    <title>Gallery</title>

    <script>
        function gallery_section1() {
            document.getElementById("gallery-section1").style.display = "block";
            document.getElementById("gallery-section2").style.display = "none";
            document.getElementById("gallery-section3").style.display = "none";
        }

        function gallery_section2() {
            document.getElementById("gallery-section1").style.display = "none";
            document.getElementById("gallery-section2").style.display = "block";
            document.getElementById("gallery-section3").style.display = "none";
        }

        function gallery_section3() {
            document.getElementById("gallery-section1").style.display = "none";
            document.getElementById("gallery-section2").style.display = "none";
            document.getElementById("gallery-section3").style.display = "block";
        }

    </script>

</head>

<body>

    <div class="text-center">
        <h1 style="font-size: 35px;font-family: 'Overlock', cursive;font-weight: 500;">
            <span style="color: rgb(244,72,58);">&mdash;</span> Gallery
            <span style="color: rgb(244,72,58);"> &mdash;</span>
        </h1>

    </div>

    <div class="container">

        <div style="margin-left: 60px;margin-right: 60px;">
            <div class="row mb-1">
                <div class="col gallery-btn-div" style="background-color: dodgerblue" id="gallery-btn1" onclick="gallery_section1()">Button-1</div>

                <div class="col gallery-btn-div" style="background-color: deeppink" id="gallery-btn2" onclick="gallery_section2()">Button-2</div>

                <div class="col gallery-btn-div" style="background-color: darkorange" id="gallery-btn2" onclick="gallery_section3()">Button-3</div>

            </div>
        </div>



        <div id="gallery-section1" style="margin-left: 70px;">

            <h5 class="text-center mt-4">SECTION 1 IMAGES</h5>
            <div class="row mb-4 mt-4">
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img1.jpg" alt="" width="100%" height="100%px" class="gallery-img">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img1.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img1.jpg" alt="" width="100%" height="100%px">
                </div>

            </div>
            <div class="row">
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img1.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img1.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img1.jpg" alt="" width="100%" height="100%px">
                </div>
            </div>
        </div>
        <div id="gallery-section2" style="display: none;margin-left: 70px;">
            <h5 class="text-center mt-4">SECTION 2 IMAGES</h5>
            <div class="row mb-4 mt-4">
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img2.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img2.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img2.jpg" alt="" width="100%" height="100%px">
                </div>

            </div>
            <div class="row">
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img2.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img2.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img2.jpg" alt="" width="100%" height="100%px">
                </div>

            </div>
        </div>
        <div id="gallery-section3" style="display: none;margin-left: 70px;">
            <h5 class="text-center mt-4">SECTION 3 IMAGES</h5>
            <div class="row mb-4 mt-4">
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img3.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img3.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img3.jpg" alt="" width="100%" height="100%px">
                </div>
            </div>
            <div class="row">
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img3.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img3.jpg" alt="" width="100%" height="100%px">
                </div>
                <div class="gallery-img-div1" style="margin-left: 0px;">
                    <img src="resources/img/gallery-img3.jpg" alt="" width="100%" height="100%px">
                </div>

            </div>
        </div>
    </div>



</body>

</html>
