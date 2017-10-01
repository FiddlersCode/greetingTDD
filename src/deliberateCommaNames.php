<?php
require_once 'greeter.php';

class DeliberateCommaNames {

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        $this->remoteDoubleQuotes();
        return 'Hello, ' . implode(' and ', $this->name) . '.';

    }

    private function remoteDoubleQuotes()
    {
        $noCommaNames = [];
        foreach ($this->name as $name) {
            $quoteMark = '"';
            $name = preg_replace("/[$quoteMark]/", '', $name);
            array_push($noCommaNames, $name);
        }
        return $this->name = $noCommaNames;
    }
}