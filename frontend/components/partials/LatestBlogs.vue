<template>
	<div class="bg-white py-10">
		<div class="container">
			<!-- section header -->
			<section-header>
				<template #title>
					Latest Blogs
				</template>
				<template #subtitle>
					Completely network impactful users whereas next-generation
					applications.
				</template>
			</section-header>

			<!-- blogs -->
			<div class="grid md:grid-cols-3 gap-7 mt-10">
				<div class="" v-for="(blog, index) in blogs" :key="index">
					<blog-card :blog="blog"></blog-card>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			blogs: [
				{
					title: "Pure is the most healthy and most nourishing food",
					subtitle:
						"In a world full of processed foods and quick fixes, the healthiest choice is often the simplest. Pure, whole foods — like fresh fruits, vegetables, and whole grains — nourish your body with essential nutrients. These foods are free from harmful additives, making them the best choice for long-term health and wellness. Eat clean, stay healthy!.",
					image: "/images/blogs/blog-1.jpg",
					author: "robert mongare",
					date: "May 12, 2020",
					category: "Marketing",
				},
				{
					title: "Pure is the most healthy and most nourishing food",
					subtitle:
						"Pure food is all about getting back to basics. When you eat natural, unprocessed ingredients, your body receives the nutrients it needs without the chemicals and preservatives found in many packaged foods. Focus on fresh produce, lean proteins, and whole grains for a balanced, nourishing diet",
					image: "/images/blogs/blog-2.jpg",
					author: "stella ondibe",
					date: "May 12, 2020",
					category: "Health",
				},
				{
					title: "Pure is the most healthy and most nourishing food",
					subtitle:
						"The key to good health lies in simple, pure foods. Whole vegetables, fruits, grains, and proteins offer the best nourishment without any added junk. By making pure food choices, you give your body the nutrients it needs to thrive — naturally, and without compromise.",
					image: "/images/blogs/blog-3.jpg",
					author: "james kamau",
					date: "May 12, 2020",
					category: "Promotion",
				},
			],
		};
	},
};
</script>

<style lang="scss" scoped>
</style>
