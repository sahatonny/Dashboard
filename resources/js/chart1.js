import Chart from 'chart.js/auto';

const ctx = document.getElementById('studentChart').getContext('2d');
const studentChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Math', 'Science', 'English', 'History'],
        datasets: [
            {
                label: 'Passed Students',
                data: [30, 0, 25, 0],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
            },
            {
                label: 'Failed Students',
                data: [0, -20, 0, -10],
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
