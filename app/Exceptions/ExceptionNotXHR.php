<?php

namespace App\Exceptions;


class ExceptionNotXHR extends \Exception
{
    /**
     * @return string
     */
    public function getStandardMessage()
    {
        $message = (array) json_decode($this->getMessage());
        if (is_array($message)) {
            return $this->array2String($message);
        }
        return $this->getMessage();
    }

    public function array2String(array $errors)
    {
        $result = '';
        foreach ($errors as $error) {
            $result .= $error[0] . ',<br>';
        }
        return $result;
    }
}
