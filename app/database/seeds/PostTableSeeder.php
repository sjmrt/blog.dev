<?php

class PostTableSeeder extends Seeder {

	public function run()
	{
		$user = User::firstOrFail();

		$post1 = new Post; 
			$post1->title = 'Kitten Mittens!'; 
			$post1->subtitle = 'the alphabet backward';
			$post1->body = 'zyxwvutsrqponmlkjihgfedcba';
			$post1->user_id = $user->id;
			$post1->slug_title = Str::slug($post1->title);
			$post1->save();

		$post2 = new Post; 
			$post2->title = 'Doodoo';
			$post2->subtitle = 'the alphabet backward'; 
			$post2->body = 'this is the second fake blog';
			$post2->user_id = $user->id;
			$post2->slug_title = Str::slug($post2->title);
			$post2->save();

		$post3 = new Post; 
			$post3->title = 'BOING';
			$post3->subtitle = 'boingaboing';
			$post3->body = 'bounce bounce bounce bouncey time';
			$post3->user_id = $user->id;
			$post3->slug_title = Str::slug($post3->title);
			$post3->save();

		$post4 = new Post; 
			$post4->title = 'May the Fourth worst title';
			$post4->subtitle = 'asdfsdf';
			$post4->body = 'test testerson mc testing testerasfasdflkj;lj';
			$post4->user_id = $user->id;
			$post4->slug_title = Str::slug($post4->title);
			$post4->save();

		$post5 = new Post; 
			$post5->title = 'Blipblopflippity';
			$post5->subtitle = 'asdf;lkasdf;lkjasd;flkj';
			$post5->body = 'flop flop flop frop frop flop ';
			$post5->user_id = $user->id;
			$post5->slug_title = Str::slug($post5->title);
			$post5->save();

		$post6 = new Post; 
			$post6->title = 'crappy blog title 6';
			$post6->subtitle = 'it just keeps going';
			$post6->body = 'A long long time ago I can still remember';
			$post6->user_id = $user->id;
			$post6->slug_title = Str::slug($post6->title);
			$post6->save();		

	}
}