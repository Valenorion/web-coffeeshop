<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Hero Section dengan Slider (Sama seperti Home) -->
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome, <?= session()->get('username') ?>!</span>
                    <h1 class="mb-4">Admin Dashboard</h1>
                    <p class="mb-4 mb-md-5">Kelola website Vermata dengan mudah melalui panel admin ini.</p>
                    <p>
                        <a href="<?= base_url('/menu') ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Manage Menu</a>
                        <a href="<?= base_url('/') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Website</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistik Cards (Mengikuti gaya ftco-section) -->
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Statistics</span>
                <h2 class="mb-4">Website Overview</h2>
                <p>Ringkasan data statistik website Vermata secara keseluruhan.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-18 text-center py-4 bg-white shadow-sm rounded">
                    <div class="icon mb-3">
                        <i class="icon-users" style="font-size: 48px; color: #c49b6f;"></i>
                    </div>
                    <div>
                        <strong class="number" data-number="<?= $total_visitors ?? 1247 ?>">0</strong>
                        <span>Total Visitors</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-18 text-center py-4 bg-white shadow-sm rounded">
                    <div class="icon mb-3">
                        <i class="icon-shopping_cart" style="font-size: 48px; color: #2ecc71;"></i>
                    </div>
                    <div>
                        <strong class="number" data-number="<?= $total_transactions ?? 156 ?>">0</strong>
                        <span>Total Transactions</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-18 text-center py-4 bg-white shadow-sm rounded">
                    <div class="icon mb-3">
                        <i class="icon-coffee" style="font-size: 48px; color: #f39c12;"></i>
                    </div>
                    <div>
                        <strong class="number" data-number="<?= $total_products ?? 24 ?>">0</strong>
                        <span>Total Products</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-18 text-center py-4 bg-white shadow-sm rounded">
                    <div class="icon mb-3">
                        <i class="icon-people" style="font-size: 48px; color: #e74c3c;"></i>
                    </div>
                    <div>
                        <strong class="number" data-number="<?= $total_users ?? 89 ?>">0</strong>
                        <span>Total Users</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grafik Statistik Bulanan -->
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Analytics</span>
                <h2 class="mb-4">Monthly Visitors Statistics</h2>
                <p>Data pengunjung website per bulan selama satu tahun terakhir.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 ftco-animate">
                <div class="bg-white p-4 shadow-sm rounded">
                    <canvas id="visitorChart" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Seller Products & Recent Activities -->
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ftco-animate">
                <div class="heading-section ftco-animate mb-4">
                    <span class="subheading">Top Products</span>
                    <h2 class="mb-4">Best Selling Products</h2>
                </div>
                <div class="bg-white shadow-sm rounded">
                    <?php if(!empty($top_products)): ?>
                        <?php foreach($top_products as $index => $product): ?>
                        <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>
                                <span class="mr-3 font-weight-bold"><?= $index + 1 ?>.</span>
                                <i class="icon-coffee mr-2" style="color: #c49b6f;"></i>
                                <strong><?= $product['name'] ?></strong>
                            </div>
                            <div class="text-right">
                                <span class="badge badge-primary px-3 py-2 rounded-pill"><?= $product['sales'] ?> sold</span>
                                <br>
                                <small class="text-muted"><?= $product['revenue'] ?></small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="p-4 text-center text-muted">No data available</div>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="col-lg-6 ftco-animate">
                <div class="heading-section ftco-animate mb-4">
                    <span class="subheading">Updates</span>
                    <h2 class="mb-4">Recent Activities</h2>
                </div>
                <div class="bg-white shadow-sm rounded">
                    <?php if(!empty($recent_activities)): ?>
                        <?php foreach($recent_activities as $activity): ?>
                        <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
                            <div>
                                <?php if($activity['icon'] == 'plus'): ?>
                                    <i class="icon-plus-circle text-success mr-2"></i>
                                <?php elseif($activity['icon'] == 'login'): ?>
                                    <i class="icon-login text-info mr-2"></i>
                                <?php elseif($activity['icon'] == 'cart'): ?>
                                    <i class="icon-shopping_cart text-warning mr-2"></i>
                                <?php elseif($activity['icon'] == 'edit'): ?>
                                    <i class="icon-edit text-primary mr-2"></i>
                                <?php else: ?>
                                    <i class="icon-user text-secondary mr-2"></i>
                                <?php endif; ?>
                                <?= $activity['activity'] ?>
                            </div>
                            <small class="text-muted"><?= $activity['time'] ?></small>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="p-4 text-center text-muted">No recent activities</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Today's Statistics -->
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Real-time</span>
                <h2 class="mb-4">Today's Statistics</h2>
                <p>Data aktivitas website hari ini.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ftco-animate">
                <div class="block-18 text-center py-5 bg-white shadow-sm rounded">
                    <div class="icon mb-3">
                        <i class="icon-eye" style="font-size: 48px; color: #3498db;"></i>
                    </div>
                    <div>
                        <strong class="number" data-number="<?= $today_visitors ?? 42 ?>">0</strong>
                        <span>Visitors Today</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ftco-animate">
                <div class="block-18 text-center py-5 bg-white shadow-sm rounded">
                    <div class="icon mb-3">
                        <i class="icon-shopping_cart" style="font-size: 48px; color: #27ae60;"></i>
                    </div>
                    <div>
                        <strong class="number" data-number="<?= $today_transactions ?? 8 ?>">0</strong>
                        <span>Transactions Today</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center ftco-animate">
                <div class="alert alert-info py-3 rounded">
                    <i class="icon-info mr-2"></i> Last update: <?= date('d F Y H:i:s') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script untuk Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('visitorChart');
        if (ctx) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Monthly Visitors',
                        data: <?= json_encode(array_values($monthly_stats ?? [120, 150, 180, 200, 220, 250, 280, 300, 310, 340, 360, 400])) ?>,
                        borderColor: '#c49b6f',
                        backgroundColor: 'rgba(196, 155, 111, 0.1)',
                        borderWidth: 3,
                        pointBackgroundColor: '#c49b6f',
                        pointBorderColor: '#fff',
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });
        }
    });
</script>

<!-- Additional CSS untuk konsistensi dengan home -->
<style>
    .block-18 {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .block-18:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }
    .badge-primary {
        background-color: #c49b6f !important;
    }
    .alert-info {
        background-color: #d1ecf1;
        border-color: #bee5eb;
        color: #0c5460;
    }
    .bg-white {
        background-color: #ffffff !important;
    }
    .rounded {
        border-radius: 10px !important;
    }
    .shadow-sm {
        box-shadow: 0 5px 15px rgba(0,0,0,0.05) !important;
    }
</style>

<?= $this->endSection() ?>