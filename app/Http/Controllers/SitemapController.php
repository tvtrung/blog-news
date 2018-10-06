<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;
use DomDocument;

class SitemapController extends Controller
{
    public static function update_sitemap(){
        $xml = new DomDocument("1.0","UTF-8");

        $urlset = $xml->createElement("urlset");
        $urlset->setAttribute('xmlns','http://www.sitemaps.org/schemas/sitemap/0.9');
        $urlset->setAttribute('xmlns:xsi','http://www.w3.org/2001/XMLSchema-instance');
        $urlset->setAttribute('xsi:schemaLocation','http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
        $urlset = $xml->appendChild($urlset);
        $arr_link = [
            route('page.home'),
            route('page.contact'),
        ];
        foreach ($arr_link as $key => $value) {
        	$url = $xml->createElement("url");
            $url = $urlset->appendChild($url);
            $loc = $xml->createElement("loc", $value);
            $loc = $url->appendChild($loc);
            $lastmod = $xml->createElement("lastmod", date('Y-m-d')."T09:13:02+00:00");
            $lastmod = $url->appendChild($lastmod);
            $priority = $xml->createElement("priority",($key == 0) ? '1.00' : '0.80');
            $priority = $url->appendChild($priority);
        }
        $data_categories = DB::table('categories')->pluck('url');
        foreach ($data_categories as $key => $value) {
        	$link = Route('page.posts',['slug'=>$value]);
        	$url = $xml->createElement("url");
            $url = $urlset->appendChild($url);
            $loc = $xml->createElement("loc", $link);
            $loc = $url->appendChild($loc);
            $lastmod = $xml->createElement("lastmod", date('Y-m-d')."T09:13:02+00:00");
            $lastmod = $url->appendChild($lastmod);
            $priority = $xml->createElement("priority",'0.70');
            $priority = $url->appendChild($priority);
        }

        $data_posts = DB::table('posts')->pluck('id');
        foreach ($data_posts as $key => $value) {
            $url_post = PageController::url_post();
        	$link = $url_post[$value];
        	$url = $xml->createElement("url");
            $url = $urlset->appendChild($url);
            $loc = $xml->createElement("loc", $link);
            $loc = $url->appendChild($loc);
            $lastmod = $xml->createElement("lastmod", date('Y-m-d')."T09:13:02+00:00");
            $lastmod = $url->appendChild($lastmod);
            $priority = $xml->createElement("priority",'0.70');
            $priority = $url->appendChild($priority);
        }
        
        $xml->FormatOutput = true;
        $string_value = $xml->saveXML();

        $xml->save("sitemap.xml");
    }
}
