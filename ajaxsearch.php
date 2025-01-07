<?php
// Include the database connection
include 'db.php'; 
// Check if the `query` parameter is set
if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];
    
    // SQL query to fetch cities that match the search query
    $stmt = $conn->prepare("SELECT name FROM cities WHERE name LIKE ? ORDER BY name ASC");
    $searchTerm = "%" . $searchQuery . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the matching cities
    $cities = [];
    while ($row = $result->fetch_assoc()) {
        $cities[] = $row['name'];
    }

    // Return cities as JSON response
    echo json_encode($cities);
}
?>
