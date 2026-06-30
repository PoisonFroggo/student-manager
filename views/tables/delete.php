<main>
    <h1>Delete Student</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="delete_student">

        <label>Student:</label>
        <select name="student_id">
        <?php foreach ( $students as $student ) : ?>
            <option value="<?php echo $student['studentid']; ?>">
                <?php echo $student['studentid']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Delete Student"/>
        <br>
    </form>
</main>
