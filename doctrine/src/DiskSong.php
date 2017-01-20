<?php

/**
 * @Entity
 * @Table(name="diskSong",uniqueConstraints={@UniqueConstraint(name="ids", columns={"artist_id", "song_id", "disk_id"})})
 */
class DiskSong {
    /**
     * @Id
     * @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     * @OneToOne(targetEntity="artist")
     * @JoinColumn(name="artist_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $idArtist;

    /**
     * @OneToOne(targetEntity="song")
     * @JoinColumn(name="song_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $idSong;

    /**
     * @OneToOne(targetEntity="disk")
     * @JoinColumn(name="disk_id", referencedColumnName="id", onDelete="CASCADE")
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

    

}