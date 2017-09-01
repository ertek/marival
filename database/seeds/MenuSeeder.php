<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $home_item = new App\Menu;
        $home_item->nombre = "Home";
        $home_item->url = "/";
        $home_item->save();

        $about_item = new App\Menu;
        $about_item->nombre = "About";
        $about_item->url = "/about";
        $about_item->save();
    }
}
