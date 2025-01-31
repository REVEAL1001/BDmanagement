<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        .navbar {
            background-color: rgb(221, 65, 65);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .navbar-header {
            display: flex;
            align-items: center;
        }

        .navbar-brand {
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            margin-right: 20px;
        }

        .nav-menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-grow: 1;
            justify-content: flex-end;
        }

        .nav-menu li {
            display: inline-block;
            margin-left: 20px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .nav-menu a:hover {
            background-color: rgb(219, 26, 26);
            border-radius: 4px;
        }

        .navbar-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-wrap: wrap;
            }

            .navbar-toggle {
                display: inline-block;
                margin-left: auto;
            }

            .nav-menu {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: rgb(33, 182, 138);
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu li {
                width: 100%;
                text-align: center;
                margin: 0;
            }
        }
    </style>
    <script>
        function toggleMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }
    </script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Bloodbase</a>
            <button class="navbar-toggle" onclick="toggleMenu()">☰</button>
        </div>
        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php" class="<?php echo $setHomeActive ?? ''; ?>">Home</a></li>
            <li><a href="donor.php" class="<?php echo $setAboutActive ?? ''; ?>">New Donor</a></li>
            <li><a href="members.php" class="<?php echo $setMemberActive ?? ''; ?>">Our Members</a></li>
            <li><a href="logout.php" class="<?php echo $setJoinUsActive ?? ''; ?>">Logout</a></li>
        </ul>
    </nav>
</body>
</html>
