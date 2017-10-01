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

    private function returnMixedGreeting($names)
    {
        $i = 0;
        foreach ($names as $name)
        {
            if (ctype_upper($name)) {
                $upperGreeting = 'AND HELLO ' . $name . '!';
//                Lewis, is it best practice to define a variable at the top of the class?  Line 82($upperGreetings) is shouting at me.
                unset ($names[$i]);
            }
            $i++;

        }
        return 'Hello, ' . implode(' and ', $names) . '. ' . $upperGreeting;

    }

    private function returnStandardGreeting($name)
    {
        return 'Hello, ' . $name . '.';
    }

    private function checkItemHas2Names($names)
    {
        foreach ($names as $name) {
            if (strpos($name, ',')) {
                return true;
            }
        }
    }

    private function splitItemsWith2Names($names)
    {
        $splitNames = [];
        $allNames = [];
        foreach ($names as $name) {
            if (strpos($name, ',')) {
                $splitNames = preg_split("/[\s,]+/", $name);
            } else {
                array_push($allNames, $name);
            }
        }

        $allNames = array_merge($allNames, $splitNames);

        return ($this->returnArrayMoreThan2($allNames));
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

