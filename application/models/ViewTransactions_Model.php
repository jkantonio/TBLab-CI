<?php
class ViewTransactions_Model extends CI_Model
{

	public function getTrans(){
        $query1 = $this->db->query("SELECT * FROM transactionlog LEFT JOIN transactionlist on transactionlist.TransactionListID = transactionlog.TransactionListID");
        return $query1->result();
    }
}	
?>
