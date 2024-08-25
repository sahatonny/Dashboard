<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link
    rel="stylesheet"
    href="../contrast-bootstrap-pro/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="../contrast-bootstrap-pro/css/cdb.css" />
  <script
    src="../contrast-bootstrap-pro/js/cdb.js"></script>
  <script
    src="../contrast-bootstrap-pro/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"> </script>
  <title>Practice</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
  <script src="https://d3js.org/d3.v4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>






</head>
{{--<style>
  .chart-container {
    width: 50%;
    height: 50%;
    margin: auto;
  }

  .flex-container {
    display: flex;
  }
</style>
--}}

{{--<style>
    /*FOR  3D BARS*/
* {
   list-style: none;
   margin: 0;
   font-family: var(--font);
}

body {
   background: #f1f0f0;
   display: flex;
   justify-content: center;
   align-items: center;
}

.container {
   position: relative;
   width: 700px;
   height: 600px;
   background: var(--container-background);
   border: 1px solid var(--container-border) !important;
   border-top: none;
   border-right: none;
   margin-top: 100px;
   z-index: 0;
   border-radius: 2vh;
   box-shadow: inset -0px 2px 2px #bbb, inset -2px -2px 2px #111111;
}

#v-meter {
   position: relative;
   top: 0px;
   left: -30px;
   width: 700px;
   height: 500px;
   z-index: 100;
}

#v-meter li {
   position: relative;
   left: -11px;
   height: 100px;
   border-bottom: solid 1px #1785a7;
}

#v-meter li::before {
   content: '';
   position: absolute;
   top: -15px;
   left: -30px;
   height: 100%;
   border-bottom: solid 1px #1785a7;
   transform: skewY(45deg) !important;
   width: 30px;
}

#v-meter li div {
   position: absolute;
   width: 80px;
   font-size: 17px !important;
   left: -115px;
   padding-top: 55px;
   color: rgb(241, 102, 102);
   text-align: right;
}

.bar {
   width: 50px;
   height: 32%;
   background: rgb(243, 192, 148);
   position: absolute;
   left: 10%;
   bottom: 5px;
   z-index: 1000;
   margin: 0 40px;
}

.bar::after {
   content: '';
   width: 50px;
   height: 20px;
   background: rgb(238, 196, 159);
   position: absolute;
   top: -20px;
   left: -10px;
   transform: skewX(45deg);
}

.bar::before {
   content: '';
   width: 20px;
   height: 100%;
   background: rgb(243, 198, 158);
   position: absolute;
   top: -10px;
   left: -20px;
   transform: skewY(45deg);
}

.two {
   left: 25%;
   height: 55%;
}

.three {
   left: 40%;
   height: 79%;
}

.four {
   left: 55%;
   height: 89%;
}

.five {
   left: 70%;
   height: 69%;
}
</style>--}}




{{--<style>
    /* FOR HOVERING BARS*/

    *{
  margin:0;
  padding:0;
  }
body{
  background:rgb(245, 244, 244);
}
                  /*STYLE FOR CONTAINER*/
#container{
  background:rgb(250, 248, 248);
  width:80vw;
  height:80vh;
  margin: 50vh auto;
  border-radius:20px;
  display:flex;
  overflow:hidden;
  position:relative;
}
/*STYLE FOR BARS*/
.bar{

    /*MAKING BARS*/
  width:10vw;
  height:80px;
  background:#c3e4f3;
  margin:10px;
  margin-bottom:0px;
  border-radius:15px 15px 0 0 ;

           /*DIRECTING BARS TO LEFT*/
   float:left;

          /*POSITIONING BARS TO BOTTOM*/
   margin-top:auto;
  position:relative;


}

    /*BAR CHART RISING*/

#container:hover .bar:nth-child(1){
  background:rgb(243, 157, 243);
  transition: linear 1.5s;
  height:250px;
  }
                /*HOVER EFFECT FOR BARS*/

