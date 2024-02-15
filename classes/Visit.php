<?php
class Visit
{
    private $patientId;
    private $money;
    private $date;
    private $isPaid;

    public function __construct($patientId, $money, $date, $isPaid)
    {
        $this->patientId = $patientId;
        $this->money = $money;
        $this->date = $date;
        $this->isPaid = $isPaid;
    }


    /**
     * Get the value of patientId
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * Set the value of patientId
     *
     * @return  self
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;

        return $this;
    }

    /**
     * Get the value of money
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set the value of money
     *
     * @return  self
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of isPaid
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Set the value of isPaid
     *
     * @return  self
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;

        return $this;
    }
}
