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
</head>
<style>
  .chart-container {
    width: 50%;
    height: 50%;
    margin: auto;
  }

  .flex-container {
    display: flex;
  }
</style>

<body>
  <div class="card chart-container">
    <canvas id="chart"></canvas>
  </div>




<!--<script>
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

    <canvas id="studentChart" width="800" height="80"></canvas>

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
    </div>




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






<!--datalebels plugin-->
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ mix('js/chart.js') }}"></script>




</body>
</html>
