<?php

namespace App\Http\Controllers\front_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Landing extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('content.front-pages.landing-page', ['pageConfigs' => $pageConfigs]);
  }

  public function getPopularTags(Request $request)
  {
      // Example master list of tags with optional geo/region info
      $allTags = [
          ['label' => 'Fitness Trainers', 'category' => 'trainer', 'interest' => 'fitness', 'regions' => ['all']],
          ['label' => 'Gyms', 'category' => 'facility', 'interest' => 'gym', 'regions' => ['all']],
          ['label' => 'Yoga Classes', 'category' => 'trainer', 'interest' => 'yoga', 'regions' => ['all']],
          ['label' => 'Bootcamps', 'category' => 'event', 'interest' => 'bootcamp', 'regions' => ['all']],
          ['label' => 'Swimming Pools', 'category' => 'facility', 'interest' => 'swimming', 'regions' => ['all']],
          ['label' => 'Boxing Coaches', 'category' => 'trainer', 'interest' => 'boxing', 'regions' => ['all']],
          ['label' => 'Golf Parks', 'category' => 'facility', 'interest' => 'golf park', 'regions' => ['golf', 'all']],
          ['label' => 'Golf Trainers', 'category' => 'trainer', 'interest' => 'golf', 'regions' => ['golf', 'all']],
          ['label' => 'Boxing Trainers', 'category' => 'trainer', 'interest' => 'boxing', 'regions' => ['boxing', 'all']],
          ['label' => 'Tennis Courts', 'category' => 'facility', 'interest' => 'tennis', 'regions' => ['tennis', 'all']],
          ['label' => 'Padel Courts', 'category' => 'facility', 'interest' => 'padel', 'regions' => ['padel', 'all']],
          ['label' => 'Floodlight Courts', 'category' => 'facility', 'interest' => 'floodlight', 'regions' => ['all']],
          ['label' => 'Nutritionists', 'category' => 'trainer', 'interest' => 'nutrition', 'regions' => ['all']],
      ];
      // Get location/region from request (could be city, region, etc.)
      $region = $request->get('region', 'all');
      // Filter tags by region if not 'all'
      $filtered = array_filter($allTags, function($tag) use ($region) {
          return in_array('all', $tag['regions']) || in_array($region, $tag['regions']);
      });
      // Shuffle and pick up to 5
      $filtered = array_values($filtered);
      shuffle($filtered);
      $tags = array_slice($filtered, 0, 5);
      return response()->json(['tags' => $tags]);
  }
}
