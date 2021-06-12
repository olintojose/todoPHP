<?php
    include_once 'db.php';

    class Todos extends DB{
        function nuevoTodo($texto){
           
            if(!empty($texto)){
                
                $query = $this->connect()->prepare('INSERT INTO todo_table(texto, completado) VALUES (:texto, 0)');
                $query->execute(['texto' => $texto]);
                

            }
        }

        function mostrarTodos(){
          
            return $this->connect()->query('SELECT * FROM todo_table ORDER BY timestamp DESC');
            
        }
    }

?>