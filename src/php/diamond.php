<?php 
// PHP program to print 
// diamond shape with 
// 2n rows 

// Prints diamond $ 
// pattern with 2n rows 
function printDiamond($n) 
{ 
	$space = $n - 1; 

	// run loop (parent loop) 
	// till number of rows 
	for ($i = 0; $i < $n; $i++) 
	{ 
		
		// loop for initially space, 
		// before star printing 
		for ($j = 0;$j < $space; $j++) 
			printf(" "); 

		// Print i+1 stars 
		for ($j = 0;$j <= $i; $j++) 
			printf("* "); 

		printf("\n"); 
		$space--; 
	} 

	// Repeat again in 
	// reverse order 
	$space = 0; 

	// run loop (parent loop) 
	// till number of rows 
	for ($i = $n; $i > 0; $i--) 
	{ 
		
		// loop for initially space, 
		// before star printing 
		for ($j = 0; $j < $space; $j++) 
			printf(" "); 

		// Pr$i stars 
		for ($j = 0;$j < $i;$j++) 
			printf("* "); 

		printf("\n"); 
		$space++; 
	} 
} 

	// Driver code 
	printDiamond(5); 

// This code is contributed by Anuj_67 
?> 
