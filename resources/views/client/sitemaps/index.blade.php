<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{route('sitemap.blogs')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{route('sitemap.services')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{route('sitemap.static_pages')}}</loc>
        <lastmod>{{ gmdate(DateTime::W3C, strtotime(now())) }}</lastmod>
    </sitemap>
    
</sitemapindex>