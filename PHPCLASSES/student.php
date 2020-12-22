<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class student{
        private $name;
        private $id;
        private $dept;
         private $city;

         

         public function set_name($name){
             $this->name=$name;

         }
         public function set_id($id){
            $this->id=$id;

        }
        public function set_dept($dept){
            $this->dept=$dept;

        }
        public function set_city($city){
            $this->city=$city;

        }
         public function get_id(){
           echo  $this->id;

        }
        public function get_dept(){
          echo  $this->dept;

       }
       public function get_city(){
      echo  $this->city;

   }
   public function get_name(){
   echo $this->name;

}

public function showGrades($m1,$m2,$m3){
    $avg=($m1+$m2+$m3)/3;
    if($avg>=90){
        echo "grade: A+";
    }
    else if($avg>=80 && $avg<90){
        echo "grade: B";
    }
    else if($avg>=70 && $avg<80){
        echo "grade: c";
    }
    else{
        echo "grade: F better luck next time";
    }

}



        function printdetails(){

            $this->get_name();
            echo $this->get_name();

        }

    }
    $stud=new student();
     $stud->set_name("Ritu");
     $stud->set_id(101);
     $stud->set_dept("IT");
     $stud->set_city("Mumbai");

     $stud->get_name();
     $stud->get_id();
     $stud->get_dept();
     $stud->get_city();
     $stud->showGrades(90,80,70);

    ?>
</body>
</html>