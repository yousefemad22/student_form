<?php
$page_name = "Home Page";
$css_file = "home.css";
include_once("./includes/tempate/header.php");
require_once("./connectDB.php");

global $con;
$stmt = $con->prepare("SELECT * FROM students");
$stmt->execute();
$students = $stmt->fetchAll();
?>
<table class='content-table'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>College</th>
            <th>GPA</th>
            <th>Department</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td>
                    <?php echo $student['Id'] ?>
                </td>
                <td>
                    <?php echo $student['name'] ?>
                </td>
                <td>
                    <?php echo $student['college'] ?>
                </td>
                <td>
                    <?php echo $student['GPA'] ?>
                </td>
                <td>
                    <?php echo $student['department'] ?>
                </td>
                <td>
                    <a class="del" href="delete.php?stu_id=<?php echo $student['Id'] ?>">Delete</a>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>

<a class="add_stu" href="add_student.php">Add Student</a>

<?php
include_once("./includes/tempate/footer.php");
?>