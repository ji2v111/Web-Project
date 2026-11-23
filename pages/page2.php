<?php
// 1) Which roadmap? It comes from the link: index.php?page=roadmap-details&roadmap=cs
$roadmap = $_GET['roadmap'] ?? 'it';

// 2) The roadmaps we have (key in the link => name on the page)
$names = [
    'it'             => 'IT',
    'cs'             => 'Computer Science',
    'data-science'   => 'Data Science',
    'cyber-security' => 'Cyber Security'
];

// If the roadmap is not in the list, show IT
if (!isset($names[$roadmap])) {
    $roadmap = 'it';
}

// 3) Open the SQLite database and get the courses of this roadmap, in order
$db = new PDO('sqlite:database/roadmaps.db');
$query = $db->prepare('SELECT * FROM courses WHERE roadmap = ? ORDER BY step');
$query->execute([$roadmap]);
$courses = $query->fetchAll();
?>
<div class="content-page">
    <h1 class="page-title"><?php echo $names[$roadmap]; ?> Roadmap</h1>
    <p class="page-sub">Start from step 1 (Beginner) and go down to the last step (Advanced). Click a course to open its official page.</p>

    <!-- Buttons to change the roadmap -->
    <div class="filters">
        <?php foreach ($names as $key => $name) { ?>
            <a href="index.php?page=roadmap-details&roadmap=<?php echo $key; ?>" class="chip <?php if ($key === $roadmap) echo 'selected'; ?>"><?php echo $name; ?></a>
        <?php } ?>
    </div>

    <!-- The path: one box for each course -->
    <div class="path">
        <?php foreach ($courses as $course) { ?>
            <a href="<?php echo $course['link']; ?>" target="_blank" class="step">
                <span class="step-number"><?php echo $course['step']; ?></span>
                <div>
                    <h3 class="step-title"><?php echo $course['title']; ?></h3>
                    <p class="step-info"><?php echo $course['provider']; ?> | <b><?php echo $course['level']; ?></b></p>
                </div>
            </a>
        <?php } ?>
    </div>
</div>
