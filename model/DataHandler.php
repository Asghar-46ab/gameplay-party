<?php
	/**
	 * The class which is responsible for database I/O.
	 */
	class DataHandler {

		/**
		 * The connection for this data handler.
		 */
		public $conn;
		
		/**
		 * Constructs a new datahandler by initializing the connection.
		 */
		function __construct($dbtype,$servername,$dbname,$username, $password) {
			$this->conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $username, $password);
		}

		/**
		 * The method which invokes the supplied {@code sql} query and creates data in the database.
		 * @return the last inserted id.
		 */
		function CreateData($sql){
			try {
				$this->conn->exec($sql);
			return $this->conn->lastInsertId();
			} catch(PDOException $e) {
				echo $sql . "<br>" . $e->getMessage();
			}
		}

		/**
		 * The method which reads from the database.
		 * @return the result of the query.
		 */
		public function Read($sql)
		{
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		/**
		 * The method which sends data to the database.
		 */
		function Create($sql){
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
		}
	}
?>
