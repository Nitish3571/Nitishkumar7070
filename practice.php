<?php

if (isset($_POST['submit'])) {
    $id = (!empty($_POST['id']) ? $_POST['id'] : '');
    $first_name = (!empty($_POST['first_name']) ? $_POST['first_name'] : '');
    $last_name = (!empty($_POST['last_name']) ? $_POST['last_name'] : '');
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $subject = (!empty($_POST['subject']) ? $_POST['subject'] : '');
    $message = (!empty($_POST['message']) ? $_POST['message'] : '');

$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');

$insertQuery = "INSERT INTO  project_master (first_name , last_name , email , subject , message) VALUES('$first_name' , '$last_name' , '$email' , '$subject' , '$message')";
if($connection->query($insertQuery) === TRUE){
    ?>
    <script>alert('Registration successfully')</script>
    <?php
}
else{
    echo "Registration failed please try again . $connection->error";
}

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./practice.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       body {
    line-height: 1.6;
    margin: 2em;
}
table{
    margin-left:240px;
    border: solid rgba(152, 251, 152, 0.887) 4px;
    border-radius: 10px;
    background-color: #001f3f3b;
}

th {
    background-color: #001f3f;
    color: #fff;
    padding: 0.5em 1em;
}

td {
    border-top: 1px solid #eee;
    padding: 0.5em 1em;
}

input {
    cursor: pointer;
}

/* Column types */
th.missed-col {
    background-color: #f00;
}

td.missed-col {
    background-color: #ffecec;
    color: #f00;
    text-align: center;
}

.name-col {
    text-align: left;
}
h1{
    text-align: center;
    color: blue;
    font-size: 45px;
}

        html {
            font-family: sans-serif;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0c3c60;
        
            z-index: 3;

        }

        .nav-logo {
            font-size: 20px;
            font-weight: 500;
            color: white;
        }

        .nav-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-item {
            margin-left: 1rem;
        }

        .nav-link {
            font-size: 16px;

            color: white;
        }

        .nav-link:hover {
            color: #1ae5f7;
        }

        .hamburger {
            display: none;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-color: white;
        }

        @media only screen and (max-width: 668px) {
            .nav-menu {
                position: fixed;
                left: -100%;
                top: -3rem;
                flex-direction: column;
                background-color: #3d3d3d;
                width: 100%;
                padding-top: 20px;
                padding-bottom: 20px;
                text-align: center;
                transition: 0.3s;
                height: max-content;

            }

            .nav-menu.active {
                left: 0;
            }

            .nav-item {
                margin: 2.5rem 0;

            }

            .hamburger {
                display: block;
                cursor: pointer;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                -webkit-transform: translateY(8px) rotate(45deg);
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                -webkit-transform: translateY(-8px) rotate(-45deg);
                transform: translateY(-8px) rotate(-45deg);
            }
        }

        #img {
            z-index: 1;
        }

        #btn:hover {

            padding-left: 16px;
            padding-right: 15px;
            padding-top: 3px;
            padding-bottom: 3px;
            border: solid 2px black;
            font-size: 33px;
            color: white;
        }


        #row {
            padding-top: 20px;

        }

        #fbtn:hover {
            background-color: #0c3c60;
            color: #072136;
        }

        #href:hover {
            background-color: #1ae5f7;
            color: black;

        }
    #img1:hover{
        opacity: 0.5;
    }
    </style>
    
</head>
<body >
    <nav class="navbar">
        <a href="#" class="nav-logo">ATTENDANCE SYSTEM</a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="./28-04-2023about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="./projectp.html" class="nav-link">Project</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Services</a>
            </li>

            <li class="nav-item">
                <a href="./t.html" class="nav-link">Teacher</a>
            </li>

            <li class="nav-item">
                <a href="./s.html" class="nav-link">Shrusty</a>
            </li>

            <li class="nav-item">
                <a href="./c.html" class="nav-link">Contact</a>
            </li>
           



        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

