<?php include 'partials/_header.php';  ?>


<ul>

    <?php foreach ($users as $user) : ?>

        <li>
            <?= $user->name; ?>
        </li>

    <?php endforeach ?>

</ul>
<h1>Submit your name</h1>

<form action="/names" method="POST">

    <input type="text" name="name"></input>
    <button type="submit">Submit</button>

</form>
<?php include 'partials/_footer.php'; ?>