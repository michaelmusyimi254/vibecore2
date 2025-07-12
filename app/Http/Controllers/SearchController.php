<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\Facility;
use App\Models\Event;
use App\Models\Product;

class SearchController extends Controller
{
    public function results(Request $request)
    {
        $query = $request->get('query', '');
        $category = $request->get('category', '');
        $location = $request->get('location', '');
        $interest = $request->get('interest', '');
        
        $results = [
            'trainers' => collect(),
            'facilities' => collect(),
            'events' => collect(),
            'products' => collect()
        ];
        
        // Search trainers
        if (empty($category) || $category === 'trainer') {
            try {
                $trainers = Trainer::query();
                if ($query) {
                    $trainers->where('name', 'like', "%{$query}%")
                             ->orWhere('specialization', 'like', "%{$query}%")
                             ->orWhere('description', 'like', "%{$query}%");
                }
                if ($interest) {
                    $trainers->where('specialization', 'like', "%{$interest}%");
                }
                $results['trainers'] = $trainers->get();
            } catch (\Exception $e) {
                $results['trainers'] = collect();
            }
        }
        
        // Search facilities
        if (empty($category) || $category === 'facility') {
            try {
                $facilities = Facility::query();
                if ($query) {
                    $facilities->where('name', 'like', "%{$query}%")
                              ->orWhere('type', 'like', "%{$query}%")
                              ->orWhere('description', 'like', "%{$query}%");
                }
                if ($interest) {
                    $facilities->where('type', 'like', "%{$interest}%");
                }
                $results['facilities'] = $facilities->get();
            } catch (\Exception $e) {
                $results['facilities'] = collect();
            }
        }
        
        // Search events
        if (empty($category) || $category === 'event') {
            try {
                $events = Event::query();
                if ($query) {
                    $events->where('title', 'like', "%{$query}%")
                          ->orWhere('description', 'like', "%{$query}%")
                          ->orWhere('type', 'like', "%{$query}%");
                }
                if ($interest) {
                    $events->where('type', 'like', "%{$interest}%");
                }
                $results['events'] = $events->get();
            } catch (\Exception $e) {
                $results['events'] = collect();
            }
        }
        
        // Search products
        if (empty($category)) {
            try {
                $products = Product::query();
                if ($query) {
                    $products->where('name', 'like', "%{$query}%")
                            ->orWhere('description', 'like', "%{$query}%");
                }
                $results['products'] = $products->get();
            } catch (\Exception $e) {
                $results['products'] = collect();
            }
        }
        
        $pageConfigs = ['myLayout' => 'front'];
        
        return view('content.search.results', compact('results', 'query', 'category', 'location', 'interest', 'pageConfigs'));
    }
} 