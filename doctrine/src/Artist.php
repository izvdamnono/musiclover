<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="artist")
 **/
class Artist {
    /**
     * @Id
     * @Column(type="integer") @GeneratedValue
     */
    protected $id;
    
    /**
     * @Column(type="string", length=200, unique=true, nullable=false)
     */
    protected $name;
    
    /**
     * @OneToMany(targetEntity="diskSong", mappedBy="artist")
     */
    protected $iddca = null;
    
    public function __construct() {
        $this->iddca = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }
    
    public function addIddca($iddca){
        $this->iddca[] = $iddca;
    }

    public function getArray() {
        return array(
            "id" => $this->id, 
            "name" => $this->name, 
        );
    }
}