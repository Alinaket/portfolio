<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table skills ');
        DB::table('skills')->insert([
                ['type'=> 1, 'name' => "How to Create a Database Using the MongoDB Atlas UI", 'text' => "MongoDB has been at the forefront of application development for developers...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2022/11/6597434-400x160.jpg"],
                ['type'=> 1, 'name' => "Database Queries to One Table (Part 1)", 'text' => "This is an excerpt from the Mondial database that is widely...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2022/01/SQL-1-400x160.png"],
                ['type'=> 2, 'name' => "Algorithms and Data Structures (Part 1)", 'text' => "For the last 20 years, Google has been the main search...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2022/01/binary-code-4512291-400x160.jpg"],
                ['type'=> 3, 'name' => "Fundamentals of HTML5 and CSS3", 'text' => "Hypertext markup language (HTML) structures documents such as web pages by...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2022/01/news_fb96dcb1c0ed4cebb55109971541798c-400x160.png"],
                ['type'=> 3, 'name' => "Advanced Design Techniques", 'text' => "As the internet becomes more widespread, the number and variety of...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2022/02/co-to-jest-responsive-web-design-e1643791537179-400x160.jpg"],
                ['type'=> 4, 'name' => "React JS Questions & Answers (Part 1) 2021", 'text' => "What is JSX? JSX is a superset of JavaScript that allows...", 'img' => ""],
                ['type'=> 4, 'name' => "Javascript Interview Questions & Answers (Part 1)", 'text' => "What are the possible ways to create objects in JavaScript? There...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2021/11/JavaScript_Featured-1-400x160.jpg"],
                ['type'=> 5, 'name' => "Ultimate Guide to CSS Grid Layout (Part 1)", 'text' => "What are the possible ways to create objects in JavaScript? There...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2021/11/WgUgHhj8Tl64ZsgQfa4G_file-1-400x160.jpg"],
                ['type'=> 5, 'name' => "How to use System Fonts in CSS to improve your site?", 'text' => "How to use System Fonts in CSS to improve your site..", 'img' => ""],
                ['type'=> 5, 'name' => "What is PostCSS and what does it do?", 'text' => "PostCSS is a very popular tool that allows developers to write...", 'img' => ""],
                ['type'=> 4, 'name' => "How to Sort Arrays in JavaScript?", 'text' => "In this article, we‟ll discuss how you can sort arrays in...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2021/11/JavaScript_Featured-1-400x160.jpg"],
                ['type'=> 2, 'name' => "Basic Concepts of Data Processing (Part 2)", 'text' => "Languages, Syntax, and Semantics Now that we understand that machines work...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2022/01/binary-code-4512291-400x160.jpg"],
                ['type'=> 1, 'name' => "Database Queries to One Table (Part 2)", 'text' => "This is an excerpt from the Mondial database that is widely...", 'img' => ""],
                ['type'=> 5, 'name' => "Ultimate Guide to CSS Grid Layout (Part 2)", 'text' => "Grid Lines Grid Line control (grid-row, grid-column, grid area) Naming Grid...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2021/11/WgUgHhj8Tl64ZsgQfa4G_file-1-400x160.jpg"],
                ['type'=> 3, 'name' => "React JS Questions & Answers (Part 2) 2021", 'text' => "How to use event handlers with React component’s? Events handling in...", 'img' => "https://sp-ao.shortpixel.ai/client/to_webp,q_lossy,ret_img/https://jacekjeznach.com/wp-content/uploads/2021/11/JavaScript_Featured-1-400x160.jpg"],
                ['type'=> 5, 'name' => "CSS Selectors Cheat Sheet (.pdf)", 'text' => "Selectors, as previously mentioned, indicate which HTML elements are being styled....", 'img' => ""],
//                ['type'=> 3, 'name' => "", 'text' => "", 'img' => ""],

              ]
        );
    }
}
