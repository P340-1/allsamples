 <?php

 class classSampleOne 
 {
    public    $val_0;
    private   $val_1;
    protected $val_2;

    public static $val_static = 'staticval';

    const val_const = 'const';

    public function __construct()
    {
        $this->$val_0 = 'val_0';
        echo('construct '.$this->$val_0.'<br>');
    }

    public function msg()
    {
        echo('Sample...');
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

 
 class classSampleTwo extends classSampleOne
 {
     public function msg()
     {
         echo('SampleTwo...');
     }
 }


 abstract class classSampleThree
 {
    const val_c = 'C';
    
    public static $val_abs_static = 'vas';
    public abstract function __construct();
    public abstract function __destruct();

    abstract public function fabs();
    abstract public function traitPrintVal();
    public function fnoabs() 
    {
        echo('<br> no abstract function in abstract classThree... ');
    }
 }


 class classSampleFour extends classSampleThree implements interfaceSample
 {

    use traitSample;

    function __construct()
     {
         echo('<br> construct Four Obj ');
     }

     function __destruct()
     {
        echo('<br> destruct Four Obj ');
     }

    function fabs() { echo(' <br> fabs'); }

    function printVal() 
    {

    }
 }


