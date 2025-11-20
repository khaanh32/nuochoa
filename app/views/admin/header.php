<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link rel="stylesheet" href="/web_perfume/public/css/admin-style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <script>
        function applySidebarState() {
            const isSidebarMini = localStorage.getItem('sidebarMini') === 'true';
            if (isSidebarMini) {
                document.body.classList.add('sidebar-mini');
            } else {
                document.body.classList.remove('sidebar-mini');
            }
        }
        applySidebarState();
        function toggleSidebar() {
            const isMini = document.body.classList.toggle('sidebar-mini');
            localStorage.setItem('sidebarMini', isMini);
        }
    </script>

    <header class="admin-header">
        <div class="header-left">
            <a href="javascript:void(0);" class="sidebar-toggle" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </a>
            <h1>Admin Panel</h1>
        </div>
        
        </header>
    
    <div class="admin-container">