<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\User;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $images = [
            'https://images.unsplash.com/photo-1529675912204-6cc737a03ffb?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2cba7be27379949660b4eb91c10f3957&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529662795444-4a44b7a29db1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7fbc106e5dcf1fe3816b50b506fbf884&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529752654641-c24f42ef688a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a87011cb530adba148257e1011f8c1e5&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529690993619-3f2481aeda21?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=48eac1fa56c39e43005144357e193eee&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529669851596-ba9a5549af95?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b48c28448e1aa6d496ae9a565f7738cc&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529682427908-9da107d649f0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=171e3404cdd86b92c9f3ad19b47d7d23&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529679542127-ee73c0be719e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=79d8d4e06d052c32c8a908019c2288c3&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529671241112-2c70ebef934d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8ec81fb2383d221ff1eb1db14da4d2b6&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529769510655-3ee60f9b9408?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c5ecb945d34f3313b70908ffee4eb653&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529636001256-dd57c412cb59?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f617a2a91023165ada6e785e7f2b550e&auto=format&fit=crop&w=500&q=60',
            'https://images.unsplash.com/photo-1529635104544-aa97f1511ae6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=1e8081fc6b40c24bcc06bd9f5cae1e55&auto=format&fit=crop&w=500&q=60'
        ];
    	// 所有用户 ID 数组，如：[1,2,3,4]
    	$user_ids = User::all()->pluck('id')->toArray();

    	// 所有分类 ID 数组，如：[1,2,3,4]
    	$category_ids = Category::all()->pluck('id')->toArray();

    	$faker = app(Faker\Generator::class);
		
		// 获取 Faker 实例
        $posts = factory(Post::class)->times(50)->make()->each(function ($post, $index) use($images, $user_ids, $category_ids, $faker){
        	// 从用户 ID 数组中随机取出一个并赋值
        	$post->user_id = $faker->randomElement($user_ids);

        	// 话题分类，同上
        	$post->category_id = $faker->randomElement($category_ids);

            // 从头像数组中随机取出一个并赋值
            $post->image = $faker->randomElement($images);
        });

        Post::insert($posts->toArray());
    }

}

