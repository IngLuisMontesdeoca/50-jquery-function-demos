Using .html() is the most common way to <strong>get or set the content of an element</strong> using jQuery. If you just want the text and not HTML tags you can simply use .text() which will return a string containing the combined text of all matched elements. These functions are browser dependant (ie - .html() uses the browser's innerHTML property) so the results returned(white space, new lines etc) will depend on the browser you are using. In this example we also make use of the .empty() function which is a quick way to get rid of the content within and .prev() which can be used to reference the preceding element, in this case this is the demo buttons.