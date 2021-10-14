<!-- // Maak in product.php de volgende code: -->
<?php class Product
{
    // database connectie en tabel-naam
    private $conn;
    private $table_name = 'product';
    // object properties
    public $id;
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    // read products
    public function read()
    {
        // select all query
        $query = 'SELECT * FROM ' . $this->table_name;
        $result = $this->conn->query($query);
        return $result;
    }

    // create products
    public function create($insertArray)
    {
        var_dump($insertArray);

        echo '<br>';

        // select all query
        $insertQuery =
            "INSERT INTO `product` (`naam`, `beschrijving`, `prijs`) VALUES ('" .
            $insertArray['naam'] .
            "', '" .
            $insertArray['beschrijving'] .
            "', '" .
            $insertArray['prijs'] .
            "');";

        echo $insertQuery;

        //exit();

        //$query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($insertQuery);

        return $result;
    }

    public function delete()
    {
        // select all query
        $queryDelete = 'DELETE FROM '. $this->table_name . ' WHERE id = 7;';
        $resultDelete = $this->conn->query($queryDelete);
        return $resultDelete;
    }

    public function update()
    {
        // select all query
        $queryUpdate = 'UPDATE ' . $this->table_name . ' SET naam = "cola-light3"' . ' WHERE id = 8;';
        $resultUpdate = $this->conn->query($queryUpdate);
        return $resultUpdate;
    }
}