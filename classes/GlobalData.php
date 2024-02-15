<?php
class GlobalData
{

    public function getVisitsData()
    {
        $visits = [];
        $visitsFile = fopen("../../data/data.csv", "r");
        while ($line = fgetcsv($visitsFile)) {
            $visit = new Visit(
                $line[0],
                $line[1],
                $line[2],
                $line[3]
            );
            $visits[] = $visit;
        }
        return $visits;
    }

    public function getTotal(){
        $visits = $this->getVisitsData();
        $total = 0;
        foreach ($visits as $visit) {
            $total += $visit->getMoney();
        }
        return $total;
    }

    public function getPaidTotal(){
        $visits = $this->getVisitsData();
        $total = 0;
        foreach ($visits as $visit) {
            if($visit->getIsPaid() == "True"){
                $total += $visit->getMoney();
            }
        }
        return $total;
    }

    public function getUnpaidTotal(){
        $visits = $this->getVisitsData();
        $total = 0;
        foreach ($visits as $visit) {
            if($visit->getIsPaid() == "False"){
                $total += $visit->getMoney();
            }
        }
        return $total;
    }

    public function getBalance(){
        return $this->getPaidTotal() - $this->getTotal();
    }

    public function getNumberPatients(){
        $visits = $this->getVisitsData();
        $patients = [];
        foreach ($visits as $visit) {
            if(!in_array($visit->getPatientId(), $patients)){
                array_push($patients, $visit->getPatientId());
            }
        }
        return count($patients);
    }



}
