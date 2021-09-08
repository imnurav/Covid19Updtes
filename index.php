<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CoronaVirus Updates</title>
    <style>
    .fa-facebook-square {
        color: #3b5998;
    }

    .fa-instagram {
        color: #C13584;
    }

    .fa-twitter {
        color: #3f729b;
    }
    body{
        background-color:#d9e8b5;
    }
    </style>
</head>

<body onload="fetch()">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#symptoms">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#prevention">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="world.php">Covid-19 World Updates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="india.php">Covid-19 India Updates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contactus">Contact Us</a>
                </li>

            </ul>

        </div>
    </nav>
    <div class="main_header" id="home">
        <!-- <h1 class="text-center">corona virus</h1> -->

        <div class="row w-100 h-100 " >
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside ani w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="corona.jpg" alt="" srcset="" height="300" width="300">
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-1">
                <div class="rigthside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1 class="text-center">
                        Let's Stay Safe & Fight Together Against Cor <span class="corona_rot"><img src="coronalogo.png"
                                height="50" width="50"></span> na Virus
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <section class="corona_update container-fluid">
        <div class="mb-3">
            <h3 class="text-uppercase text-center covid">Covid-19 Updates</h3>
        </div>
        
        <div  class="table-responsive" id="worldupdates">
            <table style="background-color:black;color:white" class="table table-bordered table-striped text-center" id="table_value">
                <tr>
                    <th>Country</th>
                    <th>Total Confirmed</th>
                    <th>Total Recovered</th>
                    <th>Total Deaths</th>
                    <th>New Confirmed</th>
                    <th>New Recovered</th>
                    <th>New Deaths</th>
                </tr>
            </table>
            <div>
                <p class="text-center">
                    Result can vary because of not updated the details on their Api's from Where i got the Data so wait for some moments it will show the exact information!!!
                </p>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <div class="container-fluid sub_section pt-3 pb-5" id="aboutus">
        <div class="section_header text-center mt-4">
            <h1>About Covid-19</h1>
        </div>
        <div class="row pt-4">
            <div class="col-lg-5 col-md-6 col-12 ml-5 mt-5">
                <img src="about.jpg" alt="" srcset="" width="90%">
            </div>
            <div class="col-lg-6 col-mg-6 col-12 mt-5">
                <h1>What is COVID-19(Corona-Virus)</h1>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

                    Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness
                    and recover without requiring special treatment.</p>
                <p> Older people, and those with underlying medical
                    problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more
                    likely to develop serious illness.
                </p>
                <p>
                    The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the
                    disease it causes and how it spreads. Protect yourself and others from infection by washing your
                    hands or using an alcohol based rub frequently and not touching your face.
                </p>
            </div>
        </div>
    </div>

    <!-- corona symptoms -->

    <div class="container-fluid pt-5 pb-5" id="symptoms">
        <div class="section_header text-center mb-5 mt-5">
            <h1>Coronavirus Symptoms</h1>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="cough.png" class="im-fluid bg-info" height="120" width="120">
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="fever.png" class="im-fluid bg-info" height="120" width="120">
                        <figcaption>Fever</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="nose.png" class="im-fluid bg-info" height="120" width="120">
                        <figcaption>Runny nose</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="tired.png" class="im-fluid bg-info" height="120" width="120">
                        <figcaption>Tired</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="cold.png" class="im-fluid bg-info" height="120" width="120">
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="breathe.png" class="im-fluid bg-info" height="120" width="120">
                        <figcaption>Breathing Problem(severe case)</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <!-- Prevention for coronavirus -->
    <div class="container-fluid sub_section pt-5 pb-5" id="prevention">
        <div class="section_header text-center mb-5 mt-5">
            <h1>Prevention Steps Against Coronavirus</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="wash.jpg" class="im-fluid bg-info" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands regulary fro 20 seconds,with soap and water or alcohol- based hand
                                sanitizer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="stayhome.jpg" class="im-fluid bg-info" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and self isolated from others int he household if you feel unwell.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="mask.jpg" class="im-fluid bg-info" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or
                                sneeze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="social.jpg" class="im-fluid bg-info" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Avoid close contact(1 meter or 3 feet) with people who are unwell Even who are well stay
                                away from them because you don't know from where he came.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="news.jpg" class="im-fluid bg-info" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay informed by watching news and follow the recommeded practices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="medical.jpg" class="im-fluid bg-info" height="90" width="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have fever,cough and difficulty in breathing,seek medicla care early.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- contact us -->
    <div class="container-fluid pt-5 pb-5" id="contactus">
        <div class="section_header text-center mb-5 mt-5">
            <h1>CONTACT US AS SOON AS POSSIBLE</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 offset-lg-2">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Name" name="username"
                                autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com" name="email"
                                required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" class="form-control" placeholder="your contact number" name="mobile"
                                required autocomplete="off">
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="coronasym[]"
                                value="Cold">
                            <label class="form-check-label" for="inlineCheckbox1">Cold</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]"
                                value="Fever">
                            <label class="form-check-label" for="inlineCheckbox2">Fever</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="coronasym[]"
                                value="Difficulty in Breathing">
                            <label class="form-check-label" for="inlineCheckbox3">Difficulty in Breathing</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="coronasym[]"
                                value="Feeling Weak">
                            <label class="form-check-label" for="inlineCheckbox4">Feeling Weak</label>
                        </div>
                        <div class="popup"></div>
                        <br>
                        <label>Describe Your Problem </label>
                        <textarea class="form-control" rows="3" name="message"></textarea>
                        <button type="submit" class="btn btn-primary mt-3" name="submit" id="checkBtn">Submit</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- top cursor -->
    <div class="container scrooltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>

    <!-- <footer></footer> -->
    <footer class="mt-5">
        <div class="icon">
            <div>
                <h1 class="text-center text-white pt-3 pb-1">Follow me on social sites. </h1>
            </div>
            <div class="d-flex align-items-center justify-content-center pt-3 pb-3"> <a
                    href="https://www.instagram.com/__v.a.r.u.n___/?hl=en" class="fa fa-instagram fa-5x pl-5"></a>
                <a href="https://www.facebook.com/varun.kumar9811" class="fa fa-facebook-square fa-5x pl-5"></a>
                <a href="https://twitter.com/Varunkumar9873" class="fa fa-twitter fa-5x pl-5"></a></div>

            <div class="footer_style text-white text-center">
                <p class="pt-3 pb-3">Copyright &copy; 2020 by Varun kumar</p>
            </div>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }


    $(document).ready(function() {
        $('#checkBtn').click(function() {
            checked = $("input[type=checkbox]:checked").length;

            if (!checked) {
                $(".popup").text("select atleast one").css("color", "red")
                return false;
            }

        });
    });

    function fetch() {
        $.get("https://api.covid19api.com/summary", function(data) {
            console.log(data["Countries"].lenght);
            let table_value = document.getElementById("table_value")

            for (let i = 1; i < (data['Countries'].length); i++) {
                let x = table_value.insertRow()
                x.insertCell(0);
                table_value.rows[i].cells[0].innerHTML = data['Countries'][i - 1]['Country'];
                table_value.rows[i].cells[0].style.background = 'purple'
                table_value.rows[i].cells[0].style.color = 'white'


                x.insertCell(1);
                table_value.rows[i].cells[1].innerHTML = data['Countries'][i - 1]['TotalConfirmed'];
                table_value.rows[i].cells[1].style.background = 'rgba(204,102,0)'
                table_value.rows[i].cells[1].style.color = 'white'

                x.insertCell(2);
                table_value.rows[i].cells[2].innerHTML = data['Countries'][i - 1]['TotalRecovered'];
                table_value.rows[i].cells[2].style.background = 'rgba(0,102,0)'
                table_value.rows[i].cells[2].style.color = 'white'

                x.insertCell(3);
                table_value.rows[i].cells[3].innerHTML = data['Countries'][i - 1]['TotalDeaths'];
                table_value.rows[i].cells[3].style.background = 'rgba(255,51,51)'
                table_value.rows[i].cells[3].style.color = 'white'


                x.insertCell(4);
                table_value.rows[i].cells[4].innerHTML = data['Countries'][i - 1]['NewConfirmed'];
                table_value.rows[i].cells[4].style.background = 'rgba(0,51,102)'
                table_value.rows[i].cells[4].style.color = 'white'


                x.insertCell(5);
                table_value.rows[i].cells[5].innerHTML = data['Countries'][i - 1]['NewRecovered'];
                table_value.rows[i].cells[5].style.background = 'rgba(25,51,0)'
                table_value.rows[i].cells[5].style.color = 'white'

                x.insertCell(6);
                table_value.rows[i].cells[6].innerHTML = data['Countries'][i - 1]['NewDeaths'];
                table_value.rows[i].cells[6].style.background = 'rgba(255,0,0)'
                table_value.rows[i].cells[6].style.color = 'white'

            }
        })
    }
    // $(document).ready(function(){
    //      $(".count").counterUp({
    //         delay: 10,
    //         time: 3000
    //     })
    // })
    </script>
</body>

</html>

<?php
include 'db.php';
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $symp=$_POST['coronasym'];
    $message=$_POST['message'];
    $chk="";
    foreach($symp as $chk1){
        $chk .=$chk1.",";
    }
    $insertquery="insert into details(username,email,mobile,symptoms,message) values('$username','$email','$mobile','$chk','$message')";

$query1=mysqli_query($con,$insertquery);
if($query1){
    ?>
<script>
alert("Data inserted successful")
</script>
<?php
}
 else{
    ?>
<script>
alert("Data inserted failed")
</script>
<?php
}
} 
?>