<?php


class UserController extends Core\Controller
{

    public function addAction()
    {
        $this->render("register");
    }

    public function registerAction()
    {
        $params = $this->request->getQueryParams();
        $user = new UserModel($params);
        if ($user->id) {
            self::$_render = "Votre compte a été crée. " . PHP_EOL;
        }
    }

    public function testAction()
    {
        $article = new ArticleModel(["content" => "blabla"]);
        $comment = new CommentModel([
            "content" => "comment1",
            "article_id" => $article->id
        ]);
        $comment2 = new CommentModel([
            "content" => "comment2",
            "article_id" => $article->id
        ]);

        $table = $article->read($article->tableName, $article->id, $article->getRelations()); 
        echo "<pre>"; 
        var_dump($table); 
        echo "</pre>"; 
    }
}
