
SelfEd Date:        (12/10/2016)

SelfEd Title:       Project is: SelfEd-Javascript-JSON-Constructs 
                    (sub title SelfEd-JSON-NodeJS)\

SelfEd Objective:   To gain a deeper understanding of JSON formatting and parsing

SelfEd Catalyst:    Was working on this Tutorial/ SelfEd when the example code 
                    would not work. The SelfEd project and tutotrial are:

                            SelfEd-NodeJS-RESTful-API
                            https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm

                    The example code is the < Add User > section involving the 
                    POST method would not work. Preliminary investigation
                    suggests the JSON is not parsing properly.

SelfEd References:  
                    SelfEd-NodeJS-RESTful-API
                    https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm
                    http://www.w3schools.com/js/js_json_intro.asp
                    https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON
                    https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/parse
                    https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/stringify
                    http://stackoverflow.com/questions/4933217/print-json-parsed-object
                    http://benalman.com/news/2010/03/theres-no-such-thing-as-a-json/

Preamble Comments:  I've learned that a JSON construct can be considered a serialized file.
                    It is a series of characters forming a simple string.
                    This means it can be exchanged between many languages and machines.
                    Once you apply JSON.parse() to the JSON file it is no longer a
                    string and is now a Javascript object. You then treat and 
                    manipulate it as an object. Then you apply JSON.stringify()
                    to converted back to a JSON string construct.



Process:    
        I have multiple working examples so far. There are different JSON formats
        that JSON.parse will work on but so far I haven't found the full scope
        of the variations that can be parsed. Refer to the SelfEd-JSON-Exp(#).html 
        files in this SelfEd project folder.

        Here's the JSON file from the tutorial at:

                            https://www.tutorialspoint.com/nodejs/nodejs_restful_api.htm

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
        
        But first I did SelfEd lessons on JSON arrays. Those are cool and  I
        got them  to work. Refer to:

                            SelfEd-JSON_Exp1.html within SelfEd project 
                            folder SelfEd-Javascript-JSON-Constructs 

        Happily, I believe they have given me good insight 
        on JSON object collections which I believe is the case with this JSON 
        file from the tutorial. Ironically I think the problem with the JSON file
        provided by the tutorial is tiered and thus has newline characters
        scattered all over causing JSON format violations. The copied, renamed,
        and re-contented JSON file is:

                            SelfEd-JSON_Exp.json

        It is the original layout provided.
        Let's find out, refer to:

                            SelfEd-SelfEdJSON_Exp2.html within SelfEd project 
                            folderSelfEd-Javascript-JSON-Constructs 
        
        OK, in the < SelfEd-SelfEdJSON_Exp2.html > SelfEd I have managed to get
        a JSON string with an object based construct to be successfully parsed
        and accessed. So I will now take the JSON string file provided by the
        tutorial and massage it until it is parsable. Refer to:

                            SelfEd-SelfEdJSON_Exp3.html within SelfEd project 
                            folderSelfEd-Javascript-JSON-Constructs 

        for this effort.
        Have managed to get the file to read just fine once I set it up so no
        newline characters are involved.

        Whoa! I just added those newline characters back into the json file
        and it still works fine.

        