<aside class="sidebar">
    <a href="index.php?page=home" class="image"><img src="images/image.svg" class="roadmap-icon" alt="Roadmap"></a>
    <a href="index.php?page=home" class="txt <?php if ($page === 'home') echo 'active'; ?>">Home</a>
    <a href="index.php?page=roadmaps" class="txt <?php if ($page === 'roadmaps' || $page === 'roadmap-details') echo 'active'; ?>">Roadmaps</a>
    <a href="index.php?page=courses" class="txt <?php if ($page === 'courses') echo 'active'; ?>">Courses</a>
    <a href="index.php?page=info" class="txt <?php if ($page === 'info') echo 'active'; ?>">Info</a>
</aside>