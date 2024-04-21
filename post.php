<?php
include_once("templates/header.php");

if(isset ($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){

        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
}

?>

    <main id="post-container">
            <div class="content-container">
                <h1 id="main-title"><?= $currentPost['title'] ?></h1>
                <p id="post-description"><?= $currentPost['description'] ?></p>
                <div class="img-container">
                    <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
                </div>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum vero provident ullam eos voluptates veniam soluta eius necessitatibus alias, tempora nemo asperiores ut vel, minima, perferendis maxime veritatis earum?
                Alias non soluta, quaerat officia modi vitae adipisci esse quidem maxime delectus repellendus laboriosam saepe? Voluptatem voluptate provident excepturi iure qui fuga odit modi sapiente, hic alias at. Voluptate, quaerat.
                Quaerat maiores a ipsa ipsam exercitationem voluptatibus aut quasi nostrum! Debitis officia aliquam ipsa, asperiores beatae quidem deleniti nulla blanditiis? Unde debitis deserunt quod corporis voluptatem consectetur vel perspiciatis provident!
                Laudantium, consequatur cupiditate! Placeat repellendus vitae quos explicabo harum enim quas alias deserunt, quidem, saepe, ipsam corporis non veritatis hic aut. Deleniti debitis rem officiis quasi eveniet totam cupiditate asperiores.
                Quas vero incidunt a, nesciunt similique et quae facere ipsa. Repellendus ipsam natus eaque optio corporis, numquam totam? Doloremque consequuntur mollitia sit temporibus sint ratione dignissimos quisquam provident nobis hic!</p>
                        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum vero provident ullam eos voluptates veniam soluta eius necessitatibus alias, tempora nemo asperiores ut vel, minima, perferendis maxime veritatis earum?
                Alias non soluta, quaerat officia modi vitae adipisci esse quidem maxime delectus repellendus laboriosam saepe? Voluptatem voluptate provident excepturi iure qui fuga odit modi sapiente, hic alias at. Voluptate, quaerat.
                Quaerat maiores a ipsa ipsam exercitationem voluptatibus aut quasi nostrum! Debitis officia aliquam ipsa, asperiores beatae quidem deleniti nulla blanditiis? Unde debitis deserunt quod corporis voluptatem consectetur vel perspiciatis provident!
                Laudantium, consequatur cupiditate! Placeat repellendus vitae quos explicabo harum enim quas alias deserunt, quidem, saepe, ipsam corporis non veritatis hic aut. Deleniti debitis rem officiis quasi eveniet totam cupiditate asperiores.
                Quas vero incidunt a, nesciunt similique et quae facere ipsa. Repellendus ipsam natus eaque optio corporis, numquam totam? Doloremque consequuntur mollitia sit temporibus sint ratione dignissimos quisquam provident nobis hic!</p>
            </div>
            <aside id="nav-container">
              <h3 id="tags-title">Tags</h3>
                <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
                </ul>
              <h3 id="categories-title">Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
   </main>

<?php
include_once("templates/footer.php");
?>