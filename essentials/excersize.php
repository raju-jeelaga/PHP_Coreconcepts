<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Excersize</title>
</head>
<body>
<pre>
    <?php 
        $waitingList = [
            'Dawn White', 'Frank Smith', 'Bob Carter', 'Charlie Davis', 'Eve Black', 
            'Alice Brown', 'Alice Brown', 'Charlie Davis', 'Grace Jones', 
            'Hank Green', 'Eve Black', 'Dawn White'
        ];

        $removeFromList = ['Dawn White', 'Charlie Davis'];
        
        $uniqueList = array_unique($waitingList);

        foreach ($uniqueList as $person2) {
            //$status = in_array($person1, $selectedParticipants);
            echo "<li>{$person2}</li>";
        }

        echo '<br/>';

        $uniqueList1 = array_diff($waitingList, $removeFromList);

        foreach ($uniqueList as $person3) {
            //$status = in_array($person1, $selectedParticipants);
            echo "<li>{$person3}</li>";
        }

        echo '<br/>';
        //$cleanedWaitingList = array_unique($waitingList);

        // Step 1: Remove duplicates and filter out names in $removeFromList
        $cleanedWaitingList = array_values(array_unique(array_diff($waitingList, $removeFromList)));
        
        // Step 2: Sort the cleaned list alphabetically
        sort($cleanedWaitingList);

        foreach ($cleanedWaitingList as $person1) {
            //$status = in_array($person1, $selectedParticipants);
            echo "<li>{$person1}</li>";
        }

        // Step 3: Select the first five individuals as attendees
        $selectedParticipants = array_slice($cleanedWaitingList, 0, 5);

        // Step 4: Generate the HTML output
        echo "<ul>";
        foreach ($cleanedWaitingList as $person) {
            $status = in_array($person, $selectedParticipants) ? '✅' : '❌';
            echo "<li>{$person} {$status}</li>";
        }
        echo "</ul>";
    
    ?>
</pre>
</body>
</html>