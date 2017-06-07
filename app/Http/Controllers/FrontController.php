<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('package_type')->sortBy('sorter','ASC');
        $footer = $this->extract->getBlock('footer');
        $scripts = $this->extract->getBlock('scripts');
        view()->share([
            'footer' => $footer,
            'scripts' => $scripts,
        ]);
    }


    public function getIndex(){
        $titular = $this->extract->getBlock('titular');
        $statistic = $this->extract->getBlock('statistic');
        $principles = $this->extract->getBlock('principles');
        $objectives = $this->extract->getBlock('objectives');
        $leaders = $this->extract->getBlock('leaders');
        $support = $this->extract->getBlock('support');
        $plans = $this->extract->getBlock('plans');
        $information = $this->extract->getBlock('information');
        $packages = $this->extract->getBlock('packages');
        $contact_us = $this->extract->getBlock('contact_us');
        return view('front.index.index', [
            'titular' => $titular,
            'statistic' => $statistic,
            'principles' => $principles,
            'objectives' => $objectives,
            'leaders' => $leaders,
            'support' => $support,
            'plans' => $plans,
            'information' => $information,
            'packages' => $packages,
            'contact_us' => $contact_us,
        ]);
        /*try {
            $products = $this->extract->getBlock('products');
            $guarantee = $this->extract->getBlock('guarantee');
        }
        catch (Exception $e) {
            abort(404);
        }
        return view('front.index.index', [
            'products' => $products,
            'guarantee' => $guarantee,
        ]);*/
    }

    public function getPlayers( $page_slug = null ){
        try {
            if (!is_null($page_slug)) {
                $inf_page = $this->extract->getBySlug('pl_info_page', $page_slug);
            } else {
                $inf_pages = $this->extract->getBlock('for_players');
                if ($inf_pages->pl_info_page_group->count() > 0) {
                    $inf_page = $inf_pages->pl_info_page_group->first();
                } else {
                    abort(404);
                }
            }
        }
        catch (Exception $e) {
            abort(404);
        }

        return view('front.players.players', [
            'inf_page' => $inf_page,
            'inf_pages' => $inf_pages
        ]);
    }
}