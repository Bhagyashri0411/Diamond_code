<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Pune - Diamond International School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" /> -->
<style>
    button, label {
    border: none;
    outline: none;
    border-radius: 5px;
    background-color: #f37335;
    padding: 10px 20px;
    color: #fff;
}
</style>
</head>

<body>
    <div class="containeres">
        <div class="wrapper">
            <div class="title"><span>Admin Login</span></div>
            <form>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="name" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" id="pass" required>
                </div>

                <div class="row button">
                    <input type="button" value="Login" onclick="submitdata()">
                </div>
            </form>
        </div>
    </div>


   
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>



    <script>
        function submitdata() {
            var username = document.getElementById("name").value;
            var pass = document.getElementById("pass").value;
            var dataJson = { "name": username, "password": pass }
            if (username == "admin" && pass == "admin") {
               window.location.href = "./authorization"
            }
            else {
                toastr.options.timeOut = 1500;
                toastr.error('Please enter valid information');


            }
        }
    </script>
</body>

</html>