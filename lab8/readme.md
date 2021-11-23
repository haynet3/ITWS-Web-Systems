#Lab 8 Final

***Strugles***

         -Laptop updated to Windows 11 which corrupted files and AMP Stack Installation.
         -Had to restart completely, losing the finished lab I had from before after reverting back to Windows 10.
         -Was only able to Implement printing from the JSON file and the login with PDO instead of mySQLI.
         -Couldn't figure out how to archive back to database again-couldn't find the links/sources I used the first time around.
         -Was also a major struggle to get the printing from JSON to work initially as I didn't realize that due to the way the JSON array was structured
          I had to loop through it with the top level object "["Websys_course]" being first and then the "["Lectures"] or "["Labs"]" after that
          This took many hours to realize and costed me time to implement other functions. In addition to this I also encountered an issue with printing
          Due to the method I used to print out the JSON data, it doesn't follow the styling rules listed in my css sheet-or the ones in Bootstrap
          This prevented proper implementation of clicking a specified lecture or lab and then having it reveal it's info-rather than it all just being displayed
         -Although I unfortunately couldn't get certain aspects of the lab to function as intended-I will use this as a learning experience to assist with the
          Development of the final project as certain concepts from the lab will be vital functions of that project
          


***Features***

        -Login PHP page (Username: Tyler//Password: AMC) That redirects to main site when sucessful
        -PHP Uses PDO instead of mySQLI
        -Logout Button at the very bottom of the main site page
        -HTML Webpage listing all Lectures and Labs from ITWS Websystems printed via a JSON File
        -Lacks database archiving due to time constraint and file corruption.
        -Textfile dump of Database
