<nav class="navbar">
    <div class="navbar-header">
        <a href="#" class="navbar-brand">Bloodbase</a>
        <button class="navbar-toggle" onclick="toggleMenu()">☰</button>
    </div>
    <ul class="nav-menu" id="navMenu">
        <li><a href="index.php" class="<?php echo $setHomeActive ?? ''; ?>">Home</a></li>
        <li><a href="about.php" class="<?php echo $setAboutActive ?? ''; ?>">About Us</a></li>
        <li><a href="member.php" class="<?php echo $setMemberActive ?? ''; ?>">Our Members</a></li>
        <li><a href="register.php" class="<?php echo $setJoinUsActive ?? ''; ?>">Join Us</a></li>
        <li><a href="availability.php" class="<?php echo $setAvailabilityActive ?? ''; ?>">Check Availability</a></li>
        <li><a href="../index.php">Employee Login</a></li>
    </ul>
</nav>
