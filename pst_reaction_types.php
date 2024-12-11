<?php
$host="localhost";
$database="2685_php_posts";
$user="root";
$password="";
 

$sql=new mysqli($host , $user , $password , $database);
$qry= 'SELECT * FROM `pst_reaction_types`;';
$res=$sql->query($qry);
$data = mysqli_fetch_all($res ,MYSQLI_ASSOC );

?>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<body class=" p-6">
    <div class="  rounded-lg p-4">
        <h1 class="text-xl font-bold mb-4 text-center">Users Table</h1>
        <table class="border border-gray-300">
            <thead>
                <tr class="bg-gray-200 ">
                    <?php 
                    foreach (array_keys($data[0]) as $header) {
                        echo '<th class="border border-gray-300  text-gray-700 font-semibold">' . ($header) . '</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($data as $row) {
                    echo '<tr class="hover:bg-gray-100">';
                    foreach ($row as $cell) {
                        echo '<td class="border border-gray-300 px-4 py-2 text-gray-600">' . ($cell) . '</td>';
                    }
                    echo '</tr>'; 
                }
                ?>
            </tbody>
        </table>
    </div>
</body>