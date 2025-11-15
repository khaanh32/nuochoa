<div class="login-register-container">
    <div class="form-container">
        <h2>Đăng nhập</h2>
        <form action="/web_perfume/auth/process_login" method="POST">
            <div class="form-group">
                <label for="email">Tên đăng nhập / Email</label>
                <input type="text" id="email" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Phân quyền:</label>
                <input type="radio" name="role" value="user" id="role_user" checked> <label for="role_user">User</label>
                <input type="radio" name="role" value="admin" id="role_admin"> <label for="role_admin">Admin</label>
            </div>
            <button type="submit" class="btn">Đăng nhập</button>
        </form>
        <p id="register-link">Chưa có tài khoản? <a href="/web_perfume/auth/register">Đăng ký ngay</a></p>
    </div>
</div>

<script>
    document.getElementById('role_admin').addEventListener('change', function() {
        if(this.checked) {
            document.getElementById('register-link').style.display = 'none';
        }
    });
    document.getElementById('role_user').addEventListener('change', function() {
        if(this.checked) {
            document.getElementById('register-link').style.display = 'block';
        }
    });
</script>