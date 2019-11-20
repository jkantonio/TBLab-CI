<?php
class CollectionScheduling_Model extends CI_Model
{
	function saverecords($ScheduledDate, $FirstName, $LastName, $EmbassyCode)
	{
		$query = "INSERT INTO collectionschedule VALUES ('$ScheduledDate', '$FirstName', '$LastName', '$EmbassyCode')";
		$this->db->query($query);
	}
}	