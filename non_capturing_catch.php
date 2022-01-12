<?php

try {
    throw new Exception();
} catch (Exception) {
    die("I don't have to do anything with the Exception variable");
}
