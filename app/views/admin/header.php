<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/web_perfume/public/css/admin-style.css">
</head>
<body>
    <header class="admin-header">
        <h1>Admin Panel</h1>
        <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']): ?>
            <div class="admin-info">
                <span>Chào, <?php echo $_SESSION['admin_username']; ?></span>
                <a href="/web_perfume/auth/logout" class="logout-btn">Đăng xuất</a>
            </div>
        <?php endif; ?>
    </header>
    <div class="admin-container">