<?php

class Greeting {

    public function greet($name) {
        if (!$name) {
            return $this->returnNullNameGreeting();
        } else if(ctype_upper($name)) {
            return $this->returnUppercaseGreeting($name);
        } else if ($this->isMixedGreeting($name)) {
            return $this->returnMixedGreeting($name);
        } else if ($this->isArrayLessThan3($name)) {
            if ($this->checkItemHas2Names($name)) {
                return $this->splitItemsWith2Names($name);
            }   return $this->returnArrayLessThan3($name);
        } else if ($this->isArrayMoreThan2($name)) {
            return $this->returnArrayMoreThan2($name);
        }
        return $this->returnStandardGreeting($name);
//        Lewis, how should line 17 be indented?


    }





    public function removeDoubleQuotes($names)
    {
        $noCommaNames = [];
        foreach ($names as $name) {
            $quoteMark = '"';
            $name = preg_replace("/[$quoteMark]/", '', $name);
            // Lewis, any advantage to using preg_replace over str_replace?
            array_push($noCommaNames, $name);
        }

        return $this->returnArrayLessThan3($noCommaNames);
    }
}

