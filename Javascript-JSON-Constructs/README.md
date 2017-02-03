### **_My 'SelfEd' Code Diaries_**
#**Javascript - JSON-Constructs**
Run in Plunker | Citation / Note
----------------------------------------------------------------------------|--------------------------------------------------------
[:small_blue_diamond:**SelfEd-JSON_Exp3**](https://plnkr.co/edit/Iob3N0qgS9iGW2fiwTpA?p=preview) | [Citation AAB] (https://github.com/BrianHCombes/SelfEd-Tutorials-Javascript/blob/master/Cited-References.md)

:heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign:

### :arrow_down_small: **Metadata**
**SelfEd**          |  **Info** 
------------------- | ------------------------------------------------------------------------
**Date:**           | 12/10/2016
**Archive_Title:**  | SelfEd-Javascript-JSON-Constructs 
**Objective:**      | To gain a deeper understanding of JSON formatting and parsing
**Catalyst:**       | I couldn't get the code to work from tutorial: [**https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm**](https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm). The **Add User** section from the TutorialsPoint tutorial I'm referencing in my SelfEd project: [**SelfEd-NodeJS-RESTful-API**](https://github.com/BrianHCombes/SelfEd-Tutorials-NodeJS/tree/master/NodeJS-RESTful-API), involving the POST method was where I was having the trouble. So I began this SelfEd because my preliminary investigation suggests the JSON is not parsing properly.

:heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign:

### :arrow_down_small: **Tutorial Links**
**Citation / Note**   | **Links learned from....**                                                
----------------------|-----------------------
[AAB](https://github.com/BrianHCombes/SelfEd-Tutorials-Javascript/blob/master/Cited-References.md)  | https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm
                      | http://www.w3schools.com/js/js_json_intro.asp
                      | https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON
                      | https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/parse
                      | https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/stringify
                      | http://stackoverflow.com/questions/4933217/print-json-parsed-object
                      | http://benalman.com/news/2010/03/theres-no-such-thing-as-a-json/   
                      | https://www.tutorialspoint.com/nodejs/nodejs_callbacks_concept.htm
                      | [**SelfEd-NodeJS-RESTful-API**](https://github.com/BrianHCombes/SelfEd-Tutorials-NodeJS/tree/master/NodeJS-RESTful-API)
                      
:heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign::heavy_minus_sign:

### :arrow_down_small: **Learn Process:**

I have multiple working examples so far. There are different JSON formats that JSON.parse will work on but so far I haven't found the full scope of the variations that can be parsed. Refer to the SelfEd-JSON-Exp(#).html files in this SelfEd project folder.

Here's the JSON file from the tutorial at: [**https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm**](https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm)

    {
       "user1" :    {
                        "name" : "mahesh",
                        "password" : "password1",
                        "profession" : "teacher",
                        "id": 1
                    },
       "user2" :    {
                        "name" : "suresh",
                        "password" : "password2",
                        "profession" : "librarian",
                        "id": 2
                    },
       "user3" :    {
                        "name" : "ramesh",
                        "password" : "password3",
                        "profession" : "clerk",
                        "id": 3
                    }
    }

I'm gonna see if it will parse.

To start I did my first SelfEd lesson on **JSON arrays.** JSON arrays are cool and  I got them  to work. To see four JSON array variations get parsed refer to:

:small_blue_diamond:[**SelfEd-JSON_Exp1.html** (:memo:See comments in this file for details)](https://plnkr.co/edit/lTWTA87SgLbInWgYNcHz?p=preview)    



Happily, I believe they have given me good insight on JSON object collections which I believe is the case with this JSON file from the tutorial. Ironically I think the problem with the JSON file provided by the tutorial is tiered and thus has newline characters  scattered all over causing JSON format violations. The copied, renamed, and re-contented JSON file is:

:small_blue_diamond:[**SelfEd-JSON_Exp.json** ](https://github.com/BrianHCombes/SelfEd-Tutorials-Javascript/blob/master/Javascript-JSON-Constructs/SelfEd-JSON_Exp.json)

It is the original layout style of the TutorialsPoint tutorial provided but re-contented. Let's find out if it'll parse, refer to:

:small_blue_diamond:[**SelfEd-JSON_Exp2.html** (:memo:See comments in this file for details)](https://plnkr.co/edit/TdMZTCxHoNe4x07WFEMP?p=preview)    

        
OK, in the **SelfEd-SelfEdJSON_Exp2.html** SelfEd I have managed to get a JSON string with an object based construct to be successfully parsed and accessed. So I will now take the JSON string file provided by the tutorial and massage it until it is parsable. Refer to:

:small_blue_diamond:[**SelfEd-JSON_Exp3.html** (:memo:See comments in this file for details)](https://plnkr.co/edit/P4M4mXsNYzWiJ20Ma4SV?p=preview)

for this effort. I Have managed to get the file to read just fine once I set it up so no newline characters are involved.

# :red_circle:Whoa! I just added those newline characters back into the json file and it still works fine. What ever the original cause it went away.

 
