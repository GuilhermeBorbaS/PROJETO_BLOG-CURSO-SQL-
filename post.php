<?php

include_once("templates/header.php");

if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

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
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam neque voluptate sint vitae rerum laborum praesentium repudiandae minus earum est, nulla hic sit ex eius tempore blanditiis corrupti itaque voluptates.
            Illo consequuntur officia praesentium. Eos suscipit vel neque eligendi libero rerum adipisci aspernatur fugiat reprehenderit dolorum iure voluptatibus deleniti vitae fuga omnis placeat ad, nostrum maiores deserunt a? Odit, blanditiis?
            Quasi a corrupti eveniet alias corporis at repellendus maxime aliquid accusantium dolorum reiciendis numquam in, inventore optio dolorem ad quae voluptates officiis laudantium voluptas voluptatem iure dicta possimus? Repellat, ut?
            Architecto adipisci est saepe in magni sint commodi ad. Ipsam enim officia rerum culpa nemo alias accusantium. Excepturi, reprehenderit molestiae soluta blanditiis praesentium vero aperiam minima fuga repellendus, maiores earum!
            Qui ratione provident sed, explicabo quisquam repellendus. Veritatis accusamus nam aspernatur sequi dolore dolorem ad quam in a earum itaque, amet laborum omnis doloribus eveniet, obcaecati reprehenderit! Aliquid, ratione voluptas?</p>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam neque voluptate sint vitae rerum laborum praesentium repudiandae minus earum est, nulla hic sit ex eius tempore blanditiis corrupti itaque voluptates.
            Illo consequuntur officia praesentium. Eos suscipit vel neque eligendi libero rerum adipisci aspernatur fugiat reprehenderit dolorum iure voluptatibus deleniti vitae fuga omnis placeat ad, nostrum maiores deserunt a? Odit, blanditiis?
            Quasi a corrupti eveniet alias corporis at repellendus maxime aliquid accusantium dolorum reiciendis numquam in, inventore optio dolorem ad quae voluptates officiis laudantium voluptas voluptatem iure dicta possimus? Repellat, ut?
            Architecto adipisci est saepe in magni sint commodi ad. Ipsam enim officia rerum culpa nemo alias accusantium. Excepturi, reprehenderit molestiae soluta blanditiis praesentium vero aperiam minima fuga repellendus, maiores earum!
            Qui ratione provident sed, explicabo quisquam repellendus. Veritatis accusamus nam aspernatur sequi dolore dolorem ad quam in a earum itaque, amet laborum omnis doloribus eveniet, obcaecati reprehenderit! Aliquid, ratione voluptas?</p>
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