# Lab 2

-Provided the initial index.html and CSS (Gave the page it's parchement background and formatted paragaphs to display with a given max width)

-With help from W3 Schools, was able to create "Collapsibles" that displayed the Article summaries

-Created original button function to execute Javascript function onclick (made the initial button used by the first amendment-group members added the others)

-Was initially challenging to get the text replacement working as it ended up breaking the format provided by the CSS, however after researching Javascript DOM manipulation
 I was able to fix the bug and force the replaced text to follow the CSS guidelines as dictated by the stylesheet
 
-Another bug arose when it came to the implementation of the collapsibles. Initially all that would display was the button that when clicked would reveal the text that was "collapsed," in order to fix this I had to move the javascript function from being present within the external file to existing within an internal script tag within the HTML. The CSS also exists there, defined in the header for consistency.

-Also was able to get the site hosted using Github pages using this link: https://bonjour-itws.github.io/lab2/

-Getting the site hosted was initially problematic as while the website would work locally-including all external CSS and Javascript files-the files would fail to load when hosted by Github. After some forum research, I found that many people suggested to have the links to external files placed earlier/higher in the head tag. Upon doing this the external CSS and Javascript loaded which allowed for the page background to appear in addition to making the buttons that replace the text for the 10 amendments to work.
