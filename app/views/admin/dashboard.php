<div class="admin-content">
    
    <div class="stat-boxes-container">
        <div class="stat-box blue">
            <div class="icon"><i class="fas fa-users"></i></div>
            <div class="info">
                <h3><?php echo $customer_count; ?></h3>
                <p>Khách hàng</p>
            </div>
        </div>
        <div class="stat-box green">
            <div class="icon"><i class="fas fa-box"></i></div>
            <div class="info">
                <h3><?php echo $product_count; ?></h3>
                <p>Sản phẩm</p>
            </div>
        </div>
        <div class="stat-box yellow">
            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
            <div class="info">
                <h3><?php echo $order_count; ?></h3>
                <p>Đơn hàng mới</p>
            </div>
        </div>
        <div class="stat-box red">
            <div class="icon"><i class="fas fa-dollar-sign"></i></div>
            <div class="info">
                <h3><?php echo $revenue; ?></h3>
                <p>Doanh thu</p>
            </div>
        </div>
    </div>

    <div class="main-content-wrapper">
        <div class="content-tabs">
            <a href="/web_perfume/admin" class="tab-link active"><i class="fas fa-chart-bar"></i> Tổng quan</a>
            <a href="/web_perfume/category/list_category" class="tab-link"><i class="fas fa-list"></i> Quản lý Danh mục</a>
            <a href="#" class="tab-link"><i class="fas fa-box"></i> Quản lý Sản phẩm</a>
            </div>

        <div class="tab-content">
            <h2>Đồ thị tổng quan</h2>
            <p>Đây là khu vực hiển thị nội dung của tab "Tổng quan".</p>
            
            <div class="charts-container">
                <div class="chart-box">
                    <h4>Doanh thu 7 ngày</h4>
                    <div class="chart-placeholder">
                        <i class="fas fa-chart-line"></i>
                        <p>Biểu đồ đường sẽ hiển thị ở đây</p>
                    </div>
                </div>
                <div class="chart-box">
                    <h4>Sản phẩm bán chạy</h4>
                    <div class="chart-placeholder">
                        <i class="fas fa-chart-bar"></i>
                        <p>Biểu đồ cột sẽ hiển thị ở đây</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>