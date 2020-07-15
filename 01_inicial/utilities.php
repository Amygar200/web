<?php
session_start();
$languages[] = 'Español';
$languages[] = 'English';
$languages[] = 'Français';
function debug( $value )
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}
function availability( $is_available )
{
  if( $is_available  )
                {
                  echo 'Si';
                }else
                {
                  echo 'No';
                }
}

function say_year()
{
  return date('Y');
}