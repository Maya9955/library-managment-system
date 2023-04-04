<?php

class Records
{
    private $id;
    private $isbn;
    private $userId;
    private $bDate;
    private $rDate;
    private $state;
    private $penaltyState;

    public function __construct()
    {
    }

    /**
     * @param $id
     * @param $isbn
     * @param $userId
     * @param $bDate
     * @param $rDate
     * @param $state
     * @param $penaltyState
     */
    public function __construct_1($id, $isbn, $userId, $bDate, $rDate, $state, $penaltyState)
    {
        $this->id = $id;
        $this->isbn = $isbn;
        $this->userId = $userId;
        $this->bDate = $bDate;
        $this->rDate = $rDate;
        $this->state = $state;
        $this->penaltyState = $penaltyState;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getBDate()
    {
        return $this->bDate;
    }

    /**
     * @param mixed $bDate
     */
    public function setBDate($bDate)
    {
        $this->bDate = $bDate;
    }

    /**
     * @return mixed
     */
    public function getRDate()
    {
        return $this->rDate;
    }

    /**
     * @param mixed $rDate
     */
    public function setRDate($rDate)
    {
        $this->rDate = $rDate;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getPenaltyState()
    {
        return $this->penaltyState;
    }

    /**
     * @param mixed $penaltyState
     */
    public function setPenaltyState($penaltyState)
    {
        $this->penaltyState = $penaltyState;
    }



}
