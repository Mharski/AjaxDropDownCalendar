<?php 
class Control{
public function getForward($id, $testQuestion, $choiceA, $choiceB, $choiceC, $choiceD){
          $AA = $choiceA;
          $BB = $choiceB;
          $CC = $choiceC;
          $DD = $choiceD;
          $TEST = $testQuestion;
          $ID = $id + 1;
          $query = mysql_query("SELECT * from test_question where 
                              id = {$ID} and 
                              test_question = {$testQuestion} and 
                              choice_A = {$AA} and choice_B = {$BB} and choice_C = {$CC} choice_D = {$DD}");
          if(mysql_num_rows($query)>0){
               $row = mysql_fetch_array($query);
               $questionNumber = $row['id'];
               $question = $row['test_question'];
               $CHOICEA = $row['choice_A'];
               $CHOICEB = $row['choice_B'];
               $CHOICEC = $row['choice_C'];
               $CHOICED = $row['choice_D'];
               $json = "{
                    \"question Number\" : \"".$questionNumber."\",
                    \"Question\" : ".$question.",
                    \"Choice a\" : ".$CHOICEA.",
                    \"Choice b\" : ".$CHOICEB.",
                    \"Choice c\" : ".$CHOICEC.",
                    \"Choice d\" : ".$CHOICED."\"
               }";
               echo $json;
          }
     }
}
 ?>