<?php
// فلتر المسار من الرابط: ?page=courses&roadmap=frontend
$filter = $_GET['roadmap'] ?? 'all';

// هل يظهر الكورس؟ (المسارات المرتبطة بالكورس تُكتب كنص: "frontend fullstack")
function showCourse($filter, $roadmaps) {
    return $filter === 'all' || in_array($filter, explode(' ', $roadmaps));
}
?>
<div class="content-page">
    <h1 class="page-title">Courses</h1>
    <p class="page-sub">Hover or click to see course details.</p>

    <!-- Roadmap filter -->
    <div class="filters">
        <a href="index.php?page=courses" class="chip <?php if ($filter === 'all') echo 'selected'; ?>">All</a>
    </div>

    <div id="courses-grid">
        <?php if (showCourse($filter, 'frontend fullstack')) { ?>
        <article class="course-card" id="course-ID" tabindex="0">
            <div class="course-head">
                <h3>Course title</h3>
                <span class="badge">Level</span>
            </div>
            <p>Short summary.</p>

            <div class="course-more">
                <p>Full description.</p>
                <ul>
                    <li>Topic 1</li>
                    <li>Topic 2</li>
                </ul>
                <p class="meta">Duration: ... &middot; Interest: ...</p>
                <p class="meta">Roadmaps: <a href="index.php?page=roadmaps">Roadmap name</a></p>
            </div>
        </article>
        <?php } ?>
    </div>
</div>