#container:hover .bar:nth-child(2){
  background:rgb(241, 200, 241);
  transition: linear 1.5s;
  height:300px;
    box-shadow: 5px 30px 8px  #5D4037;
  }
#container:hover .bar:nth-child(3){
  background:rgb(241, 200, 241);
  transition: linear 1.5s;
  height:250px;
  box-shadow: 5px 30px 8px  #5D4037;
  }
#container:hover .bar:nth-child(4){
  background:rgb(241, 200, 241);
  transition: linear 1.5s;
  height:190px;
  }
#container:hover .bar:nth-child(5){
  background:rgb(241, 200, 241);
  transition: linear 1.5s;
  height:260px;
  box-shadow: 5px 30px 8px  #5D4037;
  }
#container:hover .bar:nth-child(6){
  background:rgb(241, 200, 241);
  transition: linear 1.5s;
  height:340px;
  box-shadow: 5px 30px 8px  #5D4037;
  }
#container:hover .bar:nth-child(7){
  background:rgb(241, 200, 241);
  transition: linear 1.5s;
  height:300px;
  box-shadow: 5px 30px 8px  #5D4037;
  }

                  /*STYLE FOR HEADING*/
#head{
  color:peru;
  white-space:nowrap;
  position:absolute;
  background:rgb(247, 243, 247);
  font-size:2.2em;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow:2px 2px 3px lavender;
  /*display:none;*/
  opacity: 0;
}
              /*HOVER EFFECT FOR HEADING*/

#container:hover #head{
 /* display:block;*/
  opacity: 1;
  transition: linear 1s;

}

/*Tramsition types- linear, ease, ease-in, ease-out, ease-in-out, steps, cubic*/

                /*STYLE FOR PARAGRAPH(SHOWING %)*/
.para{
   text-align:center;
  color:white;
  font-size:1em;
  font-weight:bold;
  padding-top:10px;
  opacity:0;
}
                /*HOVER EFFECT FOR PARAGRAPH*/

#container:hover .para{
  opacity:1;
  transition: ease-in 800ms;
}
</style>--}}



<STYLE>
    .wrapper {
      display: flex;
      padding: 0;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      cursor: pointer; /* Make it clear that the wrapper is clickable */
    }

    .menu-item {
      width: 150px;
      max-height: 100px;
      background-color: darkslateblue;
      color: white;
      border-radius: 8px;
      text-align: center;
      padding: 8px;
      margin-bottom: 4px;

      transform-origin: 0 0;
      transform: translateX(-100px);
      opacity: 0;

      transition-property: transform, opacity;
      transition-duration: 1s;
      transition-timing-function: ease;
    }

    .wrapper:focus-within .menu-item {
      transform: translateX(0);
      opacity: 100%;
    }

    .wrapper .menu-item:nth-of-type(1) {
      transition-delay: 0ms;
    }

    .wrapper .menu-item:nth-of-type(2) {
      transition-delay: 100ms;
    }

    .wrapper .menu-item:nth-of-type(3) {
      transition-delay: 200ms;
    }

    .wrapper .menu-item:nth-of-type(4) {
      transition-delay: 300ms;
    }

    .wrapper .menu-item:nth-of-type(5) {
      transition-delay: 400ms;
    }

    .wrapper p {
      font-weight: bold;
      margin-bottom: 8px;
    }

    /* Decorative styles */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    button {
      background: none;
      border: none;
      padding: 0;
      margin: 0;
      cursor: pointer;
    }

    .wrapper:focus-within {
      outline: none; /* Remove focus outline */
    }
    </STYLE>








<body>
<div class="container">

<h1> Click here!</h1>
</div>






<!--  <div class="card chart-container">
    <canvas id="chart"></canvas>
  </div>


    <script>
      const ctx = document.getElementById("chart").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["sunday", "monday", "tuesday",
          "wednesday", "thursday", "friday", "saturday"],
          datasets: [{
            label: 'Last week',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });
</script>-->


