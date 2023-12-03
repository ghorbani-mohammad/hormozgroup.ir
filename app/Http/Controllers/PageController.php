<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\SchemaOrg\Schema;
use Spatie\Sitemap\SitemapGenerator;
use App\Fee;
use App\Post;
use \Morilog\Jalali\jDate;
use \Morilog\Jalali\jDateTime;
use Carbon\Carbon;
use \Morilog\Jalali\CalendarUtils;
use Hekmatinasser\Verta\Verta;
use \Auth;

class PageController extends Controller
{
    //
    public function traycable()
    {
        $productSchema = Schema::product()
            ->name('سینی کابل')
            ->identifier('traycable')
            ->brand('گروه صنعتی هرمز')
            ->image('https://hormozgroup.ir/images/traycable2.webp')
            ->alternateName('سینی فلزی')
            ->sku('متر')
            ->description('سینی کابل برای سازماندهی کابل های عبوری مورد استفاده قرار می گیرد')
            ->aggregateRating(['ratingValue' => 4.4, "reviewCount" => "89"])
            ->offers([
                "priceCurrency" => "IRR",
                "url" => "https://hormozgroup.ir/سینی-کابل",
                "price" => 1960000,
                "itemCondition" => "https://schema.org/UsedCondition",
                "availability" => "https://schema.org/InStock",
                "priceValidUntil" => Carbon::tomorrow(),
            ])
            ->review([
                "author" => "محمد قربانی",
                "datePublished" => Carbon::yesterday(),
                "description" => "بسیار عالی بود"
            ])
            ->gtin13('isbn:978-0-13-384178-7');

        $videoSchema = Schema::videoobject()
            ->name('سینی کابل سی ان سی')
            ->description('تولید سینی کابل پانچ سی ان سی')
            ->thumbnailUrl('https://hormozgroup.ir/videos/%D8%B3%DB%8C%D9%86%DB%8C%20%DA%A9%D8%A7%D8%A8%D9%84.mp4')
            ->uploadDate('2020-01-07');

        return view('traycable', compact('productSchema', 'videoSchema'));
    }

    public function laddercable()
    {
        $productSchema = Schema::product()
            ->name('نردبان کابل')
            ->identifier('ladercable')
            ->brand('گروه صنعتی هرمز')
            ->image('https://hormozgroup.ir/images/ladercable2.webp')
            ->sku('متر')
            ->description('سینی کابل برای سازماندهی کابل های عبوری مورد استفاده قرار می گیرد')
            ->aggregateRating(['ratingValue' => 4.4, "reviewCount" => "89"])
            ->offers([
                "priceCurrency" => "IRR",
                "url" => "https://hormozgroup.ir/نردبان-کابل",
                "price" => 1960000,
                "itemCondition" => "https://schema.org/UsedCondition",
                "availability" => "https://schema.org/InStock",
                "priceValidUntil" => Carbon::tomorrow(),
            ])
            ->review([
                "author" => "محمد قربانی",
                "datePublished" => Carbon::yesterday(),
                "description" => "بسیار عالی بود"
            ])
            ->gtin13('isbn:978-0-13-384178-7');

        return view('laddercable', compact('productSchema'));
    }

    public function aboutUs()
    {
        $localBusiness = Schema::localBusiness()
            ->name('گروه صنعتی هرمز')
            ->identifier('https://www.hormozgroup.ir')
            ->email('ghorbani-m@aut.ac.ir')
            ->geo(["@type" => "GeoCoordinates", "latitude" => "35.689765", "longitude" => "51.424188"])
            ->address([
                "addressCountry" => "IR", "postalCode" => "346915875", "addressLocality" => "تهران",
                "streetAddress" => "لاله زار جنوبی، پاساژ صنعت، طبقه همکف، پلاک 4"
            ])
            ->image('https://hormozgroup.ir/images/aboutus.webp')
            ->priceRange('IRR')
            ->telephone(['021-33960092', '0912-7194347']);
        return view('aboutUs', compact('localBusiness'));
    }

    public function sitemap()
    {
        SitemapGenerator::create('https://hormozgroup.ir')->writeToFile('/var/www/hormozgroup.ir/public/sitemap.xml');
    }

    public function feeList()
    {
        $feeSheet = Fee::firstOrCreate(['id' => 1]);
        $value = $feeSheet->value;
        $lastUpdated = $feeSheet->updated_at;
        $lastUpdated = new Carbon($lastUpdated);
        $lastUpdatedDate = $lastUpdated->toDateString();
        $lastUpdatedDate = CalendarUtils::strftime('Y/m/d', $lastUpdatedDate);
        $lastUpdatedDate = CalendarUtils::convertNumbers($lastUpdatedDate);
        return view('feeList', compact('lastUpdatedDate', 'value'));
    }

    public function feeListTraycable()
    {
        $feeSheet = Fee::firstOrCreate(['id' => 1]);
        $value = $feeSheet->value;
        $lastUpdated = $feeSheet->updated_at;
        $lastUpdated = new Carbon($lastUpdated);
        $lastUpdatedDate = $lastUpdated->toDateString();
        $lastUpdatedDate = CalendarUtils::strftime('Y/m/d', $lastUpdatedDate);
        $lastUpdatedDate = CalendarUtils::convertNumbers($lastUpdatedDate);
        return view('feeList', compact('lastUpdatedDate', 'value'));
    }

    public function blog()
    {
        if (Auth::check() && Auth::user()->role == 'admin')
            $posts = Post::where('type', 'blog')->latest()->get();
        else
            $posts = Post::where('type', 'blog')->where('status', 'publish')->latest()->get();
        foreach ($posts as $post) {
            $v = new Verta($post->created_at);
            $post->created_at2 = $v->format('%d %B %Y');
        }
        return view('posts.index', compact('posts'));
    }

    public function setfee($fee)
    {
        $feeSheet = Fee::firstOrCreate(['id' => 1]);
        $feeSheet->value = $fee;
        $feeSheet->save();
    }
}
