<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;



/**
 * @Entity @Table(name="user")
 **/
class User extends CI_Model {

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $username;
    /** @Column(type="string") **/
    protected $password;
    /** @Column(type="string") **/
    protected $fullname;
    /** @Column(type="string") **/
    protected $sex;
    /** @Column(type="string") **/
    protected $birthday;
    /** @Column(type="string") **/
    protected $address;
    /** @Column(type="string") **/
    protected $email;
    /** @Column(type="integer") **/
    protected $status;
    /** @Column(type="integer") **/
    protected $group_id;


    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId( $id ) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername( $username ) {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword( $password ) {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFullname() {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname( $fullname ) {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getGroupId() {
        return $this->group_id;
    }

    /**
     * @param mixed $group_id
     */
    public function setGroupId( $group_id ) {
        $this->group_id = $group_id;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus( $status ) {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail( $email ) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress( $address ) {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getSex() {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex( $sex ) {
        $this->sex = $sex;
    }



    /**
     * @return mixed
     */
    public function getBirthday() {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday( $birthday ) {
        $this->birthday = $birthday;
    }
}