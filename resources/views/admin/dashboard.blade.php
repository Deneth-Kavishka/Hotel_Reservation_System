<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="dark-theme">
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2 style="font-weight: bold; font-family: 'Times New Roman', Times, serif">Dashboard</h2>
            <a href="/admin/dashboard" class="active">Dashboard</a>
            <a href="#">Orders</a>
            <a href="/rooms">Rooms</a>
            <a href="#">Employees</a>
            <a href="#">Settings</a>
        </div>

        <!-- Main Content -->
        <div class="container">
            <h2 class="mt-4">Admin Dashboard</h2>

            <!-- Quick Actions -->
            <div class="mb-4">
                <button class="btn btn-primary" onclick="openCreateOrder()">Create Order</button>
                <button class="btn btn-secondary" onclick="openMemberRegistration()">Register Member</button>
            </div>
            
            <!-- Order List & Chart -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h4>Order List</h4>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Package</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="orderList">
                            <!-- Order data dynamically populated here -->
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 mb-4">
                    <h4>Orders Chart</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-outline-light btn-sm" onclick="updateOrderChart('daily')">Daily</button>
                        <button class="btn btn-outline-light btn-sm" onclick="updateOrderChart('weekly')">Weekly</button>
                        <button class="btn btn-outline-light btn-sm" onclick="updateOrderChart('monthly')">Monthly</button>
                    </div>
                    <div class="chart-container mt-3">
                        <canvas id="orderChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Room & Food Management Charts -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4>Room Availability</h4>
                    <div class="chart-container">
                        <canvas id="roomChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Food Management</h4>
                    <div class="chart-container">
                        <canvas id="foodChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Employee Availability Chart -->
            <div class="mt-4">
                <h4>Employee Availability</h4>
                <div class="chart-container">
                    <canvas id="employeeChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals for Create Order and Member Registration -->
    @include('admin.create_order')
    @include('admin.member_registration')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
