<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="styles/style.css"> <!-- Link to the external CSS file -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
     
</head>

<body style="position: relative;">
    <header>
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" height="70">
        </a>
        <ul>
            <!-- <li><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button></li> -->
            <li><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
            <li><a class="nav-link active" aria-current="page" href="#about">About</a></li>
            <li><a class="nav-link active" aria-current="page" href="#services">Service</a></li>
            <li><a class="nav-link active" aria-current="page" href="#">Page</a></li>
            <li><a class="nav-link active" aria-current="page" href="/login"><button class="btn-sign-up">Sign Up</button></a></li>
        </ul>
    </header>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
})
    </script>
    <section class="home" id="home" style="width: 100%; height: 100vh; background-image: url('images/back.png'); background-size: contain; background-repeat: no-repeat; ">
        <img src="images/brain.png" alt="Brain Image" width="633" height="595">
        <div class="text">
            <h1>Selamat Datang!</h1>
            <h4>Jiwaku</h4>
            <p>Bagaimana kabarnya hari ini?</p>
        </div>
    </section>
    <section class="about" id="about">
        <img src="images/about.svg" alt="Brain Image" height="355">
        <div class="text">
            <strong>About Us</strong>
            <br>
            <br>
            <p>Jaga Jiwa adalah sebuah inovasi yang direncanakan dan dikembangkan oleh Brand Ambassador Minds United. Jaga Jiwa adalah sebuah website interaktif yang memungkinkan kamu mencatat dan mengeksplorasi perjalanan emosional serta perkembangan pribadi kamu dengan mengintegrasikan elemen teknologi.</p>
            <br>
            <button class="btn-sign-up">See detail</button>
        </div>
    </section>
    <section class="services" id="services">
        <strong>Services</strong>
        <h3>Empowering Minds Our Mental Health Consulting Services</h3>
        <div class="widget">
            <div class="card">
                <img src="images/Kesehatan.svg" alt="Brain Image" style="top: -23%; left: -13%; width:127%;">
                <strong>Tes Kesehatan Mental</strong>
                <br>
                <p>Temukan keseimbangan dan kebahagiaan Anda! Mulailah sekarang dengan Tes kesehatan mental sebagai langkah pertama menuju kehidupan yang lebih baik.</p>
                <br>
                <button class="btn-sign-up">See detail</button>
            </div>
            <div class="card">
                <img src="images/cerita.svg" alt="Brain Image" style="top: -38%; left: -30%; width:150%;">
                <strong>Sesi Bercerita</strong>
                <br>
                <p>Temukan keseimbangan dan kebahagiaan Anda! Mulailah sekarang dengan Tes kesehatan mental sebagai langkah pertama menuju kehidupan yang lebih baik.</p>
                <br>
                <button class="btn-sign-up">See detail</button>
            </div>
            <div class="card">
                <img src="images/pengembangan.svg" alt="Brain Image" style="top: -31%; left: -10%; width:127%;">
                <strong>Pengembangan Diri</strong>
                <br>
                <p>Temukan keseimbangan dan kebahagiaan Anda! Mulailah sekarang dengan Tes kesehatan mental sebagai langkah pertama menuju kehidupan yang lebih baik.</p>
                <br>
                <button class="btn-sign-up">See detail</button>
            </div>
        </div>
    </section>
   
</body>
</html>
