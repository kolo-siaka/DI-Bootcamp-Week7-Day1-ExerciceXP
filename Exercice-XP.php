<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exerceice XP</title>
</head>
<body>
      <?php 
         /**
          * Exercice Xp 
          */
         class MyClass
         {
         	function ech()
         	{
         		echo "MyClass class has initialized !";
         	}

         	function fact($n){ 
                  $f = 1; 
                  for ($i = 1; $i <= $n; $i++){ 
                  $f = $f * $i; 
                  } 
                       return $f; 
               }

             public function trie($value=[])
             {
              	asort($value);
              return ($value);
             } 

           public function Dateout($date1,$date2)
                     {
                        $diff=date_diff($date1,$date2);
                        echo $diff -> format("%R%y years %R%m month %R%d days");
                     }

         }



       ?>
       


</body>
</html>