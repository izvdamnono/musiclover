<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="song")
 **/
class Song {
    /**
     * @Id
     * @Column(type="integer") @GeneratedValue
     */
    protected $id;
    /**
     * @Column(type="string", length=200, unique=true, nullable=false)
     */
    protected $title;
    
    /**
     * @OneToMany(targetEntity="diskSong", mappedBy="song")
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
    public function getTitle() {
        return $this->title;
    }
    
    /**
     * @param mixed $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function addIddca($iddca){
        $this->iddca[] = $iddca;
    }
    
    public function getArray() {
        return array(
            "id" => $this->id, 
            "title" => $this->title, 
        );
    }
}