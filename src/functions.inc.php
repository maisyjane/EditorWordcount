<?php
// get count of words - no error checking
function wordcount($text)
{
    if($text != "")
    {
        return str_word_count($text);
    }
  
}