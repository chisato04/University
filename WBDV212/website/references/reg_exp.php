<?php

    # below are regular expression lists, which require certain form inputs to have 
    # a specific character\s in the string, or restrict a group of character\s from being inputted
    # check notebook "Reg Exp"

    $email_reg_exp = '^[\\w\\-]+(\\.[\\w\\-]+)*@([A-Za-z0-9-]+\\.)+[A-Za-z]{2,4}$
	^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$ 
	^([\w\.*\-*]+@([\w]\.*\-*)+[a-zA-Z]{2,9}(\s*;\s*[\w\.*\-*]+@([\w]\.*\-*)+[a-zA-Z]{2,9})*)$';
?>