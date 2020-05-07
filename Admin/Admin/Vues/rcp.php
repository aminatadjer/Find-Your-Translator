<?php

$mysqli= new mysqli('localhost', 'root', '', 'webproject');

 if  (isset( $_POST['devi'])&& isset($_POST['devi1']) &&  isset($_POST['devi2'])){
    $dateDD=$_POST['trad1'];
    $dateFF=$_POST['trad2'];
$r=0;
$s=0;
$a=0;
$b=0;
$c=0;

    
  $query="select * from `documentsoumis` where `date` BETWEEN '$dateDD' AND '$dateFF'";
     $sql1= mysqli_query($mysqli, $query);
     foreach ($sql1 as $sql){
         if ($sql['devisVsTrad']==0){
             $r=$r+1;
         }

         else $s=$s+1;
         if ($sql['type']=="General"){
             $a=$a+1;
         }
         if ($sql['type']=="Site"){
             $b=$b+1;
         }
     }

    


    ?> 
    <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
crossorigin="anonymous">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
<script src="./dist/Chart.bundle.js"></script>
</head>
<div class="container" style="padding-top: 10vh">
<div class="row">
    <div class="col-md-6">
<canvas id="myChart" width="100" height="100"></canvas>
</div>
<div class="col-md-6">
<canvas id="myChart2" width="100" height="100"></canvas>
</div>
</div>
</div>
<style type="text/css">
        .container {
            width: 60%;
            margin: 15px auto;
        }
    </style>
<script>
        var ctx1 = document.getElementById("myChart2");
        var myChart = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ["General","Site","Sci",],
                datasets: [{
                    barPercentage: 0.1,
    barThickness: 100,

    BarLength: 5,
                        label: 'de traduction et devis',
                        data: [<?php echo '"' . $a . '"'; ?> , <?php echo '"' . $b . '",'; ?>, <?php echo '"' . 0 . '",'; ?>,],
                        backgroundColor: [
                            'rgba(255,99,132,1)','rgba(54, 162, 235, 1)', 'rgb(44,255,31)'
                
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)','rgba(54, 162, 235, 1)','rgb(44,255,31)'
                        ],

                        borderWidth: 1
                    }]
            },

        });
    </script>
    <script>
          var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Nombre de Traduction","Nombre de devis"],
                datasets: [{
                    barPercentage: 0.4,
    barThickness: 100,

    BarLength: 5,
                        label: 'de traduction',
                        data: [<?php echo '"' . $r . '"'; ?>,<?php echo '"' . $s . '",'; ?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)','rgba(54, 162, 235, 1)'
                
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)','rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
            },
            options: {
                scales: {
                    yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                }
            }
        });
        </script>

<?php
       
    }
