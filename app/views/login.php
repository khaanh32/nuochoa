

<div class="login-luxury-container">
    <div class="login-luxury-left">
        <h1>KD Perfume</h1>
        <p>Khám phá thế giới nước hoa cao cấp. Mỗi mùi hương là một câu chuyện, mỗi giọt hương là một dấu ấn.</p>
    </div>
    
    <div class="login-luxury-right">
        <div class="login-form-wrapper">
            <div class="login-form-header">
                <h2>Đăng nhập</h2>
                <p>Chào mừng bạn trở lại</p>
            </div>

            <?php
            // Hiển thị thông báo lỗi
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                $message = '';
                switch($error) {
                    case 'empty_fields':
                        $message = 'Vui lòng điền đầy đủ thông tin!';
                        break;
                    case 'invalid_credentials':
                        $message = 'Email/Tên đăng nhập hoặc mật khẩu không đúng!';
                        break;
                    case 'missing_data':
                        $message = 'Dữ liệu không hợp lệ!';
                        break;
                    default:
                        $message = 'Đăng nhập thất bại!';
                }
                echo '<div class="alert-message alert-error">⚠️ ' . $message . '</div>';
            }

            // Hiển thị thông báo thành công
            if (isset($_GET['success'])) {
                if ($_GET['success'] == 'registered') {
                    echo '<div class="alert-message alert-success">✓ Đăng ký thành công! Vui lòng đăng nhập.</div>';
                }
            }
            ?>

            <form action="/web_perfume/auth/process_login" method="POST">
                <div class="form-group-luxury">
                    <label for="username">Email / Tên đăng nhập</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="form-control-luxury"
                        placeholder="Nhập email hoặc tên đăng nhập"
                        required
                        autofocus
                    >
                    <div class="login-helper-text">
                        💡 Nhập email (cho khách hàng) hoặc username (cho admin)
                    </div>
                </div>

                <div class="form-group-luxury">
                    <label for="password">Mật khẩu</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control-luxury"
                        placeholder="Nhập mật khẩu"
                        required
                    >
                </div>

                <button type="submit" class="btn-luxury">Đăng nhập</button>
            </form>

            <div class="form-footer">
                <p>Chưa có tài khoản? <a href="/web_perfume/auth/register">Đăng ký ngay</a></p>
            </div>
        </div>
    </div>
</div>