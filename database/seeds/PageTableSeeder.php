<?php
/**
 * Created by PhpStorm.
 * User: amd48
 * Date: 2015/10/12
 * Time: 16:11
 */

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder {
    public function run()
    {
        DB::table('pages')->delete();

        for($i=0; $i<10; $i++) {
            Page::create([
                'title'     => 'Title '.$i,
                'slug'      => 'first-page',
                'body'      => 'Body '.$i,
                'user_id'   => 1,
            ]);
        }
    }
}