<div class="container-fluid" style="background-image: url(./monu.webp); opacity: 1;">
    <h1>Shrusty Attendance</h1>
    <table>
        <thead>
            <tr>
                <th class="name-col">Student Name</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th class="missed-col">Days Missed-col</th>
            </tr>
        </thead>
        <tbody>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Shrusty</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Hardeep</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Mayank</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Bhavya</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Bittu </td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">vikash</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Rahul</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Meet</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Divya</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
            <tr class="student">
                <td class="name-col" style="color: white; font-size: 20px;">Rani</td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="attend-col"><input type="checkbox"></td>
                <td class="missed-col">0</td>
            </tr>
        </tbody>
    </table>
    </div>
    <div class="container-fluid">
        <h1 style="font-size: 39px; text-align: center;     color: yellowgreen; margin-top: 30px;">OUR COLLEGE </h1>
        <img src="./12.png" alt="" style="width: 100%;" id="img1">
    </div>
    <div class="container-fluid" style="background-color: #0c3c6096;">
        <h1 style="text-align: center; font-size: 69px; margin-top: 30px;">OUR FACULTY</h1>
        <ul style="text-align: center; font-size: 39px; ">
            <li> Mayank Panchal </li>
            <li> Isha Panchal </li>
            <li> Sonu Surati</li>
            <li>Vedant Gandolia </li>
            <li> Hetshri Shakariya</li>
            <li> Moksha Patel</li>
            <li>Bhoomi Parmar</li>
            
        </ul>
    </div>
    <div class="container-fluid" style="background-color: #0c3c60;">
        <p class="d-flex justify-content-center display-5 text-white">CONTACT</p>
        <form style="width: 89%;" method="post" action="">
            <div class="form-row d-flex">
                <div class="form-group col-lg-6 col-md-6 ms-5 mb-2 ">
                    <label for="inputEmail4" class="fs-4 text-white">First Name</label>
                    <input type="text" name="first_name" style="background-color: #0c3c60; border-bottom: white 3px solid; border-left: #0c3c60; border-right: #0c3c60;border-top: #0c3c60;" class="form-control " id="inputEmail4">
                </div>
                <div class="form-group col-lg-6 col-md-6 ms-5  mb-2 ">
                    <label for="inputPassword4" class="fs-4  text-white">Last Name</label>
                    <input type="text" name="last_name" style="background-color: #0c3c60; border-bottom: white 3px solid; border-left: #0c3c60; border-right: #0c3c60;border-top: #0c3c60;"  class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-row d-flex">
                <div class="form-group col-lg-6 col-md-6 ms-5  mb-2">
                    <label for="inputEmail4" class="fs-4 text-white">Email*</label>
                    <input name="email" style="background-color: #0c3c60; border-bottom:white 3px solid; border-left: #0c3c60; border-right: #0c3c60;border-top: #0c3c60;"  type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-lg-6 col-md-6 ms-5  mb-2">
                <label for="exampleFormControlTextarea3" class="text-white fs-4 ">Subject*</label>
                    <textarea name="subject" style="background-color: #0c3c60;border-bottom:white 3px solid; border-left: #0c3c60; border-right: #0c3c60;border-top: #0c3c60;"  class="form-control " id="exampleFormControlTextarea3" rows="3"></textarea>
                </div>
                
            </div>
            <!--  -->
            <div class="form-row d-flex">
                <div class="form-group w-50 mb-5 ms-5">
                    <label for="exampleFormControlTextarea3" class="text-white fs-4 ">Message*</label>
                    <textarea name="message" style="background-color: #0c3c60;border-bottom:white 3px solid; border-left: #0c3c60; border-right: #0c3c60;border-top: #0c3c60;"  class="form-control " id="exampleFormControlTextarea3" rows="3"></textarea>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 ms-5 my-5 ">
                    <button name="submit" type="submit"  class="btn btn-outline text-dark py-1 px-5 bg-white fs-3 my-4">submit</button>

                </div>
            </div>
        </form>
        <div class="map ">

            <center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.1776172429036!2d72.53228147519029!3d23.09059297912615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e833af6f39347%3A0xf1db9065daea7008!2sSilver%20Oak%20University!5e0!3m2!1sen!2sin!4v1683356514710!5m2!1sen!2sin" width="600" height="450" style="border:0; height: 300px; margin-bottom: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>

        </div>
    </div>
    <!-- footer -->
    <div class="container-fluid" style="background-color: #072136;">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">

                <ul>
                    <li class="text-white mb-4 fs-4"> JAMES CONSULTING</li>
                    <li class="text-white">500 Terry Francine Street,</li>
                    <li class="text-white">San Francisco, CA 94158</li>
                    <li class="text-white">Mail: info@mysite.com</li>
                    <li class="text-white">Tel: 123-456-7890</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">

                <ul>
                    <li class="text-white mb-4 fs-4">Menu</li>
                    <li><a href="./28-04-2023about.html" id="href" class="text-white">About</a></li>
                    <li><a href="./28-04-2023project.html" id="href" class="text-white">Project</a></li>
                    <li><a href="./28-04-2023price.html" id="href" class="text-white">Services</a></li>
                    <li><a href="./28-04-2023price.html" id="href" class="text-white">Plans & pricing</a></li>
                    <li><a href="" id="href" class="text-white">Tools & Tips</a></li>
                    <li><a href="./28-04-2023contact.html" id="href" class="text-white">Contact</a></li>
                </ul>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <p class="text-white mb-4 fs-4">SOCIALS</p>
                <span> <i class="fa-brands fa-facebook text-white"></i>
                    <i class="fa-brands fa-twitter text-white"></i></span>
                <p class="text-white">© 2035 by JAMES CONSULTING.</p>
                <p class="text-white">Powered and secured by Wix</p>


            </div>
        </div>
    </div>


    







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>