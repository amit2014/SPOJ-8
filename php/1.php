<?php

// Life, the Universe, and Everything

$num = fgets(STDIN);

while((int)$num != 42){
  echo $num;
  $num = fgets(STDIN);
}