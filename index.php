<form method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br/>

    <label for="age">Age</label>
    <input type="number" name="age">
    <br/>

    <button type="submit">Submit</button>
</form>

<?php    
if (isset($_POST['name'])) {
    echo htmlspecialchars($_POST['name']) . " is " . (int)$_POST['age'] . " years old ";
}
?>
