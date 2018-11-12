<?php
class Customer {
	private $db;


	public function __construct () {
		$this->db = new Database;

	}

	public function addCustomer ($data) {
       //prepare query
		$this->db->query('INSERT INTO customers(id, first_name, Last_name, email) VALUES(:id, :first_name, :Last_name, :email)');

		//bind values
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':first_name', $data['first_name']);
		$this->db->bind(':Last_name', $data['Last_name']);
		$this->db->bind(':email', $data['email']);


        if ($this->db->execute())
         {
        	return true;

         } else {

            return false;
        } 

        
        
	}

	public function getCustomers () {
		$this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

		$results = $this->db->resultset();
		return $results;
	}

}

