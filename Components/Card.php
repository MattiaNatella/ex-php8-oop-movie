<div class="card w-25">
    <img src="<?php echo $movie->cover ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h2 class="card-title"><?php echo $movie->title ?></h2>
        <p class="card-title"><strong>Director:</strong> <?php echo $movie->director ?></p>
        <p class="card-title"><strong>Published:</strong> <?php echo $movie->year ?></p>
        <p class="card-title"><strong>Genres:</strong> <?php $movie->getGenreName() ?></p>
        <p class="card-text"><strong>Plot: </strong><?php echo $movie->plot ?></p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
</div>