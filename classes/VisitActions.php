<?php
class VisitActions
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

    public function listVisits()
    {
        $visits = $this->getVisitsData();

        // Imprimimos cada visit en una fila de la tabla
        foreach ($visits as $visit) {
            echo "<td>" . $visit->getPatientId() . "</td>";
            if ($visit->getMoney() > 250) {
                echo "<td class='superior'>" . $visit->getMoney() . "</td>";
            } else {
                echo "<td>" . $visit->getMoney() . "</td>";
            }
            echo "<td>" . $visit->getDate() . "</td>";
            if ($visit->getIsPaid() == "True") {
                echo "<td><img width='26' height='26' src='https://img.icons8.com/color/20/checked--v1.png' alt='checked--v1'/></td>";
            } else {
                echo "<td><img width='22' height='22' src='https://img.icons8.com/office/20/cancel.png' alt='cancel'/></td>";
            }
            echo "<td><a href='./detailVisit.php?patient=" . $visit->getPatientId() . "&money=" . $visit->getMoney() . "'><img width='23' height='23' src='https://img.icons8.com/ios/50/search--v1.png' alt='search--v1'/></a></td>";
            echo "<td><a href='./deleteVisit.php?patient=" . $visit->getPatientId() . "&money=" . $visit->getMoney() . "'><img width='23' height='23' src='https://img.icons8.com/pulsar-color/23/filled-trash.png' alt='filled-trash'/></a></td>";
            echo "<td><a href='./editVisit.php?patient=" . $visit->getPatientId() . "&money=" . $visit->getMoney() . "&date=" . $visit->getDate() . "&isPaid=" . $visit->getIsPaid() . "'><img width='20' height='20'src='https://img.icons8.com/office/20/edit.png' alt='edit'/></a></td>";
            echo "</tr>";
        }
    }

    public function detailVisit()
    {
        $visits = $this->getVisitsData();
        foreach ($visits as $visit) {
            if ($visit->getPatientId() == $_GET['patient']) {
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Patient Id</th><th>Money</th><th>Date</th><th>Is Paid?</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<td>" . $visit->getPatientId() . "</td>";
            if ($visit->getMoney() > 250) {
                echo "<td class='superior'>" . $visit->getMoney() . "</td>";
            } else {
                echo "<td>" . $visit->getMoney() . "</td>";
            }
            echo "<td>" . $visit->getDate() . "</td>";
            if ($visit->getIsPaid() == "True") {
                echo "<td><img width='26' height='26' src='https://img.icons8.com/color/20/checked--v1.png' alt='checked--v1'/></td>";
            } else {
                echo "<td><img width='22' height='22' src='https://img.icons8.com/office/20/cancel.png' alt='cancel'/></td>";
            }
            echo "</tr>";
            echo "</table>";
            }
        }
    }

    public function createVisit()
    {
        $patient = $_POST['patient'];
        $money = $_POST['money'];
        $date = $_POST['date'];

        if (isset($_POST['isPaid']) && $_POST['isPaid'] == "on") {
            $isPaid = "True";
        } else {
            $isPaid = "False";
        }

        $newVisit = [$patient, $money, $date, $isPaid];

        $visitsFile = fopen('../../data/data.csv', 'a');

        fputcsv($visitsFile, $newVisit);


        fclose($visitsFile);
    }

    public function deleteVisit()
    {
        $lines = [];

        $visits = $this->getVisitsData();

        foreach ($visits as $line) {
            if ($line->getPatientId() == $_GET['patient'] && $line->getMoney() == $_GET['money']) {
            } else {
                array_push($lines, $line);
            }
        }

        $visitsFile = fopen('../../data/data.csv', 'w');

        foreach($lines as $line){
            $lineToWrite = [$line->getPatientId(), $line->getMoney(), $line->getDate(), $line->getIsPaid()];
            fputcsv($visitsFile, $lineToWrite);
        }

        fclose($visitsFile);
    }

    public function editVisit(){
        $lines = [];

        $visits = $this->getVisitsData();

        foreach ($visits as $line) {
            if ($line->getPatientId() == $_GET['patient'] && $line->getMoney() == $_GET['money']) {
                $line->setPatientId($_POST['patient']);
                $line->setMoney($_POST['money']);
                $line->setDate($_POST['date']);
                $line->setIsPaid($_POST['isPaid']);
            }
            array_push($lines, $line);
        }

        $visitsFile = fopen('../../data/data.csv', 'w');

        foreach($lines as $line){
            $lineToWrite = [$line->getPatientId(), $line->getMoney(), $line->getDate(), $line->getIsPaid()];
            fputcsv($visitsFile, $lineToWrite);
        }

        fclose($visitsFile);
    }
}

