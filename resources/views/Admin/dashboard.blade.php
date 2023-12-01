@extends('admin.layouts.master')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header" style="margin-left: 30px; margin-top: 20px;margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #eee;">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <h1 style="font-size: 32px; color: #333; margin-bottom: 10px;">Welcome !</h1>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            
                            <li style="display: inline-block; margin-right: 5px; font-size: 14px;">&raquo;</li>
                            <li style="display: inline-block; font-size: 14px;">Administrator</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- /Page Header -->
            <br>

            <div class="row" style="margin-left: 170px">
                <!-- Cards Section -->
                <div class="col-xl-2 col-sm-6 col-12" >
                    <div style="border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);" class="card">
                        <div style="padding: 20px;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <span style="background-color: #ED6436; color: white; border-radius: 50%; padding: 16px;">
                                    <i class="fe fe-user" style="size: 30px"></i>
                                </span>
                                <div>
                                    <h3 style="margin-bottom: 5px;">35</h3>
                                    <h6 style="color: #333; font-size: 14px;">Users</h6>
                                </div>
                            </div>
                            <div style="margin-top: 15px;">
                                <div style="background-color: #ED6436; height: 8px; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 50%; background-color: #ff8c7f; height: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-12">
                    <div style="border-radius: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);" class="card">
                        <div style="padding: 20px;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <span style="background-color: #ED6436; color: white; border-radius: 50%; padding: 16px;">
                                    <i class="fe fe-home"></i>
                                </span>
                                <div>
                                    <h3 style="margin-bottom: 5px;">35</h3>
                                    <h6 style="color: #333; font-size: 14px;">Clinics</h6>
                                </div>
                            </div>
                            <div style="margin-top: 15px;">
                                <div style="background-color: #ED6436; height: 8px; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 50%; background-color: #ff8c7f; height: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
               

                <div class="col-xl-2 col-sm-6 col-12">
                    <div style="border-radius: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);" class="card">
                        <div style="padding: 20px;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <span style="background-color: #ED6436; color: white; border-radius: 50%; padding: 16px;">
                                    <i class="fe fe-money"></i>
                                </span>
                                <div>
                                    <h3 style="margin-bottom: 5px;">12 </h3>
                                    <h6 style="color: #333; font-size: 14px;">Profit</h6>
                                </div>
                            </div>
                            <div style="margin-top: 15px;">
                                <div style="background-color: #ED6436; height: 8px; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 50%; background-color: #ff8c7f; height: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-12">
                    <div style="border-radius: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);" class="card">
                        <div style="padding: 20px;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <span style="background-color: #ED6436; color: white; border-radius: 50%; padding: 10px;">
                                    <i class="fe fe-money"></i>
                                </span>
                                <div>
                                    <h3 style="margin-bottom: 5px;">35</h3>
                                    <h6 style="color: #333; font-size: 14px;">Clinics</h6>
                                </div>
                            </div>
                            <div style="margin-top: 15px;">
                                <div style="background-color: #ED6436; height: 8px; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 50%; background-color: #ff8c7f; height: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Cards Section -->
            </div>
       <!-- User Statistics Section -->
       <div class="col-xl-10" style="margin-top: 20px; margin-left:100px">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Statistics</h5>
                <canvas id="userStatsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- /User Statistics Section -->
</div>
</div>

<!-- Additional CSS -->
<style>
/* ... (existing styles) ... */
</style>

<!-- Chart.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>

<!-- User Statistics Chart Script -->
<script>
// User statistic data (example data)
const userData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    datasets: [{
        label: 'User Registrations',
        data: [100, 200, 150, 300, 250, 400],
        fill: false,
        borderColor: '#ED6436',
        tension: 0.4
    }]
};

// Get the canvas element
const userStatsCanvas = document.getElementById('userStatsChart').getContext('2d');

// Create the chart
const userStatsChart = new Chart(userStatsCanvas, {
    type: 'line',
    data: userData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            title: {
                display: false,
                text: 'User Registrations'
            }
        }
    }
});
</script>
<!-- /User Statistics Chart Script -->
@endsection