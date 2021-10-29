#Lab 5

    -Minimized JS and CSS
    -Added passive event listener to improve scrolling performance 
    -Gzip compression for html/js/css content
    -Removed Etags
    -Added expires headers
    -Wanted to upload images to CDN but costed money
    -Couldn't figure out image sprites
    
    
    -*Checked original website's performance with sites such as:
        -https://developers.google.com/speed/pagespeed/insights/?url=https%3A%2F%2Ffreebee.fun%2Fplay%2F
        -https://www.webpagetest.org/result/211029_BiDcQ6_2ae4deae70ea7012f7ca9bd2d3ae5c6e/1/performance_optimization/
        -Page was said to have been generally optimized at that point, scoring a 99 on Google's official tool making further optimization difficult
        -Most optimization outside of the mimized JS/CSS/Passive event listener is seen in the htaccess text file which accounts for Gzip/etags/expires headers
