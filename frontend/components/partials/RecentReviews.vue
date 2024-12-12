<template>
	<div class="review-categories py-10 flex justify-center items-center">
		<div class="container">
			<div class="bg-white mx-auto rounded-lg shadow-md w-full max-w-4xl">
				<!-- icon -->
				<div class="h-24 w-24 bg-primary-500 flex justify-center items-center mx-auto">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
						<path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
						<path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
					</svg>
				</div>

				<div class="mt-16">
					<review-slider :reviews="reviews"></review-slider>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			reviews: [
				{
					name: "Mike Beavon",
					review: "I don't usually get excited about veggies, but these little orange sticks are the snack I never knew I needed. Sweet, crunchy, and they make me feel healthy just by existing. If I could marry a vegetable, I would. They’re that good.",
					profilePhotoUrl: "/images/users/user-02.png",
				},
				{
					name: "James Austin",
					profession: "Profession",
					review: "These little cabbage-y things used to be the bane of my childhood, but as an adult, I’ve come around. Roasted with a little balsamic glaze, they’re surprisingly delicious. Still, they have that smell that makes you question your life choices when cooking them, but the taste is worth it.",
					profilePhotoUrl: "/images/users/user-03.png",
				},
				{
					name: "lamelo ball",
					profession: "Profession",
					review: " Broccoli is the unsung hero of the veggie world. It’s like the Swiss army knife of vegetables – you can steam it, stir-fry it, or just dip it in some ranch dressing and pretend it’s a salad. Also, it’s basically a tiny tree, which is both adorable and impressive.",
					profilePhotoUrl: "/images/users/user-04.png",
				},
			],
		};
	},
};
</script>

<style lang="scss" scoped>
.review-categories {
	background-image: linear-gradient(
			rgba(139, 92, 246, 0.1),
			rgba(139, 92, 246, 0.1)
		),
		url("/images/banners/food-category.jpg");
	background-size: cover;
}
.review-box {
	@media (min-width: 1200px) {
		padding: 110px 70px;
	}
	@media (min-width: 576px) {
		padding: 60px 40px;
	}
	padding: 60px 30px;
	@apply rounded-lg shadow-md;
}
</style>
