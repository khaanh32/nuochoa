<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Perfume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="/web_perfume/public/css/style.css">
<link rel="stylesheet" href="/web_perfume/public/css/login-register-style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="/web_perfume/">KD Perfume</a>
            </div>
            <nav>
                <ul>
                    <li><a href="/web_perfume/">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Thương hiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']): ?>
                    <div class="user-menu">
                        <a href="#" class="user-name">Chào, <?php echo $_SESSION['customer_name']; ?></a>
                        <div class="dropdown-content">
                            <a href="/web_perfume/customer/profile">Thông tin cá nhân</a>
                            <a href="/web_perfume/customer/orders">Đơn hàng</a>
                            <a href="/web_perfume/auth/logout">Đăng xuất</a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="/web_perfume/auth/login"><i class="fas fa-user"></i></a>
                <?php endif; ?>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userMenu = document.querySelector('.user-menu');
            if (userMenu) {
                userMenu.addEventListener('click', function(event) {
                    event.stopPropagation(); // Prevent document click from closing immediately
                    this.querySelector('.dropdown-content').classList.toggle('show');
                });

                document.addEventListener('click', function(event) {
                    const dropdownContent = userMenu.querySelector('.dropdown-content');
                    if (!userMenu.contains(event.target) && dropdownContent.classList.contains('show')) {
                        dropdownContent.classList.remove('show');
                    }
                });
            }
        });
    </script>
    