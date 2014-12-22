Simple.php
==========

A simple MVC Framework without any bloat. Just download the project and use it as a template.

## index.php

`index.php` contains your project's configuration. Feel free to change this file in order to define your app's structure.

```php
SimplePhp::DefaultPage(0, 'index');               # Redirect example.com to example.com/index
SimplePhp::NotFoundPage('views' , 0, 'notfound'); # If no view is found, display the /notfound page

SimplePhp::LoadDir('controllers', 0);             # Run the controller
SimplePhp::LoadPage('templates', 'header');       # Display the header
SimplePhp::LoadDir('views', 0);                   # Display the content
SimplePhp::LoadPage('templates', 'footer');       # Display the footer
```

The numbers specify the segment of the URL to use for evaluation.  
`DefaultPage` and `NotFoundPage` define the standard pages that should be displayed in certain situations.  
`LoadPath` loads a .php file with the corresponding name inside the folder specified.  
`LoadDir` loads a .php file that has the same name as the URL segment specified.  
The SimplePhp class can be used everywhere, even inside your controllers.