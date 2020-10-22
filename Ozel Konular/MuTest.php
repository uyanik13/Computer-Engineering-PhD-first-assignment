<?php


class Test{

      const EXECUTE_ARRAY = 'EXECUTE_ARRAY';
      const SET_LAST_INDEX = 'SET_LAST_INDEX';
      const DELETE_LAST_INDEX = 'DELETE_LAST_INDEX';
      const SET_FIRST_INDEX = 'SET_FIRST_INDEX';
      const DELETE_FIRST_INDEX = 'DELETE_FIRST_INDEX';
      const PHP_EOL = PHP_EOL;
      public  $startNumber;
      public  $endNumber;
      public  $arrayCount;
      public  $array = [];
      public $startTime;
      public $endTime;

      //DEFINE A CONSTRUCT METHOD
      public function __construct(int $startNumber = 1,int $endNumber = 1000000)
      {
            $this->startNumber = $startNumber;
            $this->endNumber = $endNumber;
      }


      //GETTING CURRENT TIME (ms)
      public function getCurrentTime()
      {     
            return microtime(true);
      }

      public function setStartTime()
      {     
             $this->startTime = $this->getCurrentTime();
             return $this->startTime;
      }

      public function setEndTime()
      {     
             $this->endTime = $this->getCurrentTime();
             return $this->endTime;
      }

      public function setArrayCount()
      {     
             $this->arrayCount = count($this->array);
             return $this->arrayCount;
      }

       //SET ARRAY
       public function setArray ()
       {     
      
             for($this->startNumber; $this->startNumber < $this->endNumber; $this->startNumber++)
             {
                   $this->array['number-'.$this->startNumber] =  $this->startNumber; 
             }
             return $this->array;
       }


        //EXECUTE ARRAY
       public function ArrayExecute ()
       {     
             echo self::EXECUTE_ARRAY . ' Started Time :' . $this->setStartTime() . self::PHP_EOL; 
             $this->setArray(); //SET Array Count
             $this->setArrayCount(); //SET Array Count
             echo self::EXECUTE_ARRAY .' Ended Time :' . $this->setEndTime() . self::PHP_EOL; 
             echo self::EXECUTE_ARRAY . ' EXECUTE TIME :' . bcsub($this->endTime, $this->startTime, 4). PHP_EOL;
             echo self::EXECUTE_ARRAY . ' Memory (byte) :' . memory_get_peak_usage(true). PHP_EOL;

       }


       //ADD ELEMENT TO LAST INDEX
       public function setElementToLastIndex ($addedElement='ogur')
       {     
             echo self::SET_LAST_INDEX . ' Started Time :' . $this->setStartTime() . self::PHP_EOL; 
             $this->setArray(); //SET Array Count
             echo self::SET_LAST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             $this->array[$this->setArrayCount()+1]= $addedElement; 
             echo self::SET_LAST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             echo self::SET_LAST_INDEX .' Ended Time :' . $this->setEndTime() . self::PHP_EOL; 
             echo self::SET_LAST_INDEX . ' EXECUTE TIME :' . bcsub($this->endTime, $this->startTime, 4). PHP_EOL;
             echo self::SET_LAST_INDEX . ' Memory (byte) :' . memory_get_peak_usage(true). PHP_EOL;

       }

       //ADD ELEMENT TO LAST INDEX
       public function deleteLastElementOfArray ()
       {     
             echo self::DELETE_LAST_INDEX . ' Started Time :' . $this->setStartTime() . self::PHP_EOL; 
             $this->setArray(); //SET Array Count
             echo self::DELETE_LAST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             array_pop($this->array);
             echo self::DELETE_LAST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             echo self::DELETE_LAST_INDEX .' Ended Time :' . $this->setEndTime() . self::PHP_EOL; 
             echo self::DELETE_LAST_INDEX . ' EXECUTE TIME :' . bcsub($this->endTime, $this->startTime, 4). PHP_EOL;
             echo self::DELETE_LAST_INDEX . ' Memory (byte) :' . memory_get_peak_usage(true). PHP_EOL;

       }


       //ADD ELEMENT TO LAST INDEX
       public function setElementToFirstIndex ($addedElement='ogur')
       {     
             echo self::SET_FIRST_INDEX . ' Started Time :' . $this->setStartTime() . self::PHP_EOL; 
             $this->setArray(); //SET Array Count
             echo self::SET_FIRST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             $this->array[1]= $addedElement; 
             echo self::SET_FIRST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             echo self::SET_FIRST_INDEX .' Ended Time :' . $this->setEndTime() . self::PHP_EOL; 
             echo self::SET_FIRST_INDEX . ' EXECUTE TIME :' . bcsub($this->endTime, $this->startTime, 4). PHP_EOL;
             echo self::SET_FIRST_INDEX . ' Memory (byte) :' . memory_get_peak_usage(true). PHP_EOL;

       }

       //ADD ELEMENT TO LAST INDEX
       public function deleteFirstElementOfArray ()
       {     
             echo self::DELETE_FIRST_INDEX . ' Started Time :' . $this->setStartTime() . self::PHP_EOL; 
             $this->setArray(); //SET Array Count
             echo self::DELETE_FIRST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             array_shift($this->array);
             echo self::DELETE_FIRST_INDEX . ' CURRENT COUNT OF ARRAY:' . $this->setArrayCount() . self::PHP_EOL; 
             echo self::DELETE_FIRST_INDEX .' Ended Time :' . $this->setEndTime() . self::PHP_EOL; 
             echo self::DELETE_FIRST_INDEX . ' EXECUTE TIME :' . bcsub($this->endTime, $this->startTime, 4). PHP_EOL;
             echo self::DELETE_FIRST_INDEX . ' Memory (byte) :' . memory_get_peak_usage(true). PHP_EOL;

       }


}


$class = new Test(1,500);
$class->ArrayExecute(); //Execute ARRAY
//$class->setElementToLastIndex('ogur'); //SET ELEMENT TO LAST INDEX
//$class->deleteLastElementOfArray(); //DELETE LAST ELEMENT
//$class->setElementToFirstIndex(); //SET ELEMENT TO FIRST INDEX
//$class->deleteFirstElementOfArray(); //DELETE FIRST ELEMENT


?>