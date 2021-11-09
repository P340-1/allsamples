 <?php

 class classSampleOne 
 {
    public    $val_0;
    private   $val_1;
    protected $val_2;

    public function __construct()
    {
        $this->$val_0 = 'val_0';
        echo('construct '.$this->$val_0);
    }

    public function msg()
    {
        echo('Sample...');
    }
 }


 class classSampleTwo
 {
     public function msg()
     {
         echo('SampleTwo...');
     }
 }


 interface interfaceSample 
 {
     public function printVal();
 }

 trait traitSample
 {
     function traitPrintVal()
     {
         echo('<br>traitPrintVal()');
     }
 }

 