<?php
    /*
        =================== DATE, TIME IN PHP ====================
        PHP offers a way of handling date/time functionalities by
        use of the the date() and time(

        ) functions. There are also other
        functions that do specific tasks that has to do with dates,
        like calendar function, get date, set timezone etc.
        The time() function gives the UTC time which is the UNIX epoch
        time since January 1st 1970.
        This time will cease to count on January 19 2038 due to a 
        32 bit overflow.
        (hint: Millenium Bug)
    */
    // SET TIME ZONE TO BE USED
    date_default_timezone_set("Africa/Lagos");
    // echo date_default_timezone_get();
    // echo "<br>";
    
/*
    FORMATTING DATE FUNCTION
    Y year in full e.g 2022
    y year in half e.g 22
    m month in numbers e.g 03 for March
    M month in string e.g March
    d day in numbers e.g 2 for Monday
    l day in strng e.g Mon for Monday
    h hour
    i minutes
    s seconds
    a Antemeridian in small case
    A Antemeridian in uppercase
*/
    // echo date('d/M/Y h:i:sA');
// ================= THE UNIX TIME STAMP ====================
/*
   The UNIX time stamp for a particular time call or specified
   time, it is the number of seconds that has elapsed since
   January 1st 1970. Most programming language displays it as 
   a value of long int data type.
*/
    // time() FUNCTION
    /* This will return the UNIX time stamp for the current time */

    // echo time();
    // echo "<br>";
    // $timeStamp = time();

    // echo date("M/d/Y h:i:sa", $timeStamp);

    // mktime(hour, minutes, seconds, months, day, year);
    /* The mktime() function will return the UNIX timestamp 
       for the specified date. This value can be passed as the
       second arguement in the date function.
    */

    $timestamp = mktime(10,0,0,5,29,2015);
    // echo $timestamp;

    // echo date("l d/M/y", $timestamp);

    // strtotime('PHP tries to interpret string of any date or time')
    /*
        This function will take a string of date specification and
        return the timestamp
    */

    // $timestamp = strtotime("4:00pm tomorrow");
    // $timestamp = strtotime("Yesterday");
    // $timestamp = strtotime("next monday");
    // echo $timestamp;

    // echo date("l d/M/Y ", $timestamp);

    // getdate() function
    /*
        This returns an array of date time values
    */
    print_r(getdate());
?>