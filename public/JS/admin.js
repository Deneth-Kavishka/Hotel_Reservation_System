document.addEventListener('DOMContentLoaded', function() {
    // Chart setup using Chart.js
    const ctx = document.getElementById('orderChart').getContext('2d');
    new Chart(ctx, { /* chart data and options */ });

    const roomCtx = document.getElementById('roomChart').getContext('2d');
    new Chart(roomCtx, { /* chart data and options */ });
    
    // Modal handling functions
    window.openCreateOrder = function() { document.getElementById('createOrderModal').classList.add('show'); };
    window.closeCreateOrder = function() { document.getElementById('createOrderModal').classList.remove('show'); };
    window.openMemberRegistration = function() { document.getElementById('memberRegistrationModal').classList.add('show'); };
    window.closeMemberRegistration = function() { document.getElementById('memberRegistrationModal').classList.remove('show'); };

    // Calculate total with discount
    window.calculateTotal = function() {
        const discount = parseFloat(document.getElementById('discount').value) || 0;
        const totalField = document.getElementById('total');
        let total = 1000; // Example base rate
        total -= total * (discount / 100);
        totalField.value = total.toFixed(2);
    };

    // Send Order
    // window.sendOrder = function() {
    //     const email = document.getElementById('email').value;
    //     const orderDetails = "Booking Details:\n" + /* build order details */
    //     alert(`Email sent to ${email} with the details:\n${orderDetails}`);
    //     closeCreateOrder();
    // };
});

document.addEventListener('DOMContentLoaded', function() {
    fetchOrders();

    // Chart setup using Chart.js
    const ctx = document.getElementById('orderChart').getContext('3d');
    new Chart(ctx, { /* chart data and options */ });

    const roomCtx = document.getElementById('roomChart').getContext('2d');
    new Chart(roomCtx, { /* chart data and options */ });

    const foodCtx = document.getElementById('foodChart').getContext('2d');
    new Chart(foodCtx, { /* chart data and options */ });

    const employeeCtx = document.getElementById('employeeChart').getContext('2d');
    new Chart(employeeCtx, { /* chart data and options */ });
});

function openCreateOrder() {
    $('#createOrderModal').modal('show');
}

function openMemberRegistration() {
    $('#memberRegistrationModal').modal('show');
}

document.addEventListener('DOMContentLoaded', function() {
    fetchOrders();

    // Chart setup using Chart.js with animation
    let orderChart = createChart('orderChart', 'daily');
    createChart('roomChart', 'weekly');
    createChart('foodChart', 'monthly');
    createChart('employeeChart', 'daily');
});

function openCreateOrder() {
    $('#createOrderModal').modal('show');
}

function openMemberRegistration() {
    $('#memberRegistrationModal').modal('show');
}

function fetchOrders() {
    fetch('/get-orders')
        .then(response => response.json())
        .then(data => {
            const orderList = document.getElementById('orderList');
            orderList.innerHTML = ''; // Clear existing data

            data.forEach(order => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${order.id}</td>
                    <td>${order.customer_name}</td>
                    <td>${order.package}</td>
                    <td>${parseFloat(order.total).toFixed(2)}</td>
                `;
                orderList.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching orders:', error));
}

// Function to create chart
function createChart(chartId, interval) {
    const ctx = document.getElementById(chartId).getContext('2d');
    const config = {
        type: 'line',
        data: generateChartData(interval),
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        color: '#fff'
                    }
                }
            },
            scales: {
                x: { ticks: { color: '#ffffff' } },
                y: { ticks: { color: '#ffffff' } }
            },
            animations: {
                tension: { duration: 1000, easing: 'easeInOutBounce', from: 0.3, to: 0.5, loop: true }
            }
        }
    };
    return new Chart(ctx, config);
}

// Function to update the chart data based on interval
function updateOrderChart(interval) {
    orderChart.data = generateChartData(interval);
    orderChart.update();
}

// Function to generate random data for chart based on interval
function generateChartData(interval) {
    let labels, data;

    if (interval === 'daily') {
        labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        data = Array.from({ length: 7 }, () => Math.floor(Math.random() * 100));
    } else if (interval === 'weekly') {
        labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
        data = Array.from({ length: 4 }, () => Math.floor(Math.random() * 400));
    } else {
        labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        data = Array.from({ length: 12 }, () => Math.floor(Math.random() * 1000));
    }

    return {
        labels: labels,
        datasets: [{
            label: `Orders (${interval})`,
            data: data,
            borderColor: 'rgba(255, 159, 64, 1)',
            backgroundColor: 'rgba(255, 159, 64, 0.2)',
            borderWidth: 2,
            fill: true,
            tension: 0.4
        }]
    };
}
