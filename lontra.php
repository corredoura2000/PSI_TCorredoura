
<?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Bem-vindo ". $_GET['name']. ".<br />";
      echo "Voce tem ". $_GET['age']. " anos.";
   }
?>
<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Nome: <input type = "text" name = "nome" />
         Idade: <input type = "text" name = "idade" />
         Quer inserir mais pessoas: <input type="text" name="mais"/>   
         <input type = "submit" />
      </form>
      
   </body>
</html>