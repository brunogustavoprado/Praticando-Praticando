<?php

$data = "23/02/2005";

$data_tratamento = explode('/', $data);

$data_reverse = $data_tratamento[2] . '-' . $data_tratamento[1] . '-' . $data_tratamento[0];

echo $data_reverse;