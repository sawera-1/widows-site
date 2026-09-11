<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;

class AdviceCentreController extends Controller
{
    /**
     * Display the main Advice Centre landing page.
     */
    public function index(Request $request)
    {
        $categories = ArticleCategory::orderBy('name')->get();

        $query = Article::where('status', 'published')->with('category');

        // Apply Category Filter
        if ($request->has('category') && $request->category !== '') {
            $categorySlug = $request->category;
            $query->whereHas('category', function($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        // Apply Search
        if ($request->has('q') && $request->q !== '') {
            $searchTerm = $request->q;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                  ->orWhere('content', 'like', '%' . $searchTerm . '%')
                  ->orWhere('excerpt', 'like', '%' . $searchTerm . '%');
            });
        }

        $topArticles = Article::where('status', 'published')
            ->with('category')
            ->latest('published_at')
            ->take(4)
            ->get();

        // If no filters are applied, find a featured article to highlight
        $featuredArticle = null;
        if (!$request->has('category') && !$request->has('q')) {
            $featuredArticle = Article::where('status', 'published')
                ->where('is_featured', true)
                ->whereNotIn('id', $topArticles->pluck('id'))
                ->with('category')
                ->latest('published_at')
                ->first();
        }

        // Fetch latest articles (exactly 3)
        $excludedIds = $topArticles->pluck('id')->toArray();
        if ($featuredArticle) {
            $excludedIds[] = $featuredArticle->id;
        }

        $query->whereNotIn('id', $excludedIds);
        $articles = $query->latest('published_at')->take(3)->get();

        return view('pages.advice.index', compact('categories', 'articles', 'featuredArticle', 'topArticles'));
    }

    /**
     * Display an individual article detail page.
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->where('status', 'published')
            ->with('category')
            ->firstOrFail();

        // Get 3 related articles (same category, excluding current)
        $relatedArticles = Article::where('category_id', $article->category_id)
            ->where('status', 'published')
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        // If we don't have enough related articles, grab latest generally
        if ($relatedArticles->count() < 3) {
            $extraArticles = Article::where('status', 'published')
                ->where('id', '!=', $article->id)
                ->whereNotIn('id', $relatedArticles->pluck('id'))
                ->latest('published_at')
                ->take(3 - $relatedArticles->count())
                ->get();
            
            $relatedArticles = $relatedArticles->merge($extraArticles);
        }

        $categories = ArticleCategory::orderBy('name')->get();

        return view('pages.advice.show', compact('article', 'relatedArticles', 'categories'));
    }
}
