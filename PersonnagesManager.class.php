<?php
class ParesonnagesManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function add(Personnage $perso)
	{
		$q = $this->db->prepare('INSERT INTO personnages_v2 SET nom= :nom, type = :type');

		$q->bindValue(':nom',$perso->nom());
		$q->bindValue(':type',$perso->type());

		$q->execute();

		$perso->hydrate([
			'id' => $this->db->lastInsertId(),
			

			])
	}
}