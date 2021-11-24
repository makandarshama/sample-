<?php

include( 'FileReader.php' );
include( 'CSVReader.php' );

$reader =& new CSVReader( new FileReader( 'countrylist.csv' ) );
// set the separator as comma
$reader->setSeparator( ',' );
$line = 0; // line tracking

//  output
echo '<table cellpadding=2 cellspacing=1 bgcolor="#cdcdcd" border=0>';
while( false != ( $cell = $reader->next() ) )
{
	if ( $line == 0 )
	{
		echo "<tr>\n";
		echo	"<td style='font: 12px Arial; font-weight: bold' nowrap> # </td>\n";
		for ( $i = 0; $i < count( $cell ); $i++ )
		{
			echo	"<td nowrap style='font: 12px Arial; font-weight: bold'> Cell {$i}</td>\n";
		}
		echo "</tr>\n";		
	}
	echo "<tr>\n";
	echo	"<td bgcolor='".( ( $line % 2 ) == 0 ? '#efefef' : '#ffffff'  )."' style='font: 12px Arial;'>{$line}</td>\n";
	for ( $i = 0; $i < count( $cell ); $i++ )
	{
		echo	"<td bgcolor='".( ( $line % 2 ) ==0 ? '#efefef' : '#ffffff'  )."' style='font: 12px Arial;'>{$cell[$i]}</td>\n";
	}
	echo "</tr>\n";
	$line++;
}
echo '<table>';

?>