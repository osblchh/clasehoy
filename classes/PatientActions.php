<?php
class PatientActions
{

    public function getPatientsData()
    {
        $patients = [];
        $patientsFile = fopen("../../data/patients.csv", "r");
        while ($line = fgetcsv($patientsFile)) {
            $patient = new Patient(
                $line[0],
                $line[1],
                $line[2]
            );
            $patients[] = $patient;
        }
        return $patients;
    }

    public function listPatients()
    {
        $patients = $this->getPatientsData();

        // Imprimimos cada visit en una fila de la tabla
        foreach ($patients as $patient) {
            echo "<td>" . $patient->getPatientId() . "</td>";
            echo "<td>" . $patient->getName() . "</td>";
            echo "<td>" . $patient->getAdress() . "</td>";
            echo "<td><a href='./detailPatient.php?patient=" . $patient->getPatientId() . "'><img width='23' height='23' src='https://img.icons8.com/ios/50/search--v1.png' alt='search--v1'/></a></td>";
            echo "<td><a href='./deletePatient.php?patient=" . $patient->getPatientId() . "&name=" . $patient->getName() . "'><img width='23' height='23' src='https://img.icons8.com/pulsar-color/23/filled-trash.png' alt='filled-trash'/></a></td>";
            echo "<td><a href='./editPatient.php?patient=" . $patient->getPatientId() . "&name=" . $patient->getName() . "&adress=" . $patient->getAdress() . "'><img width='20' height='20'src='https://img.icons8.com/office/20/edit.png' alt='edit'/></a></td>";
            echo "</tr>";
        }
    }

    public function createPatient()
    {
        $patient = $_POST['patient'];
        $name = $_POST['name'];
        $adress = $_POST['adress'];

        $newPatient = [$patient, $name, $adress];

        $patientsFile = fopen('../../data/patients.csv', 'a');

        fputcsv($patientsFile, $newPatient);

        fclose($patientsFile);
    }

    public function deletePatient()
    {
        $lines = [];

        $patients = $this->getPatientsData();

        foreach ($patients as $line) {
            if ($line->getPatientId() == $_GET['patient'] && $line->getName() == $_GET['name']) {
            } else {
                array_push($lines, $line);
            }
        }

        $patientsFile = fopen('../../data/patients.csv', 'w');

        foreach($lines as $line){
            $lineToWrite = [$line->getPatientId(), $line->getName(), $line->getAdress()];
            fputcsv($patientsFile, $lineToWrite);
        }

        fclose($patientsFile);
    }

    public function editPatient(){
        $lines = [];

        $patients = $this->getPatientsData();

        foreach ($patients as $line) {
            if ($line->getPatientId() == $_GET['patient'] && $line->getName() == $_GET['name']) {
                $line->setPatientId($_POST['patient']);
                $line->setName($_POST['name']);
                $line->setAdress($_POST['adress']);
            }
            array_push($lines, $line);
        }

        $patientsFile = fopen('../../data/patients.csv', 'w');

        foreach($lines as $line){
            $lineToWrite = [$line->getPatientId(), $line->getName(), $line->getAdress()];
            fputcsv($patientsFile, $lineToWrite);
        }

        fclose($patientsFile);
    }


}
