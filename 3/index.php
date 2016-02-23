<!DOCTYPE html>
<html lang="en">
<head>
    <title>To Do</title>
</head>
<style type="text/css">
    body {
        color: white;
        font-family: Arial;
    }
    table {
        border-collapse: collapse;
    }
    tr.red {
        background-color: red;
    }
    tr.orange {
        background-color: orange;
    }
    tr.green {
        background-color: green;
    }
</style>
<body>
    <table>
<?php
 $todos = [
            [
                "description" => "Post sreenshot to dribbble",
                "hours" => 6,
                "category" => "home"
            ],
            [
                "description" => "Publish website",
                "hours" => 2,
                "category" => "school"
            ],
            [
                "description" => "Launch Mac version",
                "hours" => 0.5,
                "category" => "work"
            ],
            [
                "description" => "Release iPhone Update",
                "hours" => 3,
                "category" => "school"
            ],
            [
                "description" => "Organise Launch Party",
                "hours" => 4,
                "category" => "home"
            ]
         ];
foreach($todos as $todo):
if($todo['hours'] > 5):
    $class = 'red';
elseif($todo['hours'] > 1):
    $class = 'orange';
else : 
    $class = 'green'; 
endif;
?>
        <tr class="<?php echo $class; ?>">                
        <td><?php echo $todo["description"] ?></td>
        <td><?php echo $todo["hours"] ?></td>
        <td><?php echo $todo["category"] ?></td>
        </tr>
<?php endforeach; ?>
    </table>
</body>
</html>