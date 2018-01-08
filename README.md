# MTM6331: Server-Side Web Development
## Week 5: Creating a Contact Book with Twig

Today we will be creating a Contact Book using PHP. We will learn how to use to read and convert a JSON file to be used with PHP, use the query strings, make friendly URLs, and use the Twig Templating engine.

### Installing Twig
To use the Twig Templating Engine, you must first install it. The easiest way to install Twig is using composer. (See [Twig Installation](https://twig.symfony.com/doc/2.x/installation.html))

Open your Bash Terminal (Git Bash on Windows or Terminal on macOS) and navigate to your week5 directory. It would look something like this:

** macOS: **
```
cd /Application/MAMP/htdocs/mtm6331/week5
```

** Windows: **
```
cd /c/MAMP/htdocs/mtm6331/week5
```

Once in the week5 directory run the following command.

```
composer require twig/twig:~2.0
```
This will create a folder named "vendor" containing all the necessary files for using Twig.


### Additional Resources

For more information about what we will be cover, check out the following:
- [file_get_contents](http://php.net/manual/en/function.file-get-contents.php)
- [json_decode](http://php.net/manual/en/function.json-decode.php)
- [Twig](https://twig.symfony.com/doc/2.x/)
- [PHP: Clean URLs on Apache Server](https://www.lynda.com/PHP-tutorials/Clean-PHP-URLs-Apache-Server/482052-2.html)
