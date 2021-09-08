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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Roboto+Condensed&display=swap"
        rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CoronaVirus Updates</title>    <style>
        .fa-facebook-square {
    color: #3b5998;
}

.fa-instagram {
    color: #C13584;
}

.fa-twitter {
    color: #3f729b;
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
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="world.php">Covid-19 World Updates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="india.php">Covid-19 India Updates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact Us</a>
                </li>

            </ul>

        </div>
    </nav>


    <section class="corona_update container-fluid">
        <div class="mb-3">
            <h3 class="text-uppercase text-center covid mt-5">Covid-19 Updates India</h3>
        </div>

<div class="table-responsive">
    <table style="background-color:black;color:white" class="table table-bordered table-striped text-center" id="table_val">
        <tr>
            <th>STATES</th>
            <th>LAST UPDATE</th>
            <th>CONFIRMED CASE</th>
            <th>ACTIVE CASE</th>
            <th>RECOVERED CASE</th>
            <th>DEATHS</th>
        </tr>


        
    </table>
    <div class="text-center">
    <p>Results may vary this is because it is possible may be data is not uploaded by the system.</p>
    </div>
</div>
    </section>

    <div class="container scrooltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>

         <!-- <footer></footer> -->
    <footer class="mt-5">
        <div class="icon">
            <div>
                <h1 class="text-center text-white pt-3 pb-1">Follow me on social sites. </h1>
            </div>
           <div class="d-flex align-items-center justify-content-center pt-3 pb-3"> <a href="https://www.instagram.com/__v.a.r.u.n___/?hl=en" class="fa fa-instagram fa-5x pl-5"></a>
            <a href="https://www.facebook.com/varun.kumar9811" class="fa fa-facebook-square fa-5x pl-5"></a>
            <a href="https://twitter.com/Varunkumar9873" class="fa fa-twitter fa-5x pl-5"></a></div>

        <div class="footer_style text-white text-center dark">
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
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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


function fetch(){
    $.get("https://api.covid19india.org/data.json",function(data){
        console.log(data["statewise"].lenght);
        let table_val=document.getElementById("table_val")

        for(let i=1;i<(data['statewise'].length);i++){
            let x=table_val.insertRow()
            x.insertCell(0);
            table_val.rows[i].cells[0].innerHTML=data['statewise'][i-1]['state'];
            table_val.rows[i].cells[0].style.background='grey'
            table_val.rows[i].cells[0].style.color='black'


            x.insertCell(1);
            table_val.rows[i].cells[1].innerHTML=data['statewise'][i-1]['lastupdatedtime'];
            table_val.rows[i].cells[1].style.background='yellow'
            table_val.rows[i].cells[1].style.color='black'

            x.insertCell(2);
            table_val.rows[i].cells[2].innerHTML=data['statewise'][i-1]['confirmed'];
            table_val.rows[i].cells[2].style.background='skyblue'
            table_val.rows[i].cells[2].style.color='black'

            x.insertCell(3);
            table_val.rows[i].cells[3].innerHTML=data['statewise'][i-1]['active'];
            table_val.rows[i].cells[3].style.background='orange'
            table_val.rows[i].cells[3].style.color='black'


            x.insertCell(4);
            table_val.rows[i].cells[4].innerHTML=data['statewise'][i-1]['recovered'];
            table_val.rows[i].cells[4].style.background='green'
            table_val.rows[i].cells[4].style.color='black'


            x.insertCell(5);
            table_val.rows[i].cells[5].innerHTML=data['statewise'][i-1]['deaths'];
            table_val.rows[i].cells[5].style.background='red'
            table_val.rows[i].cells[5].style.color='black'

        }
    })
}
// $(document).ready(function(){
//      $(".count").counterUp({
//         delay: 10,
//         time: 3000
//     })
//     Get the button
// })

    </script>
</body>

</html>
