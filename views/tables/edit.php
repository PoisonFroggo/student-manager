<main>
    <h1>Edit Student</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="edit_student">

        <label>Student:</label>
        <select name="student_id">
        <?php foreach ( $students as $student ) : ?>
            <option value="<?php echo $student['studentid']; ?>">
                <?php echo $student['studentid']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>First Name:</label>
        <input type="text" name="studentFN" required/>
        <br>

        <label>Last Name:</label>
        <input type="text" name="studentLN" required/>
        <br>

        <label>DOB:</label>
        <input type="text" name="dob" required/>
        <br>

        <label>Email:</label>
        <input type="text" name="email" required/>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Edit Student"/>
        <br>
    </form>
</main>
