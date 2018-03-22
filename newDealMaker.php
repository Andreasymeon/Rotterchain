<!DOCTYPE html>
<html lang="en">
	<?php include '_head.php' ?>
<body>

	<?php include '_header.php' ?>
	
<main id="DealMakerMain">
	<section id="buyerFormSection">
		<h2>Buy</h2>

<!--===== BACKEND =====-->

		<form action=" " method="POST">
			<input type="text" name="buyerSearch" placeholder="What are you looking for?">
			<input class="button" type="submit" name="submit" value="Search">
		</form>

<!--===================-->

	</section>
	<section id="sellerFormSection">
		<h2>Sell</h2>

<!--===== BACKEND =====-->

		<form action=" " method="POST">
			<input type="text" name="sellerArticle" placeholder="What do you sell?">
			<input type="text" name="sellerQuantity" placeholder="Which quantity?">
			<input type="text" name="sellerPrice" placeholder="For which price?">
			<div class="sellingCond">
				<label for="insurance">Do you provide insurance?</label>
					<select name="insurance">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
			</div>
			<div class="sellingCond">
				<label for="transportation">Do you provide transportation?</label>
					<select name="insurance">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
			</div>
			<input class="button" type="submit" name="submit" value="Post">
		</form>

<!--====================-->

	</section>
</main>
<footer>
	
</footer>
</body>
</html>