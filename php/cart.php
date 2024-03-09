<!-- <?php

$conn = mysqli_connect("localhost","root","","demo1");
$tbl = "create table if not exists photo(id int primary key auto_increment,image blob)";
mysqli_query($conn,$tbl);

$query1 = "select image from photo where id = 1";
mysqli_query($conn,$query1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$conn = mysqli_connect("localhost", "root", "", "demo1");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table if not exists
$tbl = "CREATE TABLE IF NOT EXISTS photo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image LONGBLOB
)";

if (!mysqli_query($conn, $tbl)) {
    echo "Error creating table: " . mysqli_error($conn);
}

$bb = "insert into photo(image) values ('Shiva-Mahadev-4K-creative-background-photo-sticker.jpg')";
mysqli_query($conn,$bb);
// Query to select image data
$query1 = "SELECT image FROM photo WHERE id = 2";
$result = mysqli_query($conn, $query1);

// Check if query was successful
if ($result) {
    // Fetch the image data
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        // Display the image
        $imageData = $row['image'];
        $imageSrc = 'data:image/jpeg;base64,' . base64_encode($imageData);
        echo '<img src="' . $imageSrc . '" alt="Image">';
    } else {
        echo "No image found with the specified ID.";
    }
} else {
    echo "Error retrieving image: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
</body>
</html>
