<main>
    <h1>Add Student</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="make_student">

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
        <input type="submit" value="Add Student"/>
        <br>
    </form>
</main>
