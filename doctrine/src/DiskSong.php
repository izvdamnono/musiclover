<?php

/**
 * @Entity 
 * @Table(name="diskSong",
 * uniqueConstraints={@UniqueConstraint(name="dca_unique",columns={"iddisk","idsong","idartist"})})
 */
class DiskSong {
    /**
     * @Id
     * @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="artist", inversedBy="iddca")
     * @JoinColumn(name="idartist", referencedColumnName="id")
     */
    protected $idArtist;

    /**
     * @ManyToOne(targetEntity="song", inversedBy="iddca")
     * @JoinColumn(name="idsong", referencedColumnName="id")
     */
    protected $idSong;

    /**
     * @ManyToOne(targetEntity="disk", inversedBy="iddca")
     * @JoinColumn(name="iddisk", referencedColumnName="id")
     */
    protected $idDisk;

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
    public function getIdArtist() {
        return $this->idArtist;
    }

    /**
     * @param mixed $idArtist
     */
    public function setIdArtist($idArtist) {
        $this->idArtist = $idArtist;
    }

    /**
     * @return mixed
     */
    public function getIdSong() {
        return $this->idSong;
    }

    /**
     * @param mixed $idSong
     */
    public function setIdSong($idSong) {
        $this->idSong = $idSong;
    }

    /**
     * @return mixed
     */
    public function getIdDisk() {
        return $this->idDisk;
    }

    /**
     * @param mixed $idDisk
     */
    public function setIdDisk($idDisk) {
        $this->idDisk = $idDisk;
    }

    public function getArray() {
        return array(
            "id" => $this->id, 
            "idArtist" => $this->idArtist, 
            "idSong" => $this->idSong, 
            "idDisk" => $this->idDisk, 
        );
    }
    

}