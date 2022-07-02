<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Post;
use App\Models\Post_Detail;
class CrawlDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:dantri';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = 'https://dantri.com.vn/xa-hoi.htm';
        // $url = 'https://dantri.com.vn/xa-hoi/giam-31200-don-vi-hanh-chinh-co-quan-cua-dang-to-chuc-chinh-tri-xa-hoi-20220630172047675.htm';
        $client = new Client();

        $crawler = $client->request('GET', $url);
        $crawler->filter('div.article.list article.article-item')->each(
            function (Crawler $node) {
                //get summary post
                $title = $node->filter('div.article-content  h3.article-title')->text();
                $desc = $node->filter('div.article-content div.article-excerpt')->text();
                $img = $node->filter('div.article-thumb a img')->attr('data-src');
                $url_post_detail = 'https://dantri.com.vn/'.$node->filter('div.article-content  h3.article-title a')->attr('href');


                //get content detail post in sub link
                $client_post_detail = new Client();
                $crawler_post_detail=$client_post_detail->request('GET', $url_post_detail);
                $post_content_detail = $crawler_post_detail->filter('main.body ')->html();
                $post = Post::create([
                    'title'=>$title,
                    'description'=>$desc,
                    'image'=>$img,
                    'url_post_detail'=>$url_post_detail
                ]);
                Post_Detail::create([
                    'post_id'=>$post->id,
                    'post_content_detail'=>$post_content_detail
                ]);



            }
        );
       
    }
}

