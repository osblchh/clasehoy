<?php
class Patient
{
    private $patientId;
    private $name;
    private $adress;

    public function __construct($patientId, $name, $adress)
    {
        $this->patientId = $patientId;
        $this->name = $name;
        $this->adress = $adress;
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }
}
