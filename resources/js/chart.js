import Chart from 'chart.js/auto';

const ctx = document.getElementById('examChart').getContext('2d');
const examChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Math', 'Science', 'English', 'History'],
        datasets: [
            {
                label: 'Previous Exam',
                data: [75, 85, 90, 80],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
            },
            {
                label: 'Recent Exam',
                data: [80, 90, 95, 85],
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 2,
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
