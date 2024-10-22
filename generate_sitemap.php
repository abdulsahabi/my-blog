<?php
// Set the content type to XML
header("Content-Type: application/xml; charset=utf-8");

// Define your website's base URL
$base_url = "https://abdulsahabi.com.ng";

// List all the pages/URLs you want in your sitemap
$pages = [
  "", // Home page
];

// Generate the XML sitemap
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Loop through each page and add it to the sitemap
foreach ($pages as $page) {
  echo "<url>";
  echo "<loc>" . $base_url . $page . "</loc>";
  echo "<lastmod>" . date("c") . "</lastmod>";
  echo "<changefreq>weekly</changefreq>"; // Set frequency (daily, weekly, etc.)
  echo "<priority>0.8</priority>"; // Set priority (between 0.0 and 1.0)
  echo "</url>";
}

echo "</urlset>";
?>
