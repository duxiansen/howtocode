<?php

class a
{
    private $ff;

    public function cc()
    {

        $this->ff = 44;

        echo $this->ff;

        var_dump($this);
    }
}

class b extends a
{
    public function bb()
    {
        parent::cc();
    }

}

$dd = new b();
$dd->bb();