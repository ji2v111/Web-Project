<?php
// Roadmap filter from the link: ?page=courses&roadmap=cs
$filter = $_GET['roadmap'] ?? 'all';

// The roadmaps we have (key => name)
$names = [
    'it'             => 'IT',
    'cs'             => 'Computer Science',
    'data-science'   => 'Data Science',
    'cyber-security' => 'Cyber Security'
];

// If the filter is not in the list, show all courses
if ($filter !== 'all' && !isset($names[$filter])) {
    $filter = 'all';
}

// Open the SQLite database and get the courses
$db = new PDO('sqlite:database/roadmaps.db');

if ($filter === 'all') {
    $query = $db->prepare('SELECT * FROM courses ORDER BY roadmap, step');
    $query->execute();
} else {
    $query = $db->prepare('SELECT * FROM courses WHERE roadmap = ? ORDER BY step');
    $query->execute([$filter]);
}
$courses = $query->fetchAll();
?>
<div class="content-page">
    <h1 class="page-title">Courses</h1>
    <p class="page-sub">Hover or click to see course details.</p>

    <!-- Roadmap filter -->
    <div class="filters">
        <a href="index.php?page=courses" class="chip <?php if ($filter === 'all') echo 'selected'; ?>">All</a>
        <?php foreach ($names as $key => $name) { ?>
            <a href="index.php?page=courses&roadmap=<?php echo $key; ?>" class="chip <?php if ($filter === $key) echo 'selected'; ?>"><?php echo $name; ?></a>
        <?php } ?>
    </div>

    <!-- One card for each course from the database -->
    <div id="courses-grid">
        <?php foreach ($courses as $course) { ?>
        <article class="course-card" id="course-<?php echo $course['id']; ?>" tabindex="0">
            <div class="course-head">
                <h3><?php echo htmlspecialchars($course['title']); ?></h3>
                <span class="badge"><?php echo htmlspecialchars($course['level']); ?></span>
            </div>
            <p><?php echo htmlspecialchars($course['provider']); ?></p>

            <div class="course-more">
                <p class="meta">Step <?php echo $course['step']; ?> in the path</p>
                <p class="meta">Roadmap:
                    <a href="index.php?page=roadmap-details&roadmap=<?php echo $course['roadmap']; ?>"><?php echo $names[$course['roadmap']]; ?></a>
                </p>
                <p><a href="<?php echo htmlspecialchars($course['link']); ?>" target="_blank">Open official course page</a></p>
            </div>
        </article>
        <?php } ?>
    </div>
</div>