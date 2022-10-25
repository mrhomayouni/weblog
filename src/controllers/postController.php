<?php

class postController
{
    public static function get_last_posts($count = 10): bool|array
    {
        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $count";
        $stmt = db::$conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}