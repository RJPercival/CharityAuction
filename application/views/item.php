		<div id="main">

			<div class="item">
                <?php if(empty($images)): ?>
                <img src="images/Placeholder.png" alt="Coming Soon..." />
                <?php else: ?>
                <img src="<?=$images[0]->Path ?>" alt="<?=$images[0]->Description ?>" title="<?=$images[0]->Description ?>" />
                <?php endif; ?>

				<p>
					<?=$item->Description ?>
				</p>
				<p>
					Browse the <a href="items">items up for auction</a> or feel free to <a href="donate">donate</a> to our cause!

				</p>
			</div>

			<div class="item-bid">
				<h2>Current Bid</h2>
                <?php if($highestBid == 0): ?>
                <h3>No bids yet!</h3>
                <?php else: ?>
                <h3>&pound;<span id="highest-bid"><?=$highestBid ?></span></h3>
                <h3>Number of bids: <?=$bidCount ?></h3>
                <?php endif; ?>
				<h4><a href="bid" title="Bid Now">Bid Now</a></h4>
			</div>


		</div>