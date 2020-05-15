<?php
    /*$filename = "..\Week 9\processing.php";
    $line = file($filename);
    echo "<ol>";
    foreach($line as $i => $line)
        echo "<li> $line </li>";
    echo "</ol>"

    $filename = "processing.php";
    if ($numBytes = file_put_contents($filename, $linesOrBigString))
        echo "File Saved, $numBytes written.";
    else
        echo "File Access Error. Does $filename exist and have 606 permissions?";
    */
    $filename = "students.csv";
    $fp = fopen($filename, "r");
    flock($fp, LOCK_SH);
    $headings = fgetcsv($fp);
    while ($aLineOfCells = fgetcsv($fp)) {
        $records[] = $aLineOfCells;
    }
    flock($fp, LOCK_UN);
    fclose($fp);
    echo "<p>{$headings[3]}</p>";
    echo "<p>{$records[0][0]}</p>";

    $filename = "student.txt";
    $fp = fopen($filename, "w");
    flock($fp, LOCK_EX);
    fputcsv($fp, $headings);
    foreach ($records as $record)
        fputcsv($fp, $record);
    flock($fp, LOCK_UN);
    fclose($fp);

?>