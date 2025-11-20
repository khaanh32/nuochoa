

<div class="register-luxury-container">
    <div class="register-luxury-left">
        <h1>KD Perfume</h1>
        <p>Tham gia cộng đồng những người yêu nước hoa. Khám phá, trải nghiệm và sở hữu những mùi hương độc đáo.</p>
    </div>
    
    <div class="register-luxury-right">
        <div class="register-form-wrapper">
            <div class="register-form-header">
                <h2>Đăng ký</h2>
                <p>Tạo tài khoản mới</p>
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
                    case 'invalid_email':
                        $message = 'Email không hợp lệ!';
                        break;
                    case 'password_mismatch':
                        $message = 'Mật khẩu xác nhận không khớp!';
                        break;
                    case 'email_exists':
                        $message = 'Email đã được đăng ký!';
                        break;
                    case 'register_failed':
                        $message = 'Đăng ký thất bại! Vui lòng thử lại.';
                        break;
                    default:
                        $message = 'Có lỗi xảy ra!';
                }
                echo '<div class="alert-message alert-error">⚠️ ' . $message . '</div>';
            }
            ?>

            <form action="/web_perfume/auth/process_register" method="POST">
                <div class="form-group-luxury">
                    <label for="name">Họ và tên</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-control-luxury"
                        placeholder="Nhập họ và tên"
                        required
                        autofocus
                    >
                </div>

                <div class="form-group-luxury">
                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-control-luxury"
                        placeholder="Nhập địa chỉ email"
                        required
                    >
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
                        minlength="5"
                    >
                </div>

                <div class="form-group-luxury">
                    <label for="confirm_password">Xác nhận mật khẩu</label>
                    <input 
                        type="password" 
                        id="confirm_password" 
                        name="confirm_password" 
                        class="form-control-luxury"
                        placeholder="Nhập lại mật khẩu"
                        required
                        minlength="5"
                    >
                </div>

                <button type="submit" class="btn-luxury">Đăng ký</button>
            </form>

            <div class="form-footer">
                <p>Đã có tài khoản? <a href="/web_perfume/auth/login">Đăng nhập</a></p>
            </div>
        </div>
    </div>
</div>