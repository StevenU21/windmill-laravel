document.addEventListener('DOMContentLoaded', function () {
    // Use Chart from npm (imported in app.js as Chart/auto)
    // Pie chart (Revenue / Doughnut)
    const pieEl = document.getElementById('pie');
    if (pieEl && typeof Chart !== 'undefined') {
        new Chart(pieEl, {
            type: 'pie',
            data: {
                labels: ['Shirts', 'Shoes', 'Bags'],
                datasets: [{
                    data: [300, 50, 100],
                    backgroundColor: ['#3b82f6', '#14b8a6', '#7c3aed'],
                    hoverOffset: 6,
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });
    }

    // Line chart (Traffic / Lines)
    const lineEl = document.getElementById('line');
    if (lineEl && typeof Chart !== 'undefined') {
        new Chart(lineEl, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [
                    {
                        label: 'Organic',
                        data: [30, 50, 40, 60, 70, 60, 80],
                        borderColor: '#14b8a6',
                        backgroundColor: 'rgba(20,184,166,0.15)',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 3
                    },
                    {
                        label: 'Paid',
                        data: [20, 40, 30, 50, 60, 50, 70],
                        borderColor: '#7c3aed',
                        backgroundColor: 'rgba(124,58,237,0.12)',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 3
                    }
                ]
            },
            options: {
                responsive: true,
                interaction: { mode: 'index', intersect: false },
                plugins: { legend: { position: 'bottom' } },
                scales: {
                    x: { ticks: { color: '#6b7280' }, grid: { color: 'rgba(15,23,42,0.03)' } },
                    y: { ticks: { color: '#6b7280' }, grid: { color: 'rgba(15,23,42,0.03)' } }
                }
            }
        });
    }

    // Bars chart (if present on pages/charts.blade.php)
    const barsEl = document.getElementById('bars');
    if (barsEl && typeof Chart !== 'undefined') {
        new Chart(barsEl, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [
                    {
                        label: 'Shoes',
                        data: [50, 60, 70, 80, 90, 100, 110],
                        backgroundColor: '#14b8a6'
                    },
                    {
                        label: 'Bags',
                        data: [30, 40, 50, 60, 70, 80, 90],
                        backgroundColor: '#7c3aed'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } },
                scales: {
                    x: { ticks: { color: '#6b7280' }, grid: { color: 'rgba(15,23,42,0.03)' } },
                    y: { ticks: { color: '#6b7280' }, grid: { color: 'rgba(15,23,42,0.03)' } }
                }
            }
        });
    }
});
