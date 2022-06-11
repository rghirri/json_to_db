<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=database_json", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function getItems($conn)
{
        $sql = "SELECT *
                FROM json_db";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
}

/**
     * Insert a new item with its current property values
     *
     * @param object $conn Connection to the database
     *
     * @return boolean True if the insert was successful, false otherwise
     */
    function create($conn, $label, $parent_id)
    {
            $sql = "INSERT INTO json_db (label, parent_id)
                    VALUES ($label, $parent_id)";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':label', $label, PDO::PARAM_STR);
            $stmt->bindValue(':parent_id', $parent_id, PDO::PARAM_NULL);

            if ($stmt->execute()) {
                $this->id = $conn->lastInsertId();
                return true;
            }
  
    }

    