<!--<script>
    const ctx = document.getElementById("chart").getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["rice", "yam", "tomato", "potato",
        "beans", "maize", "oil"],
        datasets: [{
          label: 'food Items',
          backgroundColor: 'rgba(161, 198, 247, 1)',
          borderColor: 'rgb(47, 128, 237)',
          data: [300, 400, 200, 500, 800, 900, 200],
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
            }
          }]
        }
      },
    });
</script>-->

<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script>
    $(document).ready(function() {
        var ctx = $("#chart-line");
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Spring", "Summer", "Fall"],
                datasets: [{
                    data: [1200, 1700, 800],
                    backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(21, 0, 255, 0.5)", "rgba(246, 255, 0, 0.5)"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Weather'
                        }
                    }
        } );
    });
</script>-->


<!--<canvas id="studentChart" width="800" height="100"></canvas>
    <script>
        const ctx = document.getElementById('studentChart').getContext('2d');
        const studentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bangla(35)','English(35)','Math(40)', 'Science(15)', 'GK(50)', 'ICT(15)', 'Geography(10)'],
                datasets: [
                    {
                        label: 'Passed',
                        data: [30, 15, 25, 18, 20, 32, 15],
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Failed',
                        data: [-5, -20, -8, -10, -12, -15, -5],
                        backgroundColor: 'rgba(255, 99, 132, 0.6)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true,
                        stacked: true,
                        // Ensure bars are centered with zero as baseline
                        ticks: {
                            callback: function(value) {
                                return Math.abs(value);
                            }
                        }
                    }
                }
            }
        });
    </script>-->




    <!--<button id="downloadPdf" type="submit" method="post">Download</button>
    <canvas id="studentChart" width="600" height="100"></canvas>
    <script>
        const ctx = document.getElementById('studentChart').getContext('2d');
        const studentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bangla(35)','English(35)','Math(40)', 'Science(15)', 'GK(50)', 'ICT(15)', 'Geography(10)'],
                datasets: [
                    {
                        label: 'Passed Students',
                        data: [30, 15, 25, 18, 20, 32, 15],
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Failed Students',
                        data: [-5, -20, -8, -10, -12, -15, -5],
                        backgroundColor: 'rgba(255, 99, 132, 0.6)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true,
                        stacked: true,
                        ticks: {
                            callback: function(value) {
                                return Math.abs(value);
                            }
                        }
                    }
                }
            }
        });

        document.getElementById('downloadPdf').addEventListener('click', () => {
            html2canvas(document.getElementById('studentChart')).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF('p', 'mm', 'a4');
                const imgWidth = 210; // A4 width in mm
                const pageHeight = 295; // A4 height in mm
                const imgHeight = canvas.height * imgWidth / canvas.width;
                let heightLeft = imgHeight;

                let position = 0;

                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;

                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }

                pdf.save('chart.pdf');
            });
        });
    </script>-->




    <!--<script>
        const passingMarks = [15, 15, 15, 8, 30, 8, 6]; // Passing marks for each subject
        const scores = [25, 5, 30, 85, -8, 4, -5];      // Scores for each subject
        const labels = ['Bangla(35)','English(35)','Math(40)', 'Science(15)', 'GK(50)', 'ICT(15)', 'Geography(10)'];

        // Determine the colors based on passing marks
        const backgroundColors = scores.map((score, index) => {
            return score >= passingMarks[index] ? 'rgba(75, 192, 192, 0.6)' : 'rgba(255, 99, 132, 0.6)';
        });

        const borderColors = scores.map((score, index) => {
            return score >= passingMarks[index] ? 'rgba(75, 192, 192, 1)' : 'rgba(255, 99, 132, 1)';
        });

        const ctx = document.getElementById('studentChart').getContext('2d');
        const studentChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: labels,
        datasets: [
            {
                label: 'Students Performance',
                data: scores,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 1,
            }
        ]
        },
        options: {
        plugins: {
            datalabels: {
                anchor: 'end',
                align: 'end',
                color: '#000',
                font: {
                    weight: 'bold',
                    size: 12,
                },
                offset: 2, // Adjust this value to control the distance from the bar
                formatter: function(value) {
                    return value; // Display the score on top of the bar
                }
            }
        },
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return value;
                    }
                }
            }
        }


         }
        });




        document.getElementById('downloadPdf').addEventListener('click', () => {
            html2canvas(document.getElementById('studentChart')).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF('p', 'mm', 'a4');
                const imgWidth = 210; // A4 width in mm
                const pageHeight = 295; // A4 height in mm
                const imgHeight = canvas.height * imgWidth / canvas.width;
                let heightLeft = imgHeight;

                let position = 0;

                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;

                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }

                pdf.save('chart.pdf');
            });
        });
    </script>-->

    {{--<canvas id="studentChart" width="800" height="80"></canvas>
    <div class="content" width="100">

        <button id="download_Btn">
            Download Table Data
        </button>
        <script>
            const passingMarks = [15, 20, 20, 10, 25, 10, 7]; // Passing marks for each subject
            const scores = [25, 5, 30, 15, -8, 4, -5];      // Scores for each subject
            const labels = ['Bangla(35)', 'English(35)', 'Math(40)', 'Science(15)', 'GK(50)', 'ICT(15)', 'Geography(10)'];

            // Determine the colors based on passing marks
            const backgroundColors = scores.map((score, index) => {
                return score >= passingMarks[index] ? 'rgba(75, 192, 192, 0.6)' : 'rgba(255, 99, 132, 0.6)';
            });

            const borderColors = scores.map((score, index) => {
                return score >= passingMarks[index] ? 'rgba(75, 192, 192, 1)' : 'rgba(255, 99, 132, 1)';
            });

            const ctx = document.getElementById('studentChart').getContext('2d');

            const studentChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Students Performance',
                            data: scores,
                            backgroundColor: backgroundColors,
                            borderColor: borderColors,
                            borderWidth: 1,
                        }
                    ]
                },
                options: {
                    plugins: {
                        datalabels: {
                            anchor: 'end',
                            align: 'end',
                            color: '#000',
                            font: {
                                weight: 'bold',
                                size: 12,
                            },
                            offset: 2,
                            formatter: function(value) {
                                return value;
                            }
                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value;
                                }
                            }
                        }
                    },
                    onClick: function(evt, elements) {
                        if (elements.length > 0) {
                            console.log({"elements[0]":elements[0]})
                            const elementIndex = elements[0].index;
                            const label = labels[elementIndex];
                            const score = scores[elementIndex];

                            // Trigger different alerts based on the clicked bar
                            alert(`You clicked on ${label}. Score: ${score}`);
                        }
                    }
                }
            });

            const download_button =
            document.getElementById('download_Btn');
        const content =
            document.getElementById('content');

        download_button.addEventListener
            ('click', async function () {
                const filename = 'table_data.pdf';

                try {
                    const opt = {
                        margin: 1,
                        filename: filename,
                        image: { type: 'jpeg', quality: 0.98 },
                        html2canvas: { scale: 2 },
                        jsPDF: {
                            unit: 'in', format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    await html2pdf().set(opt).
                        from(content).save();
                } catch (error) {
                    console.error('Error:', error.message);
                }
            });





        </script>
    </div>--}}




    <!--<canvas id="ppChart" width="800" height="80"></canvas>
    <script>
            const ctx = document.getElementById('ppChart').getContext('2d');
            const studentChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Bangla(35)','English(35)','Math(40)', 'Science(15)', 'GK(50)', 'ICT(15)', 'Geography(10)'],
                    datasets: [
                        {
                            label: 'Passed Students',
                            data: [30, 0, 25, 0, 20, 0, 15],
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                        },
                        {
                            label: 'Failed Students',
                            data: [0, -20, 0, -10, 0, -15, 0],
                            backgroundColor: 'rgba(255, 99, 132, 0.6)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1,
                        }
                    ]
                },
                options: {
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true,
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return Math.abs(value);
                                }
                            }
                        }
                    }
                }
            });
    </script>



    <div class="flex" width="100">
        <div >
        <canvas id="examChart" width="800" height="100"></canvas>
        </div>
            <script>
            const ctx = document.getElementById('examChart').getContext('2d');
            const examChart = new Chart(ctx, {
              type: 'line',
                  data: {
              labels: ['Bangla(35)','English(35)','Math(40)', 'Science(15)', 'GK(50)', 'ICT(15)', 'Geography(10)'],
               datasets: [
                 {
                    label: 'Previous Exam',
                    data: [25, 35, 30, 2, 45, 6, 8],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1,
                            },
                            {
                                label: 'Recent Exam',
                                data: [30, 20, 35, 14, 29, 12, 6],
                                borderColor: 'rgba(255, 99, 132, 1)',
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderWidth: 1,
                            }
                        ]
                    },
                    options: {
                        scales: {
                            x: {
                                beginAtZero: true
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }

                });
                </script>
    </div>-->


    <!--<h1>
        How to Download PDF File on Button
        Click using JavaScript
    </h1>
    <p>
        You can add your content here...
    </p>
    <div id="content">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Employee 1</td>
                    <td>30</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td>Employee 2</td>
                    <td>25</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Employee 3</td>
                    <td>21</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Employee 4</td>
                    <td>22</td>
                    <td>India</td>
                </tr>
            </tbody>
        </table>
    </div>
    <button id="download_Btn">
        Download Table Data
    </button>


    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js">
    </script>

    <script>
        const download_button =
            document.getElementById('download_Btn');
        const content =
            document.getElementById('content');

        download_button.addEventListener
            ('click', async function () {
                const filename = 'table_data.pdf';

                try {
                    const opt = {
                        margin: 1,
                        filename: filename,
                        image: { type: 'jpeg', quality: 0.98 },
                        html2canvas: { scale: 2 },
                        jsPDF: {
                            unit: 'in', format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    await html2pdf().set(opt).
                        from(content).save();
                } catch (error) {
                    console.error('Error:', error.message);
                }
            });
    </script>-->

<!-- Graph bar for 3D Graph -->
    {{--<div class="container">

            <!-- Bar one -->
            <div class="bar one"></div>
            <!-- Bar two -->
            <div class="bar two"></div>
            <!-- Bar three -->
            <div class="bar three"></div>
            <div class="bar four"></div>
            <div class="bar five"></div>


            <!-- Using the id="v-meter" -->
            <ul id="v-meter">
            <li><div>20m</div></li>
            <li><div>15m</div></li>
            <li><div>10m</div></li>
            <li><div>5m</div></li>
            <li><div>1m</div></li>
            </ul>
   </div>--}}





<!--CONTAINER FOR GRAPHS-->
   {{-- <div id="container" height="800" width="100">
    <!--HEADING-->
      <h1 id="head">Our Profits In 2019</h1>
    <!--BARS FOR GRAPH-->
      <div class="bar"><p class="para">60%</p></div>
      <div class="bar"><p class="para">40%</p></div>
      <div class="bar"><p class="para">20%</p></div>
      <div class="bar"><p class="para">50%</p></div>
      <div class="bar"><p class="para">90%</p></div>
      <div class="bar"><p class="para">75%</p></div>

    </div>--}}

    <div class="wrapper" tabindex="0">
        <button class="menu-item">Menu Item 1</button>
        <button class="menu-item">Menu Item 2</button>
        <button class="menu-item">Menu Item 3</button>
        <button class="menu-item">Menu Item 4</button>
        <button class="menu-item">Menu Item 5</button>
      </div>



      <div class="modal-div-canvas js-chart">
        <div class="chart-canvas">
           <canvas id="openedCanvas" width="1" height="1"></canvas>
              <div class="chart-background"></div>
                  <span class="chart-unique-value">
                       <span class="js-count">
                          85
                       </span>
                       <span class="cuv-percent">%</span>
                  </span>
              </div>
        </div>
<script>



<!--datalebels plugin-->
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ mix('js/chart.js') }}"></script>




</body>
</html>
