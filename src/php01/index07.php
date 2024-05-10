<?php

  $people = [
    ['Taro', 25 , 'men'],
    ['Jiro', 20 , 'men'],
    ['hanako', 16 , 'women']
  ];
  foreach ($people as $parson) {
    echo $parson[0] . '(' . $parson[1] . '歳' . $parson[2] .')'. '<br />';
  }