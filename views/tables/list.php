<main>
    <aside>
        <h1>Student List</h1>
        <nav>
            <ul>
                <?php foreach($students as $student) : ?>
                <li>
                    <a href="?student_id=<?php echo $students['studentid']; ?>">
                        <?php echo $student['studentid']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>
        </nav>
    </aside>
</main>
