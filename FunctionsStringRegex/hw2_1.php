<?php

// 1)Перетворити рядок 'var_test_text' в 'varTestText'.
function transform($subject){
    return str_replace('_t', 'T', $subject);
}

