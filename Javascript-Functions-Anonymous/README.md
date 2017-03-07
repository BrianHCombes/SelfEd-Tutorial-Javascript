
### **_My 'SelfEd' Code Diaries_**
#**Javascript - Anonymous Functions**
Run in Plunker | Citation / Note
----------------------------------------------------------------------------|--------------------------------------------------------
No SelfEd File Yet  | See **Tutorial Links** Section for a great Tutorial From Noah Stokes

:heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign:

### :arrow_down_small: **Metadata**
**SelfEd**          |  **Info** 
------------------- | ------------------------------------------------------------------------
**Date:**           | 11/24/2016
**Archive_Title:**  | SelfEd-Javascript-Functions-Anonymous
**Objective:**      | To better understand anonymous functions
**Catalyst:**       |                                                                    

:heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign:

### :arrow_down_small: **Tutorial Links**
**Citation / Note**   | **Links learned from....**                                                
----------------------|-----------------------
                      | http://esbueno.noahstokes.com/post/77292606977/self-executing-anonymous-functions-or-how-to-write 
                      
:heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign:

### :arrow_down_small: **Learn Process:**

Had a brief moment where I needed to brush up on anonymous functions. Found this great Noah Stokes tutorial (listed in Tutorial Links). He gets reasonably complex at the end of his tutorial. I plan to write some SelfEd code based on his example (hopefully soon). For now, his tutorial is all that's needed.
 
03/05/2017   
In selling off a client's grow gear I used ng-repeat to display rows of images and captions. The data array that ng-repeat is accessing is an array of objects. The caption property is normally a string. But I replaced a couple of captions with self executing anonymous functions. The functions have return statements and **VOILA!** the return values are displayed as the caption property.
See **Project-TTD-Grow-Gear-Sale** project where I'm deploying this with the intent of accessing outside data. Here's a snip of the example code from the project. Notice the function calls on the first and last objects.

    imageCtrlSelf.iList = [ {"image":"GFS-Images/IMAG2174.jpg", "label":"GFS-Images/IMAG2181.jpg", 
                                        "caption": (function(){return "This comment is from a function call"})()}, 
                                    {"image":"GFS-Images/IMAG2175.jpg", "label":"GFS-Images/IMAG2179.jpg", 
                                        "caption":" Add comments here - Add comments here - Add comments here"},
                                    {"image":"GFS-Images/IMAG2176.jpg", "label":"GFS-Images/IMAG2180.jpg", 
                                        "caption":" Add comments here - Add comments here - Add comments here"},
                                    {"image":"GFS-Images/IMAG2177.jpg", "label":"GFS-Images/IMAG2180.jpg", 
                                        "caption":" Add comments here - Add comments here - Add comments here"},
                                    {"image":"GFS-Images/IMAG2178.jpg", "label":"GFS-Images/IMAG2183.jpg", 
                                        "caption":  (function(){return 25;})()}    
From a javascript block you need to assign a self executing function to a value for it to work properly. In this case the function is called "selfRunfunc" and will execute on load.    

    var selfRunfunc = function(){
        alert("This function is self executing");
    }();

