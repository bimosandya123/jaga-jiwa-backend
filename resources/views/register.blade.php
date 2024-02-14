<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
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

    <style>
        body{
            font-family: 'Poppins', sans-serif; 
            background-repeat: no-repeat;
            background-position-x: 100%;
            overflow: hidden;
            background-image: url('images/login.png'); 
            background-size: 82.3%;
        }
        
        .container {
            width: 38%;
            margin: 30px;
            margin-left: 74px;
            padding: 0;
            /* padding-top: 65px;
            padding-bottom: 20%; */
            position: relative;
            /* background-color: yellow; */
        }
        .container h1 {
            /* background-color: aqua; */
            font-size: xx-large;
        }

        .container form {
            /* background-color: aqua; */
        }

        .container input {
            display: block;
            width: 100%;
            height: 50px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .container button {
            width: 100%;
            height: 50px;
            background-color: #24317F;
            color: #ffffff;
            border: none;
            border-radius: 32px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 0;
            margin-top: 10px; /* Adjusted margin-top value */
        }
        .container .or {
            margin-top: 20px;
            display: flex;
            /* justify-content: center; */
            align-items: center;
        }

        .container .divider {
            /* margin-top: 20px; */
            margin-left: -85px;
            
            width: 45%;
            height: 1px;
            background-color: #66666690;
        }

        .container .or-text {
            /* position: absolute; */
            /* display: block; */
            /* z-index: -2; */
            margin-left: 48%;
            margin-right: auto;
            width: fit-content;
            background-color: #fff;
            /* padding: 0 10px; */
        }

        .container .right-divider {
            /* float: right; */
            /* margin-top: 20px; */
            width: 45%;
            height: 1px;
            background-color: #66666690;
        }
        .container-login {
            position: relative;
            margin-top: 30px;
            /* background-color: red; */
            /* text-align: center; */
        }
        .container-login label {
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
            margin-left: 0px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .container-login .google-logo,
        .container-login .facebook-logo {
            width: 25px;
            height: 25px;
            margin-right: 10px; 
        }
        .container .divider{
            position: absolute;
            left: 84px;
        }
        .container-login p {
        margin-top: 20px;
        font-size: small;
        /* position: absolute; */
        text-align: center;
        }
        .container-login p a {
        color: blue;
        }
        .container-login a {
        text-decoration: none; /* Remove underline */
        color: black;
        cursor: pointer;
        }
        .closebtn:hover {
            color: black;
        }
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>
</head>

<body>
    @if(Session::has('success'))
        <div class="alert alert-success" id='error-message' role="alert" style="position: absolute; top:0; width:100%; z-index: 1000;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container">
        <h1>Welcome Back !</h1>
        <form id="registerForm">
            @csrf
            <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
            <button type="submit" onclick="register()">Sign In</button>
        </form>
        <div class="or">
            <div class="divider"></div>
            <div class="or-text">Or</div>
            <div class="right-divider"></div>
        </div>
        <div class="container-login">
            <div class="container-login">
                <div class="container-login">
                    <a href ="{{ route('google.redirect') }}">
                        <label for="">
                            <img src="images/google.png" alt="gg" class="google-logo">
                            Sign In With Google
                        </label>
                    </a>
                    <a href ="{{ route('facebook.redirect') }}">
                        <label for="">
                            <img src="images/fb.png" alt="fb" class="facebook-logo">
                            Sign In With Facebook
                        </label>
                    </a>
                    <p>Have an account?<a  href="/login" > Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function register() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
    
            var formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('password', password);
    
            fetch('/api/register', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                } else {
                    return response.text().then(text => {
                        console.error('Server Error:', text);
                        throw new Error('Server Error');
                    });
                }
            })
            // .then(data => {
            //     // memberikan pesan akun berhasil di tambahkan
            //     document.getElementById('error-message').innerText = 'Akun berhasil ditambahkan';
            // })
            // .catch(error => {
            //     console.error('register failed:', error.message);
            //     alert('register failed: ' + error.message);
    
            //     // Menampilkan pesan kesalahan akun sudah ada
            //     document.getElementById('error-message').innerText = error.message;
            // });
        }
    </script>
</body>
</html>