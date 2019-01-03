if (isset($_POST['submit'])) {
    $author = trim($_POST['author']);
    $body = trim($_POST['body']);
    $new_comment = Comment::create_comment($photo->id, $author, $body);
    if ($new_comment) {
        if ($new_comment->save()) {
            redirect("photo.php?id={$photo->id}");
        }
    } else {
        $message = "There was some problem saving";
    }
} else {
    $author = "";
    $body = "";
}
