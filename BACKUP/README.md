## Integer Manipulation using php

Very basic example of integer manipulation using vanilla PHP / html and ajax.  

There is three functions to manipulate a string of numbers inputted by a user.

1. Take a string of numbers, split the string into an array of single even values, then work out the sum of those even values.
2. Take a string of numbers, split the string into an array of single odd values, then work out the sum of those odd values.
3. Get a sequence of numbers starting from 0 to an inputted value adding them all to an array and then work out the sum of all those numbers.

## Possible bugs in current build
1. The sequence calculation seems to be buggy on larger strings,
    * Currently this function is limited to computing a smaller amount of numbers.
    * I think this may be due to ajax speed and the time taken to compute larger sums.
    * Fix - Code out to wait for calculation before injecting response to div.

2. The input validation I have used is a extremely basic jquery condition, this could possible cause problems.
    * Fix - for a production build i would use jquery validate plugin depending on the project. 

## What I would have done for production ?
1. Depending on the project, I would have built this out in either a cms or laravel.
2. I wouldn't use vanilla php unless temp or prototyping.
3. I would have used a javascript framework eg vuejs to handle passing template data to the php functions.
4. I would have written out the php functions to match the framework I would be using / using the correct business logic structure for the chosen framework.
5. Templates would be in either twig, blade etc etc. 
6. I would work on the naming convention of the current functions and variables, at the moment they are basic and dont account for a larger build where this may be a problem.

## How to run this project ?
1. download this repo.
2. unzip it into your local lamp development environment.
3. point vhost to the projects root folder.

** Note - If this build isnt run from a lamp environment you may get an error, this ajax has to run from a server.
