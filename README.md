# Introduction 
    I achieved this project, juste before using a web framework for the first time. The goal was to create a mini PHP framework, using the same basic principles Symfony, Laravel or CakePHP use. It follows the **MVC** pattern. 

## How to use 
To use it, you can either put the Core part of the code and I put it in your project. Or if you just to see what can be done with it you can run a small app I built to test it. It's a cinema interface. 

## Usage example : 
This small snipper in /src/Controller/FilmController.php handles everything you need in order to display movie data on a dedicated page. 
    
    public function filmAction($id)
    {
        $film = new FilmModel(["id" => $id]);
        $res = $film->read($film->tableName, $id, $film->getRelations());
        $this->render("film", ["film" => $res]);
    }

# Features 
- **Static & dynamic routing**. Supports required & optional parameters.
- **Controller** : all controllers in src need to inherit from this class. Its main feature is the render method, that renders the corresponding template, using the parameters if needed. 
- **ORM** : a simple ORM that supports Create, Read, ReadAll, Update and Delete methods. In addition, there is a *find()* method that allows more complex queries. Also, it integrates ManyToOne, OneToMany and ManyToMany relationShips. It is simply needed to add an associative array **$relations** in your models. 
- **Entity** : connects the models from source to the ORM and simplifies every query. 
- **Request** : secures GET & POST methods, and put all the request body, in one spot, accessible from every controller. 
- **TemplateEngine**: The template engine (located in Controller.php), allows you to write your views in a logical HTML syntax (just like blade or twig).The files are then parsed and new files are generated. 
    