<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCE Home</title>

    <!-- Jacquard 12 Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="home">

<!-- UI OVERLAY -->
<div class="home-ui">

    <!-- TITLE + LOGOS -->
    <div class="title-wrapper">
        <img src="assets/images/cce-logo.png" class="logo">

        <h1 class="title">
            College of Computing<br>
            Education
        </h1>

        <img src="assets/images/um-seal.png" class="logo">
    </div>

    <!-- GAME MENU -->
    <nav class="menu">
        <a href="login.php">Login</a>
        <a href="#">About</a>
        <a href="#">Exit</a>
    </nav>

</div>

<!-- SITTING KNIGHT -->
<img src="assets/images/knight-sitting.gif" class="knight-sit">

<!-- KEYBOARD NAVIGATION SCRIPT -->
<script>
const menuItems = document.querySelectorAll(".menu a");
let currentIndex = 0;

function updateActive() {
    menuItems.forEach(item => item.classList.remove("active"));
    menuItems[currentIndex].classList.add("active");
}

updateActive();

document.addEventListener("keydown", function(e) {
    if (e.key === "ArrowDown") {
        currentIndex = (currentIndex + 1) % menuItems.length;
        updateActive();
    }

    if (e.key === "ArrowUp") {
        currentIndex = (currentIndex - 1 + menuItems.length) % menuItems.length;
        updateActive();
    }

    if (e.key === "Enter") {
        menuItems[currentIndex].click();
    }
});
</script>

</body>
</html>