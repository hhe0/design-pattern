<?php
namespace Programmer;

/**
 * 程序员类
*/
class Programmer
{
    protected $programBehavior;

    public function __construct(programBehavior $programBehavior)
    {
        $this->programBehavior = $programBehavior;
    }

    public function performProgramming()
    {
        $this->programBehavior->programming();
    }
}

/**
 * 封装编程行为
*/
interface ProgramBehavior
{
    public function programming();
}

class PhpProgramming implements ProgramBehavior
{
    public function programming()
    {
        echo 'PHP NO.1.' . "\n";
    }
}

class JavaProgramming implements ProgramBehavior
{
    public function programming()
    {
        echo 'JAVA NO.1.' . "\n";
    }
}

class CProgramming implements ProgramBehavior
{
    public function programming()
    {
        echo 'C NO.1.' . "\n";
    }
}

class PhpProgrammer extends Programmer
{
    public function __construct(PhpProgramming $programBehavior)
    {
        parent::__construct($programBehavior);
    }
}

class JavaProgrammer extends Programmer
{
    public function __construct(JavaProgramming $programBehavior)
    {
        parent::__construct($programBehavior);
    }
}

class CProgrammer extends Programmer
{
    public function __construct(CProgramming $programBehavior)
    {
        parent::__construct($programBehavior);
    }
}

class DataProgrammer extends Programmer
{
//    public function __construct(CProgramming $programBehavior)
//    {
//        parent::__construct($programBehavior);
//    }
}

$phpProgrammer = new PhpProgrammer(new PhpProgramming());
$phpProgrammer->performProgramming();

$javaProgrammer = new JavaProgrammer(new JavaProgramming());
$javaProgrammer->performProgramming();

$cProgrammer = new CProgrammer(new CProgramming());
$cProgrammer->performProgramming();

$dataProgrammer = new DataProgrammer(new CProgramming());
$dataProgrammer->performProgramming();

$dataProgrammer = new DataProgrammer(new JavaProgramming());
$dataProgrammer->performProgramming();

